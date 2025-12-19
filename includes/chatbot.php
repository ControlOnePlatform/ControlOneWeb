<div id="control-one-chat" class="fixed bottom-6 right-6 z-50 flex flex-col items-end font-sans">
    
    <div id="chat-window" class="hidden bg-white w-80 md:w-96 rounded-xl shadow-2xl border border-gray-200 overflow-hidden mb-4 transition-all duration-300 transform origin-bottom-right scale-95 opacity-0 flex flex-col max-h-[500px]">
        
        <div class="bg-primary p-4 flex justify-between items-center text-white shadow-md">
            <div class="flex items-center space-x-3">
                <div class="relative">
                    <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-primary font-bold">
                        <img src="/assets/img/icon.png" alt="Bot" class="w-6 h-6 object-contain">
                    </div>
                    <div class="w-3 h-3 bg-green-500 rounded-full absolute bottom-0 right-0 border-2 border-primary"></div>
                </div>
                <div>
                    <h3 class="font-bold text-sm">Soporte Control One</h3>
                    <p class="text-xs text-gray-300">En línea ahora</p>
                </div>
            </div>
            <button onclick="toggleChat()" class="text-white hover:text-accent focus:outline-none transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>

        <div id="chat-messages" class="flex-1 overflow-y-auto p-4 bg-gray-50 space-y-4 text-sm scroll-smooth">
            
            <div class="flex items-start">
                <div class="bg-white border border-gray-200 rounded-2xl rounded-tl-none p-4 shadow-sm max-w-[90%] text-gray-700">
                    <p>Hola 👋, bienvenido a Control One. Soy tu asistente virtual.</p>
                    <p class="mt-2 font-medium text-primary">Selecciona una pregunta para ayudarte rápido:</p>
                </div>
            </div>
            
            <div class="grid gap-2 pr-8" id="initial-options">
                <button onclick="ask('cotizacion')" class="chat-btn text-left px-4 py-3 bg-white border border-gray-200 text-gray-700 hover:bg-blue-50 hover:border-blue-200 hover:text-primary rounded-xl transition-all shadow-sm text-xs font-semibold flex items-center group">
                    <span class="mr-2 text-lg">💵</span> Quiero cotizar precios
                    <svg class="w-4 h-4 ml-auto opacity-0 group-hover:opacity-100 text-primary transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>

                <button onclick="ask('catalogo')" class="chat-btn text-left px-4 py-3 bg-white border border-gray-200 text-gray-700 hover:bg-blue-50 hover:border-blue-200 hover:text-primary rounded-xl transition-all shadow-sm text-xs font-semibold flex items-center group">
                    <span class="mr-2 text-lg">📘</span> Descargar Catálogo PDF
                    <svg class="w-4 h-4 ml-auto opacity-0 group-hover:opacity-100 text-primary transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>

                <button onclick="ask('certificacion')" class="chat-btn text-left px-4 py-3 bg-white border border-gray-200 text-gray-700 hover:bg-blue-50 hover:border-blue-200 hover:text-primary rounded-xl transition-all shadow-sm text-xs font-semibold flex items-center group">
                    <span class="mr-2 text-lg">🏆</span> ¿Tienen certificación C-TPAT?
                    <svg class="w-4 h-4 ml-auto opacity-0 group-hover:opacity-100 text-primary transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>

                <button onclick="ask('ubicacion')" class="chat-btn text-left px-4 py-3 bg-white border border-gray-200 text-gray-700 hover:bg-blue-50 hover:border-blue-200 hover:text-primary rounded-xl transition-all shadow-sm text-xs font-semibold flex items-center group">
                    <span class="mr-2 text-lg">📍</span> ¿Dónde están ubicados?
                    <svg class="w-4 h-4 ml-auto opacity-0 group-hover:opacity-100 text-primary transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>

                 <button onclick="ask('ayuda')" class="chat-btn text-left px-4 py-3 bg-white border border-gray-200 text-gray-700 hover:bg-blue-50 hover:border-blue-200 hover:text-primary rounded-xl transition-all shadow-sm text-xs font-semibold flex items-center group">
                    <span class="mr-2 text-lg">👨‍💼</span> Hablar con un humano
                    <svg class="w-4 h-4 ml-auto opacity-0 group-hover:opacity-100 text-primary transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>
            </div>
        </div>
        
        <div class="bg-gray-100 p-3 text-center text-xs text-gray-400 border-t border-gray-200">
            Powered by Control One Technology
        </div>

    </div>

    <button id="chat-bubble" onclick="toggleChat()" class="group flex items-center justify-center bg-accent hover:bg-orange-600 text-white w-14 h-14 rounded-full shadow-lg transition-all transform hover:scale-110 hover:rotate-3 focus:outline-none focus:ring-4 focus:ring-orange-300">
        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
        
        <span class="absolute top-0 right-0 block h-3 w-3 rounded-full ring-2 ring-white bg-red-500 animate-pulse"></span>
    </button>
</div>

