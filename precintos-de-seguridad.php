<?php 
// SEO TÉCNICO: Título enfocado en intención de compra para la keyword "precintos de seguridad"
$page_title = "Precintos de Seguridad en México: Fabricantes Directos 2026";
$meta_description = "Cotiza precintos de seguridad para tu empresa. Fabricantes directos en México de precintos plásticos, de cable y alta seguridad ISO 17712. Envíos nacionales.";
$preload_image_hero = "/assets/img/blog/bodega-control-one-sellos-seguridad.avif";
include 'includes/header.php'; 
?>

<main data-page="precintos-de-seguridad" class="bg-gray-50 flex flex-col min-h-screen">

    <!-- HERO SECTION -->
    <section class="relative bg-primary py-20 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="/assets/img/blog/bodega-control-one-sellos-seguridad.avif" alt="Precintos de Seguridad en México" class="w-full h-full object-cover opacity-20" fetchpriority="high">
            <div class="absolute inset-0 bg-gradient-to-b from-primary/90 via-primary/85 to-primary"></div>
        </div>
        <div class="absolute top-10 left-10 w-72 h-72 bg-accent/10 rounded-full blur-3xl pointer-events-none"></div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="text-sm text-gray-400 mb-6" aria-label="Breadcrumb">
                <a href="/" class="hover:text-white transition-colors">Inicio</a>
                <span class="mx-2">›</span>
                <span class="text-white font-semibold">Precintos de Seguridad</span>
            </nav>
            <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight max-w-4xl animate-fade-in-up">
                Precintos de Seguridad en México:<br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-accent to-yellow-300">Catálogo y Cotización</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-300 mb-8 max-w-3xl leading-relaxed">
                Protege tu carga, logística y almacén con el <strong class="text-white">precinto de seguridad</strong> adecuado. Cumplimiento normativo ISO 17712 y C-TPAT. Somos fabricantes directos.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="#cotizar" class="bg-accent hover:bg-orange-500 text-white px-8 py-3 rounded-lg font-bold text-lg transition-all shadow-lg hover:-translate-y-1">
                    Cotizar Precintos
                </a>
                <a href="#tipos" class="border-2 border-white/30 text-white hover:bg-white/10 px-8 py-3 rounded-lg font-bold text-lg transition-colors">
                    Ver Tipos
                </a>
            </div>
        </div>
    </section>

    <!-- ¿QUÉ ES UN PRECINTO DE SEGURIDAD? -->
    <section class="py-16 bg-white scroll-mt-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-4xl">
            <h2 class="text-3xl font-bold text-primary mb-6">¿Qué es un Precinto de Seguridad?</h2>
            <div class="prose text-gray-700 leading-relaxed text-base">
                <p class="mb-4">
                    Un <strong class="text-primary">precinto de seguridad</strong> es un dispositivo diseñado para evidenciar cualquier intento de manipulación, apertura o robo en contenedores, medidores, puertas de camiones y empaques. A diferencia de un candado común, un precinto no busca necesariamente detener a los intrusos, sino <em class="text-primary font-medium">dejar evidencia visual irreversible</em> si se rompe o altera.
                </p>
                <p class="mb-4">
                    Cada precinto de seguridad cuenta con un número de <strong class="text-primary">folio único e irrepetible</strong> (a menudo acompañado de código de barras visible o grabado láser de tu logotipo). Esto asegura la trazabilidad y garantiza que el precinto no ha sido sustituido durante el trayecto.
                </p>
            </div>
        </div>
    </section>

    <!-- TIPOS DE PRECINTOS -->
    <section id="tipos" class="py-16 bg-gray-50 scroll-mt-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-6xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-primary mb-4">Tipos de Precintos de Seguridad</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Conoce nuestras principales categorías para proteger tu cadena de suministro.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Precintos Metálicos / Botella -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition-shadow group">
                    <div class="h-48 bg-gray-100 flex items-center justify-center p-6 relative">
                        <span class="absolute top-3 left-3 bg-primary text-white text-xs font-bold px-2 py-1 rounded">ISO 17712</span>
                        <img src="/assets/img/sellos/sello-seguridad-star-one-indicativo.avif" alt="Precintos de clavo o botella" class="h-full object-contain group-hover:scale-105 transition-transform" loading="lazy">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-primary mb-2">Precintos de Botella (Clavo)</h3>
                        <p class="text-sm text-gray-600 mb-4">
                            Precintos de alta seguridad. Su núcleo de acero es obligatorio para contenedores de exportación y certificaciones C-TPAT.
                        </p>
                        <a href="/info/producto-sello-botella-star-one" class="text-accent font-bold text-sm hover:underline">Ver Star One Seal →</a>
                    </div>
                </div>

                <!-- Precintos de Cable -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition-shadow group">
                    <div class="h-48 bg-gray-100 flex items-center justify-center p-6 relative">
                        <span class="absolute top-3 left-3 bg-blue-800 text-white text-xs font-bold px-2 py-1 rounded">Versátiles</span>
                        <img src="/assets/img/sellos/sello-tipo-cable-c-one316.avif" alt="Precintos de cable de acero" class="h-full object-contain group-hover:scale-105 transition-transform" loading="lazy">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-primary mb-2">Precintos de Cable</h3>
                        <p class="text-sm text-gray-600 mb-4">
                            Flexibles y muy resistentes. Ideales para pipas, tolvas y furgones que requieren adaptación a orificios complicados.
                        </p>
                        <a href="/info/producto-sello-cable-acero" class="text-accent font-bold text-sm hover:underline">Ver C-ONE 316 →</a>
                    </div>
                </div>

                <!-- Precintos Plásticos -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition-shadow group">
                    <div class="h-48 bg-gray-100 flex items-center justify-center p-6 relative">
                        <span class="absolute top-3 left-3 bg-emerald-600 text-white text-xs font-bold px-2 py-1 rounded">Indicativos</span>
                        <img src="/assets/img/sellos/precinto-plastico-quantum-ajustable.avif" alt="Precintos plásticos tipo cintillo" class="h-full object-contain group-hover:scale-105 transition-transform" loading="lazy">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-primary mb-2">Precintos Plásticos</h3>
                        <p class="text-sm text-gray-600 mb-4">
                            Cintillos ajustables o de medida fija (cola de rata). La mejor opción indicativa para evitar robo hormiga en almacenes.
                        </p>
                        <a href="/info/producto-precinto-quantum" class="text-accent font-bold text-sm hover:underline">Ver Precintos Plásticos →</a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-10">
                <a href="/productos" class="inline-flex items-center gap-2 border-2 border-primary text-primary hover:bg-primary hover:text-white px-8 py-3 rounded-lg font-bold transition-colors">
                    Ver Todos los Productos
                    <svg class="w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ - PREGUNTAS FRECUENTES (SEO BOOST) -->
    <section class="py-16 bg-white scroll-mt-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-4xl">
            <h2 class="text-3xl font-bold text-primary mb-10 text-center">Preguntas Frecuentes sobre Precintos de Seguridad</h2>
            <div class="space-y-4">
                <details class="bg-gray-50 rounded-xl shadow-sm border border-gray-200 group" open>
                    <summary class="font-bold text-primary p-6 cursor-pointer hover:text-accent transition-colors list-none flex justify-between items-center">
                        ¿Cuál es la diferencia entre un sello y un precinto de seguridad?
                        <svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </summary>
                    <div class="px-6 pb-6 text-gray-600 text-sm">
                        En la práctica industrial en México, <strong class="text-primary">sello de seguridad y precinto de seguridad son sinónimos</strong>. El término "sello" es más común en transporte general, mientras que "precinto" suele usarse más en aduanas, normativa de comercio exterior y en ciertas industrias que requieren evidencia de inviolabilidad rígida.
                    </div>
                </details>
                <details class="bg-gray-50 rounded-xl shadow-sm border border-gray-200 group">
                    <summary class="font-bold text-primary p-6 cursor-pointer hover:text-accent transition-colors list-none flex justify-between items-center">
                        ¿Qué normativa aplica para los precintos de seguridad de exportación?
                        <svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </summary>
                    <div class="px-6 pb-6 text-gray-600 text-sm">
                        Para exportaciones, especialmente marítimas o hacia EE. UU., los precintos de seguridad deben cumplir con la <strong class="text-primary">Norma ISO 17712</strong> con clasificación "H" (Alta Seguridad). Son requeridos de manera obligatoria por programas aduaneros antiterrorismo como el C-TPAT.
                    </div>
                </details>
                <details class="bg-gray-50 rounded-xl shadow-sm border border-gray-200 group">
                    <summary class="font-bold text-primary p-6 cursor-pointer hover:text-accent transition-colors list-none flex justify-between items-center">
                        ¿Puedo comprar precintos de seguridad personalizados con mi logo?
                        <svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </summary>
                    <div class="px-6 pb-6 text-gray-600 text-sm">
                        Sí, todos nuestros precintos de seguridad permiten grabado láser. Se puede grabar el <strong>nombre de tu empresa, logotipo, código de barras corporativo y un número de folio consecutivo e irrepetible</strong> para blindar tu protocolo logístico.
                    </div>
                </details>
                <details class="bg-gray-50 rounded-xl shadow-sm border border-gray-200 group">
                    <summary class="font-bold text-primary p-6 cursor-pointer hover:text-accent transition-colors list-none flex justify-between items-center">
                        ¿Dónde comprar precintos de seguridad en México?
                        <svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </summary>
                    <div class="px-6 pb-6 text-gray-600 text-sm">
                        En Control One somos proveedores directos de <strong class="text-primary">fábrica de precintos de seguridad</strong>. Despachamos mercancía el mismo día a todo México, incluyendo ciudades principales como Monterrey, Guadalajara, Ciudad de México, Puebla, Querétaro y Tijuana.
                    </div>
                </details>
            </div>
        </div>
    </section>

    <!-- FORMULARIO DE COTIZACIÓN -->
    <section id="cotizar" class="py-16 bg-white scroll-mt-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-5xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-primary mb-4">Cotiza tus Precintos de Seguridad</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Venta de mayoreo y menudeo con envíos a todo México. Recibe asesoría de expertos y precio de fábrica directo.</p>
            </div>
            
            <div class="bg-white p-8 md:p-10 rounded-2xl shadow-xl border border-gray-100 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-accent/5 rounded-bl-full pointer-events-none"></div>
                
                <form action="/enviar.php" method="POST" id="form-precintos" class="relative z-10 space-y-6">
                    <!-- Honeypot oculto -->
                    <div style="opacity:0;position:absolute;top:0;left:0;height:0;width:0;z-index:-1;">
                        <label for="website_check_precintos">Si eres humano no llenes este campo:</label>
                        <input type="text" id="website_check_precintos" name="website_check" autocomplete="off" tabindex="-1">
                    </div>
                    
                    <input type="hidden" name="utm_source" id="utm_source_precintos" value="Landing_Precintos">
                    <input type="hidden" name="asunto" value="Cotización desde Landing Precintos">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="nombre_precintos" class="block text-sm font-bold text-gray-700 mb-1">Nombre Completo *</label>
                            <input type="text" id="nombre_precintos" name="nombre" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-accent outline-none bg-gray-50 transition-all placeholder-gray-400" placeholder="Ingresa tu nombre">
                        </div>
                        <div>
                            <label for="email_precintos" class="block text-sm font-bold text-gray-700 mb-1">Correo Corporativo *</label>
                            <input type="email" id="email_precintos" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-accent outline-none bg-gray-50 transition-all placeholder-gray-400" placeholder="tu@empresa.com">
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="telefono_precintos" class="block text-sm font-bold text-gray-700 mb-1">Teléfono o WhatsApp *</label>
                            <input type="tel" id="telefono_precintos" name="telefono" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-accent outline-none bg-gray-50 transition-all placeholder-gray-400" placeholder="10 dígitos">
                        </div>
                        <div>
                            <label for="empresa_precintos" class="block text-sm font-bold text-gray-700 mb-1">Empresa</label>
                            <input type="text" id="empresa_precintos" name="empresa" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-accent outline-none bg-gray-50 transition-all placeholder-gray-400" placeholder="Nombre de tu negocio">
                        </div>
                    </div>

                    <div>
                        <label for="mensaje_precintos" class="block text-sm font-bold text-gray-700 mb-1">¿Qué tipo de precinto necesitas y en qué cantidad?</label>
                        <textarea id="mensaje_precintos" name="mensaje" rows="4" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-accent outline-none bg-gray-50 transition-all placeholder-gray-400" placeholder="Ej: Me interesa cotizar 1,000 precintos plásticos y 500 de botella con personalización de mi logo..."></textarea>
                    </div>

                    <!-- Turnstile -->
                    <div class="cf-turnstile" data-sitekey="0x4AAAAAACEz927vdcZlGnzw" data-theme="light"></div>

                    <div class="pt-2 text-center">
                        <button type="submit" id="btn_submit_precintos" class="w-full md:w-auto bg-accent hover:bg-orange-500 text-white font-bold py-4 px-10 rounded-lg shadow-xl shadow-accent/30 transition-all hover:-translate-y-1 text-lg">
                            Enviar Solicitud de Cotización
                        </button>
                        <p class="text-xs text-gray-400 mt-4">Al enviar, aceptas nuestro <a href="/aviso-privacidad" class="underline hover:text-accent">Aviso de Privacidad</a>.</p>
                    </div>
                </form>
            </div>
            
            <div class="mt-10 flex flex-col md:flex-row justify-center items-center gap-6 text-sm text-gray-600">
                 <div class="flex items-center gap-2">
                     <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                     <span class="font-bold text-primary">Atención rápida por WhatsApp:</span>
                     <a href="https://wa.me/522218027570?text=Hola%2C%20quiero%20cotizar%20precintos%20de%20seguridad" target="_blank" class="text-emerald-600 font-bold hover:underline">+52 221 802 7570</a>
                 </div>
                 <span class="hidden md:inline-block text-gray-300">|</span>
                 <div class="flex items-center gap-2">
                     <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                     <span class="font-bold text-primary">Correos:</span>
                     <a href="mailto:ventas@controlone.com.mx" class="text-blue-600 font-bold hover:underline">ventas@controlone.com.mx</a>
                 </div>
            </div>
        </div>
    </section>

