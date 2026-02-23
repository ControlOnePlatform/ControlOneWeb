<?php 
// SEO TÉCNICO: Título optimizado para búsqueda general y específica
$page_title = "Sellos y Marchamos de Seguridad en México | Fábrica de Precintos";
$meta_description = "Fabricantes de sellos de seguridad y marchamos de seguridad certificados ISO 17712. Venta de precintos de botella, cables de acero y plásticos. Cotiza ahora.";
$preload_image_hero = "/assets/img/blog/bodega-control-one-sellos-seguridad.avif";
include 'includes/header.php'; 
include 'includes/data_blog.php'; 
?>

<style>
/* CLS y FCP Fixes: Evitar que Safari/Chrome Mobile inflen los textos al rotar la pantalla */
html { -webkit-text-size-adjust: 100%; text-size-adjust: 100%; }
@keyframes fadeInUp { from { opacity: 0; transform: translate3d(0, 30px, 0); } to { opacity: 1; transform: translate3d(0, 0, 0); } }
@keyframes fadeInDown { from { opacity: 0; transform: translate3d(0, -20px, 0); } to { opacity: 1; transform: translate3d(0, 0, 0); } }
@keyframes bounceArrow { 0%,100% { transform: translateY(0); } 50% { transform: translateY(10px); } }
@keyframes pulse-glow { 0%,100% { box-shadow: 0 0 5px rgba(245,166,35,0.3); } 50% { box-shadow: 0 0 20px rgba(245,166,35,0.6); } }
@keyframes float { 0%,100% { transform: translateY(0px); } 50% { transform: translateY(-8px); } }
@keyframes countUp { from { opacity: 0; transform: scale(0.5); } to { opacity: 1; transform: scale(1); } }
.anim-up { animation: fadeInUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) both; will-change: transform, opacity; }
.anim-up-d1 { animation: fadeInUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) 0.2s both; will-change: transform, opacity; }
.anim-up-d2 { animation: fadeInUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) 0.4s both; will-change: transform, opacity; }
.anim-up-d3 { animation: fadeInUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) 0.6s both; will-change: transform, opacity; }
.anim-down { animation: fadeInDown 0.6s cubic-bezier(0.16, 1, 0.3, 1) both; will-change: transform, opacity; }
.anim-float { animation: float 3s ease-in-out infinite; }
</style>

