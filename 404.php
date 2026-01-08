<?php 
$page_title = "Error 404 - Violación de Seguridad | Control One";
include 'includes/header.php'; 
?>

<!-- Sección Full Screen con Tema Oscuro "Security Console" -->
<main class="min-h-[85vh] flex items-center justify-center bg-[#0B2239] relative overflow-hidden">
    
    <!-- Patrón de fondo tecnológico (Grid) -->
    <div class="absolute inset-0 opacity-5 pointer-events-none" 
         style="background-image: linear-gradient(#ffffff 1px, transparent 1px), linear-gradient(90deg, #ffffff 1px, transparent 1px); background-size: 40px 40px;">
    </div>
    
    <!-- Círculo decorativo de fondo -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-blue-900 rounded-full blur-3xl opacity-20 pointer-events-none"></div>

    <div class="relative z-10 max-w-2xl w-full text-center px-6">
        
        <!-- Icono con Efecto Neón -->
        <div class="mb-8 relative inline-flex justify-center items-center">
             <div class="absolute inset-0 bg-red-600 blur-2xl opacity-30 rounded-full animate-pulse"></div>
             <div class="bg-[#0f2d4a] p-6 rounded-full border border-red-500/30 shadow-2xl relative z-10">
                <svg class="w-16 h-16 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                </svg>
             </div>
        </div>
        
        <!-- Títulos -->
        <h1 class="text-6xl md:text-8xl font-black text-white mb-2 tracking-tighter opacity-90">
            4<span class="text-accent">0</span>4
        </h1>
        <h2 class="text-2xl md:text-3xl font-bold text-gray-200 mb-6 tracking-wide">
            ¡ALTO! CÓDIGO INCORRECTO
        </h2>
        
        <!-- Mensaje Estilo Terminal -->
        <div class="bg-[#051321] border-l-4 border-accent p-6 mb-10 text-left rounded-r-lg shadow-lg mx-auto max-w-lg">
            <p class="font-mono text-green-400 text-sm mb-2">> System.Scan_Result:</p>
            <p class="text-gray-300 text-lg leading-relaxed">
                "El <strong>precinto de seguridad</strong> de esta URL ha sido violado o el manifiesto de carga no existe en nuestra base de datos."
            </p>
        </div>
        
        <!-- Botones Premium -->
        <div class="flex flex-col sm:flex-row gap-5 justify-center items-center">
             <a href="/" class="group relative px-8 py-4 bg-accent hover:bg-orange-500 text-white font-bold rounded-lg transition-all shadow-lg hover:shadow-orange-500/40 overflow-hidden w-full sm:w-auto">
                <div class="absolute inset-0 w-full h-full bg-white/20 transform -translate-x-full skew-x-12 group-hover:animate-shine"></div>
                <span class="relative flex items-center justify-center gap-2">
                    🛡️ Regresar a Zona Segura
                </span>
             </a>
             
             <a href="contacto" class="px-8 py-4 border border-gray-600 text-gray-300 hover:text-white hover:border-white hover:bg-white/5 rounded-lg transition-all w-full sm:w-auto flex items-center justify-center gap-2">
                📡 Contactar Soporte
             </a>
        </div>
        
        <p class="mt-12 text-xs text-gray-600 font-mono">
            IP: <?php echo $_SERVER['REMOTE_ADDR']; ?> | ID: <?php echo uniqid(); ?>
        </p>

    </div>
</main>

<style>
/* Animación de brillo para el botón */
@keyframes shine {
    100% { transform: translateX(100%) skewX(-12deg); }
}
.group-hover\:animate-shine:hover {
    animation: shine 0.7s;
}
</style>

<?php include 'includes/footer.php'; ?>