<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Trackers are deferred at the bottom of the head to improve FCP & LCP for PageSpeed -->    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    
    <?php
    // --- LÓGICA DE URL CANÓNICA (SOLUCIÓN ERROR 301) ---
    $protocol = "https://";
    $domain = $_SERVER['HTTP_HOST'];
    
    if (isset($_GET['slug']) && !empty($_GET['slug'])) {
        $canonical_url = $protocol . $domain . "/post/" . $_GET['slug'];
    } else {
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $canonical_url = $protocol . $domain . $path;
    }
    ?>
    
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    
    <title><?php echo isset($page_title) ? $page_title . ' | Control One' : 'Control One - Sellos de Seguridad ISO 17712'; ?></title>
    
    <meta name="description" content="<?php echo isset($meta_description) ? $meta_description : 'Fabricantes de sellos de seguridad de alta calidad, certificados ISO 17712 y C-TPAT. Envíos a todo México para logística y transporte.'; ?>">
    
    <link rel="icon" href="/assets/img/icon.png" type="image/png">
    <link rel="shortcut icon" href="/assets/img/icon.png" type="image/png">
    <link rel="apple-touch-icon" href="/assets/img/icon.png">

    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_MX">
    <meta property="og:site_name" content="Control One">
    <meta property="og:url" content="<?php echo $canonical_url; ?>">
    <meta property="og:title" content="<?php echo isset($page_title) ? $page_title : 'Control One - Seguridad Logística'; ?>">
    <meta property="og:description" content="<?php echo isset($meta_description) ? $meta_description : 'Soluciones de seguridad certificadas para tu cadena de suministro.'; ?>">
    <meta property="og:image" content="<?php echo isset($page_image) ? 'https://controlone.com.mx/' . $page_image : 'https://controlone.com.mx/assets/img/logo-control-one-industrial.avif'; ?>">
    <link rel="alternate" hreflang="es-MX" href="<?php echo $canonical_url; ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://www.googletagmanager.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    
    <link rel="stylesheet" href="/assets/css/output.css">

    <?php if (isset($preload_image_hero)): ?>
    <link rel="preload" href="<?php echo $preload_image_hero; ?>" as="image" fetchpriority="high">
    <?php endif; ?>

    <!-- Tracking Scripts (Deferred for PageSpeed) -->
    <script>
    let trackersLoaded = false;
    function deferTrackers() {
        if(trackersLoaded) return;
        trackersLoaded = true;

        // Google Tag Manager
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MV8LPXCB');

        // Google gtag
        var gs = document.createElement('script');
        gs.src = 'https://www.googletagmanager.com/gtag/js?id=G-06SRZZQG4J';
        gs.async = true;
        document.head.appendChild(gs);
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-06SRZZQG4J');
        gtag('config', 'AW-17797845908');

        // Metricool Tracker
        var ms = document.createElement("script");ms.type="text/javascript";ms.src="https://tracker.metricool.com/resources/be.js";ms.onload=function(){beTracker.t({hash:"1666cf12de8dae1244b46e660221810c"})};document.head.appendChild(ms);

        // Meta Pixel
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,document,'script','https://connect.facebook.net/en_US/fbevents.js');fbq('init','1564745351393194');fbq('track','PageView');
        
        // LinkedIn
        _linkedin_partner_id="7654321";window._linkedin_data_partner_ids=window._linkedin_data_partner_ids||[];window._linkedin_data_partner_ids.push(_linkedin_partner_id);(function(l){if(!l){window.lintrk=function(a,b){window.lintrk.q.push([a,b])};window.lintrk.q=[]}var s=document.getElementsByTagName('script')[0];var b=document.createElement('script');b.type='text/javascript';b.async=true;b.src='https://snap.licdn.com/li.lms-analytics/insight.min.js';s.parentNode.insertBefore(b,s)})(window.lintrk);
    }
    
    // Load trackers immediately upon first user interaction, or as a fallback 3.5s after window.load
    ['scroll', 'mousemove', 'touchstart'].forEach(function(e) {
        window.addEventListener(e, deferTrackers, {once: true, passive: true});
    });
    window.addEventListener('load', function() { setTimeout(deferTrackers, 3500); });
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1564745351393194&ev=PageView&noscript=1"/></noscript>
    <noscript><img style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=7654321&fmt=gif" /></noscript>
</head>

