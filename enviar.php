<?php
// enviar.php - VERSIÓN COMPATIBLE HOSTGATOR (cURL)

// Habilitar reporte de errores por si acaso falla algo más (puedes quitarlo cuando funcione)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// Cargar librerías y configuración
// Asegúrate de que esta carpeta 'librerias' esté junto a enviar.php
require 'librerias/PHPMailer-master/src/Exception.php';
require 'librerias/PHPMailer-master/src/PHPMailer.php';
require 'librerias/PHPMailer-master/src/SMTP.php';
require 'config.php'; 

session_start();

// =================================================================
// 🛡️ ZONA DE SEGURIDAD (ANTI-BOTS)
// =================================================================

// TU CLAVE SECRETA DE CLOUDFLARE (La que me diste)
$cf_secret_key = '0x4AAAAAACEz9-Z-jd06SXwgX18RT6OJTb4';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // FUNCIÓN DE REGISTRO DE AMENAZAS
    function registrar_amenaza($tipo, $detalle = '') {
        $log_file = 'protegido/security_log.jsonl';
        $datos = [
            'fecha' => date('Y-m-d H:i:s'),
            'ip' => $_SERVER['REMOTE_ADDR'],
            'tipo' => $tipo,
            'detalle' => $detalle,
            'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown'
        ];
        // Asegurar que directorio existe (aunque ya lo hicimos abajo, mejor prevenir)
        if (!is_dir('protegido')) { mkdir('protegido', 0755, true); }
        
        file_put_contents($log_file, json_encode($datos) . "\n", FILE_APPEND | LOCK_EX);
    }

    // 1. Validación Honeypot
    if (!empty($_POST['website_check'])) {
        registrar_amenaza('Honeypot Triggered', 'Campo oculto website_check completado');
        die("Error de validación (H)."); 
    }

    // 2. Validación Cloudflare Turnstile (USANDO cURL PARA EVITAR ERROR 500)
    $turnstile_response = $_POST['cf-turnstile-response'] ?? '';
    
    if (empty($turnstile_response)) {
        registrar_amenaza('Captcha Missing', 'No se envió token de Turnstile');
        header("Location: contacto.php?status=captcha_error");
        die();
    }

    $verifyUrl = 'https://challenges.cloudflare.com/turnstile/v0/siteverify';
    $data = [
        'secret'   => $cf_secret_key,
        'response' => $turnstile_response,
        'remoteip' => $_SERVER['REMOTE_ADDR']
    ];

    // USAMOS cURL AQUÍ (Más compatible que file_get_contents)
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $verifyUrl);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    
    if (curl_errno($ch)) {
        // Si falla la conexión con Cloudflare, permitimos pasar (fail-open)
        error_log('Error cURL Turnstile: ' . curl_error($ch));
    }
    curl_close($ch);

    $response = json_decode($result);

    if (!$response->success) {
        registrar_amenaza('Captcha Failed', 'Validación de Cloudflare fallida o token inválido');
        header("Location: contacto.php?status=robot_error");
        die();
    }

    // 3. Filtro de palabras prohibidas
    $mensaje_raw = strtolower($_POST["mensaje"] . " " . $_POST["nombre"]);
    $palabras_prohibidas = [
        'bitcoin', 'crypto', 'investment', 'casino', 'forex', 
        'sex', 'porn', 'dating', 'viagra', 'passive income',
        'eric jones', 'romanzx', 'is.gd', 'bit.ly'
    ];

    foreach ($palabras_prohibidas as $palabra) {
        if (strpos($mensaje_raw, $palabra) !== false) {
            registrar_amenaza('Keyword Blocked', 'Palabra detectada: ' . $palabra);
            header("Location: gracias"); // Simulamos éxito (Shadow Ban)
            die();
        }
    }

    // =================================================================
    // 📧 PROCESAMIENTO DEL CORREO (BREVO)
    // =================================================================

    // 4. Procesamiento de Campos
    $nombre   = strip_tags(trim($_POST["nombre"]));
    $email    = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $telefono = strip_tags(trim($_POST["telefono"]));
    $empresa  = strip_tags(trim($_POST["empresa"]));
    $volumen  = isset($_POST["volumen"]) ? strip_tags(trim($_POST["volumen"])) : ''; 
    $mensaje  = strip_tags(trim($_POST["mensaje"]));

    // Tracking Info
    $utm_source = strip_tags(trim($_POST['utm_source'] ?? 'No detectado'));

    // Traducción/Manejo de volumen
    $volumen_texto = $volumen;
    if(empty($volumen)) {
        $volumen_texto = "Especificado en lista de pedido";
    }
    
    // Switch legado por si alguien usa formulario viejo
    switch ($volumen) {
        case 'menos_1000': $volumen_texto = "Menos de 1,000 piezas"; break;
        case '1000_5000':  $volumen_texto = "1,000 - 5,000 piezas"; break;
        case '5000_10000': $volumen_texto = "5,000 - 10,000 piezas"; break;
        case 'mas_10000':  $volumen_texto = "Más de 10,000 piezas"; break;
    }

    // =================================================================
    // 💾 RESPALDO LOCAL (FAIL-SAFE)
    // =================================================================
    // Guardamos el lead en un archivo por si falla el correo o el SMTP.
    
    $backup_dir = 'protegido';
    $backup_file = $backup_dir . '/leads_backup.jsonl';

    // 1. Crear carpeta y protegerla si no existe
    if (!is_dir($backup_dir)) {
        mkdir($backup_dir, 0755, true);
        // Crear .htaccess para prohibir descarga directa
        file_put_contents($backup_dir . '/.htaccess', "Deny from all");
    }

    // 2. Preparar datos para backup
    $datos_backup = [
        'fecha' => date('Y-m-d H:i:s'),
        'ip' => $_SERVER['REMOTE_ADDR'],
        'nombre' => $nombre,
        'email' => $email,
        'empresa' => $empresa,
        'telefono' => $telefono,
        'volumen' => $volumen_texto,
        'mensaje' => $mensaje,
        'origen' => $utm_source // Guardar origen en backup
    ];

    // 3. Escribir en archivo (JSON Line por cada lead)
    file_put_contents($backup_file, json_encode($datos_backup) . "\n", FILE_APPEND | LOCK_EX);


    // =================================================================
    // 📧 PROCESAMIENTO DEL CORREO (BREVO)
    // =================================================================

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = SMTP_HOST; 
        $mail->SMTPAuth   = true;
        $mail->Username   = SMTP_USERNAME; 
        $mail->Password   = SMTP_PASSWORD; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;     
        $mail->Port       = SMTP_PORT;                              

        // IMPORTANTE: El remitente debe ser el de config.php (Tu dominio)
        $mail->setFrom(MAIL_FROM_EMAIL, MAIL_FROM_NAME); 
        $mail->addAddress(MAIL_TO_ADDRESS);              
        $mail->addReplyTo($email, $nombre);              

        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Subject = '✅ Lead Web: ' . ($empresa ? $empresa : $nombre);
        
        // Formatear mensaje con saltos de línea para que se vea la lista
        $mensaje_html = nl2br($mensaje);

        $mail->Body    = "
            <div style='font-family: Arial, sans-serif; padding: 20px; border: 1px solid #ccc; background-color: #f9f9f9;'>
                <h2 style='color: #0B2239; border-bottom: 2px solid #F5A623;'>Nueva Solicitud de Cotización</h2>
                <ul style='list-style: none; padding: 0;'>
                    <li><strong>Cliente:</strong> $nombre</li>
                    <li><strong>Empresa:</strong> $empresa</li>
                    <li><strong>Correo:</strong> <a href='mailto:$email'>$email</a></li>
                    <li><strong>Teléfono:</strong> $telefono</li>
                    <li><strong>Fuente:</strong> <span style='background-color:#e1f5fe; padding:2px 5px; border-radius:3px;'>$utm_source</span></li>
                </ul>
                <div style='background: white; padding: 20px; border-left: 4px solid #d35400; border-radius: 4px; box-shadow: 0 2px 4px rgba(0,0,0,0.05);'>
                    <h3 style='margin-top:0; color:#d35400; font-size:16px;'>Detalles del Pedido:</h3>
                    <div style='font-size:14px; line-height:1.6; color:#333;'>
                        $mensaje_html
                    </div>
                </div>
                <p style='font-size:12px; color:#888; text-align:center; margin-top:20px;'>Verificado por Cloudflare Turnstile</p>
            </div>
        ";

        $mail->send();
        header("Location: gracias");
        exit();

    } catch (Exception $e) {
        // ERROR: Guardamos en log del servidor pero no mostramos al usuario
        error_log("Error al enviar correo (Lead guardado en backup): " . $mail->ErrorInfo);
        
        // Redirigir a error amigable
        header("Location: contacto.php?status=error");
        exit();
    }
} else {
    header("Location: contacto.php");
    exit();
}
?>