<main>
    <section class="relative bg-primary min-h-[650px] flex items-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="/assets/img/blog/bodega-control-one-sellos-seguridad.avif" alt="Fábrica de sellos de seguridad y marchamos en México" class="w-full h-full object-cover opacity-30" fetchpriority="high">
            <div class="absolute inset-0 bg-gradient-to-b from-primary/90 via-primary/80 to-primary/95"></div>
        </div>

        <!-- Decorative elements -->
        <div class="absolute top-20 left-10 w-48 md:w-72 h-48 md:h-72 bg-accent/10 rounded-full blur-2xl md:blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-20 right-10 w-64 md:w-96 h-64 md:h-96 bg-blue-500/10 rounded-full blur-2xl md:blur-3xl pointer-events-none"></div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="anim-down inline-block bg-white/10 backdrop-blur-sm border border-white/20 text-white text-xs font-bold px-4 py-2 rounded-full mb-6 tracking-wider uppercase">
                🏭 Fabricantes desde México
            </div>
            <h1 class="anim-up text-3xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                Sellos y Marchamos de Seguridad<br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-accent to-yellow-300">Certificados ISO 17712</span>
            </h1>
            <p class="anim-up-d1 text-lg md:text-xl text-gray-300 mb-10 max-w-2xl mx-auto">
                Protege tu logística con <strong class="text-white">marchamos de seguridad</strong>, sellos de botella de alta resistencia y cable de acero. Cumplimiento C-TPAT garantizado.
            </p>
            <div class="anim-up-d2 flex flex-col sm:flex-row justify-center gap-4">
                <a href="/contacto" class="bg-accent hover:bg-orange-500 text-white px-8 py-4 rounded-lg font-bold text-lg transition-all shadow-lg shadow-accent/30 hover:shadow-xl hover:shadow-accent/40 transform hover:-translate-y-1" style="animation: pulse-glow 2s infinite">
                    Cotizar Marchamos
                </a>
                <a href="/productos" class="bg-white/10 backdrop-blur-sm border border-white/30 text-white hover:bg-white hover:text-primary px-8 py-4 rounded-lg font-bold text-lg transition-all">
                    Ver Catálogo 2026
                </a>
            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-10" style="animation: bounceArrow 2s infinite">
            <svg class="w-6 h-6 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
        </div>
    </section>

    <section class="py-16 bg-white border-b border-gray-200">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2">
                    <span class="text-accent font-bold tracking-widest uppercase text-sm">Blindaje Logístico Certificado</span>
                    <h2 class="text-3xl font-bold text-primary mt-2 mb-6">Marchamos de Seguridad y Sellos C-TPAT para Transporte Internacional</h2>
                    <div class="prose text-gray-600 leading-relaxed">
                        <p class="mb-4">
                            En <strong>Control One</strong>, somos líderes en la <strong>venta de sellos de seguridad</strong> y precintos diseñados para blindar la cadena de suministro logística. Entendemos que cada trayecto es un riesgo, por eso fabricamos <strong>marchamos de seguridad</strong> que cumplen las normativas globales más estrictas.
                        </p>
                        <p class="mb-4">
                            Nuestro catálogo incluye soluciones para cada necesidad:
                        </p>
                        <ul class="list-disc pl-5 mb-4 space-y-1">
                            <li><strong>Alta Seguridad (ISO 17712):</strong> Sellos de botella (clavo) para contenedores y exportación.</li>
                            <li><strong>Transporte Terrestre:</strong> Sellos de cable de acero ajustable (3/16") para camiones y tolvas.</li>
                            <li><strong>Logística y Reparto:</strong> Precintos indicativos de plástico y cintillos foliados.</li>
                        </ul>
                        <p>
                            Garantizamos el mejor <strong>precio de sellos de seguridad</strong> en México, con stock disponible para envíos urgentes a Monterrey, Guadalajara, CDMX, Manzanillo y Tijuana.
                        </p>
                    </div>
                </div>
                <div class="lg:w-1/2 grid grid-cols-2 gap-5">
                    <div class="bg-gradient-to-br from-primary/5 to-primary/10 p-6 rounded-xl text-center border border-primary/10 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group">
                        <div class="w-14 h-14 mx-auto bg-primary/10 rounded-xl flex items-center justify-center mb-3 group-hover:bg-primary/20 transition-colors">
                            <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <span class="block text-3xl font-extrabold text-primary mb-1">+12</span>
                        <span class="text-xs text-gray-500 font-semibold uppercase tracking-wide">Años de experiencia</span>
                    </div>
                    <div class="bg-gradient-to-br from-accent/5 to-accent/10 p-6 rounded-xl text-center border border-accent/20 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group">
                        <div class="w-14 h-14 mx-auto bg-accent/10 rounded-xl flex items-center justify-center mb-3 group-hover:bg-accent/20 transition-colors">
                            <svg class="w-7 h-7 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <span class="block text-3xl font-extrabold text-accent mb-1">ISO 17712</span>
                        <span class="text-xs text-gray-500 font-semibold uppercase tracking-wide">Certificación "H"</span>
                    </div>
                    <div class="bg-gradient-to-br from-emerald-500/5 to-emerald-500/10 p-6 rounded-xl text-center border border-emerald-500/15 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group">
                        <div class="w-14 h-14 mx-auto bg-emerald-500/10 rounded-xl flex items-center justify-center mb-3 group-hover:bg-emerald-500/20 transition-colors">
                            <svg class="w-7 h-7 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <span class="block text-3xl font-extrabold text-emerald-600 mb-1">Stock</span>
                        <span class="text-xs text-gray-500 font-semibold uppercase tracking-wide">Disponible</span>
                    </div>
                    <div class="bg-gradient-to-br from-blue-500/5 to-blue-500/10 p-6 rounded-xl text-center border border-blue-500/15 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group">
                        <div class="w-14 h-14 mx-auto bg-blue-500/10 rounded-xl flex items-center justify-center mb-3 group-hover:bg-blue-500/20 transition-colors">
                            <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <span class="block text-3xl font-extrabold text-blue-600 mb-1">C-TPAT</span>
                        <span class="text-xs text-gray-500 font-semibold uppercase tracking-wide">Cumplimiento global</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-primary mb-4">Catálogo de Sellos de Seguridad y Precintos</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Selecciona la categoría ideal: desde sellos de botella para tráileres hasta cintillos foliados.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden group hover:shadow-xl transition-shadow duration-300">
                    <div class="h-48 bg-gray-200 relative overflow-hidden">
                        <img src="/assets/img/sellos/sello-seguridad-star-one-indicativo.avif" alt="Sellos de botella y clavo alta seguridad ISO 17712 para contenedores" class="w-full h-full object-contain p-4 transition-transform duration-500 group-hover:scale-105" loading="lazy" decoding="async" width="400" height="192">
                        <div class="absolute top-4 right-4 bg-accent text-white p-2 rounded-full">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-primary mb-2">Alta Seguridad (ISO 17712)</h3>
                        <p class="text-gray-600 mb-4 text-sm">
                            Incluye <strong>sellos de botella (clavo)</strong> y sellos de cable de acero. Obligatorios para cruces fronterizos C-TPAT y <strong>candados para contenedores</strong> marítimos.
                        </p>
                        <a href="/productos#alta-seguridad" class="text-accent font-semibold hover:text-orange-600 inline-flex items-center">
                            Ver Sellos de Botella
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden group hover:shadow-xl transition-shadow duration-300">
                    <div class="h-48 bg-gray-200 relative overflow-hidden">
                        <img src="/assets/img/sellos/precinto-plastico-quantum-ajustable.avif" alt="Precintos plásticos indicativos tipo cintillo y cola de rata para almacén" class="w-full h-full object-contain p-4 transition-transform duration-500 group-hover:scale-105" loading="lazy" decoding="async" width="400" height="192">
                        <div class="absolute top-4 right-4 bg-accent text-white p-2 rounded-full">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path></svg>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-primary mb-2">Precintos Plásticos</h3>
                        <p class="text-gray-600 mb-4 text-sm">
                            Conocidos como <strong>cintillos de seguridad</strong>, cinchos numerados o cola de rata. Ideales para almacenes, botiquines, extintores y transporte retail.
                        </p>
                        <a href="/productos#plasticos" class="text-accent font-semibold hover:text-orange-600 inline-flex items-center">
                            Ver Cintillos y Cinchos
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden group hover:shadow-xl transition-shadow duration-300">
                    <div class="h-48 bg-gray-200 relative overflow-hidden">
                        <img src="/assets/img/sellos/sello-tipo-cable-c-one316.avif" alt="Sello de cable de acero ajustable alta seguridad para camiones y tráileres" class="w-full h-full object-contain p-4 transition-transform duration-500 group-hover:scale-105" loading="lazy" decoding="async" width="400" height="192">
                        <div class="absolute top-4 right-4 bg-accent text-white p-2 rounded-full">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path></svg>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-primary mb-2">Sellos de Cable de Acero</h3>
                        <p class="text-gray-600 mb-4 text-sm">
                            <strong>Sellos ajustables</strong> con cable de acero trenzado (3.5mm y 5mm). Alta resistencia a la tracción e ideales para camiones, tolvas y furgones.
                        </p>
                        <a href="/productos#cables-acero" class="text-accent font-semibold hover:text-orange-600 inline-flex items-center">
                            Ver Sellos de Cable
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BANNER GPS -->
    <section class="py-10 bg-gradient-to-r from-gray-900 via-gray-800 to-emerald-900">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                <div class="flex items-center gap-4">
                    <div class="w-14 h-14 bg-emerald-500/20 rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-7 h-7 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-white font-bold text-lg">📡 Nuevo: Rastreo GPS y Monitoreo Satelital</h3>
                        <p class="text-gray-300 text-sm">Localiza tu flota en tiempo real. Combina sellos físicos + GPS para seguridad total.</p>
                    </div>
                </div>
                <a href="/info/producto-gps-tracker" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-3 px-8 rounded-lg shadow-lg transition-all hover:-translate-y-0.5 whitespace-nowrap">
                    Conocer GPS
                </a>
            </div>
        </div>
    </section>

    <section class="py-14 bg-white border-t border-gray-200 overflow-hidden">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="flex items-center justify-center gap-3 mb-4">
                <div class="h-px flex-1 max-w-[60px] bg-gradient-to-r from-transparent to-accent/40"></div>
                <span class="text-accent text-sm font-bold uppercase tracking-widest">Cobertura Nacional</span>
                <div class="h-px flex-1 max-w-[60px] bg-gradient-to-l from-transparent to-accent/40"></div>
            </div>
            <h2 class="text-2xl md:text-3xl font-bold text-primary mb-3">Envíos de Sellos de Seguridad a todo México</h2>
            <p class="text-gray-500 mb-8 max-w-2xl mx-auto text-sm">
                Abastecemos a las principales zonas industriales y logísticas del país con stock disponible para despacho inmediato.
            </p>
            <div class="flex flex-wrap justify-center gap-3 text-sm">
                <span class="bg-gradient-to-r from-primary/5 to-primary/10 text-primary font-semibold px-5 py-2.5 rounded-full border border-primary/10 hover:shadow-md hover:-translate-y-0.5 transition-all cursor-default flex items-center gap-2">
                    <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                    Monterrey
                </span>
                <span class="bg-gradient-to-r from-primary/5 to-primary/10 text-primary font-semibold px-5 py-2.5 rounded-full border border-primary/10 hover:shadow-md hover:-translate-y-0.5 transition-all cursor-default flex items-center gap-2">
                    <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                    Guadalajara
                </span>
                <span class="bg-gradient-to-r from-primary/5 to-primary/10 text-primary font-semibold px-5 py-2.5 rounded-full border border-primary/10 hover:shadow-md hover:-translate-y-0.5 transition-all cursor-default flex items-center gap-2">
                    <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                    Querétaro
                </span>
                <span class="bg-gradient-to-r from-primary/5 to-primary/10 text-primary font-semibold px-5 py-2.5 rounded-full border border-primary/10 hover:shadow-md hover:-translate-y-0.5 transition-all cursor-default flex items-center gap-2">
                    <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                    CDMX
                </span>
                <span class="bg-gradient-to-r from-primary/5 to-primary/10 text-primary font-semibold px-5 py-2.5 rounded-full border border-primary/10 hover:shadow-md hover:-translate-y-0.5 transition-all cursor-default flex items-center gap-2">
                    <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                    Tijuana
                </span>
                <span class="bg-gradient-to-r from-primary/5 to-primary/10 text-primary font-semibold px-5 py-2.5 rounded-full border border-primary/10 hover:shadow-md hover:-translate-y-0.5 transition-all cursor-default flex items-center gap-2">
                    <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                    Puebla
                </span>
            </div>
        </div>
    </section>

    <section class="py-12 bg-industrial border-t border-gray-200">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-center gap-6 md:gap-12">
                <div class="flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="w-14 h-14 bg-primary rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-primary text-sm">Cumplimiento ISO 17712:2013</h4>
                        <p class="text-gray-500 text-xs">Pruebas de laboratorio acreditadas para inviolabilidad</p>
                    </div>
                </div>
                <div class="hidden md:block w-px h-12 bg-gray-200"></div>
                <div class="flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="w-14 h-14 bg-accent rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-primary text-sm">Normativa C-TPAT</h4>
                        <p class="text-gray-500 text-xs">Sellos clasificados "H" para exportación</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative py-16 bg-primary overflow-hidden">
        <div class="absolute top-0 left-0 w-64 md:w-80 h-64 md:h-80 bg-accent/20 rounded-full blur-2xl md:blur-3xl pointer-events-none -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-72 md:w-96 h-72 md:h-96 bg-blue-500/20 rounded-full blur-2xl md:blur-3xl pointer-events-none translate-x-1/2 translate-y-1/2"></div>
        <div class="container mx-auto px-4 text-center relative z-10">
            <span class="inline-block bg-white/10 text-accent font-bold text-xs px-4 py-1.5 rounded-full mb-4 uppercase tracking-widest border border-white/10">Precios de Fábrica</span>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">¿Buscas sellos de seguridad <span class="text-transparent bg-clip-text bg-gradient-to-r from-accent to-yellow-300">por volumen</span>?</h2>
            <p class="text-gray-300 mb-8 max-w-2xl mx-auto text-lg">
                Somos fabricantes. Obtén precios preferenciales de mayoreo para flotillas y empresas de logística.
            </p>
            <a href="/contacto" class="inline-flex items-center bg-accent hover:bg-orange-500 text-white px-10 py-4 rounded-lg font-bold text-xl shadow-lg shadow-accent/30 transition-all hover:-translate-y-1 group">
                Solicitar Cotización
                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </a>
        </div>
    </section>

    <section class="py-20 bg-white border-t border-gray-200">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-accent font-bold tracking-widest uppercase text-sm">Centro de Conocimiento</span>
                <h2 class="text-3xl font-bold text-primary mt-2">Blog de Sellos de Seguridad y Logística</h2>
                
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                    Aprende a colocar correctamente un sello y conoce las normas en nuestra guía especializada sobre <a href="/post/sellos-seguridad-para-camiones-transporte" class="text-accent font-bold hover:underline">sellos de seguridad para transporte</a>.
                </p>
                
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php 
                // Asegurarse de que $blog_posts esté definido
                if (isset($blog_posts)) {
                    // 1. Filtrar solo los que ya pasaron (Fecha <= Hoy)
                    $posts_publicados = array_filter($blog_posts, function($post) {
                        return strtotime($post['fecha']) <= time();
                    });

                    // 2. Ordenar por fecha descendente (El más nuevo primero)
                    uasort($posts_publicados, function($a, $b) {
                        return strtotime($b['fecha']) - strtotime($a['fecha']);
                    });

                    // 3. Tomar los 3 más recientes
                    $ultimos_posts = array_slice($posts_publicados, 0, 3);
                } else {
                    $ultimos_posts = [];
                }
                
                if (!empty($ultimos_posts)):
                    foreach ($ultimos_posts as $slug => $post): 
                ?>
                    <article class="flex flex-col h-full group">
                        <a href="/post/<?php echo $slug; ?>" class="block overflow-hidden rounded-lg mb-4 relative h-48">
                            <div class="absolute inset-0 bg-primary/20 group-hover:bg-transparent transition-colors z-10"></div>
                            <img src="/<?php echo $post['imagen']; ?>" alt="<?php echo $post['titulo']; ?>" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500" loading="lazy" decoding="async">
                        </a>
                        <div class="flex flex-col flex-grow">
                            <div class="text-xs font-bold text-gray-400 mb-2 flex items-center">
                                <span class="w-2 h-2 bg-accent rounded-full mr-2"></span>
                                <?php echo date('d M, Y', strtotime($post['fecha'])); ?>
                            </div>
                            <h3 class="text-lg font-bold text-primary mb-2 group-hover:text-accent transition-colors leading-tight">
                                <a href="/post/<?php echo $slug; ?>"><?php echo $post['titulo']; ?></a>
                            </h3>
                            <p class="text-gray-600 text-sm line-clamp-2 mb-4 flex-grow">
                                <?php echo $post['extracto']; ?>
                            </p>
                            <a href="/post/<?php echo $slug; ?>" class="text-primary font-bold text-sm hover:text-accent inline-flex items-center mt-auto">
                                Leer más <span class="ml-1 text-lg">→</span>
                            </a>
                        </div>
                    </article>
                <?php 
                    endforeach; 
                else:
                ?>
                    <div class="col-span-3 text-center text-gray-500">
                        <p>Próximamente publicaremos artículos de interés.</p>
                    </div>
                <?php endif; ?>
            </div>

            <div class="text-center mt-12">
                <a href="/blog" class="inline-block border-2 border-primary text-primary hover:bg-primary hover:text-white font-bold py-3 px-8 rounded-md transition-colors">
                    Ver Todos los Artículos
                </a>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-50 border-t border-gray-200">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-5xl">
            
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-primary mb-2">Todo sobre Sellos de Seguridad Industrial</h2>
                <p class="text-gray-500">Glosario técnico y normativa vigente en México</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 text-gray-700 text-sm leading-relaxed">
                
                <div>
                    <div class="mb-6">
                        <h3 class="font-bold text-primary text-lg mb-2 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            ¿Qué son los Sellos de Seguridad?
                        </h3>
                        <p class="mb-3 text-justify">
                            Los <strong>sellos de seguridad</strong> (también conocidos técnicamente como <strong>precintos</strong> o coloquialmente en México como <strong>marchamos</strong>) son dispositivos auxiliares diseñados para evidenciar cualquier intento de apertura no autorizada en contenedores, válvulas o cajas.
                        </p>
                        <p class="text-justify bg-white p-3 rounded border-l-4 border-accent">
                            <strong>Diferencia clave:</strong> A diferencia de un candado tradicional que busca <em>impedir</em> la entrada, el sello de seguridad busca <em>delatar</em> la intrusión mediante evidencia visual irreversible (rotura o marcas de estrés).
                        </p>
                    </div>

                    <div>
                        <h3 class="font-bold text-primary text-lg mb-2">Sinónimos Comunes en la Industria</h3>
                        <ul class="list-disc pl-5 space-y-1 text-gray-600">
                            <li><strong>Precintos:</strong> Término usado en normativa aduanera y logística internacional.</li>
                            <li><strong>Marchamos:</strong> Término popular derivado de los antiguos sellos de plomo.</li>
                            <li><strong>Candados Fiscales:</strong> Sellos de alta seguridad utilizados para rutas controladas por el SAT o Aduanas.</li>
                        </ul>
                    </div>
                </div>

                <div>
                    <h3 class="font-bold text-primary text-lg mb-4 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Tipos según Norma ISO 17712
                    </h3>
                    <p class="mb-4 text-gray-600">
                        La norma internacional clasifica los sellos en 3 niveles de resistencia física:
                    </p>
                    
                    <div class="space-y-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <span class="w-8 h-8 rounded-full bg-green-100 text-green-800 font-bold flex items-center justify-center text-xs">I</span>
                            </div>
                            <div class="ml-3">
                                <h4 class="font-bold text-primary">Indicativos (Indicative)</h4>
                                <p class="text-xs text-gray-600">Plásticos o metálicos ligeros. Se rompen manualmente. Uso: <a href="/productos#plasticos" class="text-accent hover:underline">Cintillos para extintores</a>, almacenes y retail.</p>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="flex-shrink-0">
                                <span class="w-8 h-8 rounded-full bg-yellow-100 text-yellow-800 font-bold flex items-center justify-center text-xs">S</span>
                            </div>
                            <div class="ml-3">
                                <h4 class="font-bold text-primary">Seguridad (Security)</h4>
                                <p class="text-xs text-gray-600">Resistencia media. Requieren herramientas ligeras. Uso: Camiones de reparto y tolvas nacionales.</p>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="flex-shrink-0">
                                <span class="w-8 h-8 rounded-full bg-primary text-white font-bold flex items-center justify-center text-xs">H</span>
                            </div>
                            <div class="ml-3">
                                <h4 class="font-bold text-primary">Alta Seguridad (High Security)</h4>
                                <p class="text-xs text-gray-600">Acero reforzado. Resisten >1,000 kg. <strong>Obligatorios para C-TPAT</strong>. Uso: <a href="/productos#alta-seguridad" class="text-accent hover:underline">Contenedores marítimos</a>, tráileres y exportación.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



</main>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Control One",
  "url": "https://controlone.com.mx",
  "logo": "https://controlone.com.mx/assets/img/logo-control-one-industrial.avif",
  "sameAs": [
    "https://www.facebook.com/profile.php?id=61584181824253",
    "https://www.linkedin.com/in/control-one-0b2488397/"
  ],
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+52-55-5864-2200",
    "contactType": "sales",
    "areaServed": "MX",
    "availableLanguage": ["Spanish", "English"]
  },
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Av Lago de Guadalupe km 27.5-Bodega A3",
    "addressLocality": "Tlalnepantla",
    "addressRegion": "Estado de México",
    "postalCode": "54010",
    "addressCountry": "MX"
  }
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Control One - Sellos de Seguridad y Marchamos",
  "image": "https://controlone.com.mx/assets/img/logo-control-one-industrial.avif",
  "description": "Fabricantes de sellos de seguridad ISO 17712, marchamos, precintos, cintillos de plástico y rastreo GPS para transporte de carga en México.",
  "telephone": "+52-55-5864-2200",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Av Lago de Guadalupe km 27.5-Bodega A3, San Pedro Barrientos",
    "addressLocality": "Tlalnepantla",
    "addressRegion": "Estado de México",
    "postalCode": "54010",
    "addressCountry": "MX"
  },
  "url": "https://controlone.com.mx",
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
    "opens": "08:00",
    "closes": "18:00"
  },
  "areaServed": [
    {"@type": "Country", "name": "México"},
    {"@type": "City", "name": "Monterrey"},
    {"@type": "City", "name": "Guadalajara"},
    {"@type": "City", "name": "Querétaro"},
    {"@type": "City", "name": "Puebla"},
    {"@type": "City", "name": "Tijuana"}
  ],
  "priceRange": "$$",
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Catálogo de Sellos de Seguridad 2026",
    "itemListElement": [
      {"@type": "OfferCatalog", "name": "Sellos de Alta Seguridad ISO 17712"},
      {"@type": "OfferCatalog", "name": "Sellos de Cable de Acero"},
      {"@type": "OfferCatalog", "name": "Precintos Plásticos e Indicativos"},
      {"@type": "OfferCatalog", "name": "Rastreo GPS y Monitoreo Satelital"}
    ]
  }
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "Control One",
  "url": "https://controlone.com.mx",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://controlone.com.mx/productos?q={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [{
    "@type": "ListItem",
    "position": 1,
    "name": "Inicio",
    "item": "https://controlone.com.mx"
  }]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "¿Qué sello de seguridad se usa para cajas de tráiler?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Para cajas secas y refrigeradas en rutas nacionales o fiscales, la norma exige un sello de botella (clavo) certificado ISO 17712 Alta Seguridad (H). Si exportas a USA, este sello es obligatorio para cumplir con C-TPAT."
    }
  }, {
    "@type": "Question",
    "name": "¿Cuál es la diferencia entre precinto y marchamo?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Son sinónimos. En México se usan indistintamente junto con 'sello de seguridad'. Sin embargo, técnicamente 'marchamo' suele referirse más a sellos metálicos o de plomo antiguos, mientras que 'precinto' abarca las nuevas tecnologías de plástico y cable de acero."
    }
  }, {
    "@type": "Question",
    "name": "¿Cómo evitar el robo hormiga en camiones de reparto?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Para unidades de última milla que abren puertas constantemente, lo más eficiente son los cintillos de seguridad foliados de plástico. Permiten un control visual rápido (romper y tirar) en cada entrega sin alentar la operación con herramientas pesadas."
    }
  }, {
    "@type": "Question",
    "name": "¿Qué es la norma ISO 17712 y por qué importa?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "La ISO 17712:2013 es la norma internacional que clasifica los sellos de seguridad en tres niveles: Indicativo (I), Seguridad (S) y Alta Seguridad (H). Los sellos clasificados 'H' son obligatorios para contenedores marítimos de exportación y cumplimiento C-TPAT en la frontera con Estados Unidos."
    }
  }, {
    "@type": "Question",
    "name": "¿Cuánto tiempo tardan los envíos de sellos de seguridad?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Control One realiza envíos a las principales ciudades de México: Monterrey, Guadalajara, Querétaro, CDMX, Tijuana y Puebla. Contamos con stock disponible para despacho inmediato en pedidos urgentes."
    }
  }]
}
</script>

<?php include 'includes/footer.php'; ?>