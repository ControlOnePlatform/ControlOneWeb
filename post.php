<?php 
/* post.php - El lector de artículos OPTIMIZADO PARA SEO */

include 'includes/data_blog.php'; 

$slug = isset($_GET['slug']) ? $_GET['slug'] : '';

if (array_key_exists($slug, $blog_posts)) {
    $post = $blog_posts[$slug];
    
    // --- VARIABLES SEO PARA EL HEADER ---
    $page_title = $post['titulo']; 
    
    // Usamos la meta_description si existe en la base de datos, si no, usamos el extracto como respaldo
    $meta_description = isset($post['meta_description']) ? $post['meta_description'] : $post['extracto'];
    
    // Imagen para Open Graph (WhatsApp/Facebook)
    $page_image = '/' . $post['imagen']; 
    
} else {
    // CAMBIO: En lugar de error 404, redirigimos al Blog principal
    header("Location: /blog", true, 301);
    exit();
}

include 'includes/header.php'; 
?>

<main class="bg-white">
    <section class="relative bg-primary py-20 min-h-[350px] flex items-center justify-center">
        <div class="absolute inset-0 z-0 overflow-hidden">
             <img src="/<?php echo $post['imagen']; ?>" alt="Fondo" class="w-full h-full object-cover opacity-20 blur-sm">
        </div>
        
        <div class="container mx-auto px-4 max-w-4xl text-center relative z-10">
            <div class="inline-block bg-accent text-white text-xs md:text-sm font-bold px-3 py-1 rounded-full mb-4">
                <?php echo isset($post['categoria']) ? $post['categoria'] : 'Blog'; ?>
            </div>
            
            <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight mb-6 shadow-text">
                <?php echo $post['titulo']; ?>
            </h1>
            
            <div class="flex items-center justify-center text-gray-300 text-sm space-x-4">
                <span class="flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    <?php echo $post['autor']; ?>
                </span>
                <span class="flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <?php echo date('d M, Y', strtotime($post['fecha'])); ?>
                </span>
            </div>
        </div>
    </section>

    <section class="py-16 px-4">
        <div class="container mx-auto max-w-3xl">
            <div class="mb-10 rounded-xl overflow-hidden shadow-xl border border-gray-100">
                <img src="/<?php echo $post['imagen']; ?>" alt="<?php echo $post['titulo']; ?> - Control One" class="w-full h-auto object-cover" width="800" height="450">
            </div>
            
            <article class="prose prose-lg text-gray-700 leading-relaxed max-w-none space-y-6">
                <?php echo $post['contenido']; ?>
            </article>

            <!-- SECCIÓN: Artículos Relacionados -->
            <?php
            // Lógica para encontrar posts relacionados
            $related_posts = [];
            $current_category = isset($post['categoria']) ? $post['categoria'] : '';

            // 1. Buscamos posts de la misma categoría
            foreach ($blog_posts as $slug_rel => $post_rel) {
                // Sáltate el post actual
                if ($slug_rel === $slug) continue;

                if ($post_rel['categoria'] === $current_category) {
                    $related_posts[$slug_rel] = $post_rel;
                }
                // Limitamos a 2 relacionados
                if (count($related_posts) >= 2) break;
            }

            // 2. Si no llenamos con la misma categoría, rellenamos con cualquiera reciente
            if (count($related_posts) < 2) {
                foreach ($blog_posts as $slug_rel => $post_rel) {
                    if ($slug_rel === $slug) continue;
                    if (array_key_exists($slug_rel, $related_posts)) continue; // Ya está agregado

                    $related_posts[$slug_rel] = $post_rel;
                    if (count($related_posts) >= 2) break;
                }
            }
            ?>

            <?php if (!empty($related_posts)): ?>
            <div class="mt-20 pt-10 border-t border-gray-200">
                <h3 class="text-2xl font-bold text-gray-800 mb-8 border-l-4 border-accent pl-4">También te podría interesar:</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <?php foreach ($related_posts as $r_slug => $r_post): ?>
                    <a href="/post/<?php echo $r_slug; ?>" class="group block bg-gray-50 rounded-xl overflow-hidden hover:shadow-lg transition-all border border-gray-100">
                        <div class="flex items-center">
                            <div class="w-1/3 h-24 relative overflow-hidden">
                                <img src="/<?php echo $r_post['imagen']; ?>" alt="<?php echo $r_post['titulo']; ?>" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform">
                            </div>
                            <div class="w-2/3 p-4">
                                <span class="text-xs text-accent font-bold uppercase mb-1 block"><?php echo $r_post['categoria']; ?></span>
                                <h4 class="text-sm font-bold text-gray-800 group-hover:text-primary leading-tight">
                                    <?php echo $r_post['titulo']; ?>
                                </h4>
                            </div>
                        </div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>

            <div class="mt-16 pt-10 border-t border-gray-200 text-center">
                <h3 class="text-primary font-bold mb-6 text-xl">¿Necesitas asesoría técnica?</h3>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="/contacto" class="inline-block bg-accent hover:bg-orange-600 text-white font-bold py-3 px-8 rounded-md transition-colors shadow-md">
                        Cotizar Solución
                    </a>
                    <a href="/blog" class="inline-block bg-gray-100 hover:bg-gray-200 text-primary font-medium py-3 px-8 rounded-md transition-colors">
                        Volver al Blog
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<script type="application/ld+json">
<?php
// Generamos el array de datos estructurados
$schemaData = [
    "@context" => "https://schema.org",
    "@type" => "BlogPosting",
    "headline" => $post['titulo'],
    "image" => ["https://controlone.com.mx/" . $post['imagen']],
    "datePublished" => $post['fecha'],
    "author" => [
        "@type" => "Organization",
        "name" => $post['autor']
    ],
    "publisher" => [
        "@type" => "Organization",
        "name" => "Control One",
        "logo" => [
            "@type" => "ImageObject",
            "url" => "https://controlone.com.mx/assets/img/logo-control-one-industrial.avif"
        ]
    ],
    "description" => strip_tags($meta_description)
];

// Imprimimos el JSON codificado correctamente
echo json_encode($schemaData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
?>
</script>

<?php include 'includes/footer.php'; ?>