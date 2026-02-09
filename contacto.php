<?php 
$page_title = "Cotizar Sellos de Seguridad y Precintos | Atención Inmediata México";
$meta_description = "Cotiza al instante tus Sellos de Seguridad y Marchamos. Envíos urgentes a Monterrey, CDMX y Guadalajara. Precios de mayoreo desde 100 piezas.";
include 'includes/header.php'; 
?>

<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>

<main>
    <?php if (isset($_GET['status'])): ?>
        <div class="container mx-auto px-4 mt-6">
            <?php if ($_GET['status'] == 'success'): ?>
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">¡Solicitud Recibida!</strong>
                    <span class="block sm:inline">Un asesor comercial te contactará en breve con tu cotización.</span>
                </div>
            <?php elseif ($_GET['status'] == 'error'): ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Error de envío:</strong>
                    <span class="block sm:inline">Hubo un problema técnico. Por favor intenta por WhatsApp.</span>
                </div>
            <?php elseif ($_GET['status'] == 'captcha_error'): ?>
                <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Atención:</strong>
                    <span class="block sm:inline">Por favor completa la verificación de seguridad (Captcha).</span>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <section class="bg-primary py-16 text-center">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">Cotiza tus Sellos de Seguridad</h1>
            <p class="text-gray-300 max-w-2xl mx-auto">
                Obtén precios de fábrica para <strong>marchamos, precintos y sellos fiscales</strong>. Atención especial a flotillas y compras por volumen.
            </p>
        </div>
    </section>

    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-12">
                
                <div class="lg:w-2/3 bg-white p-8 rounded-lg shadow-lg border-t-4 border-accent">
                    <h2 class="text-2xl font-bold text-primary mb-2">Solicitar Cotización Formal</h2>
                    <p class="text-gray-500 mb-6 text-sm">Completa el formulario y recibe nuestra lista de precios y tiempos de entrega.</p>
                    
                    <form action="enviar.php" method="POST" class="space-y-6">
                        <div style="opacity: 0; position: absolute; top: 0; left: 0; height: 0; width: 0; z-index: -1;">
                            <label for="website_check">Si eres humano no llenes este campo:</label>
                            <input type="text" id="website_check" name="website_check" autocomplete="off" tabindex="-1">
                        </div>

                        <!-- Campos ocultos de Tracking -->
                        <input type="hidden" name="utm_source" id="utm_source" value="">
                        <input type="hidden" name="utm_medium" id="utm_medium" value="">
                        <input type="hidden" name="utm_campaign" id="utm_campaign" value="">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">Nombre Completo</label>
                                <input type="text" id="nombre" name="nombre" required autocomplete="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-accent focus:border-accent outline-none transition-colors" placeholder="Ej. Juan Pérez">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Correo Corporativo</label>
                                <input type="email" id="email" name="email" required autocomplete="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-accent focus:border-accent outline-none transition-colors" placeholder="compras@empresa.com">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="telefono" class="block text-sm font-medium text-gray-700 mb-1">Teléfono / WhatsApp</label>
                                <input type="tel" id="telefono" name="telefono" autocomplete="tel" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-accent focus:border-accent outline-none transition-colors" placeholder="10 dígitos">
                            </div>
                            <div>
                                <label for="empresa" class="block text-sm font-medium text-gray-700 mb-1">Empresa</label>
                                <input type="text" id="empresa" name="empresa" autocomplete="organization" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-accent focus:border-accent outline-none transition-colors" placeholder="Nombre de tu empresa">
                            </div>
                        </div>
                        <!-- SECCIÓN: COTIZADOR DINÁMICO -->
                        <div class="bg-gray-50 p-5 rounded-lg border border-gray-200 shadow-inner">
                            <div class="flex justify-between items-center mb-3">
                                <label class="block text-sm font-bold text-primary">Configura tu Pedido</label>
                                <span class="text-xs text-gray-400 bg-white px-2 py-1 rounded border">Puedes agregar varios productos</span>
                            </div>
                            
                            <div id="order-items" class="space-y-4">
                                <!-- Aquí se inyectan las filas con JS -->
                            </div>

                            <button type="button" id="add-item-btn" class="mt-4 w-full py-2 border-2 border-dashed border-gray-300 text-gray-500 rounded-md hover:border-accent hover:text-accent font-semibold text-sm transition-all flex justify-center items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                Agregar otro producto
                            </button>
                        </div>

                        <div>
                            <label for="comentarios_visual" class="block text-sm font-medium text-gray-700 mb-1">Comentarios Adicionales / Dudas</label>
                            <textarea id="comentarios_visual" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-accent focus:border-accent outline-none transition-colors" placeholder="Ej: Requiero personalización con logo y envío urgente a Monterrey..."></textarea>
                            
                            <!-- ESTE ES EL CAMPO QUE LEE PHP (Se llena automático) -->
                            <input type="hidden" name="mensaje" id="mensaje_final">
                        </div>

                        <div class="cf-turnstile" data-sitekey="0x4AAAAAACEz927vdcZlGnzw"></div>
                        <div class="pt-4">
                            <button type="submit" class="w-full md:w-auto bg-accent hover:bg-orange-500 text-white font-bold py-3 px-8 rounded-md shadow-md transition-colors">
                                Solicitar Precio
                            </button>
                        </div>
                        <p class="text-xs text-gray-400 mt-4 text-center">
                            Tus datos están protegidos. Consulta nuestro <a href="/aviso-privacidad" class="underline hover:text-accent">Aviso de Privacidad</a>.
                        </p>
                    </form>
                        <script>
                            // --- CATÁLOGO DE PRODUCTOS (Configuración) ---
                            const catalog = [
                                { group: 'Alta Seguridad (ISO 17712)', options: [
                                    { id: 'star-one', name: 'Star One Seal (Botella)', min: 100 },
                                    { id: 'c-one-316', name: 'C-ONE 316 (Cable 5mm)', min: 100 },
                                    { id: 'c-block', name: 'C-BLOCK (Inoxidable)', min: 100 }
                                ]},
                                { group: 'Cables de Acero', options: [
                                    { id: 'c-one-180', name: 'C-ONE 180 (Cable 3.2mm)', min: 100 },
                                    { id: 'c-one-x6', name: 'C-ONE X6 (Cable 1.8mm)', min: 200 },
                                    { id: 'serie-k', name: 'Serie K (Aluminio)', min: 200 }
                                ]},
                                { group: 'Plásticos y Etiquetas', options: [
                                    { id: 'quantum', name: 'Quantum (Plástico)', min: 1000 },
                                    { id: 'rotaseal', name: 'Rotaseal (Medidores)', min: 500 },
                                    { id: 'secure-label', name: 'Etiquetas VOID', min: 1000 },
                                    { id: 'c-cash', name: 'C-CASH (Bancario)', min: 1000 }
                                ]}
                            ];

                            // --- LÓGICA DEL COTIZADOR ---
                            const container = document.getElementById('order-items');
                            const addBtn = document.getElementById('add-item-btn');

                            // Función para crear el select de opciones
                            function buildOptionsHTML() {
                                let html = '<option value="">Selecciona un producto...</option>';
                                catalog.forEach(group => {
                                    html += `<optgroup label="${group.group}">`;
                                    group.options.forEach(prod => {
                                        html += `<option value="${prod.name}" data-min="${prod.min}">${prod.name}</option>`;
                                    });
                                    html += `</optgroup>`;
                                });
                                html += '<option value="Otro">Otro / No estoy seguro</option>';
                                return html;
                            }

                            // Función para agregar fila
                            function addRow() {
                                const rowId = Date.now();
                                const div = document.createElement('div');
                                div.className = 'grid grid-cols-12 gap-2 items-start bg-white p-3 rounded border border-gray-200 relative group animate-fade-in';
                                div.innerHTML = `
                                    <div class="col-span-7 sm:col-span-8">
                                        <label class="text-xs text-gray-500 font-bold block mb-1">Producto</label>
                                        <select class="prod-select w-full text-sm border-gray-300 rounded focus:ring-accent focus:border-accent" required>
                                            ${buildOptionsHTML()}
                                        </select>
                                    </div>
                                    <div class="col-span-4 sm:col-span-3">
                                        <label class="text-xs text-gray-500 font-bold block mb-1">Cantidad</label>
                                        <input type="number" class="qty-input w-full text-sm border-gray-300 rounded focus:ring-accent focus:border-accent" placeholder="Min: 100" min="1" required>
                                    </div>
                                    <div class="col-span-1 flex items-end justify-center h-full pb-1">
                                        <button type="button" class="text-red-300 hover:text-red-500 transition-colors" onclick="this.closest('.grid').remove()">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                        </button>
                                    </div>
                                    <div class="col-span-12 text-[10px] text-gray-400 mt-1 min-msg hidden">
                                        * Pedido mínimo sugerido: <span class="min-val font-bold">100</span> pzas
                                    </div>
                                `;
                                container.appendChild(div);

                                // Event Listener para actualizar el "Minimo"
                                const select = div.querySelector('.prod-select');
                                const input = div.querySelector('.qty-input');
                                const msg = div.querySelector('.min-msg');
                                const minSpan = div.querySelector('.min-val');

                                select.addEventListener('change', function() {
                                    const opt = this.options[this.selectedIndex];
                                    const min = opt.getAttribute('data-min');
                                    if(min) {
                                        input.min = min;
                                        input.placeholder = "Min: " + min;
                                        minSpan.innerText = min;
                                        msg.classList.remove('hidden');
                                    } else {
                                        msg.classList.add('hidden');
                                        input.placeholder = "Cantidad";
                                    }
                                });
                            }

                            // Inicializar con 1 fila
                            addRow();

                            // Botón Agregar
                            addBtn.addEventListener('click', addRow);


                            // --- SUBMIT: Compilar mensaje ---
                            document.querySelector('form').addEventListener('submit', function(e) {
                                e.preventDefault(); // Pausa para procesar
                                
                                const rows = document.querySelectorAll('#order-items .grid');
                                let orderText = "📋 DETALLE DEL PEDIDO:\n";
                                let hasItems = false;

                                rows.forEach(row => {
                                    const prod = row.querySelector('.prod-select').value;
                                    const qty = row.querySelector('.qty-input').value;
                                    if(prod && qty) {
                                        orderText += `- ${qty} pzas de [ ${prod} ]\n`;
                                        hasItems = true;
                                    }
                                });

                                const comments = document.getElementById('comentarios_visual').value;
                                if(comments) {
                                    orderText += `\n📝 COMENTARIOS ADICIONALES:\n${comments}`;
                                }

                                if(!hasItems) {
                                    alert("Por favor selecciona al menos un producto y cantidad.");
                                    return;
                                }

                                // Llenar el input real
                                document.getElementById('mensaje_final').value = orderText;

                                // Validar teléfono
                                const tel = document.getElementById('telefono').value;
                                if(tel.length < 10) {
                                    alert('Por favor, ingresa un número de teléfono válido.');
                                    return;
                                }

                                // Enviar
                                const btn = this.querySelector('button[type="submit"]');
                                btn.disabled = true;
                                btn.innerText = 'Procesando Cotización... 🚀';
                                btn.classList.add('opacity-50', 'cursor-not-allowed');
                                
                                this.submit();
                            });


                            // Lógica de Tracking (UTMs)
                            document.addEventListener('DOMContentLoaded', () => {
                                const urlParams = new URLSearchParams(window.location.search);
                                const source = urlParams.get('utm_source') || sessionStorage.getItem('utm_source') || 'Organico/Directo';
                                const medium = urlParams.get('utm_medium') || sessionStorage.getItem('utm_medium') || '';
                                const campaign = urlParams.get('utm_campaign') || sessionStorage.getItem('utm_campaign') || '';

                                document.getElementById('utm_source').value = source;
                                if(medium) document.getElementById('utm_medium').value = medium;
                                if(campaign) document.getElementById('utm_campaign').value = campaign;
                            });
                        </script>
                </div>

                <div class="lg:w-1/3 space-y-8">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold text-primary mb-6">Contacto Directo</h3>
                        <a href="https://api.whatsapp.com/send?phone=522218027570&text=Hola%20Control%20One,%20me%20interesa%20cotizar%20sellos%20de%20seguridad." target="_blank" rel="noopener noreferrer nofollow" class="flex items-center justify-center w-full bg-[#25D366] hover:bg-[#128C7E] text-white font-bold py-4 px-4 rounded-md shadow-md transition-all transform hover:-translate-y-1 mb-8 group">
                            <svg class="w-6 h-6 mr-3 fill-current" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                            <span>Cotizar por WhatsApp</span>
                        </a>
                        <hr class="border-gray-200 mb-6">
                        <h4 class="text-sm font-bold text-gray-500 uppercase mb-4">Ubicación y Envíos</h4>
                        <ul class="space-y-4 text-gray-600 text-sm">
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-accent mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <span><strong>Planta Tlalnepantla:</strong><br>Av Lago de Guadalupe km 27.5-Bodega A3, San Pedro Barrientos, 54010 Edo. Méx.</span>
                            </li>
                            <li class="flex items-center">
                                <span class="w-6 h-6 flex items-center justify-center text-accent mr-3">🚚</span>
                                <span><strong>Envíos a todo México:</strong><br>Monterrey, Guadalajara, Querétaro, Tijuana, Puebla y más.</span>
                            </li>
                            <li class="flex items-center pt-4 border-t border-gray-100">
                                <a href="tel:+525641749969" class="text-accent hover:text-primary transition-colors flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                    <span class="font-bold text-lg text-dark">+52 56 4174 9969</span>
                                </a>
                            </li>
                            <li class="flex items-center">
                                <a href="mailto:socialmedia@controlone.com.mx" class="text-accent hover:text-primary transition-colors flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                    <span>socialmedia@controlone.com.mx</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold text-primary mb-4">📍 Dónde Encontrarnos</h3>
                        <div class="aspect-w-16 aspect-h-9 w-full rounded-md overflow-hidden shadow-xl border border-gray-200">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3847.226097260468!2d-99.21111198912553!3d19.57928688165535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d21d90a5615a3d%3A0xb4bb76ff7e6d870b!2sControl%20One%20Platform!5e1!3m2!1ses-419!2smx!4v1765219647520!5m2!1ses-419!2smx" width="400" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <p class="mt-3 text-xs text-gray-500 text-center">
                            Haz clic en el mapa para obtener indicaciones de cómo llegar.
                        </p>
                    </div>
                    </div>
            </div>
        </div>
    </section>
</main>

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ContactPage",
    "name": "Contacto y Cotizaciones Control One",
    "description": "Solicita precios de sellos de seguridad y precintos. Envíos a todo México.",
    "mainEntity": {
        "@type": "LocalBusiness",
        "name": "Control One",
        "telephone": "+525641749969",
        "email": "socialmedia@controlone.com.mx",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Av Lago de Guadalupe km 27.5-Bodega A3",
            "addressLocality": "Tlalnepantla",
            "addressRegion": "MEX",
            "addressCountry": "MX"
        }
    }
}
</script>

<?php include 'includes/footer.php'; ?>