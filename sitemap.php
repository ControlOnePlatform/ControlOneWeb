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
    <url>
        <loc><?php echo $base_url; ?>/blog</loc>
        <lastmod><?php echo $today; ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc><?php echo $base_url; ?>/aviso-privacidad</loc>
        <priority>0.5</priority>
    </url>
    <url>
        <loc><?php echo $base_url; ?>/terminos-condiciones</loc>
        <priority>0.5</priority>
    </url>
    <?php
    // 3. PRODUCTOS INDIVIDUALES (Carpeta 'info') - CRÍTICO PARA SEO
    $info_files = glob(__DIR__ . '/info/*.php');
    foreach ($info_files as $file) {
        $filename = basename($file, '.php');
        // Ignorar archivos que no sean productos (si los hubiera)
        if ($filename !== 'index') {
    ?>
    <url>
        <loc><?php echo $base_url; ?>/info/<?php echo $filename; ?></loc>
        <lastmod><?php echo date("Y-m-d", filemtime($file)); ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.85</priority>
    </url>
    <?php
        }
    }
    ?>
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