<?php 
// SEO TÉCNICO: Título enfocado en intención de compra y variedad
$page_title = "Catálogo de Sellos de Seguridad, Marchamos y Cintillos | Control One";
$meta_description = "Catálogo 2025 de sellos de seguridad y marchamos. Venta de sellos de botella ISO 17712, precintos de cable de acero y cintillos de plástico. Envíos a todo México.";
include 'includes/header.php'; 
?>

<main class="scroll-smooth bg-gray-50">
    <!-- HERO COMPACTO -->
    <section class="relative bg-primary h-[350px] flex items-center justify-center text-center shadow-lg">
        <div class="absolute inset-0 z-0">
            <img src="assets/img/bodega-control-one-sellos-seguridad.avif" 
                 alt="Almacén de precintos y sellos de seguridad en México" 
                 class="w-full h-full object-cover opacity-20" 
                 fetchpriority="high"
                 width="1920" 
                 height="400">
            <div class="absolute inset-0 bg-gradient-to-br from-primary via-primary/95 to-gray-900/90"></div>
        </div>
        <div class="relative z-10 container mx-auto px-4 animate-fade-in-up">
            <h1 class="text-3xl md:text-5xl font-extrabold text-white mb-4 tracking-tight">Catálogo de Seguridad Industrial</h1>
            
            <p class="text-lg text-gray-300 max-w-2xl mx-auto mb-8 font-light leading-relaxed">
                Protección certificada para tu cadena de suministro. <strong class="text-white">ISO 17712 "H"</strong> y cumplimiento C-TPAT.
            </p>
            
            <a href="assets/pdf/Catalogo.pdf" target="_blank" class="inline-flex items-center bg-accent hover:bg-orange-500 text-white px-8 py-3 rounded-full font-bold text-base transition-all transform hover:-translate-y-1 shadow-lg hover:shadow-orange-500/40 ring-1 ring-white/20 backdrop-blur-sm group">
                <svg class="w-5 h-5 mr-3 group-hover:animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                Descargar Catálogo PDF
            </a>
        </div>
    </section>

    <!-- STICKY NAVIGATION (Functionality Fixed) -->
    <nav class="sticky top-0 z-50 bg-white/95 backdrop-blur shadow-sm border-b border-gray-200">
        <div class="container mx-auto px-4">
            <div id="product-nav" class="flex overflow-x-auto gap-4 py-3 no-scrollbar justify-start md:justify-center text-sm">
                <!-- Data-target attributes for JS fallback -->
                <a href="#alta-seguridad" data-target="alta-seguridad" class="whitespace-nowrap font-bold text-gray-600 hover:text-accent transition-colors scroll-link px-3 py-1 rounded hover:bg-gray-50">⭐️ Alta Seguridad</a>
                <a href="#cables-acero" data-target="cables-acero" class="whitespace-nowrap font-bold text-gray-600 hover:text-accent transition-colors scroll-link px-3 py-1 rounded hover:bg-gray-50">⛓️ Cables</a>
                <a href="#plasticos" data-target="plasticos" class="whitespace-nowrap font-bold text-gray-600 hover:text-accent transition-colors scroll-link px-3 py-1 rounded hover:bg-gray-50">🏷️ Plásticos</a>
                <a href="#etiquetas" data-target="etiquetas" class="whitespace-nowrap font-bold text-gray-600 hover:text-accent transition-colors scroll-link px-3 py-1 rounded hover:bg-gray-50">🚫 Etiquetas</a>
                <a href="#bancario" data-target="bancario" class="whitespace-nowrap font-bold text-gray-600 hover:text-accent transition-colors scroll-link px-3 py-1 rounded hover:bg-gray-50">🏦 Bancario</a>
            </div>
        </div>
    </nav>

    <!-- ALTA SEGURIDAD (Diseño Tarjeta Horizontal LLAMATIVO) -->
    <section id="alta-seguridad" class="py-16 scroll-mt-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="inline-block bg-accent/10 text-accent font-bold px-4 py-1 rounded-full text-xs uppercase tracking-wider mb-2">Máxima Protección</span>
                <h2 class="text-3xl font-bold text-primary">Sellos Certificados (ISO 17712)</h2>
                <p class="text-gray-500 mt-2">Cumplimiento C-TPAT obligatorio para exportación.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                
                <!-- STAR ONE -->
                <div class="bg-white rounded-xl shadow-md border-2 border-transparent hover:border-accent hover:shadow-2xl transition-all duration-300 group flex flex-col md:flex-row overflow-hidden">
                    <div class="md:w-2/5 h-64 md:h-auto bg-gray-50 flex items-center justify-center p-4 relative">
                        <div class="absolute top-0 left-0 bg-accent text-white text-xs font-bold px-3 py-1 rounded-br-lg z-10">TOP VENTAS</div>
                        <img src="assets/img/sellos/sello-seguridad-star-one-indicativo.avif" alt="Star One" class="h-4/5 object-contain mix-blend-multiply group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6 md:w-3/5 flex flex-col">
                        <h3 class="text-2xl font-bold text-primary mb-1">Star One Seal</h3>
                        <p class="text-xs font-bold text-green-600 bg-green-50 inline-block px-2 py-1 rounded w-max mb-3">✅ Certificado ISO 17712 "H"</p>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6 flex-grow">
                            El sello de botella más confiable del mercado. Núcleo de acero, cubierta ABS y mecanismo anti-giro patentado.
                        </p>
                        <div class="grid grid-cols-2 gap-3 mt-auto">
                            <a href="/info/producto-sello-botella-star-one" class="text-center text-sm font-bold text-gray-500 border border-gray-200 rounded-lg py-3 hover:bg-gray-50 hover:text-primary transition-colors">Ver Ficha</a>
                            <a href="contacto?producto=star-one-seal" class="text-center text-sm font-bold text-white bg-accent rounded-lg py-3 hover:bg-orange-600 transition-colors shadow-md">Cotizar Ahora</a>
                        </div>
                    </div>
                </div>

                <!-- C-ONE 316 -->
                <div class="bg-white rounded-xl shadow-md border-2 border-transparent hover:border-accent hover:shadow-2xl transition-all duration-300 group flex flex-col md:flex-row overflow-hidden">
                    <div class="md:w-2/5 h-64 md:h-auto bg-gray-50 flex items-center justify-center p-4 relative">
                        <div class="absolute top-0 left-0 bg-blue-900 text-white text-xs font-bold px-3 py-1 rounded-br-lg z-10">USO RUDO</div>
                        <img src="assets/img/sellos/sello-tipo-cable-c-one316.avif" alt="C-ONE 316" class="h-4/5 object-contain mix-blend-multiply group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6 md:w-3/5 flex flex-col">
                        <h3 class="text-2xl font-bold text-primary mb-1">C-ONE 316</h3>
                        <p class="text-xs font-bold text-green-600 bg-green-50 inline-block px-2 py-1 rounded w-max mb-3">✅ Certificado ISO 17712 "H"</p>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6 flex-grow">
                            Cable de acero trenzado de 3/16" (4.7mm). Fuerza de ruptura superior a 1 tonelada. Ideal para tolvas y furgones.
                        </p>
                        <div class="grid grid-cols-2 gap-3 mt-auto">
                            <a href="/info/producto-sello-cable-acero" class="text-center text-sm font-bold text-gray-500 border border-gray-200 rounded-lg py-3 hover:bg-gray-50 hover:text-primary transition-colors">Ver Ficha</a>
                            <a href="contacto?producto=c-one-316" class="text-center text-sm font-bold text-white bg-accent rounded-lg py-3 hover:bg-orange-600 transition-colors shadow-md">Cotizar Ahora</a>
                        </div>
                    </div>
                </div>

                 <!-- C-ONE 180 -->
                 <div class="bg-white rounded-xl shadow-md border-2 border-transparent hover:border-accent hover:shadow-2xl transition-all duration-300 group flex flex-col md:flex-row overflow-hidden">
                    <div class="md:w-2/5 h-64 md:h-auto bg-gray-50 flex items-center justify-center p-4">
                        <img src="assets/img/sellos/sello-c-one-180.avif" alt="C-ONE 180" class="h-4/5 object-contain mix-blend-multiply group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6 md:w-3/5 flex flex-col">
                        <h3 class="text-xl font-bold text-primary mb-1">C-ONE 180 (3.2mm)</h3>
                        <p class="text-xs font-bold text-gray-500 mb-3">Cable Galvanizado | Resistencia Media</p>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6 flex-grow">
                            Equilibrio perfecto. Cable de 1/8" que se adapta a la mayoría de las válvulas y cerrojos estándar.
                        </p>
                        <div class="grid grid-cols-2 gap-3 mt-auto">
                            <a href="/info/producto-sello-c-one-180" class="text-center text-sm font-bold text-gray-500 border border-gray-200 rounded-lg py-3 hover:bg-gray-50 hover:text-primary transition-colors">Ver Detalles</a>
                            <a href="contacto?producto=C-ONE-180" class="text-center text-sm font-bold text-white bg-primary rounded-lg py-3 hover:bg-accent transition-colors shadow-md">Cotizar</a>
                        </div>
                    </div>
                </div>

                <!-- C-BLOCK -->
                 <div class="bg-white rounded-xl shadow-md border-2 border-transparent hover:border-accent hover:shadow-2xl transition-all duration-300 group flex flex-col md:flex-row overflow-hidden">
                    <div class="md:w-2/5 h-64 md:h-auto bg-gray-50 flex items-center justify-center p-4 relative">
                        <div class="absolute top-0 left-0 bg-gray-800 text-white text-xs font-bold px-3 py-1 rounded-br-lg z-10">INOXIDABLE</div>
                        <img src="assets/img/sellos/sello-c-block.avif" alt="C-BLOCK" class="h-4/5 object-contain mix-blend-multiply group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6 md:w-3/5 flex flex-col">
                        <h3 class="text-xl font-bold text-primary mb-1">C-BLOCK (Inox)</h3>
                        <p class="text-xs font-bold text-gray-500 mb-3">Cable Grado Marino</p>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6 flex-grow">
                            Cuerpo de policarbonato transparente y cable inoxidable 316. Inmune a la corrosión y ambientes salinos.
                        </p>
                        <div class="grid grid-cols-2 gap-3 mt-auto">
                            <a href="/info/producto-sello-c-block" class="text-center text-sm font-bold text-gray-500 border border-gray-200 rounded-lg py-3 hover:bg-gray-50 hover:text-primary transition-colors">Ver Detalles</a>
                            <a href="contacto?producto=C-BLOCK" class="text-center text-sm font-bold text-white bg-primary rounded-lg py-3 hover:bg-accent transition-colors shadow-md">Cotizar</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CABLES (GRID 3) -->
    <section id="cables-acero" class="py-16 bg-white border-t border-gray-100 scroll-mt-20">
        <div class="container mx-auto px-4">
             <h2 class="text-2xl font-bold text-primary mb-8 flex items-center gap-3">
                 <span class="bg-primary h-8 w-1 rounded"></span>
                 Logística Terrestre (Cables)
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- X6 -->
                <div class="bg-white rounded-xl border border-gray-200 p-5 hover:border-accent hover:shadow-xl transition-all duration-300 group flex flex-col">
                    <div class="h-48 flex justify-center items-center bg-gray-50 rounded-lg mb-4 p-4">
                        <img src="assets/img/sellos/sello-tipo-cable-c-onex6.avif" class="h-full object-contain mix-blend-multiply group-hover:scale-110 transition-transform" alt="X6">
                    </div>
                    <div class="flex-grow text-center">
                        <h4 class="font-bold text-xl text-primary">C-ONE X6</h4>
                        <p class="text-sm text-gray-500 mb-4">Cable fino 1.8mm | Válvulas pequeñas</p>
                    </div>
                    <div class="grid grid-cols-2 gap-2 mt-4">
                         <a href="/info/producto-sello-c-one-x6" class="text-center py-2 text-sm font-bold text-gray-500 hover:text-primary border border-gray-200 rounded hover:bg-gray-50">Ver Ficha</a>
                         <a href="contacto?producto=x6" class="text-center py-2 text-sm font-bold text-white bg-accent rounded hover:bg-orange-600">Cotizar</a>
                    </div>
                </div>

                <!-- 116 -->
                <div class="bg-white rounded-xl border border-gray-200 p-5 hover:border-accent hover:shadow-xl transition-all duration-300 group flex flex-col">
                    <div class="h-48 flex justify-center items-center bg-gray-50 rounded-lg mb-4 p-4">
                        <img src="assets/img/sellos/sello-tipo-cable-c-one116.avif" class="h-full object-contain mix-blend-multiply group-hover:scale-110 transition-transform" alt="116">
                    </div>
                    <div class="flex-grow text-center">
                        <h4 class="font-bold text-xl text-primary">C-ONE 116</h4>
                        <p class="text-sm text-gray-500 mb-4">Cuerpo Aluminio | Cable 1/16"</p>
                    </div>
                    <div class="grid grid-cols-2 gap-2 mt-4">
                         <a href="/info/producto-sello-c-one-116" class="text-center py-2 text-sm font-bold text-gray-500 hover:text-primary border border-gray-200 rounded hover:bg-gray-50">Ver Ficha</a>
                         <a href="contacto?producto=116" class="text-center py-2 text-sm font-bold text-white bg-accent rounded hover:bg-orange-600">Cotizar</a>
                    </div>
                </div>

                 <!-- Rotaseal -->
                 <div class="bg-white rounded-xl border border-gray-200 p-5 hover:border-accent hover:shadow-xl transition-all duration-300 group flex flex-col">
                    <div class="h-48 flex justify-center items-center bg-gray-50 rounded-lg mb-4 p-4 relative">
                        <div class="absolute top-2 right-2 bg-yellow-400 text-white text-[10px] uppercase font-bold px-2 py-1 rounded">Rotor</div>
                        <img src="assets/img/sellos/sello-rotaseal.avif" class="h-full object-contain mix-blend-multiply group-hover:scale-110 transition-transform" alt="Rotaseal">
                    </div>
                    <div class="flex-grow text-center">
                        <h4 class="font-bold text-xl text-primary">Rotaseal</h4>
                        <p class="text-sm text-gray-500 mb-4">Para Medidores (Luz/Agua)</p>
                    </div>
                    <div class="grid grid-cols-2 gap-2 mt-4">
                         <a href="/info/producto-sello-rotaseal" class="text-center py-2 text-sm font-bold text-gray-500 hover:text-primary border border-gray-200 rounded hover:bg-gray-50">Ver Ficha</a>
                         <a href="contacto?producto=Rotaseal" class="text-center py-2 text-sm font-bold text-white bg-accent rounded hover:bg-orange-600">Cotizar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PLÁSTICOS (GRID 4) -->
    <section id="plasticos" class="py-16 bg-gray-50 scroll-mt-20">
        <div class="container mx-auto px-4">
             <div class="text-center mb-10">
                <h2 class="text-2xl font-bold text-primary mb-2">Cintillos Plásticos Indicativos</h2>
                <p class="text-gray-500">Soluciones económicas y versátiles.</p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <!-- Item Plástico -->
                <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-200 hover:border-accent hover:shadow-lg transition-all flex flex-col items-center text-center group">
                    <img src="assets/img/sellos/precinto-plastico-quantum-ajustable.avif" class="h-32 mb-4 object-contain group-hover:-translate-y-1 transition-transform" alt="Quantum">
                    <h5 class="font-bold text-gray-800 mb-1">Quantum</h5>
                    <p class="text-xs text-gray-400 mb-4">Inserto Metálico</p>
                    <div class="w-full mt-auto grid grid-cols-1 gap-2">
                        <a href="/info/producto-precinto-quantum" class="text-xs font-bold text-accent border border-accent rounded py-1 hover:bg-accent hover:text-white transition-colors">Detalles</a>
                        <a href="contacto?producto=quantum" class="text-xs font-bold text-white bg-accent rounded py-1 hover:bg-orange-600 transition-colors">Cotizar</a>
                    </div>
                </div>

                <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-200 hover:border-accent hover:shadow-lg transition-all flex flex-col items-center text-center group">
                    <img src="assets/img/sellos/sello-plastico-quamtum-r-12.avif" class="h-32 mb-4 object-contain group-hover:-translate-y-1 transition-transform" alt="R12">
                    <h5 class="font-bold text-gray-800 mb-1">Quantum R12</h5>
                    <p class="text-xs text-gray-400 mb-4">Cola de Rata</p>
                    <div class="w-full mt-auto grid grid-cols-1 gap-2">
                        <a href="/info/producto-quantum-r12" class="text-xs font-bold text-accent border border-accent rounded py-1 hover:bg-accent hover:text-white transition-colors">Detalles</a>
                         <a href="contacto?producto=quantum-r12" class="text-xs font-bold text-white bg-accent rounded py-1 hover:bg-orange-600 transition-colors">Cotizar</a>
                    </div>
                </div>

                <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-200 hover:border-accent hover:shadow-lg transition-all flex flex-col items-center text-center group">
                    <img src="assets/img/sellos/sello-alli-one-anillo.avif" class="h-32 mb-4 object-contain group-hover:-translate-y-1 transition-transform" alt="Alli">
                    <h5 class="font-bold text-gray-800 mb-1">Alli-One</h5>
                    <p class="text-xs text-gray-400 mb-4">Anillo Fijo</p>
                    <div class="w-full mt-auto grid grid-cols-1 gap-2">
                        <a href="/info/producto-alli-one" class="text-xs font-bold text-accent border border-accent rounded py-1 hover:bg-accent hover:text-white transition-colors">Detalles</a>
                         <a href="contacto?producto=alli-one" class="text-xs font-bold text-white bg-accent rounded py-1 hover:bg-orange-600 transition-colors">Cotizar</a>
                    </div>
                </div>

                <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-200 hover:border-accent hover:shadow-lg transition-all flex flex-col items-center text-center group">
                    <img src="assets/img/sellos/sello-jumbo-seal-paleta-grande.avif" class="h-32 mb-4 object-contain group-hover:-translate-y-1 transition-transform" alt="Jumbo">
                    <h5 class="font-bold text-gray-800 mb-1">Jumbo Seal</h5>
                    <p class="text-xs text-gray-400 mb-4">Paleta Grande</p>
                    <div class="w-full mt-auto grid grid-cols-1 gap-2">
                         <a href="/info/producto-jumbo-seal" class="text-xs font-bold text-accent border border-accent rounded py-1 hover:bg-accent hover:text-white transition-colors">Detalles</a>
                         <a href="contacto?producto=jumbo-seal" class="text-xs font-bold text-white bg-accent rounded py-1 hover:bg-orange-600 transition-colors">Cotizar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ETIQUETAS & BANCARIO (FEATURED) -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-px bg-gray-200 border-t border-gray-200">
        <section id="etiquetas" class="bg-white py-16 px-8 hover:bg-red-50 transition-colors group scroll-mt-20">
            <div class="flex items-center gap-6 max-w-lg mx-auto">
                 <img src="assets/img/sellos/secure-label.avif" alt="Etiqueta VOID" class="w-32 h-32 object-contain group-hover:scale-105 transition-transform">
                 <div>
                     <h3 class="text-2xl font-bold text-gray-900 group-hover:text-red-600 transition-colors">Etiquetas VOID</h3>
                     <p class="text-sm text-gray-500 mb-4">Evidencia de apertura instantánea. Mensaje oculto al despegar.</p>
                     <div class="flex gap-3">
                         <a href="/info/producto-cinta-seguridad-void" class="text-sm font-bold text-gray-500 hover:text-red-600 underline">Ficha Técnica</a>
                         <a href="contacto?producto=etiquetas-void" class="text-sm font-bold bg-red-600 text-white px-5 py-2 rounded-lg hover:bg-red-700 transition-colors shadow">Cotizar</a>
                     </div>
                 </div>
            </div>
        </section>

        <section id="bancario" class="bg-white py-16 px-8 hover:bg-blue-50 transition-colors group scroll-mt-20">
             <div class="flex items-center gap-6 max-w-lg mx-auto">
                 <img src="assets/img/sellos/sello-de-seguridad-para-bancos-c-cash.avif" alt="C-CASH" class="w-32 h-32 object-contain group-hover:scale-105 transition-transform">
                 <div>
                     <h3 class="text-2xl font-bold text-gray-900 group-hover:text-blue-900 transition-colors">C-CASH Bancario</h3>
                     <p class="text-sm text-gray-500 mb-4">Spikes para valijas de dinero. Seguridad máxima en traslado de valores.</p>
                     <div class="flex gap-3">
                         <a href="/info/producto-sello-c-cash" class="text-sm font-bold text-gray-500 hover:text-blue-900 underline">Ficha Técnica</a>
                         <a href="contacto?producto=c-cash" class="text-sm font-bold bg-blue-900 text-white px-5 py-2 rounded-lg hover:bg-blue-800 transition-colors shadow">Cotizar</a>
                     </div>
                 </div>
            </div>
        </section>
    </div>

</main>

<script>
    // Smooth scrolling fix for sticky nav anchors
    document.querySelectorAll('.scroll-link').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('data-target');
            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80, // Offset for sticky nav
                    behavior: 'smooth'
                });
                // Update URL hash without jumping
                history.pushState(null, null, '#' + targetId);
            }
        });
    });
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "name": "Catálogo Control One",
  "itemListElement": [
    { "@type": "ListItem", "position": 1, "name": "Star One Seal", "url": "https://controlone.com.mx/info/producto-sello-botella-star-one" },
    { "@type": "ListItem", "position": 2, "name": "C-ONE 316", "url": "https://controlone.com.mx/info/producto-sello-cable-acero" }
  ]
}
</script>

<?php include 'includes/footer.php'; ?>