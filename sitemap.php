<?php
// sitemap.php - Generador Dinámico para Control One
header("Content-type: application/xml; charset=utf-8");

// Incluimos tu "base de datos" de posts
include 'includes/data_blog.php'; 

// URL base de tu sitio (asegúrate que termine en /)
$base_url = "https://controlone.com.mx/";

// Cabecera obligatoria del XML
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    <url>
        <loc><?php echo $base_url; ?></loc>
        <lastmod><?php echo date("Y-m-d"); ?></lastmod>
        <priority>1.00</priority>
    </url>
    <url>
        <loc><?php echo $base_url; ?>productos</loc>
        <priority>0.95</priority>
    </url>
    <url>
        <loc><?php echo $base_url; ?>contacto</loc>
        <priority>0.90</priority>
    </url>
    <url>
        <loc><?php echo $base_url; ?>nosotros</loc>
        <priority>0.80</priority>
    </url>
    <url>
        <loc><?php echo $base_url; ?>blog</loc>
        <priority>0.90</priority>
    </url>

    <!-- Fichas Técnicas (Escaneo Automático de carpeta 'info') -->
    <?php
    $files = glob("info/*.php"); // Busca todos los .php en info
    foreach ($files as $file) {
        $slug_producto = basename($file, '.php'); // Obtiene nombre sin extensión
        echo "<url>\n";
        echo "        <loc>" . $base_url . "info/" . $slug_producto . "</loc>\n";
        echo "        <priority>0.95</priority>\n";
        echo "    </url>\n";
    }
    ?>
    <?php 
    // Aquí recorremos tu array $blog_posts automáticamente
    foreach ($blog_posts as $slug => $post): 
    ?>
    <url>
        <loc><?php echo $base_url . 'post/' . $slug; ?></loc>
        <lastmod><?php echo $post['fecha']; ?>T12:00:00+00:00</lastmod>
        <priority>0.85</priority>
    </url>
    <?php endforeach; ?>

</urlset>