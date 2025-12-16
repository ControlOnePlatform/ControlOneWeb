<?php 
// AJUSTE DE RUTAS PARA CARPETA "INFO"
$page_title = "Sello de Cable de Acero C-ONE 180 (3.2mm) | Alta Seguridad | Control One";
$meta_description = "Ficha técnica del sello de cable C-ONE 180. Cable galvanizado de 3.2mm, cuerpo de aluminio anodizado. Resistencia superior a 1000 kgF. Ideal para autotanques.";
$page_image = "assets/img/sellos/sello-c-one-180.jpg"; 

// Salimos de la carpeta 'info' para buscar el header
include '../includes/header.php'; 
?>

<main>
    <div class="bg-gray-100 py-4 border-b border-gray-200">
        <div class="container mx-auto px-4 text-sm text-gray-500">
            <a href="/" class="hover:text-primary">Inicio</a> <span class="mx-2">/</span>
            <a href="/productos" class="hover:text-primary">Catálogo</a> <span class="mx-2">/</span>
            <span class="text-primary font-bold">C-ONE 180</span>
        </div>
    </div>

    <section class="py-12 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-12 items-center">
                
                <div class="lg:w-1/2 flex flex-col items-center">
                    <div class="relative bg-industrial rounded-xl overflow-hidden shadow-lg group w-full max-w-md">
                        <img src="/assets/img/sellos/sello-c-one-180.avif" 
                             alt="Sello de cable C-ONE 180" 
                             class="w-full h-80 md:h-96 object-contain p-6 transform transition-transform duration-500 group-hover:scale-105">
                        
                        <div class="absolute top-4 left-4 bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide shadow-sm">
                            Versátil
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-center space-x-4">
                        <span class="text-sm font-bold text-gray-500">Colores Anodizados:</span>
                        <div class="w-6 h-6 rounded-full bg-blue-700 border border-gray-200 shadow-sm" title="Azul"></div>
                        <div class="w-6 h-6 rounded-full bg-red-700 border border-gray-200 shadow-sm" title="Rojo"></div>
                        <div class="w-6 h-6 rounded-full bg-green-700 border border-gray-200 shadow-sm" title="Verde"></div>
                        <div class="w-6 h-6 rounded-full bg-black border border-gray-200 shadow-sm" title="Negro"></div>
                    </div>
                </div>

                <div class="lg:w-1/2">
                    <h1 class="text-3xl md:text-4xl font-bold text-primary mb-2">C-ONE 180</h1>
                    <p class="text-gray-500 text-lg mb-6">Cable de Acero Galvanizado | Diámetro 1/8" (3.2mm)</p>
                    
                    <div class="prose text-gray-600 mb-8 text-sm leading-relaxed">
                        <p>
                            El equilibrio perfecto entre seguridad y operatividad. El <strong>C-ONE 180</strong> ofrece la resistencia de un sello de alta seguridad pero con un cable lo suficientemente flexible para operar en válvulas y cerrojos estándar.
                        </p>
                        <ul class="list-disc pl-5 space-y-2 mt-4">
                            <li><strong>Cuerpo de Aluminio:</strong> Aleación resistente a la corrosión y golpes.</li>
                            <li><strong>Cable NPC:</strong> Se destrenza al corte para evitar la reconstrucción del sello.</li>
                            <li><strong>Grabado Láser:</strong> Folio y código de barras imborrables para trazabilidad total.</li>
                        </ul>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-200 mb-8">
                        <p class="text-sm text-gray-500 mb-2">Aplicaciones Recomendadas:</p>
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="bg-white border border-gray-200 text-gray-700 px-3 py-1 rounded-full text-xs font-semibold">Autotanques (Pipas)</span>
                            <span class="bg-white border border-gray-200 text-gray-700 px-3 py-1 rounded-full text-xs font-semibold">Ferrotolvas</span>
                            <span class="bg-white border border-gray-200 text-gray-700 px-3 py-1 rounded-full text-xs font-semibold">Cajas de Tráiler</span>
                        </div>
                        
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="/contacto?producto=C-ONE+180" class="flex-1 bg-accent hover:bg-orange-500 text-white text-center font-bold py-3 px-6 rounded-md shadow-md transition-colors">
                                Solicitar Cotización
                            </a>
                            <a href="https://wa.me/525558642200?text=Hola,%20me%20interesa%20el%20sello%20C-ONE%20180" target="_blank" class="flex-1 border-2 border-green-500 text-green-600 hover:bg-green-50 text-center font-bold py-3 px-6 rounded-md transition-colors flex items-center justify-center">
                                WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-50 border-t border-gray-200">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-5xl">
            <h2 class="text-2xl font-bold text-primary mb-8 text-center">Especificaciones Técnicas</h2>
            <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-200 p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="font-bold text-accent mb-4 border-b pb-2">Materiales</h3>
                        <ul class="text-sm text-gray-600 space-y-3">
                            <li class="flex justify-between"><span>Cuerpo:</span> <strong>Aleación de Aluminio</strong></li>
                            <li class="flex justify-between"><span>Cable:</span> <strong>Acero Galvanizado Trenzado</strong></li>
                            <li class="flex justify-between"><span>Mecanismo:</span> <strong>Acero de alto carbón</strong></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-bold text-primary mb-4 border-b pb-2">Dimensiones y Resistencia</h3>
                        <ul class="text-sm text-gray-600 space-y-3">
                            <li class="flex justify-between"><span>Diámetro Cable:</span> <strong>3.2 mm (1/8")</strong></li>
                            <li class="flex justify-between"><span>Longitud Útil:</span> <strong>30 cm (Estándar)</strong></li>
                            <li class="flex justify-between"><span>Resistencia Tensión:</span> <strong>> 1,000 kgF</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "Sello de Seguridad C-ONE 180",
  "image": "https://controlone.com.mx/assets/img/sellos/sello-c-one-180.jpg",
  "description": "Sello de cable de acero galvanizado de 3.2mm. Resistencia de alta seguridad para transporte terrestre.",
  "brand": { "@type": "Brand", "name": "Control One" },
  "sku": "C-ONE-180",
  "offers": {
    "@type": "AggregateOffer",
    "url": "https://controlone.com.mx/info/producto-sello-c-one-180",
    "priceCurrency": "MXN",
    "availability": "https://schema.org/InStock"
  }
}
</script>
<?php include '../includes/footer.php'; ?>