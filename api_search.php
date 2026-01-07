<?php
// api_search.php - Buscador inteligente para el Chatbot
header('Content-Type: application/json; charset=utf-8');

// Incluir la base de conocimientos (Blog)
require_once __DIR__ . '/includes/data_blog.php';

$query = isset($_GET['q']) ? trim($_GET['q']) : '';
$results = [];


$q_norm = mb_strtolower($query);

// 1. CAPA DE CONVERSACIÓN (Respuestas rápidas)
$chat_response = null;

// 1. CAPA DE CONVERSACIÓN (Diccionario Expandido)
$chat_response = null;

// Definición de Intenciones y Palabras Clave (Sinónimos)
$intents = [
    'saludo' => [
        'keywords' => ['hola', 'buenos dias', 'buenas', 'que tal', 'hi', 'hey'],
        'response' => "¡Hola! 👋 Soy el Asistente de Control One. <br>Dime, ¿qué estás buscando hoy? (Ej: 'Cotizar', 'Sello de cable', 'Facturación')."
    ],
    'comercial_cotizar' => [
        'keywords' => ['precio', 'costo', 'cotiz', 'cuanto vale', 'presupuesto', 'mayoreo', '$'],
        'response' => "💰 <strong>El precio depende de la cantidad:</strong><br>No es lo mismo 1 bolsa que 10,000 piezas.<br>📝 <strong>Llena esto para darte precio real:</strong><br>👉 <a href='/contacto' class='text-accent font-bold underline'>Formulario de Cotización</a>"
    ],
    'comercial_contacto' => [
        'keywords' => ['telefono', 'celular', 'correo', 'mail', 'direccion', 'ubicacion', 'donde estan', 'localidad'],
        'response' => "📍 <strong>Estamos en Tlalnepantla, Edo. Méx.</strong><br>📞 Ventas: (55) 5864 2200<br>✉️ Email: socialmedia@controlone.com.mx"
    ],
    'admin_factura' => [
        'keywords' => ['factura', 'cfdi', 'iva', 'fiscal', 'sat', 'xml', 'deducible'],
        'response' => "✅ <strong>Sí Damos Factura.</strong><br>⚠️ <strong>OJO:</strong> Todos los precios cotizados son <strong>MÁS IVA</strong>.<br>Necesitaremos tu Constancia Fiscal (PDF) vigente."
    ],
    'admin_horario' => [
        'keywords' => ['horario', 'hora', 'abierto', 'cierran', 'dias laborales', 'sabado', 'domingo'],
        'response' => "🕒 <strong>Horario de Atención:</strong><br>Lunes a Viernes: 9:00 AM a 6:00 PM.<br>Sábados y Domingos: Cerrado."
    ],
    'servicio_personalizacion' => [
        'keywords' => ['logo', 'logotipo', 'grabado', 'laser', 'personaliz', 'nombre', 'folio', 'numeracion', 'barras'],
        'response' => "🎨 <strong>Sí Personalizamos:</strong><br>Ponemos tu <strong>LOGO</strong> y la numeración que tú quieras.<br>⚡ Es grabado LÁSER (No se borra).<br><em>*Pregunta mínimos con tu vendedor.</em>"
    ],
    'comercial_catalogo' => [
        'keywords' => ['catalogo', 'pdf', 'ficha', 'fichas', 'lista', 'brochure'],
        'response' => "📘 <strong>Catálogo de Productos:</strong><br>Aquí vienen fotos y medidas de todo.<br>👇 <strong>Pícale al botón rojo:</strong><br><a href='/assets/pdf/Catalogo.pdf' target='_blank' class='flex items-center gap-2 mt-2 text-red-600 font-bold border border-red-200 bg-red-50 p-2 rounded hover:bg-red-100 transition'>⬇️ Descargar PDF (Link Directo)</a>"
    ],
    'comercial_minimo' => [
        'keywords' => ['minimo', 'minima', 'cuantas piezas', 'menudeo', 'una pieza', '1 pieza', 'bolsa', 'poquitas'],
        'response' => "📦 <strong>Venta Mínima:</strong><br>Casi siempre es <strong>1 bolsa (100 pzas)</strong>, pero depende el modelo (algunos son por caja).<br>⛔ <strong>NO vendemos piezas sueltas.</strong>"
    ],
    'producto_cable' => [
        'keywords' => ['cable', 'acero', 'guaya', 'chicote', 'gusano', 'metalico', 'ajustable'],
        'response' => "<strong>Sellos de Cable (Acero):</strong><br>Son los tipo 'Chicote' para camiones y tráilers.<br>📏 <strong>Medidas:</strong> Normal (3.5mm) y Grueso (5mm).<br>✅ Muy resistentes."
    ],
    'producto_botella' => [
        'keywords' => ['botella', 'clavo', 'perno', 'trompo', 'high security', 'iso', 'contenedor', 'c-tpat', 'ctpat'],
        'response' => "<strong>Sellos de Clavo (Botella):</strong><br>Son los de Alta Seguridad (ISO 17712).<br>✅ Para cruzar la frontera / C-TPAT.<br>🚫 No giran (Anti-Spin)."
    ],
    'producto_plastico' => [
        'keywords' => ['plastic', 'cincho', 'indicativ', 'cola de rata', 'precinto', 'marchamo', 'tirilla', 'correilla'],
        'response' => "<strong>Sellos de Plástico (Cinchos):</strong><br>Tipo 'Cola de Rata'.<br>✅ Para camionetas de reparto, cajas de plástico o extintores.<br>📦 Ya vienen foliados."
    ],
    'humano' => [
        'keywords' => ['humano', 'persona', 'agente', 'asesor', 'real', 'alguien'],
        'response' => "Entendido. Da clic aquí para chatear con un agente real en WhatsApp: <br><a href='https://wa.me/525558642200' target='_blank' class='flex items-center gap-2 text-green-600 font-bold mt-2 bg-green-50 p-2 rounded border border-green-200 hover:bg-green-100 transition'><svg class='w-5 h-5' fill='currentColor' viewBox='0 0 24 24'><path d='M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.304-5.291c0-5.45 4.432-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z'/></svg> Clic para WhatsApp</a>"
    ]
];

