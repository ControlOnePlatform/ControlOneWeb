<?php 
$page_title = "Blog de Logística y Normativa C-TPAT";
$meta_description = "Artículos técnicos, guías de uso y noticias sobre seguridad logística, prevención de robo de carga y normativas internacionales de exportación.";
include 'includes/header.php'; 
include 'includes/data_blog.php'; 

// Helper: Fecha en español
function fecha_es($fecha) {
    $meses = ['enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre'];
    $ts = strtotime($fecha);
    return (int)date('j', $ts) . ' de ' . $meses[(int)date('n', $ts) - 1] . ' de ' . date('Y', $ts);
}

// --- CONFIGURACIÓN DE CARGA ---
$posts_per_page = 12;
$today = date("Y-m-d");
$filter_cat = isset($_GET['cat']) ? urldecode($_GET['cat']) : '';

// Filtrar posts (futuros + categoría)
$filtered_posts = [];
foreach ($blog_posts as $slug => $post) {
    if ($post['fecha'] > $today) continue;
    if ($filter_cat != '' && $post['categoria'] != $filter_cat) continue;
    $filtered_posts[$slug] = $post;
}
$total_posts = count($filtered_posts);
?>

<main>
    <section class="relative bg-primary min-h-[300px] md:min-h-[400px] flex items-center justify-center text-center py-12">
        <div class="absolute inset-0 z-0">
            <img src="/assets/img/bodega-control-one-sellos-seguridad.avif" alt="Blog de Logística y Seguridad - Control One" class="w-full h-full object-cover object-center opacity-30" fetchpriority="high">
            <div class="absolute inset-0 bg-primary/80 mix-blend-multiply"></div>
        </div>
        
        <div class="relative z-10 container mx-auto px-4">
            <span class="text-accent font-bold tracking-widest uppercase text-xs md:text-sm mb-2 block">Centro de Conocimiento</span>
            <h1 class="text-3xl md:text-5xl font-bold text-white mb-4 leading-tight">Blog de Seguridad Logística</h1>
            <p class="text-lg md:text-xl text-gray-200 max-w-2xl mx-auto">
                Noticias, normativas C-TPAT, guías técnicas y estrategias para proteger tu carga.
            </p>
        </div>
    </section>

    <section class="py-12 md:py-16 bg-industrial">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="flex flex-col lg:flex-row gap-8">
                
                <!-- SIDEBAR: MENÚ DE CATEGORÍAS (Lado Izquierdo) -->
                <aside class="w-full lg:w-1/4 flex-shrink-0">
                    <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-100 sticky top-24">
                        <h3 class="font-bold text-primary text-lg mb-4 border-b border-gray-100 pb-2">Explorar por Tema</h3>
                        <nav class="flex flex-col space-y-1">
                            <?php 
                            // Lista Maestra de Categorías
                            $categorias = [
                                'Todas' => '',
                                'Guías Técnicas' => 'Guías Técnicas y Tutoriales',
                                'Logística y Carga' => 'Logística y Transporte de Carga',
                                'Normativa C-TPAT' => 'Normatividad y Aduanas',
                                'Fluidos y Energía' => 'Control de Fluidos y Energía',
                                'Prevención y Retail' => 'Prevención de Pérdidas y Retail'
                            ];

                            foreach($categorias as $label => $val):
                                $isActive = ($filter_cat == $val);
                                $url = $val == '' ? '/blog' : '/blog?cat=' . urlencode($val);
                            ?>
                                <a href="<?php echo $url; ?>" 
                                   class="px-4 py-3 rounded-md text-sm font-medium transition-all duration-200 flex items-center justify-between group <?php echo $isActive ? 'bg-primary text-white shadow-md' : 'text-gray-600 hover:bg-gray-50 hover:text-accent'; ?>">
                                    <?php echo $label; ?>
                                    <?php if($isActive): ?>
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                    <?php endif; ?>
                                </a>
                            <?php endforeach; ?>
                        </nav>
                        
                        <!-- Contador de artículos -->
                        <div class="mt-4 pt-4 border-t border-gray-100">
                            <p class="text-xs text-gray-400 text-center"><?php echo $total_posts; ?> artículos disponibles</p>
                        </div>

                        <!-- CTA Lateral -->
                        <div class="mt-4 pt-4 border-t border-gray-100 text-center">
                            <p class="text-xs text-gray-500 mb-3">¿Dudas sobre qué sello usar?</p>
                            <a href="/contacto" class="block w-full bg-accent text-white font-bold py-2 rounded text-sm hover:bg-orange-600 transition-colors">
                                Contactar un Experto
                            </a>
                        </div>
                    </div>
                </aside>

                <!-- GRID DE ARTÍCULOS (Lado Derecho) -->
                <div class="w-full lg:w-3/4">

                    <!-- Contador visible -->
                    <div class="flex items-center justify-between mb-6">
                        <p class="text-sm text-gray-500">
                            Mostrando <span id="blog-visible-count" class="font-bold text-primary"><?php echo min($posts_per_page, $total_posts); ?></span> de <span class="font-bold"><?php echo $total_posts; ?></span> artículos
                        </p>
                    </div>

                    <div id="blog-grid" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        
                        <?php 
                        $post_index = 0;

                        foreach ($filtered_posts as $slug => $post): 
                            $post_index++;
                            $is_hidden = ($post_index > $posts_per_page);
                        ?>
                            <article class="blog-card bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100 flex flex-col h-full group <?php echo $is_hidden ? 'hidden' : ''; ?>"
                                     data-post-index="<?php echo $post_index; ?>">
                                
                                <a href="/post/<?php echo $slug; ?>" class="block h-48 overflow-hidden relative">
                                    <img src="/<?php echo $post['imagen']; ?>" 
                                         alt="<?php echo $post['titulo']; ?>" 
                                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                         loading="lazy">
                                    
                                    <div class="absolute top-4 left-4 bg-primary text-white text-[10px] md:text-xs font-bold px-3 py-1 rounded-full shadow-md z-10">
                                        <?php echo $post['categoria']; ?>
                                    </div>
                                </a>

                                <div class="p-5 flex flex-col flex-grow">
                                    <div class="flex items-center text-xs text-gray-500 mb-3">
                                        <svg class="w-4 h-4 mr-2 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                        <?php echo fecha_es($post['fecha']); ?>
                                    </div>

                                    <h3 class="text-lg font-bold text-primary mb-3 leading-tight hover:text-accent transition-colors">
                                        <a href="/post/<?php echo $slug; ?>">
                                            <?php echo $post['titulo']; ?>
                                        </a>
                                    </h3>

                                    <p class="text-gray-600 mb-4 text-sm line-clamp-3 flex-grow">
                                        <?php echo $post['extracto']; ?>
                                    </p>

                                    <div class="mt-auto pt-4 border-t border-gray-100">
                                        <a href="/post/<?php echo $slug; ?>" class="text-primary font-bold text-sm hover:text-accent inline-flex items-center transition-colors">
                                            Leer Artículo
                                            <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                        </a>
                                    </div>
                                </div>
                            </article>
                        <?php endforeach; ?>

                        <?php if($total_posts === 0): ?>
                            <div class="col-span-1 md:col-span-2 text-center py-12">
                                <p class="text-gray-500 text-lg">No encontramos artículos en esta categoría por el momento.</p>
                                <a href="/blog" class="text-accent font-bold hover:underline mt-2 inline-block">Ver todos los artículos</a>
                            </div>
                        <?php endif; ?>

                    </div>

                    <!-- BOTÓN "CARGAR MÁS" -->
                    <?php if ($total_posts > $posts_per_page): ?>
                    <div id="load-more-wrap" class="mt-10 text-center">
                        <button id="load-more-btn" 
                                class="inline-flex items-center gap-2 bg-white border-2 border-primary text-primary hover:bg-primary hover:text-white font-bold px-8 py-3 rounded-lg transition-all duration-300 shadow-sm hover:shadow-lg group"
                                data-per-page="<?php echo $posts_per_page; ?>"
                                data-total="<?php echo $total_posts; ?>">
                            <span id="load-more-text">Cargar más artículos</span>
                            <svg class="w-5 h-5 transform group-hover:translate-y-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                            </svg>
                        </button>
                        <p id="load-more-hint" class="text-xs text-gray-400 mt-2"></p>
                    </div>
                    <?php endif; ?>

                </div>

            </div>
        </div>
    </section>