</main>

<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('form-precintos');
    if(form) {
        form.addEventListener('submit', function() {
            const btn = document.getElementById('btn_submit_precintos');
            btn.disabled = true;
            btn.innerHTML = 'Enviando...';
            btn.classList.add('opacity-70', 'cursor-not-allowed');
        });
    }
});
</script>

<!-- Datos estructurados LocalBusiness / Product -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Precintos de Seguridad Control One",
  "image": "https://controlone.com.mx/assets/img/blog/bodega-control-one-sellos-seguridad.avif",
  "description": "Fabricantes de precintos de seguridad en México. Opciones de alta seguridad ISO 17712, cable y precintos plásticos indicativos.",
  "brand": {
    "@type": "Brand",
    "name": "Control One"
  },
  "offers": {
    "@type": "AggregateOffer",
    "priceCurrency": "MXN",
    "availability": "https://schema.org/InStock",
    "seller": {
      "@type": "Organization",
      "name": "Control One"
    }
  }
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "¿Cuál es la diferencia entre un sello y un precinto de seguridad?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "En la práctica industrial en México, sello de seguridad y precinto de seguridad son sinónimos. El término 'sello' es más común en transporte general, mientras que 'precinto' suele usarse más en aduanas y normativa de comercio exterior."
      }
    },
    {
      "@type": "Question",
      "name": "¿Qué normativa aplica para los precintos de seguridad de exportación?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Para exportaciones, como hacia EE. UU., los precintos de seguridad deben cumplir con la Norma ISO 17712 clasificación 'H' (Alta Seguridad), obligatorios para el programa C-TPAT."
      }
    },
    {
      "@type": "Question",
      "name": "¿Puedo comprar precintos de seguridad personalizados con mi logo?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Sí, todos los precintos de seguridad permiten grabado láser. Se graba nombre de empresa, logotipo, código de barras y folio consecutivo irrepetible."
      }
    },
    {
      "@type": "Question",
      "name": "¿Dónde comprar precintos de seguridad en México?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Control One es fabricante directo de precintos de seguridad, ofreciendo despachos el mismo día a todo México (Monterrey, Guadalajara, CDMX, Puebla, Querétaro, Tijuana)."
      }
    }
  ]
}
</script>

<?php include 'includes/footer.php'; ?>