// Motor de coincidencia
foreach ($intents as $key => $data) {
    foreach ($data['keywords'] as $keyword) {
        if (strpos($q_norm, $keyword) !== false) {
            $chat_response = $data['response'];
            break 2; // Romper ambos bucles si encuentra coincidencia
        }
    }
}

if ($chat_response) {
    echo json_encode(['results' => [], 'chat_message' => $chat_response]);
    exit;
}

// 2. CAPA DE BÚSQUEDA (Si no es charla, busca en el blog)
if (strlen($query) > 2) {
    // Buscar en el array de posts
    foreach ($blog_posts as $slug => $post) {
        $found = false;
        
        $titulo_norm = mb_strtolower($post['titulo']);
        $contenido_norm = mb_strtolower(strip_tags($post['contenido']));
        $extracto_norm = mb_strtolower($post['extracto']);

        // Algoritmo simple de coincidencia
        if (strpos($titulo_norm, $q_norm) !== false) {
            $found = true; 
            $relevance = 10; 
        } elseif (strpos($extracto_norm, $q_norm) !== false) {
            $found = true;
            $relevance = 5;
        } elseif (strpos($contenido_norm, $q_norm) !== false) {
            $found = true;
            $relevance = 1;
        }

        if ($found) {
            // Limitar extracto para la tarjeta
            $short_excerpt = substr($post['extracto'], 0, 80) . '...';
            
            $results[] = [
                'title' => $post['titulo'],
                'url' => '/post/' . $slug, 
                'image' => '/' . $post['imagen'], 
                'excerpt' => $short_excerpt,
                'relevance' => $relevance
            ];
        }
    }

    // Ordenar por relevancia
    usort($results, function($a, $b) {
        return $b['relevance'] - $a['relevance'];
    });

    // Limitar a top 3 resultados 
    $results = array_slice($results, 0, 3);
}

echo json_encode(['results' => $results, 'chat_message' => null]);

?>
