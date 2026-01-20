<?php 
// SEO: No indexar esta página para evitar falsos positivos o accesos directos irrelevantes
$page_title = "¡Gracias por contactarnos! | Control One";
include 'includes/header.php'; 
?>

<!-- Event snippet for conversión (Opcional si usas GTM por URL) -->
<!-- Google Ads Conversion Tracking se activará al cargar esta URL -->

<main class="bg-gray-50 min-h-screen flex items-center justify-center py-20">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto bg-white rounded-3xl shadow-2xl p-8 md:p-12 text-center border-t-8 border-accent relative overflow-hidden animate-fade-in-up">
            
            <!-- Confeti decorativo (CSS) -->
            <div class="absolute top-0 left-0 w-full h-full pointer-events-none opacity-50 bg-[url('assets/img/pattern-dot.png')]"></div>

            <div class="mb-8 relative z-10">
                <div class="w-24 h-24 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6 shadow-sm">
                    <svg class="w-12 h-12 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                </div>
                <h1 class="text-3xl md:text-5xl font-bold text-primary mb-4">¡Solicitud Recibida!</h1>
                <p class="text-xl text-gray-600">
                    Gracias por confiar en <strong>Control One</strong>.
                </p>
                <div class="w-20 h-1 bg-accent mx-auto my-6 rounded-full"></div>
            </div>

            <div class="space-y-6 relative z-10">
                <p class="text-gray-600 leading-relaxed text-lg">
                    Hemos recibido correctamente tus datos. Un <strong>Asesor Técnico</strong> está revisando tu requerimiento y te contactará en breve (Tiempo estimado: &lt; 30 min).
                </p>

                <div class="bg-blue-50 border border-blue-100 rounded-xl p-6 text-left flex items-start gap-4 max-w-lg mx-auto">
                    <div class="flex-shrink-0 mt-1">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-primary mb-1">¿Qué sigue ahora?</h4>
                        <p class="text-sm text-gray-600">
                            Te enviaremos una propuesta formal con ficha técnica y tiempos de entrega a tu correo. Si es urgente, puedes llamarnos directamente.
                        </p>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 justify-center mt-8">
                    <!-- Botón Descargar Catálogo -->
                    <a href="assets/pdf/Catalogo.pdf" target="_blank" class="inline-flex items-center justify-center bg-accent hover:bg-orange-600 text-white font-bold py-4 px-8 rounded-full shadow-lg hover:shadow-orange-500/50 transition-all transform hover:-translate-y-1">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                        Descargar Catálogo PDF
                    </a>
                    
                    <!-- Botón Volver al Inicio -->
                    <a href="/" class="inline-flex items-center justify-center border-2 border-gray-200 text-gray-600 hover:text-primary hover:border-primary font-bold py-4 px-8 rounded-full transition-all">
                        Volver al Inicio
                    </a>
                </div>
            </div>

        </div>

        <!-- Seccion Adicional: Blog Recomendado -->
        <div class="max-w-4xl mx-auto mt-16 text-center">
            <h3 class="text-gray-400 font-bold uppercase tracking-widest text-sm mb-6">Mientras esperas...</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 opacity-80 hover:opacity-100 transition-opacity">
                <a href="blog" class="block bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-shadow text-left border border-gray-100">
                    <span class="text-accent font-bold text-xs">BLOG</span>
                    <h4 class="font-bold text-primary text-lg mt-2">Diferencia entre Sello y Candado</h4>
                    <p class="text-gray-500 text-sm mt-1">Leer artículo &rarr;</p>
                </a>
                <a href="productos" class="block bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-shadow text-left border border-gray-100">
                    <span class="text-accent font-bold text-xs">CATÁLOGO WEB</span>
                    <h4 class="font-bold text-primary text-lg mt-2">Explorar más Productos</h4>
                    <p class="text-gray-500 text-sm mt-1">Ver modelos ISO 17712 &rarr;</p>
                </a>
            </div>
        </div>

    </div>
</main>

<script>
    // Disparar evento personalizado para GTM si es necesario
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({
        'event': 'form_submission_success',
        'pagePath': '/gracias'
    });
</script>

<?php include 'includes/footer.php'; ?>