<body class="bg-industrial text-dark flex flex-col min-h-screen">
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MV8LPXCB"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    <?php
    $current_page = basename($_SERVER['SCRIPT_NAME'], '.php');
    if ($current_page === 'index') $current_page = '';
    ?>

    <!-- Top Bar -->
    <div class="bg-primary text-white text-xs py-1.5 hidden md:block" role="banner">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <span class="text-gray-400">Fabricantes de Sellos de Seguridad · Envíos a todo México</span>
            <div class="flex items-center space-x-5">
                <a href="tel:+525558642200" class="flex items-center gap-1.5 text-gray-300 hover:text-white transition-colors">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    +52 55 5864 2200
                </a>
                <a href="https://wa.me/522218027570?text=Hola%2C%20quiero%20cotizar%20sellos" target="_blank" rel="noopener noreferrer" class="flex items-center gap-1.5 text-[#25D366] hover:text-green-300 transition-colors">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 448 512"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157z"/></svg>
                    WhatsApp
                </a>
            </div>
        </div>
    </div>

    <header class="bg-white/95 backdrop-blur-md shadow-sm sticky top-0 z-50 border-b border-gray-100">
        <nav class="container mx-auto px-4 sm:px-6 lg:px-8" aria-label="Navegación principal">
            <div class="flex justify-between items-center h-16 lg:h-[68px]">
                
                <div class="flex-shrink-0 flex items-center">
                    <a href="/" class="hover:opacity-90 transition-opacity">
                        <img src="/assets/img/logo-control-one-industrial.avif" alt="Control One - Sellos de Seguridad ISO 17712" fetchpriority="high" class="h-9 lg:h-10 w-auto">
                    </a>
                </div>

                <div class="hidden md:flex space-x-7 items-center">
                    <a href="/" class="nav-link text-sm text-dark hover:text-primary font-medium transition-colors <?php echo ($current_page === '') ? 'active' : ''; ?>">Inicio</a>
                    <a href="/nosotros" class="nav-link text-sm text-dark hover:text-primary font-medium transition-colors <?php echo ($current_page === 'nosotros') ? 'active' : ''; ?>">Nosotros</a>
                    <a href="/productos" class="nav-link text-sm text-dark hover:text-primary font-medium transition-colors <?php echo ($current_page === 'productos') ? 'active' : ''; ?>">Productos</a>
                    <a href="/blog" class="nav-link text-sm text-dark hover:text-primary font-medium transition-colors <?php echo ($current_page === 'blog' || $current_page === 'post') ? 'active' : ''; ?>">Blog</a>
                    <a href="/contacto" class="nav-link text-sm text-dark hover:text-primary font-medium transition-colors <?php echo ($current_page === 'contacto') ? 'active' : ''; ?>">Contacto</a>
                </div>

                <div class="hidden md:flex items-center space-x-3">
                    <a href="/assets/pdf/Catalogo.pdf" target="_blank" class="text-gray-400 hover:text-primary text-sm font-medium flex items-center gap-1.5 transition-colors" title="Descargar Catálogo PDF 2026">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                        PDF
                    </a>
                    <a href="/contacto" class="bg-accent hover:bg-orange-500 text-white px-5 py-2 rounded-lg font-semibold text-sm transition-all shadow-sm shadow-accent/20 hover:shadow-md hover:shadow-accent/30 hover:-translate-y-0.5">
                        Cotizar
                    </a>
                </div>

                <div class="flex items-center md:hidden">
                    <button id="mobile-menu-btn" type="button" class="text-primary hover:text-dark focus:outline-none p-2 rounded-lg hover:bg-gray-50 transition-colors" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Abrir menú principal</span>
                        <svg id="menu-icon-open" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg id="menu-icon-close" class="h-7 w-7 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </nav>

        <div class="md:hidden border-t border-gray-100" id="mobile-menu">
            <div class="px-4 pt-3 pb-3 space-y-1">
                <a href="/" class="block px-3 py-2.5 rounded-lg text-base font-medium <?php echo ($current_page === '') ? 'text-primary bg-primary/5 font-semibold' : 'text-dark hover:text-primary hover:bg-gray-50'; ?> transition-colors">Inicio</a>
                <a href="/nosotros" class="block px-3 py-2.5 rounded-lg text-base font-medium <?php echo ($current_page === 'nosotros') ? 'text-primary bg-primary/5 font-semibold' : 'text-dark hover:text-primary hover:bg-gray-50'; ?> transition-colors">Nosotros</a>
                <a href="/productos" class="block px-3 py-2.5 rounded-lg text-base font-medium <?php echo ($current_page === 'productos') ? 'text-primary bg-primary/5 font-semibold' : 'text-dark hover:text-primary hover:bg-gray-50'; ?> transition-colors">Productos</a>
                <a href="/blog" class="block px-3 py-2.5 rounded-lg text-base font-medium <?php echo ($current_page === 'blog' || $current_page === 'post') ? 'text-primary bg-primary/5 font-semibold' : 'text-dark hover:text-primary hover:bg-gray-50'; ?> transition-colors">Blog</a>
                <a href="/contacto" class="block px-3 py-2.5 rounded-lg text-base font-medium <?php echo ($current_page === 'contacto') ? 'text-primary bg-primary/5 font-semibold' : 'text-dark hover:text-primary hover:bg-gray-50'; ?> transition-colors">Contacto</a>
            </div>
            <div class="px-4 pb-4 space-y-2 border-t border-gray-100 pt-3">
                <a href="tel:+525558642200" class="flex items-center justify-center gap-2 w-full text-gray-500 hover:text-primary px-4 py-2 rounded-lg font-medium text-sm transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    +52 55 5864 2200
                </a>
                <a href="/assets/pdf/Catalogo.pdf" target="_blank" class="flex items-center justify-center gap-2 w-full text-center text-gray-500 hover:text-primary px-4 py-2.5 rounded-lg font-medium text-sm border border-gray-200 hover:border-primary/20 transition-all">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                    Catálogo PDF 2026
                </a>
                <a href="/contacto" class="block w-full text-center bg-accent hover:bg-orange-500 text-white px-6 py-3 rounded-lg font-semibold transition-all shadow-sm">
                    Cotizar Ahora
                </a>
            </div>
        </div>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const btn = document.getElementById('mobile-menu-btn');
            const menu = document.getElementById('mobile-menu');
            const iconOpen = document.getElementById('menu-icon-open');
            const iconClose = document.getElementById('menu-icon-close');

            if (btn && menu) {
                btn.addEventListener('click', () => {
                    const isExpanded = btn.getAttribute('aria-expanded') === 'true';
                    btn.setAttribute('aria-expanded', !isExpanded);
                    menu.classList.toggle('open');
                    iconOpen.classList.toggle('hidden');
                    iconClose.classList.toggle('hidden');
                });
            }
        });
    </script>