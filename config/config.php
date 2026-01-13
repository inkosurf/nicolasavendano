<?php
// config/config.php - centraliza configuración (usar include/require desde tu bootstrap)
$env = getenv('APP_ENV') ?: 'production';
$app_domain = getenv('APP_DOMAIN') ?: 'localhost';
$app_protocol = getenv('APP_PROTOCOL') ?: 'http';
$base_url = getenv('BASE_URL') ?: ($app_protocol . '://' . $app_domain);

// Definir constantes globales
define('APP_ENV', $env);
define('APP_DOMAIN', $app_domain);
define('APP_PROTOCOL', $app_protocol);
define('BASE_URL', $base_url);
