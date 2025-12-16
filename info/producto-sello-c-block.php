<?php 
// AJUSTE DE RUTAS PARA CARPETA "INFO"
$page_title = "Sello C-BLOCK Inoxidable | Alta Seguridad ISO 17712 | Control One";
$meta_description = "El sello de cable más resistente. C-BLOCK con cable de acero inoxidable grado marino y cuerpo de policarbonato de alta resistencia. Certificado ISO 17712 'H'.";
$page_image = "assets/img/sellos/sello-c-block.jpg"; 

include '../includes/header.php'; 
?>

<main>
    <div class="bg-gray-100 py-4 border-b border-gray-200">
        <div class="container mx-auto px-4 text-sm text-gray-500">
            <a href="/" class="hover:text-primary">Inicio</a> <span class="mx-2">/</span>
            <a href="/productos" class="hover:text-primary">Catálogo</a> <span class="mx-2">/</span>
            <span class="text-primary font-bold">C-BLOCK Premium</span>
        </div>
    </div>

    <section class="py-12 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-12 items-center">
                
                <div class="lg:w-1/2 flex flex-col items-center">
                    <div class="relative bg-industrial rounded-xl overflow-hidden shadow-lg group w-full max-w-md">
                        <img src="/assets/img/sellos/sello-c-block.avif" 
                             alt="Sello de seguridad C-BLOCK" 
                             class="w-full h-80 md:h-96 object-contain p-6 transform transition-transform duration-500 group-hover:scale-105">
                        
                        <div class="absolute top-4 left-4 bg-gray-900 text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide shadow-sm">
                            Premium Inox
                        </div>
                        <div class="absolute top-4 right-4 bg-primary text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide shadow-sm">
                            ISO 17712 "H"
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/2">
                    <h1 class="text-3xl md:text-4xl font-bold text-primary mb-2">C-BLOCK</h1>
                    <p class="text-gray-500 text-lg mb-6">Cable de Acero Inoxidable | Grado Marino</p>
                    
                    <div class="prose text-gray-600 mb-8 text-sm leading-relaxed">
                        <p>
                            Diseñado para ambientes extremos. El <strong>C-BLOCK</strong> combina un núcleo de bloqueo de acero endurecido encapsulado en Policarbonato (PC) de alta resistencia, con un cable de acero inoxidable que no se oxida.
                        </p>
                        <ul class="list-disc pl-5 space-y-2 mt-4">
                            <li><strong>Cable Inoxidable:</strong> Ideal para transporte marítimo, químicos o zonas costeras con alta salinidad.</li>
                            <li><strong>Cuerpo Transparente/Sólido:</strong> Permite inspección visual del mecanismo de cierre para detectar manipulación interna.</li>
                            <li><strong>Máxima Seguridad:</strong> Certificación ISO 17712 "H" garantizada.</li>
                        </ul>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-200 mb-8">
                        <p class="text-sm text-gray-500 mb-2">Aplicaciones:</p>
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="bg-white border border-gray-200 text-gray-700 px-3 py-1 rounded-full text-xs font-semibold">Químicos y Peligrosos</span>
                            <span class="bg-white border border-gray-200 text-gray-700 px-3 py-1 rounded-full text-xs font-semibold">Minería</span>
                            <span class="bg-white border border-gray-200 text-gray-700 px-3 py-1 rounded-full text-xs font-semibold">Contenedores Marítimos</span>
                        </div>
                        
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="/contacto?producto=C-BLOCK+Premium" class="flex-1 bg-gray-900 hover:bg-gray-800 text-white text-center font-bold py-3 px-6 rounded-md shadow-md transition-colors">
                                Cotizar Premium
                            </a>
                            <a href="https://wa.me/525558642200?text=Me%20interesa%20el%20sello%20C-BLOCK" target="_blank" class="flex-1 border-2 border-green-500 text-green-600 hover:bg-green-50 text-center font-bold py-3 px-6 rounded-md transition-colors flex items-center justify-center">
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
                        <h3 class="font-bold text-gray-800 mb-4 border-b pb-2">Materiales</h3>
                        <ul class="text-sm text-gray-600 space-y-3">
                            <li class="flex justify-between"><span>Cuerpo:</span> <strong>Policarbonato (PC) + Inserto ABS</strong></li>
                            <li class="flex justify-between"><span>Cable:</span> <strong>Acero Inoxidable Grado 304/316</strong></li>
                            <li class="flex justify-between"><span>Protección:</span> <strong>Resistencia UV y Salinidad</strong></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-bold text-primary mb-4 border-b pb-2">Dimensiones y Resistencia</h3>
                        <ul class="text-sm text-gray-600 space-y-3">
                            <li class="flex justify-between"><span>Diámetro Cable:</span> <strong>3.5 mm</strong></li>
                            <li class="flex justify-between"><span>Longitud Útil:</span> <strong>30 cm (Configurable)</strong></li>
                            <li class="flex justify-between"><span>Clasificación:</span> <strong>ISO 17712:2013 "H"</strong></li>
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
  "name": "Sello de Seguridad C-BLOCK Inoxidable",
  "image": "https://controlone.com.mx/assets/img/sellos/sello-c-block.jpg",
  "description": "Sello de alta seguridad con cable de acero inoxidable y cuerpo de policarbonato.",
  "brand": { "@type": "Brand", "name": "Control One" },
  "sku": "C-BLOCK-INOX",
  "offers": {
    "@type": "AggregateOffer",
    "url": "https://controlone.com.mx/info/producto-sello-c-block",
    "priceCurrency": "MXN",
    "availability": "https://schema.org/InStock"
  }
}
</script>
<?php include '../includes/footer.php'; ?>