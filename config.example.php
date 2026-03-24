<?php
// config.example.php - TEMPLATE de configuración
// ⚠️ INSTRUCCIONES:
// 1. Copia este archivo como "config.local.php"
// 2. Rellena con tus credenciales reales
// 3. NUNCA subas config.local.php a Git

// DATOS DE CONEXIÓN SMTP
define('SMTP_HOST', 'smtp-relay.brevo.com');
define('SMTP_PORT', 587);
define('SMTP_USERNAME', 'TU_USUARIO_SMTP_AQUI');
define('SMTP_PASSWORD', 'TU_PASSWORD_SMTP_AQUI');

// CONFIGURACIÓN DE CORREOS
define('MAIL_FROM_EMAIL', 'tucorreo@tudominio.com');
define('MAIL_FROM_NAME', 'Web Control One');

// Correo donde recibirás las alertas
define('MAIL_TO_ADDRESS', 'tucorreo@tudominio.com');
?>
