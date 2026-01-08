<?php
// sitemap.php - Generador Dinámico para Google
header("Content-type: application/xml; charset=utf-8");

// 1. Cargar Base de Datos del Blog
require_once 'includes/data_blog.php';

// 2. Configuración Base
$base_url = "https://controlone.com.mx";
$today = date('Y-m-d');

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?php echo $base_url; ?>/</loc>
        <lastmod><?php echo $today; ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc><?php echo $base_url; ?>/productos</loc>
        <lastmod><?php echo $today; ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc><?php echo $base_url; ?>/nosotros</loc>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?php echo $base_url; ?>/contacto</loc>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?php echo $base_url; ?>/blog</loc>
        <lastmod><?php echo $today; ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>
    </url>
    <?php 
    if (isset($blog_posts) && !empty($blog_posts)):
        foreach ($blog_posts as $slug => $post): 
    ?>
    <url>
        <loc><?php echo $base_url; ?>/post/<?php echo $slug; ?></loc>
        <lastmod><?php echo $post['fecha']; ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>
    <?php 
        endforeach; 
    endif;
    ?>
</urlset>