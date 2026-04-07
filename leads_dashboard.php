<?php
// leads_dashboard.php - Visualizador de Leads "War Room" (Versión 2.0)

// 1. SEGURIDAD
$access_key = 'ControlOne2026';
if (!isset($_GET['k']) || $_GET['k'] !== $access_key) {
    http_response_code(403);
    die("⛔ ACCESO DENEGADO. Intento de intrusión registrado.");
}

// 2. LECTURA Y PROCESAMIENTO DE DATOS
$leads = [];
$file_path = 'protegido/leads_backup.jsonl';
$today_str = date('Y-m-d');
$leads_today = 0;

// Preparar estructura para Gráfica (Últimos 7 días)
$last_7_days = [];
for ($i = 6; $i >= 0; $i--) {
    $d = date('Y-m-d', strtotime("-$i days"));
    $last_7_days[$d] = 0;
}

if (file_exists($file_path)) {
    $lines = file($file_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if ($lines !== false) {
        foreach ($lines as $line) {
            $data = json_decode($line, true);
            if ($data) {
                // Agregar al listado principal
                $leads[] = $data;
                
                // Extraer fecha corta (YYYY-MM-DD)
                $lead_date = substr($data['fecha'], 0, 10);
                
                // Contar para KPI de Hoy
                if ($lead_date === $today_str) {
                    $leads_today++;
                }

                // Contar para Gráfica
                if (isset($last_7_days[$lead_date])) {
                    $last_7_days[$lead_date]++;
                }
            }
        }
    }
    // Ordenar cronológicamente inverso (Más nuevos arriba)
    $leads = array_reverse($leads);
}

// Preparar arrays para JS
$js_labels = json_encode(array_keys($last_7_days));
$js_data = json_encode(array_values($last_7_days));
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sala de Guerra - Leads Ops</title>
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="/assets/css/output.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .font-mono { font-family: 'JetBrains Mono', monospace; }
    </style>
</head>
<body class="bg-slate-900 text-slate-200 min-h-screen">

    <!-- Navbar Táctico -->
    <nav class="bg-slate-800 border-b border-slate-700 shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-6 py-3 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <div class="h-8 w-8 bg-red-600 rounded flex items-center justify-center font-bold text-white shadow-lg animate-pulse">C1</div>
                <h1 class="font-bold text-lg tracking-wider uppercase text-slate-100">War Room <span class="text-xs bg-slate-700 px-2 py-0.5 rounded text-gray-400 align-top ml-1">v2.0</span></h1>
            </div>
            <div class="flex items-center gap-4">
                <span class="text-xs font-mono text-green-400">● Sistema Activo</span>
                <div class="flex items-center gap-2">
                    <span id="refreshCountdown" class="text-xs font-mono text-slate-500" title="Auto-refresh cada 60s">⏱ 60s</span>
                    <button id="toggleRefresh" onclick="toggleAutoRefresh()" class="bg-slate-700 hover:bg-slate-600 text-white px-2 py-1 rounded text-xs transition-colors border border-slate-600" title="Pausar/Reanudar auto-refresh">
                        ⏸
                    </button>
                    <button onclick="location.reload()" class="bg-slate-700 hover:bg-slate-600 text-white px-3 py-1 rounded text-xs transition-colors border border-slate-600">
                        🔄 Refresh
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-6 py-8">
        
        <!-- Panel de Inteligencia (KPIs + Gráfica) -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
            
            <!-- KPIs -->
            <div class="space-y-6">
                <!-- Tarjeta Total -->
                <div class="bg-slate-800 rounded-xl p-6 border border-slate-700 shadow-lg relative overflow-hidden group">
                    <div class="absolute right-0 top-0 h-full w-1 bg-blue-500"></div>
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-1">Total Leads</p>
                    <div class="flex items-baseline gap-2">
                        <span class="text-4xl font-bold text-white group-hover:text-blue-400 transition-colors"><?php echo count($leads); ?></span>
                        <span class="text-xs text-slate-500">históricos</span>
                    </div>
                </div>

                <!-- Tarjeta Hoy -->
                <div class="bg-slate-800 rounded-xl p-6 border border-slate-700 shadow-lg relative overflow-hidden group">
                    <div class="absolute right-0 top-0 h-full w-1 bg-green-500"></div>
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-1">Recibidos Hoy</p>
                    <div class="flex items-baseline gap-2">
                        <span class="text-4xl font-bold text-white group-hover:text-green-400 transition-colors"><?php echo $leads_today; ?></span>
                        <span class="text-xs text-slate-500">leads nuevos</span>
                    </div>
                </div>

                <!-- Botón Exportar -->
                <button onclick="exportTableToCSV('leads_controlone.csv')" class="w-full bg-slate-700 hover:bg-slate-600 border border-slate-600 text-white p-4 rounded-xl flex items-center justify-center gap-3 transition-all hover:shadow-lg group">
                    <svg class="w-6 h-6 text-green-400 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    <span class="font-semibold text-sm">Descargar Excel (CSV)</span>
                </button>
            </div>

            <!-- Gráfica -->
            <div class="lg:col-span-2 bg-slate-800 rounded-xl border border-slate-700 p-6 shadow-lg">
                <h3 class="text-sm font-bold text-slate-400 uppercase tracking-widest mb-4">Tendencia de Leads (7 Días)</h3>
                <div class="h-48 w-full">
                    <canvas id="leadsChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Filtros y Tabla -->
        <div class="bg-slate-800 rounded-xl border border-slate-700 shadow-lg overflow-hidden">
            
            <!-- Barra de Herramientas -->
            <div class="p-4 border-b border-slate-700 bg-slate-800/50 space-y-3">
                <!-- Fila 1: Búsqueda + Contador -->
                <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
                    <div class="relative w-full sm:w-96">
                        <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        <input type="text" id="searchInput" onkeyup="filterTable()" placeholder="Buscar por cliente, empresa o fuente..." 
                               class="w-full bg-slate-900 border border-slate-600 text-slate-200 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block pl-10 p-2.5 placeholder-slate-500 transition-all">
                    </div>
                    <div class="text-xs text-slate-500 font-mono">
                        Mostrando <span id="rowCount" class="text-white font-bold"><?php echo count($leads); ?></span> registros
                    </div>
                </div>
                <!-- Fila 2: Filtro de Fechas -->
                <div class="flex flex-wrap items-center gap-3">
                    <span class="text-xs text-slate-400 font-bold uppercase tracking-wider">📅 Rango:</span>
                    <input type="date" id="dateFrom" onchange="filterTable()" 
                           class="bg-slate-900 border border-slate-600 text-slate-200 text-xs rounded-lg px-3 py-2 focus:ring-blue-500 focus:border-blue-500 transition-all">
                    <span class="text-slate-500 text-xs">→</span>
                    <input type="date" id="dateTo" onchange="filterTable()" 
                           class="bg-slate-900 border border-slate-600 text-slate-200 text-xs rounded-lg px-3 py-2 focus:ring-blue-500 focus:border-blue-500 transition-all">
                    <button onclick="clearDateFilter()" class="text-xs text-slate-500 hover:text-red-400 transition-colors px-2 py-1 rounded hover:bg-slate-700" title="Limpiar filtro de fechas">
                        ✕ Limpiar
                    </button>
                    <div class="hidden sm:flex items-center gap-2 ml-auto">
                        <button onclick="setQuickFilter('today')" class="text-xs bg-slate-700 hover:bg-slate-600 text-slate-300 px-2 py-1 rounded border border-slate-600 transition-colors">Hoy</button>
                        <button onclick="setQuickFilter('week')" class="text-xs bg-slate-700 hover:bg-slate-600 text-slate-300 px-2 py-1 rounded border border-slate-600 transition-colors">7 días</button>
                        <button onclick="setQuickFilter('month')" class="text-xs bg-slate-700 hover:bg-slate-600 text-slate-300 px-2 py-1 rounded border border-slate-600 transition-colors">30 días</button>
                        <button onclick="setQuickFilter('all')" class="text-xs bg-slate-700 hover:bg-slate-600 text-slate-300 px-2 py-1 rounded border border-slate-600 transition-colors">Todo</button>
                    </div>
                </div>
            </div>

            <!-- Tabla -->
            <div class="overflow-x-auto">
                <table id="leadsTable" class="w-full text-sm text-left">
                    <thead class="text-xs text-slate-400 uppercase bg-slate-900/50">
                        <tr>
                            <th class="px-6 py-3">Fecha</th>
                            <th class="px-6 py-3">Cliente</th>
                            <th class="px-6 py-3">Empresa</th>
                            <th class="px-6 py-3">Contacto</th>
                            <th class="px-6 py-3">Volumen / Mensaje</th>
                            <th class="px-6 py-3">Fuente</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-700">
                        <?php if (empty($leads)): ?>
                            <tr><td colspan="6" class="px-6 py-8 text-center text-slate-500">Sin actividad registrada.</td></tr>
                        <?php else: ?>
                            <?php foreach ($leads as $lead): ?>
                            <tr class="bg-slate-800 hover:bg-slate-750 transition-colors border-l-4 border-transparent hover:border-blue-500 searchable-row">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-white font-mono text-xs"><?php echo date('Y-m-d', strtotime($lead['fecha'])); ?></div>
                                    <div class="text-slate-500 text-xs"><?php echo date('H:i', strtotime($lead['fecha'])); ?></div>
                                </td>
                                <td class="px-6 py-4 font-semibold text-white">
                                    <?php echo htmlspecialchars($lead['nombre']); ?>
                                </td>
                                <td class="px-6 py-4 text-slate-300">
                                    <?php echo htmlspecialchars($lead['empresa'] ?? '-'); ?>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex flex-col gap-1 text-xs">
                                        <a href="mailto:<?php echo $lead['email']; ?>" class="text-blue-400 hover:underline"><?php echo htmlspecialchars($lead['email']); ?></a>
                                        <span class="text-slate-400"><?php echo htmlspecialchars($lead['telefono']); ?></span>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="max-w-[200px]">
                                        <span class="bg-slate-700 text-slate-300 text-[10px] px-1.5 py-0.5 rounded uppercase font-bold mb-1 inline-block">
                                            <?php echo htmlspecialchars($lead['volumen'] ?? 'N/A'); ?>
                                        </span>
                                        <p class="text-slate-400 text-xs truncate" title="<?php echo htmlspecialchars($lead['mensaje']); ?>">
                                            <?php echo htmlspecialchars(substr($lead['mensaje'], 0, 40)); ?>...
                                        </p>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <?php 
                                        $src = $lead['origen'] ?? 'Directo';
                                        $badgeColor = match (true) {
                                            stripos($src, 'google') !== false => 'bg-green-900 text-green-300 border-green-700',
                                            stripos($src, 'directo') !== false || stripos($src, 'organico') !== false => 'bg-blue-900 text-blue-300 border-blue-700',
                                            default => 'bg-slate-700 text-slate-300 border-slate-600'
                                        };
                                    ?>
                                    <span class="text-xs px-2 py-1 rounded border <?php echo $badgeColor; ?> font-mono">
                                        <?php echo htmlspecialchars($src); ?>
                                    </span>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <script>
        // 1. Configuración de Gráfica (Chart.js)
        const ctx = document.getElementById('leadsChart').getContext('2d');
        const leadsChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: <?php echo $js_labels; ?>,
                datasets: [{
                    label: 'Leads Diarios',
                    data: <?php echo $js_data; ?>,
                    borderColor: '#3B82F6',
                    backgroundColor: 'rgba(59, 130, 246, 0.1)',
                    borderWidth: 2,
                    tension: 0.4,
                    pointBackgroundColor: '#fff',
                    pointRadius: 4,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: { stepSize: 1, color: '#94a3b8' },
                        grid: { color: '#334155' }
                    },
                    x: {
                        ticks: { color: '#94a3b8', font: { size: 10 } },
                        grid: { display: false }
                    }
                }
            }
        });

        // 2. Filtro Combinado (Búsqueda + Fechas)
        function filterTable() {
            const textFilter = document.getElementById('searchInput').value.toUpperCase();
            const dateFrom = document.getElementById('dateFrom').value;
            const dateTo = document.getElementById('dateTo').value;
            const rows = document.getElementsByClassName('searchable-row');
            let visibleCount = 0;

            // Guardar filtros en sessionStorage para que sobrevivan al auto-refresh
            sessionStorage.setItem('co_search', document.getElementById('searchInput').value);
            sessionStorage.setItem('co_dateFrom', dateFrom);
            sessionStorage.setItem('co_dateTo', dateTo);

            for (let i = 0; i < rows.length; i++) {
                const text = (rows[i].innerText || rows[i].textContent).toUpperCase();
                const rowDate = rows[i].querySelector('td .font-mono');
                const rowDateStr = rowDate ? rowDate.textContent.trim() : '';

                // Filtro de texto
                const matchesText = !textFilter || text.indexOf(textFilter) > -1;

                // Filtro de fecha desde
                const matchesFrom = !dateFrom || rowDateStr >= dateFrom;

                // Filtro de fecha hasta
                const matchesTo = !dateTo || rowDateStr <= dateTo;

                if (matchesText && matchesFrom && matchesTo) {
                    rows[i].style.display = '';
                    visibleCount++;
                } else {
                    rows[i].style.display = 'none';
                }
            }
            document.getElementById('rowCount').innerText = visibleCount;
        }

        // Limpiar filtro de fechas
        function clearDateFilter() {
            document.getElementById('dateFrom').value = '';
            document.getElementById('dateTo').value = '';
            sessionStorage.removeItem('co_dateFrom');
            sessionStorage.removeItem('co_dateTo');
            filterTable();
        }

        // Filtros rápidos (Hoy, 7 días, 30 días, Todo)
        function setQuickFilter(period) {
            const today = new Date();
            const fmt = d => d.toISOString().split('T')[0];
            const dateTo = document.getElementById('dateTo');
            const dateFrom = document.getElementById('dateFrom');

            dateTo.value = fmt(today);

            if (period === 'today') {
                dateFrom.value = fmt(today);
            } else if (period === 'week') {
                const d = new Date(today); d.setDate(d.getDate() - 7);
                dateFrom.value = fmt(d);
            } else if (period === 'month') {
                const d = new Date(today); d.setDate(d.getDate() - 30);
                dateFrom.value = fmt(d);
            } else {
                dateFrom.value = '';
                dateTo.value = '';
            }
            filterTable();
        }

        // Restaurar filtros guardados al cargar (para que no se pierdan con auto-refresh)
        (function restoreFilters() {
            const savedSearch = sessionStorage.getItem('co_search');
            const savedFrom = sessionStorage.getItem('co_dateFrom');
            const savedTo = sessionStorage.getItem('co_dateTo');
            if (savedSearch) document.getElementById('searchInput').value = savedSearch;
            if (savedFrom) document.getElementById('dateFrom').value = savedFrom;
            if (savedTo) document.getElementById('dateTo').value = savedTo;
            if (savedSearch || savedFrom || savedTo) filterTable();
        })();

        // 3. Auto-Refresh (cada 60 segundos)
        let refreshSeconds = 60;
        let refreshPaused = false;
        let refreshInterval = null;

        function startRefreshTimer() {
            refreshInterval = setInterval(() => {
                if (refreshPaused) return;
                refreshSeconds--;
                document.getElementById('refreshCountdown').textContent = '⏱ ' + refreshSeconds + 's';
                if (refreshSeconds <= 0) {
                    location.reload();
                }
            }, 1000);
        }

        function toggleAutoRefresh() {
            refreshPaused = !refreshPaused;
            const btn = document.getElementById('toggleRefresh');
            const countdown = document.getElementById('refreshCountdown');
            if (refreshPaused) {
                btn.textContent = '▶';
                btn.title = 'Reanudar auto-refresh';
                countdown.classList.add('text-red-400');
                countdown.classList.remove('text-slate-500');
                countdown.textContent = '⏸ Pausado';
            } else {
                btn.textContent = '⏸';
                btn.title = 'Pausar auto-refresh';
                countdown.classList.remove('text-red-400');
                countdown.classList.add('text-slate-500');
                refreshSeconds = 60;
            }
        }

        // Pausar auto-refresh cuando el usuario está escribiendo
        document.getElementById('searchInput').addEventListener('focus', () => {
            if (!refreshPaused) toggleAutoRefresh();
        });

        startRefreshTimer();

        // 4. Exportar a CSV
        function exportTableToCSV(filename) {
            let csv = [];
            let rows = document.querySelectorAll('table tr');
            
            for (let i = 0; i < rows.length; i++) {
                let row = [], cols = rows[i].querySelectorAll('td, th');
                if (rows[i].style.display === 'none') continue;
                
                for (let j = 0; j < cols.length; j++) {
                    let data = cols[j].innerText.replace(/(\r\n|\n|\r)/gm, ' ').replace(/\s+/g, ' ').trim();
                    row.push('"' + data + '"');
                }
                csv.push(row.join(','));
            }

            downloadCSV(csv.join('\n'), filename);
        }

        function downloadCSV(csv, filename) {
            const csvFile = new Blob([csv], {type: 'text/csv'});
            const downloadLink = document.createElement('a');
            downloadLink.download = filename;
            downloadLink.href = window.URL.createObjectURL(csvFile);
            downloadLink.style.display = 'none';
            document.body.appendChild(downloadLink);
            downloadLink.click();
        }
    </script>
</body>
</html>