</main>

<!-- Script: Cargar Más Posts -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const btn = document.getElementById('load-more-btn');
    if (!btn) return;

    const perPage = parseInt(btn.dataset.perPage);
    const total = parseInt(btn.dataset.total);
    const grid = document.getElementById('blog-grid');
    const counter = document.getElementById('blog-visible-count');
    const wrap = document.getElementById('load-more-wrap');
    const hint = document.getElementById('load-more-hint');
    const btnText = document.getElementById('load-more-text');
    let currentVisible = perPage;

    function updateHint() {
        const remaining = total - currentVisible;
        if (remaining > 0) {
            hint.textContent = remaining + ' artículo' + (remaining !== 1 ? 's' : '') + ' restante' + (remaining !== 1 ? 's' : '');
        }
    }
    updateHint();

    btn.addEventListener('click', function() {
        const nextBatch = currentVisible + perPage;
        const cards = grid.querySelectorAll('.blog-card[data-post-index]');
        let revealed = 0;

        cards.forEach(function(card) {
            const idx = parseInt(card.dataset.postIndex);
            if (idx > currentVisible && idx <= nextBatch) {
                card.classList.remove('hidden');
                // Animación de entrada
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                requestAnimationFrame(function() {
                    card.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                });
                revealed++;
            }
        });

        currentVisible = Math.min(nextBatch, total);
        counter.textContent = currentVisible;

        // ¿Ya se mostraron todos?
        if (currentVisible >= total) {
            wrap.innerHTML = '<p class="text-sm text-gray-400 py-4">✅ Has visto todos los artículos</p>';
        } else {
            updateHint();
        }

        // Scroll suave al primer post nuevo
        if (revealed > 0) {
            const firstNew = grid.querySelector('.blog-card[data-post-index="' + (currentVisible - revealed + 1) + '"]');
            if (firstNew) {
                firstNew.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        }
    });
});
</script>

<?php include 'includes/footer.php'; ?>