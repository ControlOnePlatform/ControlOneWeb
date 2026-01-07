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
        
        <div class="bg-gray-100 p-3 flex space-x-2 border-t border-gray-200">
            <input type="text" id="chat-input" 
                placeholder="Escribe tu duda..." 
                class="flex-1 border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-shadow"
                onkeypress="handleEnter(event)">
            
            <button onclick="sendQuery()" class="bg-primary text-white p-2 rounded-lg hover:bg-blue-800 transition shadow-sm">
                <svg class="w-5 h-5 transform rotate-90" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
            </button>
        </div>
        
        <div class="bg-gray-50 p-2 text-center text-[10px] text-gray-400">
            Powered by Control One AI
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
    const inputField = document.getElementById('chat-input');
    let isChatOpen = false;

    function toggleChat() {
        isChatOpen = !isChatOpen;
        if (isChatOpen) {
            chatWindow.classList.remove('hidden');
            setTimeout(() => chatWindow.classList.remove('scale-95', 'opacity-0'), 10);
            document.querySelector('#chat-bubble span')?.classList.add('hidden');
            // Foco al input al abrir
            setTimeout(() => inputField.focus(), 100);
        } else {
            chatWindow.classList.add('scale-95', 'opacity-0');
            setTimeout(() => chatWindow.classList.add('hidden'), 300);
        }
    }

    function handleEnter(e) {
        if (e.key === 'Enter') sendQuery();
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
        messages.scrollTo({ top: messages.scrollHeight, behavior: 'smooth' });
    }

    // Función de escritura simulada
    function showTyping() {
        const typingIndicator = document.createElement('div');
        typingIndicator.id = 'typing';
        typingIndicator.className = 'flex items-start';
        typingIndicator.innerHTML = '<div class="bg-gray-100 rounded-full px-4 py-2 text-xs text-gray-500 italic flex gap-1 items-center"><span>Buscando</span><span class="animate-bounce">.</span><span class="animate-bounce delay-100">.</span><span class="animate-bounce delay-200">.</span></div>';
        messages.appendChild(typingIndicator);
        messages.scrollTo({ top: messages.scrollHeight, behavior: 'smooth' });
        return typingIndicator;
    }

    async function sendQuery() {
        const query = inputField.value.trim();
        if (!query) return;

        // 1. Mostrar mensaje del usuario
        addMessage(query, true);
        inputField.value = '';

        // 2. Indicador de "Escribiendo..."
        const loader = showTyping();

        try {
            // 3. Consultar API
            const response = await fetch(`/api_search.php?q=${encodeURIComponent(query)}`);
            const data = await response.json();
            
            loader.remove(); // Quitar indicador

            // 4. Procesar respuesta
            
            // CASO A: Es una charla (Hola, Precios, etc.)
            if (data.chat_message) {
                addMessage(`<p>${data.chat_message}</p>`, false);
                return;
            }

            // CASO B: Es una búsqueda (Resultados del Blog)
            if (data.results && data.results.length > 0) {
                let html = `<p class="mb-2 font-medium">Buscando en mi base de datos... encontré esto:</p>`;
                
                data.results.forEach(item => {
                    html += `
                    <div class="flex gap-3 mb-3 border-b border-gray-100 pb-2 last:border-0 last:mb-0">
                        <img src="${item.image}" class="w-12 h-12 rounded object-cover flex-shrink-0 bg-gray-100">
                        <div>
                            <h4 class="font-bold text-xs text-primary leading-tight hover:underline">
                                <a href="${item.url}">${item.title}</a>
                            </h4>
                            <p class="text-[10px] text-gray-500 line-clamp-2 mt-1">${item.excerpt}</p>
                            <a href="${item.url}" class="text-[10px] text-accent font-bold mt-1 inline-block">Leer más &rarr;</a>
                        </div>
                    </div>`;
                });
                addMessage(html, false);
            } else {
                // CASO C: No entendí / No encontrado
                const fallbackHtml = `
                    <p class="mb-2">Mmm... no encontré información exacta sobre "${query}". 🤔</p>
                    <p class="mb-3 text-xs">¿Te gustaría hablar con un humano?</p>
                    <a href="https://wa.me/525558642200?text=Hola,%20tengo%20una%20duda%20sobre:%20${encodeURIComponent(query)}" target="_blank" class="flex items-center justify-center bg-[#25D366] text-white py-2 px-4 rounded-lg text-xs font-bold shadow-sm hover:bg-[#128C7E] transition">
                        <svg class="w-4 h-4 mr-2 filter brightness-0 invert" viewBox="0 0 24 24"><path fill="currentColor" d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.304-5.291c0-5.45 4.432-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        Escribir por WhatsApp
                    </a>
                `;
                addMessage(fallbackHtml, false);
            }

        } catch (error) {
            console.error(error);
            loader.remove();
            addMessage("Ocurrió un error de conexión. Por favor intenta de nuevo.", false);
        }
    }

    function ask(topic) {
        // Enviar la pregunta predefinida como si el usuario la escribiera
        let userText = "";
        switch(topic) {
            case 'cotizacion': userText = "Quiero cotizar"; break;
            case 'catalogo': userText = "Catalogo"; break;
            case 'certificacion': userText = "Certificacion C-TPAT"; break;
            case 'ubicacion': userText = "Ubicacion"; break;
            case 'ayuda': userText = "Ayuda humana"; break;
        }
        inputField.value = userText;
        sendQuery();
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
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;  
            overflow: hidden;
        }
    `;
    document.head.appendChild(style);
</script>