<?php
// config.php - Configuración de Brevo (Sendinblue)

// DATOS DE CONEXIÓN SMTP DE BREVO
define('SMTP_HOST', 'smtp-relay.brevo.com');
define('SMTP_PORT', 587);
define('SMTP_USERNAME', '9c698a001@smtp-brevo.com');
define('SMTP_PASSWORD', 'xsmtpsib-8136202e3f459a92ae331c2d4f2555a5834024fcc943cbc4d427fcda3d4c976e-m99TZm5Wp3tmmQ3D');

// CONFIGURACIÓN DE CORREOS
// Este es el correo que "envía" (Debe ser el dominio validado en Brevo)
define('MAIL_FROM_EMAIL', 'socialmedia@controlone.com.mx');
define('MAIL_FROM_NAME', 'Web Control One');

// Este es el correo donde TÚ recibirás las alertas de ventas
define('MAIL_TO_ADDRESS', 'socialmedia@controlone.com.mx');

// SEGURIDAD
define('ADMIN_ACCESS_KEY', 'ControlOne2026');
?>