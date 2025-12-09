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

    // 1. Validación Honeypot
    if (!empty($_POST['website_check'])) {
        die("Error de validación (H)."); 
    }

    // 2. Validación Cloudflare Turnstile (USANDO cURL PARA EVITAR ERROR 500)
    $turnstile_response = $_POST['cf-turnstile-response'] ?? '';
    
    if (empty($turnstile_response)) {
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
        // Si falla la conexión con Cloudflare, permitimos pasar (fail-open) o mostramos error
        error_log('Error cURL Turnstile: ' . curl_error($ch));
        // Opcional: header("Location: contacto.php?status=error"); die();
    }
    curl_close($ch);

    $response = json_decode($result);

    if (!$response->success) {
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
            header("Location: contacto.php?status=success"); 
            die();
        }
    }

    // =================================================================
    // 📧 PROCESAMIENTO DEL CORREO (BREVO)
    // =================================================================

    $nombre   = strip_tags(trim($_POST["nombre"]));
    $email    = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $telefono = strip_tags(trim($_POST["telefono"]));
    $empresa  = strip_tags(trim($_POST["empresa"]));
    $volumen  = strip_tags(trim($_POST["volumen"])); 
    $mensaje  = strip_tags(trim($_POST["mensaje"]));

    // Traducción volumen
    $volumen_texto = $volumen;
    switch ($volumen) {
        case 'menos_1000': $volumen_texto = "Menos de 1,000 piezas"; break;
        case '1000_5000':  $volumen_texto = "1,000 - 5,000 piezas"; break;
        case '5000_10000': $volumen_texto = "5,000 - 10,000 piezas"; break;
        case 'mas_10000':  $volumen_texto = "Más de 10,000 piezas"; break;
    }

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
        
        $mail->Body    = "
            <div style='font-family: Arial, sans-serif; padding: 20px; border: 1px solid #ccc; background-color: #f9f9f9;'>
                <h2 style='color: #0B2239; border-bottom: 2px solid #F5A623;'>Nueva Cotización (Vía Web)</h2>
                <ul style='list-style: none; padding: 0;'>
                    <li><strong>Cliente:</strong> $nombre</li>
                    <li><strong>Empresa:</strong> $empresa</li>
                    <li><strong>Correo:</strong> <a href='mailto:$email'>$email</a></li>
                    <li><strong>Teléfono:</strong> $telefono</li>
                    <li><strong>Volumen:</strong> $volumen_texto</li>
                </ul>
                <div style='background: white; padding: 15px; border-left: 4px solid #d35400;'>
                    <strong>Mensaje:</strong><br>$mensaje
                </div>
                <p style='font-size:12px; color:#888; text-align:center; margin-top:20px;'>Verificado por Cloudflare Turnstile</p>
            </div>
        ";

        $mail->send();
        header("Location: contacto.php?status=success");
        exit();

    } catch (Exception $e) {
        // Si falla el envío, mostramos el error técnico en pantalla para que me digas qué dice
        echo "Error al enviar correo: " . $mail->ErrorInfo;
        // error_log("Error al enviar correo: " . $mail->ErrorInfo);
        // header("Location: contacto.php?status=error");
        exit();
    }
} else {
    header("Location: contacto.php");
    exit();
}
?>