<?php 
// AJUSTE DE RUTAS PARA CARPETA "INFO"
$page_title = "GPS para Vehículos y Rastreo de Flotillas en Tiempo Real";
$meta_description = "Sistema de rastreo GPS y monitoreo satelital para vehículos, tráilers y flotillas. Localización en tiempo real, gestión de flotas y app móvil. Cobertura en todo México.";
$page_image = "assets/img/sellos/gps-tracker-control-one.avif"; 

// IMPORTANTE: Usamos "../" para salir de la carpeta 'info' y buscar el header
include '../includes/header.php'; 
?>

<main>
    <!-- BREADCRUMB -->
    <div class="bg-gray-100 py-4 border-b border-gray-200">
        <div class="container mx-auto px-4 text-sm text-gray-500">
            <a href="/" class="hover:text-primary">Inicio</a> <span class="mx-2">/</span>
            <a href="/productos" class="hover:text-primary">Catálogo</a> <span class="mx-2">/</span>
            <span class="text-primary font-bold">GPS y Monitoreo Satelital</span>
        </div>
    </div>

    <!-- ========== HERO SECTION ========== -->
    <section class="relative py-16 md:py-24 bg-gradient-to-br from-gray-900 via-gray-800 to-emerald-900 overflow-hidden">
        <!-- Efecto de fondo -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 left-10 w-72 h-72 bg-emerald-500 rounded-full filter blur-3xl"></div>
            <div class="absolute bottom-10 right-10 w-96 h-96 bg-blue-500 rounded-full filter blur-3xl"></div>
        </div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row gap-12 items-center">
                
                <!-- Texto Hero -->
                <div class="lg:w-1/2 text-center lg:text-left">
                    <div class="inline-flex items-center bg-emerald-500/20 border border-emerald-500/30 rounded-full px-4 py-1 mb-6">
                        <span class="w-2 h-2 bg-emerald-400 rounded-full mr-2 animate-pulse"></span>
                        <span class="text-emerald-300 text-sm font-semibold">Monitoreo en Tiempo Real</span>
                    </div>
                    
                    <h1 class="text-4xl md:text-5xl font-bold text-white mb-4 leading-tight">
                        Rastreo GPS y <span class="text-emerald-400">Monitoreo Satelital</span>
                    </h1>
                    
                    <p class="text-gray-300 text-lg mb-8 max-w-xl">
                        Conozca la ubicación exacta de sus vehículos y bienes en tiempo real. Tome decisiones determinantes para su empresa con solo un vistazo a la app de su smartphone.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="/contacto?producto=GPS+Tracker" class="bg-emerald-600 hover:bg-emerald-700 text-white text-center font-bold py-3 px-8 rounded-lg shadow-lg shadow-emerald-600/30 transition-all hover:-translate-y-0.5">
                            Solicitar Cotización
                        </a>
                        <a href="https://wa.me/525558642200?text=Hola,%20necesito%20información%20del%20servicio%20de%20GPS%20y%20Monitoreo" target="_blank" class="border-2 border-emerald-500/50 text-emerald-300 hover:bg-emerald-500/10 text-center font-bold py-3 px-8 rounded-lg transition-all flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.625.846 5.059 2.284 7.034L.789 23.492a.75.75 0 00.917.918l4.462-1.494A11.945 11.945 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-2.239 0-4.308-.724-5.994-1.952l-.418-.312-2.774.928.946-2.773-.343-.432A9.955 9.955 0 012 12C2 6.486 6.486 2 12 2s10 4.486 10 10-4.486 10-10 10z"/></svg>
                            WhatsApp
                        </a>
                    </div>

                    <!-- Stats rápidos -->
                    <div class="grid grid-cols-3 gap-6 mt-10 pt-8 border-t border-white/10">
                        <div>
                            <p class="text-2xl md:text-3xl font-bold text-emerald-400">24/7</p>
                            <p class="text-xs text-gray-400 mt-1">Monitoreo continuo</p>
                        </div>
                        <div>
                            <p class="text-2xl md:text-3xl font-bold text-emerald-400">100%</p>
                            <p class="text-xs text-gray-400 mt-1">Cobertura nacional</p>
                        </div>
                        <div>
                            <p class="text-2xl md:text-3xl font-bold text-emerald-400">5 min</p>
                            <p class="text-xs text-gray-400 mt-1">Frecuencia de rastreo</p>
                        </div>
                    </div>
                </div>
                
                <!-- Imagen / Visual -->
                <div class="lg:w-1/2 flex justify-center">
                    <div class="relative">
                        <div id="gps-hero-img" class="bg-gray-800/50 backdrop-blur border border-gray-700/50 rounded-2xl p-8 shadow-2xl max-w-md">
                            <!-- Imagen del producto (mostrar cuando exista el archivo AVIF) -->
                            <img src="/assets/img/sellos/gps-tracker-control-one.avif" 
                                 alt="Sistema de Rastreo GPS para Vehículos y Flotillas - Control One" 
                                 class="w-full h-auto rounded-lg"
                                 id="gps-img"
                                 style="display:none;"
                                 onload="this.style.display='block';document.getElementById('gps-fallback').style.display='none';"
                                 onerror="this.style.display='none';">
                            <!-- Fallback visual mientras no exista la imagen -->
                            <div id="gps-fallback" class="flex flex-col items-center justify-center h-72 text-emerald-400">
                                <svg class="w-24 h-24 opacity-30 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <p class="text-emerald-300/50 text-sm font-semibold">GPS Tracker</p>
                            </div>
                        </div>
                        <!-- Badge flotante -->
                        <div class="absolute -top-3 -right-3 bg-emerald-500 text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-lg animate-pulse">
                            📡 EN VIVO
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== SOLUCIONES / PRODUCTOS ========== -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-6xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-primary mb-3">Soluciones de Monitoreo GPS</h2>
                <p class="text-gray-500 max-w-2xl mx-auto">Ofrecemos soluciones de vanguardia para vehículos, tráileres y cualquier bien localizable. Nuestros expertos diseñan la mejor solución a la medida de sus necesidades.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                
                <!-- Localización de Vehículos -->
                <div class="group bg-gray-50 rounded-2xl p-8 border border-gray-100 hover:border-emerald-200 hover:shadow-lg transition-all duration-300">
                    <div class="w-14 h-14 bg-emerald-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-emerald-500 transition-colors">
                        <svg class="w-7 h-7 text-emerald-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-primary mb-3">Localización de Vehículos</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Sepa en dónde están sus vehículos en tiempo real y conozca los movimientos que han realizado. Los dispositivos GPS instalados envían señales a satélites que registran fecha, hora y ubicación. La información se almacena por partida doble: en la <strong>memoria interna del dispositivo</strong> y en nuestros <strong>sistemas seguros en la nube</strong>.
                    </p>
                </div>

                <!-- Gestión de Flotas -->
                <div class="group bg-gray-50 rounded-2xl p-8 border border-gray-100 hover:border-emerald-200 hover:shadow-lg transition-all duration-300">
                    <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-blue-500 transition-colors">
                        <svg class="w-7 h-7 text-blue-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-primary mb-3">Gestión de Flotas</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Un paso más allá de la localización. Coordine y comuníquese con múltiples vehículos en tiempo real. Controle de manera decisiva la operación vehicular de su organización: administre <strong>puntos de entrega, recolección, rutas</strong> y aseguramiento de sus vehículos en todo el país.
                    </p>
                </div>

                <!-- Panel de Control Total -->
                <div class="group bg-gray-50 rounded-2xl p-8 border border-gray-100 hover:border-emerald-200 hover:shadow-lg transition-all duration-300">
                    <div class="w-14 h-14 bg-purple-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-purple-500 transition-colors">
                        <svg class="w-7 h-7 text-purple-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-primary mb-3">Panel de Control Total</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Software multiplataforma 100% en la nube. Sin instalaciones complicadas: solo escriba la dirección en su navegador e ingrese sus credenciales. Acceda a herramientas de geolocalización con <strong>precisos mapas satelitales</strong> de carreteras, avenidas y autopistas de todo el país.
                    </p>
                </div>

                <!-- App Móvil -->
                <div class="group bg-gray-50 rounded-2xl p-8 border border-gray-100 hover:border-emerald-200 hover:shadow-lg transition-all duration-300">
                    <div class="w-14 h-14 bg-orange-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-accent transition-colors">
                        <svg class="w-7 h-7 text-orange-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-primary mb-3">App para Smartphones</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Toda la potencia del Panel de Control Total en la palma de su mano. Disponible para <strong>Android e iOS</strong>. Desbloquee su teléfono para ver dónde se encuentra toda su flota y gestiónela como si estuviera en su oficina matriz.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- ========== PLANES DE SERVICIO ========== -->
    <section class="py-16 bg-gray-50 border-t border-gray-200">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-6xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-primary mb-3">Planes de Servicio</h2>
                <p class="text-gray-500 max-w-2xl mx-auto">Elija el plan que se adapte al tamaño de su operación. Todos incluyen acceso a nuestra plataforma de monitoreo.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- SILVER STAR -->
                <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="bg-gradient-to-r from-gray-300 to-gray-400 p-6 text-center">
                        <span class="text-3xl">⭐</span>
                        <h3 class="text-xl font-bold text-white mt-2">SILVER STAR</h3>
                        <p class="text-white/80 text-sm mt-1">Para operaciones pequeñas</p>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                                <span class="text-sm text-gray-700">Monitoreo de hasta <strong>3 vehículos</strong> en tiempo real</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                                <span class="text-sm text-gray-700"><strong>4 actualizaciones</strong> diarias de ubicación</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                                <span class="text-sm text-gray-700">Servicio GPS de <strong>mapas y rutas</strong></span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                                <span class="text-sm text-gray-700">Acceso al <strong>Panel de Control</strong> web</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-gray-300 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                <span class="text-sm text-gray-400">App móvil no incluida</span>
                            </li>
                        </ul>
                        <a href="/contacto?producto=GPS+Silver+Star" class="block mt-6 w-full text-center bg-gray-100 hover:bg-gray-200 text-primary font-bold py-3 px-6 rounded-lg transition-colors">
                            Cotizar Silver Star
                        </a>
                    </div>
                </div>

                <!-- GOLD STAR (Destacado) -->
                <div class="bg-white rounded-2xl border-2 border-emerald-500 overflow-hidden shadow-xl shadow-emerald-100 relative transform md:-translate-y-4">
                    <div class="absolute top-0 left-0 right-0 bg-emerald-500 text-white text-xs font-bold text-center py-1 uppercase tracking-wider">
                        Más Popular
                    </div>
                    <div class="bg-gradient-to-r from-yellow-400 to-yellow-500 p-6 text-center mt-5">
                        <span class="text-3xl">⭐⭐</span>
                        <h3 class="text-xl font-bold text-white mt-2">GOLD STAR</h3>
                        <p class="text-white/80 text-sm mt-1">Para flotillas medianas</p>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                                <span class="text-sm text-gray-700">Monitoreo de hasta <strong>10 vehículos</strong> en tiempo real</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                                <span class="text-sm text-gray-700">Actualizaciones <strong>cada hora</strong></span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                                <span class="text-sm text-gray-700">Servicio GPS de <strong>mapas y rutas</strong></span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                                <span class="text-sm text-gray-700">Acceso al <strong>Panel de Control</strong> web</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                                <span class="text-sm text-gray-700"><strong>App móvil</strong> con suscripción</span>
                            </li>
                        </ul>
                        <a href="/contacto?producto=GPS+Gold+Star" class="block mt-6 w-full text-center bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-3 px-6 rounded-lg transition-colors shadow-md">
                            Cotizar Gold Star
                        </a>
                    </div>
                </div>

                <!-- PLATINUM STAR -->
                <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="bg-gradient-to-r from-blue-800 to-indigo-900 p-6 text-center">
                        <span class="text-3xl">⭐⭐⭐</span>
                        <h3 class="text-xl font-bold text-white mt-2">PLATINUM STAR</h3>
                        <p class="text-white/80 text-sm mt-1">Para grandes operaciones</p>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                                <span class="text-sm text-gray-700">Monitoreo de hasta <strong>30 vehículos</strong> en tiempo real</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                                <span class="text-sm text-gray-700">Actualizaciones <strong>cada 5 minutos</strong></span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                                <span class="text-sm text-gray-700">Mapas, rutas + <strong>ayuda vial y emergencias</strong></span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                                <span class="text-sm text-gray-700">Acceso al <strong>Panel de Control</strong> web</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                                <span class="text-sm text-gray-700"><strong>App móvil LIBRE</strong> (sin costo adicional)</span>
                            </li>
                        </ul>
                        <a href="/contacto?producto=GPS+Platinum+Star" class="block mt-6 w-full text-center bg-indigo-800 hover:bg-indigo-900 text-white font-bold py-3 px-6 rounded-lg transition-colors">
                            Cotizar Platinum Star
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ========== SECTORES QUE ATENDEMOS ========== -->
    <section class="py-16 bg-white border-t border-gray-200">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-6xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-primary mb-3">Sectores que Atendemos</h2>
                <p class="text-gray-500 max-w-2xl mx-auto">Empresas de todos los sectores confían en nuestros sistemas de geolocalización para maximizar su eficiencia y seguridad.</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                <div class="bg-gray-50 p-4 rounded-xl text-center hover:bg-emerald-50 hover:border-emerald-200 border border-gray-100 transition-colors">
                    <span class="text-3xl block mb-2">🔒</span>
                    <p class="text-xs font-bold text-gray-700">Seguridad Privada</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-xl text-center hover:bg-emerald-50 hover:border-emerald-200 border border-gray-100 transition-colors">
                    <span class="text-3xl block mb-2">📦</span>
                    <p class="text-xs font-bold text-gray-700">Paquetería y Reparto</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-xl text-center hover:bg-emerald-50 hover:border-emerald-200 border border-gray-100 transition-colors">
                    <span class="text-3xl block mb-2">🚌</span>
                    <p class="text-xs font-bold text-gray-700">Traslado de Personal</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-xl text-center hover:bg-emerald-50 hover:border-emerald-200 border border-gray-100 transition-colors">
                    <span class="text-3xl block mb-2">🏦</span>
                    <p class="text-xs font-bold text-gray-700">Recolección de Valores</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-xl text-center hover:bg-emerald-50 hover:border-emerald-200 border border-gray-100 transition-colors">
                    <span class="text-3xl block mb-2">🛡️</span>
                    <p class="text-xs font-bold text-gray-700">Aseguradoras</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-xl text-center hover:bg-emerald-50 hover:border-emerald-200 border border-gray-100 transition-colors">
                    <span class="text-3xl block mb-2">🚛</span>
                    <p class="text-xs font-bold text-gray-700">Transporte de Carga</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== BENEFICIOS ========== -->
    <section class="py-16 bg-gradient-to-b from-gray-50 to-white border-t border-gray-200">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-5xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-primary mb-3">Beneficios Clave</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="flex items-start gap-4 p-5 bg-white rounded-xl border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="w-10 h-10 bg-emerald-100 rounded-lg flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900 mb-1">Ahorro de Tiempo y Dinero</h4>
                        <p class="text-sm text-gray-600">Ahorro significativo y cuantificable en el manejo de sus vehículos y optimización de rutas.</p>
                    </div>
                </div>

                <div class="flex items-start gap-4 p-5 bg-white rounded-xl border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900 mb-1">Atención Personalizada</h4>
                        <p class="text-sm text-gray-600">Expertos diseñan soluciones a la medida de cada cliente, sin paquetes genéricos.</p>
                    </div>
                </div>

                <div class="flex items-start gap-4 p-5 bg-white rounded-xl border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900 mb-1">Fácil Instalación y Uso</h4>
                        <p class="text-sm text-gray-600">Facilidades completas para la instalación y uso de los sistemas de geolocalización y monitoreo.</p>
                    </div>
                </div>

                <div class="flex items-start gap-4 p-5 bg-white rounded-xl border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900 mb-1">Cobertura Nacional</h4>
                        <p class="text-sm text-gray-600">Amplia cobertura en todo el territorio nacional gracias a nuestros sistemas satelitales.</p>
                    </div>
                </div>

                <div class="flex items-start gap-4 p-5 bg-white rounded-xl border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="w-10 h-10 bg-rose-100 rounded-lg flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900 mb-1">App Móvil Completa</h4>
                        <p class="text-sm text-gray-600">Visualice y siga toda la información de sus vehículos desde su smartphone.</p>
                    </div>
                </div>

                <div class="flex items-start gap-4 p-5 bg-white rounded-xl border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="w-10 h-10 bg-teal-100 rounded-lg flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01"></path></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900 mb-1">Capacitación y Soporte</h4>
                        <p class="text-sm text-gray-600">Capacitación integral a los usuarios de las plataformas con soporte técnico incluido.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== SELLO + GPS ========== -->
    <section class="py-16 bg-gradient-to-r from-primary to-gray-800 text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-5xl">
            <div class="flex flex-col md:flex-row items-center gap-10">
                <div class="md:w-1/2">
                    <h2 class="text-3xl font-bold mb-4">Sello + GPS: Seguridad <span class="text-emerald-400">Total</span></h2>
                    <p class="text-gray-300 mb-6 leading-relaxed">
                        Control One es una de las pocas empresas en México que combina <strong class="text-white">sellos de seguridad físicos certificados ISO 17712</strong> con <strong class="text-emerald-400">sistemas de rastreo GPS satelital</strong> bajo una misma marca. La combinación perfecta para:
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center gap-3">
                            <span class="w-6 h-6 bg-emerald-500/20 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-3 h-3 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span class="text-sm">Saber <strong>dónde está</strong> tu carga (GPS)</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-6 h-6 bg-emerald-500/20 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-3 h-3 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span class="text-sm">Saber <strong>si fue abierta</strong> (Sello)</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-6 h-6 bg-emerald-500/20 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-3 h-3 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span class="text-sm">Tener <strong>evidencia legal</strong> ante aseguradoras</span>
                        </li>
                    </ul>
                </div>
                <div class="md:w-1/2 flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/contacto?producto=GPS+y+Sellos" class="bg-emerald-600 hover:bg-emerald-700 text-white text-center font-bold py-4 px-8 rounded-lg shadow-lg transition-all hover:-translate-y-0.5">
                        Cotizar Paquete Completo
                    </a>
                    <a href="/productos" class="border-2 border-white/30 hover:bg-white/10 text-white text-center font-bold py-4 px-8 rounded-lg transition-all">
                        Ver Sellos de Seguridad
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== FAQs ========== -->
    <section class="py-16 bg-white border-t border-gray-200">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-4xl">
            <h2 class="text-2xl font-bold text-primary mb-8 text-center">Preguntas Frecuentes</h2>
            
            <div class="space-y-6" itemscope itemtype="https://schema.org/FAQPage">
                
                <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 p-6 rounded-lg">
                    <h3 itemprop="name" class="font-bold text-primary text-lg mb-2">¿Qué cobertura tiene el sistema GPS?</h3>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text" class="text-gray-600 text-sm">
                            <strong>Cobertura nacional completa.</strong> Sin importar si sus vehículos están en la Ciudad de México, atravesando la carretera del Golfo o esperando paso en la garita de Ciudad Juárez, nuestros sistemas satelitales los rastrean en todo momento.
                        </div>
                    </div>
                </div>

                <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 p-6 rounded-lg">
                    <h3 itemprop="name" class="font-bold text-primary text-lg mb-2">¿Puedo combinar el GPS con sellos de seguridad?</h3>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text" class="text-gray-600 text-sm">
                            <strong>¡Sí, y es lo que recomendamos!</strong> Control One es fabricante de ambos productos. El GPS monitorea la ubicación y el sello garantiza la integridad física de la carga. Juntos forman un sistema de doble verificación: sabe dónde está su carga Y si fue manipulada.
                        </div>
                    </div>
                </div>

                <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 p-6 rounded-lg">
                    <h3 itemprop="name" class="font-bold text-primary text-lg mb-2">¿Necesito instalar algún software?</h3>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text" class="text-gray-600 text-sm">
                            <strong>No.</strong> Nuestro Panel de Control Total es 100% en la nube. Solo necesita un navegador web y sus credenciales de acceso. Adicionalmente, puede descargar nuestra app gratuita para Android e iOS (disponibilidad según plan contratado).
                        </div>
                    </div>
                </div>

                <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 p-6 rounded-lg">
                    <h3 itemprop="name" class="font-bold text-primary text-lg mb-2">¿Incluyen la instalación del dispositivo?</h3>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text" class="text-gray-600 text-sm">
                            <strong>Sí.</strong> Control One diseña, manufactura, distribuye e <strong>instala</strong> los sistemas. Nuestro equipo técnico realiza la instalación profesional en sus vehículos y le brinda capacitación integral para el uso de la plataforma.
                        </div>
                    </div>
                </div>

                <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 p-6 rounded-lg">
                    <h3 itemprop="name" class="font-bold text-primary text-lg mb-2">¿Cuál es el horario de atención?</h3>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text" class="text-gray-600 text-sm">
                            Nuestros expertos están disponibles de <strong>lunes a viernes de 9:00 a 18:00 horas</strong>. El sistema de monitoreo opera las 24 horas, los 7 días de la semana, de forma autónoma.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ========== CTA FINAL ========== -->
    <section class="py-16 bg-emerald-600">
        <div class="container mx-auto px-4 max-w-3xl text-center">
            <h2 class="text-3xl font-bold text-white mb-4">¿Listo para proteger su flota?</h2>
            <p class="text-emerald-100 mb-8 text-lg">Contacte a nuestros expertos en geolocalización para diseñar la solución perfecta para su operación.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contacto?producto=GPS+Tracker" class="bg-white text-emerald-700 hover:bg-gray-100 font-bold py-4 px-10 rounded-lg shadow-lg transition-all hover:-translate-y-0.5 text-lg">
                    Solicitar Cotización
                </a>
                <a href="https://wa.me/525558642200?text=Hola,%20necesito%20información%20del%20servicio%20de%20GPS%20y%20Monitoreo" target="_blank" class="border-2 border-white text-white hover:bg-white/10 font-bold py-4 px-10 rounded-lg transition-all flex items-center justify-center gap-2 text-lg">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.625.846 5.059 2.284 7.034L.789 23.492a.75.75 0 00.917.918l4.462-1.494A11.945 11.945 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0z"/></svg>
                    WhatsApp
                </a>
            </div>
        </div>
    </section>

    <!-- ========== RECURSOS RELACIONADOS ========== -->
    <section class="py-12 bg-industrial/30 border-t border-gray-200">
        <div class="container mx-auto px-4 max-w-5xl">
            <h2 class="text-xl font-bold text-gray-500 mb-6 uppercase tracking-wider text-center">Complementa tu Seguridad</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <a href="/info/producto-sello-botella-star-one" class="bg-white p-4 rounded shadow-sm hover:shadow-md transition-shadow group">
                    <h3 class="font-bold text-primary group-hover:text-accent mb-2">Sello de Alta Seguridad</h3>
                    <p class="text-xs text-gray-500">Star One Seal ISO 17712 para contenedores y tráilers.</p>
                </a>

                <a href="/info/producto-sello-cable-acero" class="bg-white p-4 rounded shadow-sm hover:shadow-md transition-shadow group">
                    <h3 class="font-bold text-primary group-hover:text-accent mb-2">Sellos de Cable</h3>
                    <p class="text-xs text-gray-500">Cables de acero ajustables para cajas secas y furgones.</p>
                </a>

                <a href="/post/caso-real-sello-seguridad-detuvo-robo-millonario" class="bg-white p-4 rounded shadow-sm hover:shadow-md transition-shadow group">
                    <h3 class="font-bold text-primary group-hover:text-accent mb-2">Caso Real: Sello vs Robo</h3>
                    <p class="text-xs text-gray-500">Cómo un sello de seguridad detuvo un robo millonario en carretera.</p>
                </a>

            </div>
        </div>
    </section>

</main>

<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Service",
  "name": "Rastreo GPS y Monitoreo Satelital para Vehículos y Flotillas",
  "image": "https://controlone.com.mx/assets/img/sellos/gps-tracker-control-one.avif",
  "description": "Servicio de rastreo GPS satelital para vehículos, tráilers y flotillas. Localización en tiempo real, gestión de flotas, panel web y app móvil. Cobertura en todo México.",
  "provider": {
    "@type": "Organization",
    "name": "Control One",
    "url": "https://controlone.com.mx"
  },
  "serviceType": "Rastreo GPS y Monitoreo Satelital",
  "areaServed": {
    "@type": "Country",
    "name": "México"
  },
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Planes de Monitoreo GPS",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Silver Star - Monitoreo hasta 3 vehículos"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Gold Star - Monitoreo hasta 10 vehículos"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Platinum Star - Monitoreo hasta 30 vehículos"
        }
      }
    ]
  }
}
</script>

<?php include '../includes/footer.php'; ?>
