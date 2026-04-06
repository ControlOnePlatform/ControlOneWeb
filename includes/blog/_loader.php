<?php
/**
 * LOADER AUTOMÁTICO DE BLOG POSTS
 * ================================
 * Escanea /includes/blog/ y carga todos los .php como posts.
 * 
 * Cada archivo DEBE tener un campo 'slug' que define la URL.
 * El nombre del archivo es solo para organización interna.
 * 
 * Ejemplo de archivo:
 *   return [
 *       'slug' => 'mi-url-del-post',
 *       'titulo' => '...',
 *       ...
 *   ];
 */

$blog_posts = [];
$archivos = glob(__DIR__ . '/*.php');

foreach ($archivos as $archivo) {
    // Ignorar archivos que empiecen con _ (como este _loader.php)
    if (basename($archivo)[0] === '_') continue;
    
    $data = require $archivo;
    
    // Usar el campo 'slug' como key del array, o el nombre del archivo como fallback
    $slug = $data['slug'] ?? basename($archivo, '.php');
    unset($data['slug']); // No necesitamos el slug dentro del array de datos
    
    $blog_posts[$slug] = $data;
}

// Ordenar por fecha (más nuevo primero)
uasort($blog_posts, function($a, $b) {
    return strtotime($b['fecha']) - strtotime($a['fecha']);
});
?>
