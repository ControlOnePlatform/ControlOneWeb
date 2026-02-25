<?php
// feed.php - Canal RSS Automático para Control One
header("Content-Type: application/rss+xml; charset=UTF-8");

include 'includes/data_blog.php';

$base_url = "https://controlone.com.mx/";
$last_build_date = date(DATE_RSS);

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
<channel>
    <title>Blog Control One - Seguridad Logística</title>
    <link><?php echo $base_url; ?></link>
    <description>Artículos técnicos sobre sellos de seguridad, normativa ISO 17712, C-TPAT y prevención de pérdidas en transporte.</description>
    <language>es-mx</language>
    <lastBuildDate><?php echo $last_build_date; ?></lastBuildDate>
    <atom:link href="<?php echo $base_url; ?>feed.xml" rel="self" type="application/rss+xml" />

    <?php 
    // Recorremos los posts. Importante: RSS suele mostrar los más recientes primero.
    // El array de data_blog ya viene en orden (lo más nuevo primero).
    $today = date("Y-m-d"); // Fecha actual del servidor
    
    foreach ($blog_posts as $slug => $post):
        // LÓGICA DE PROGRAMACIÓN:
        // Si la fecha del post es mayor a hoy (futuro), NO lo mostramos en el RSS.
        // Así Metricool no lo verá hasta que llegue el día.
        if ($post['fecha'] > $today) {
            continue;
        }

        // Convertimos fecha YYYY-MM-DD a formato RSS estándar (RFC 822)
        $pubDate = date(DATE_RSS, strtotime($post['fecha']));
        $link = $base_url . 'post/' . $slug;
        $image_url = $base_url . $post['imagen'];
    ?>
    <item>
        <title><?php echo htmlspecialchars($post['titulo']); ?></title>
        <link><?php echo $link; ?></link>
        <guid><?php echo $link; ?></guid>
        <pubDate><?php echo $pubDate; ?></pubDate>
        <description><![CDATA[
            <img src="<?php echo $image_url; ?>" alt="<?php echo $post['titulo']; ?>" />
            <p><?php echo $post['extracto']; ?></p>
            <br />
            <a href="<?php echo $link; ?>">Leer artículo completo en Control One</a>
        ]]></description>
        <category><?php echo htmlspecialchars($post['categoria']); ?></category>
        <enclosure url="<?php echo $image_url; ?>" length="0" type="image/avif" />
    </item>
    <?php endforeach; ?>

</channel>
</rss>