<script>
    const chatWindow = document.getElementById('chat-window');
    const messages = document.getElementById('chat-messages');
    let isChatOpen = false;

    function toggleChat() {
        isChatOpen = !isChatOpen;
        if (isChatOpen) {
            chatWindow.classList.remove('hidden');
            setTimeout(() => chatWindow.classList.remove('scale-95', 'opacity-0'), 10);
            // Ocultar notificación roja al abrir
            document.querySelector('#chat-bubble span')?.classList.add('hidden');
        } else {
            chatWindow.classList.add('scale-95', 'opacity-0');
            setTimeout(() => chatWindow.classList.add('hidden'), 300);
        }
    }

    function addMessage(html, isUser = false) {
        const div = document.createElement('div');
        div.className = isUser ? 'flex justify-end animate-fade-in-up' : 'flex items-start animate-fade-in-up';
        
        const bubble = document.createElement('div');
        bubble.className = isUser 
            ? 'bg-primary text-white rounded-2xl rounded-tr-none p-3 shadow-sm max-w-[85%] text-sm' 
            : 'bg-white border border-gray-200 rounded-2xl rounded-tl-none p-3 shadow-sm max-w-[90%] text-sm text-gray-700';
        
        bubble.innerHTML = html;
        div.appendChild(bubble);
        messages.appendChild(div);
        
        // Auto-scroll al fondo
        messages.scrollTo({ top: messages.scrollHeight, behavior: 'smooth' });
    }

    function ask(topic) {
        // 1. Mostrar lo que el usuario preguntó
        let userText = "";
        switch(topic) {
            case 'cotizacion': userText = "Quiero cotizar precios"; break;
            case 'catalogo': userText = "Descargar Catálogo"; break;
            case 'certificacion': userText = "¿Tienen certificación C-TPAT?"; break;
            case 'ubicacion': userText = "¿Dónde están ubicados?"; break;
            case 'ayuda': userText = "Hablar con un humano"; break;
        }
        addMessage(userText, true);

        // Ocultar opciones iniciales para limpiar la vista (opcional)
        // document.getElementById('initial-options').style.display = 'none';

        // 2. Simular "Escribiendo..." (Delay de 600ms)
        const typingIndicator = document.createElement('div');
        typingIndicator.id = 'typing';
        typingIndicator.className = 'flex items-start';
        typingIndicator.innerHTML = '<div class="bg-gray-100 rounded-full px-4 py-2 text-xs text-gray-500 italic">Escribiendo...</div>';
        messages.appendChild(typingIndicator);
        messages.scrollTo({ top: messages.scrollHeight, behavior: 'smooth' });

        setTimeout(() => {
            // Borrar indicador
            typingIndicator.remove();

            let botResponse = "";
            
            if (topic === 'cotizacion') {
                botResponse = `
                    <p class="mb-2">¡Excelente! Como somos fabricantes, necesitamos saber el volumen para darte el mejor precio.</p>
                    <a href="/contacto" class="block w-full text-center bg-accent text-white py-2 rounded-lg font-bold hover:bg-orange-600 transition">📝 Ir al Formulario de Cotización</a>
                    <p class="mt-2 text-xs text-gray-500">Respondemos en menos de 1 hora.</p>
                `;
            } 
            else if (topic === 'catalogo') {
                botResponse = `
                    <p class="mb-2">Aquí tienes el enlace directo:</p>
                    <a href="/assets/pdf/Catalogo.pdf" target="_blank" class="flex items-center p-2 border border-gray-300 rounded-lg hover:bg-gray-50 group">
                        <svg class="w-8 h-8 text-red-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                        <div class="text-left">
                            <span class="block font-bold text-gray-800 text-xs">Catálogo 2025.pdf</span>
                            <span class="block text-gray-500 text-[10px]">3.5 MB • Clic para abrir</span>
                        </div>
                    </a>
                `;
            }
            else if (topic === 'certificacion') {
                botResponse = `
                    <p class="mb-2">✅ <strong>Sí, 100% garantizado.</strong></p>
                    <p class="mb-2">Nuestros sellos de Alta Seguridad (como el <em>Star One</em> y <em>C-ONE 316</em>) cumplen con la norma <strong>ISO 17712:2013 "H"</strong>.</p>
                    <p>Son aceptados por C-TPAT para exportación a USA y Europa. Entregamos certificado de laboratorio con tu compra.</p>
                `;
            }
            else if (topic === 'ubicacion') {
                botResponse = `
                    <p class="mb-2">Nuestra planta y bodega principal está en:</p>
                    <p class="font-medium text-primary mb-2">📍 Tlalnepantla, Estado de México.</p>
                    <p>Desde aquí enviamos a todo el país (Monterrey, GDL, Querétaro, Tijuana) con tiempos de entrega de 24 a 48 hrs.</p>
                `;
            }
            else if (topic === 'ayuda') {
                botResponse = `
                    <p>Claro, puedes llamarnos directamente:</p>
                    <a href="tel:+525558642200" class="text-accent font-bold text-lg hover:underline block my-2">📞 (55) 5864 2200</a>
                    <p>O mándanos un correo a <a href="mailto:socialmedia@controlone.com.mx" class="text-primary underline">socialmedia@controlone.com.mx</a></p>
                `;
            }

            addMessage(botResponse, false);

        }, 800); // 800ms de delay para que se sienta natural
    }

    // Animación simple CSS en JS
    const style = document.createElement('style');
    style.innerHTML = `
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in-up {
            animation: fadeInUp 0.3s ease-out forwards;
        }
    `;
    document.head.appendChild(style);
</script>