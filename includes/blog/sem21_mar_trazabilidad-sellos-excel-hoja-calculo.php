<?php
// 106. MARTES 7 ABR -> TRAZABILIDAD CON EXCEL
return [
    'slug'             => 'trazabilidad-sellos-seguridad-excel-hoja-calculo',
    'titulo'           => 'Cómo Llevar el Control de Sellos de Seguridad con Excel (Plantilla Gratis)',
    'meta_description' => 'No necesitas un ERP caro para rastrear tus sellos. Te enseñamos a crear una hoja de cálculo de trazabilidad con campos de folio, fecha, operador, ruta y estatus. Descarga la plantilla.',
    'autor'            => 'Control One Operaciones',
    'fecha'            => '2026-04-07',
    'categoria'        => 'Gestión y Control Interno',
    'imagen'           => 'assets/img/blog/sem21_mar_trazabilidad-sellos-excel-hoja-calculo.avif',
    'extracto'         => '¿Compras sellos foliados pero nunca sabes cuántos usaste, quién los colocó ni en qué unidad? Con una simple hoja de cálculo puedes tener trazabilidad completa sin invertir en software.',
    'contenido'        => '
            <p class="lead text-xl text-gray-600 mb-6 font-medium">
                El sello de seguridad más caro del mundo es inútil si no llevas registro de quién lo colocó, dónde, cuándo y cuál fue su folio. La <strong>trazabilidad</strong> es lo que convierte un pedazo de plástico o metal en evidencia legal. Y no necesitas un sistema de $500,000 para empezar: una hoja de Excel bien diseñada es tu mejor aliado.
            </p>

            <h2 class="text-2xl font-bold text-primary mt-8 mb-4">¿Por Qué Tus Sellos Necesitan Trazabilidad?</h2>
            <p class="mb-4">
                Sin un registro centralizado, ocurre lo siguiente:
            </p>
            <ul class="list-disc pl-6 mb-6 space-y-2 text-gray-700">
                <li>Compras 10,000 sellos al año pero no sabes cuántos se <strong>desperdiciaron</strong> por mala colocación.</li>
                <li>Un chofer reporta "sello roto" pero nadie puede verificar si el folio coincide con el <strong>asignado originalmente</strong>.</li>
                <li>En una auditoría <a href="/post/auditoria-manejo-sellos-seguridad" class="text-accent hover:underline">C-TPAT</a>, te piden la bitácora de sellos y solo tienes una libreta con anotaciones ilegibles.</li>
                <li>Descubres mermas pero no puedes <strong>cruzar datos</strong> de folio del sello vs. ruta vs. operador.</li>
            </ul>

            <h2 class="text-2xl font-bold text-primary mt-8 mb-4">Los 12 Campos Esenciales de tu Hoja de Control</h2>
            <div class="overflow-x-auto my-6">
                <table class="w-full text-sm border-collapse">
                    <thead>
                        <tr class="bg-primary text-white">
                            <th class="p-3 text-left">#</th>
                            <th class="p-3 text-left">Campo</th>
                            <th class="p-3 text-left">Ejemplo</th>
                            <th class="p-3 text-left">¿Para qué sirve?</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        <tr class="bg-white"><td class="p-3">1</td><td class="p-3 font-bold">Folio del Sello</td><td class="p-3">CO-2026-045832</td><td class="p-3">Identificador único e irrepetible</td></tr>
                        <tr class="bg-gray-50"><td class="p-3">2</td><td class="p-3 font-bold">Tipo de Sello</td><td class="p-3">Cable / Botella / Cintillo</td><td class="p-3">Saber qué producto se usó</td></tr>
                        <tr class="bg-white"><td class="p-3">3</td><td class="p-3 font-bold">Fecha Colocación</td><td class="p-3">2026-04-07 08:30</td><td class="p-3">Cuándo se selló la unidad</td></tr>
                        <tr class="bg-gray-50"><td class="p-3">4</td><td class="p-3 font-bold">Operador que Selló</td><td class="p-3">Juan Pérez</td><td class="p-3">Responsable individual</td></tr>
                        <tr class="bg-white"><td class="p-3">5</td><td class="p-3 font-bold">Unidad / Contenedor</td><td class="p-3">TGHU-4820193</td><td class="p-3">A qué vehículo se asignó</td></tr>
                        <tr class="bg-gray-50"><td class="p-3">6</td><td class="p-3 font-bold">Ruta / Destino</td><td class="p-3">CDMX → Monterrey</td><td class="p-3">Cruzar con incidencias por ruta</td></tr>
                        <tr class="bg-white"><td class="p-3">7</td><td class="p-3 font-bold">Cliente</td><td class="p-3">Empresa X</td><td class="p-3">Segmentar por cuenta</td></tr>
                        <tr class="bg-gray-50"><td class="p-3">8</td><td class="p-3 font-bold">Fecha Retiro</td><td class="p-3">2026-04-08 14:00</td><td class="p-3">Cuándo se rompió el sello</td></tr>
                        <tr class="bg-white"><td class="p-3">9</td><td class="p-3 font-bold">Operador que Retiró</td><td class="p-3">Carlos López</td><td class="p-3">Quién abrió la unidad</td></tr>
                        <tr class="bg-gray-50"><td class="p-3">10</td><td class="p-3 font-bold">Estado del Sello</td><td class="p-3">Intacto / Violado / Dañado</td><td class="p-3">Detectar anomalías</td></tr>
                        <tr class="bg-white"><td class="p-3">11</td><td class="p-3 font-bold">Foto (Sí/No)</td><td class="p-3">Sí - carpeta compartida</td><td class="p-3">Evidencia documental</td></tr>
                        <tr class="bg-gray-50"><td class="p-3">12</td><td class="p-3 font-bold">Observaciones</td><td class="p-3">Sello con rasguño menor</td><td class="p-3">Capturar contexto libre</td></tr>
                    </tbody>
                </table>
            </div>

            <h2 class="text-2xl font-bold text-primary mt-8 mb-4">3 Reglas de Oro para que Funcione</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 my-6">
                <div class="bg-green-50 p-5 rounded-lg border border-green-200 text-center">
                    <span class="text-3xl mb-2 block">📝</span>
                    <h4 class="font-bold text-primary mb-2">Registrar AL MOMENTO</h4>
                    <p class="text-sm text-gray-600">Si el operador apunta el folio 3 horas después, ya no es confiable. El registro debe ser en tiempo real, idealmente con foto del sello colocado.</p>
                </div>
                <div class="bg-green-50 p-5 rounded-lg border border-green-200 text-center">
                    <span class="text-3xl mb-2 block">🔒</span>
                    <h4 class="font-bold text-primary mb-2">Acceso Controlado</h4>
                    <p class="text-sm text-gray-600">La hoja debe estar en Google Sheets o SharePoint con permisos. Solo el supervisor puede editar registros pasados. Los operadores solo agregan filas nuevas.</p>
                </div>
                <div class="bg-green-50 p-5 rounded-lg border border-green-200 text-center">
                    <span class="text-3xl mb-2 block">📊</span>
                    <h4 class="font-bold text-primary mb-2">Revisar SEMANAL</h4>
                    <p class="text-sm text-gray-600">Cada lunes, cruza: sellos entregados vs. sellos registrados. La diferencia son sellos sin trazabilidad = riesgo operativo. (Relacionado: <a href="/post/kpis-seguridad-2026" class="text-accent hover:underline">KPIs de seguridad</a>).</p>
                </div>
            </div>

            <h2 class="text-2xl font-bold text-primary mt-8 mb-4">¿Cuándo Pasar de Excel a un Sistema Especializado?</h2>
            <p class="mb-4">
                Excel funciona perfectamente hasta <strong>~500 sellos mensuales</strong>. Si tu operación supera ese volumen, considera un sistema con lectura de código de barras o <a href="/post/tecnologia-rfid-vs-sellos-tradicionales" class="text-accent hover:underline">RFID</a>. Pero recuerda: un Excel bien llevado supera a un ERP mal implementado. La disciplina vale más que la tecnología.
            </p>

            <div class="bg-gradient-to-r from-green-50 to-emerald-50 border-l-4 border-accent p-6 my-8 rounded-r-lg">
                <h3 class="font-bold text-primary mb-2">💡 Consejo Control One:</h3>
                <p class="text-sm">Todos nuestros sellos vienen con <strong>folio único consecutivo</strong>. Si compras un lote del folio 45,000 al 50,000, puedes crear tu hoja de control con esos 5,000 folios pre-cargados y simplemente ir llenando los campos conforme se usan. Así detectas al instante si falta alguno.</p>
            </div>

            <div class="mt-8 text-center flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contacto?producto=trazabilidad" class="inline-block bg-primary hover:bg-gray-800 text-white px-8 py-3 rounded-md font-bold transition-all shadow-lg">
                    Solicitar Asesoría de Trazabilidad
                </a>
                <a href="/productos" class="inline-block bg-white border-2 border-primary text-primary hover:bg-gray-50 px-8 py-3 rounded-md font-bold transition-all">
                    Ver Sellos Foliados
                </a>
            </div>
        '
];
