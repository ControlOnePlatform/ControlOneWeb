<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radar de Amenazas - Control One</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .radar-scan {
            animation: spin 4s linear infinite;
        }
        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body class="bg-slate-900 text-slate-200 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        
        <header class="flex justify-between items-center mb-10 border-b border-slate-700 pb-4">
            <div class="flex items-center gap-4">
                <div class="relative w-12 h-12 flex items-center justify-center rounded-full bg-slate-800 border border-slate-600 overflow-hidden">
                    <div class="absolute w-full h-1/2 bg-gradient-to-t from-green-500/50 to-transparent top-1/2 left-0 right-0 origin-top radar-scan"></div>
                    <div class="z-10 bg-green-500 w-2 h-2 rounded-full shadow-[0_0_10px_#22c55e]"></div>
                </div>
                <h1 class="text-3xl font-bold text-white tracking-widest">RADAR<span class="text-green-500">.ADMIN</span></h1>
            </div>
            <a href="index.php" class="text-sm text-slate-400 hover:text-white transition-colors">Volver al Sitio</a>
        </header>

        <?php
        $log_file = 'protegido/security_log.jsonl';
        $amenazas = [];
        
        if (file_exists($log_file)) {
            $lines = file($log_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            // Leer últimas 100 líneas al revés (más recientes primero)
            $lines = array_reverse($lines);
            
            foreach ($lines as $line) {
                $data = json_decode($line, true);
                if ($data) {
                    $amenazas[] = $data;
                }
            }
        }
        
        $total_bloqueos = count($amenazas);
        ?>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-slate-800 p-6 rounded-lg border border-slate-700 relative overflow-hidden group">
                <div class="absolute -right-6 -top-6 bg-red-500/10 w-32 h-32 rounded-full blur-2xl group-hover:bg-red-500/20 transition-all"></div>
                <h3 class="text-slate-400 text-sm font-semibold uppercase mb-1">Amenazas Neutralizadas</h3>
                <p class="text-4xl font-bold text-white"><?php echo $total_bloqueos; ?></p>
            </div>
            <div class="bg-slate-800 p-6 rounded-lg border border-slate-700">
                <h3 class="text-slate-400 text-sm font-semibold uppercase mb-1">Estado del Sistema</h3>
                <p class="text-green-400 font-bold flex items-center gap-2">
                    <span class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></span>
                    ACTIVO Y VIGILANDO
                </p>
            </div>
             <div class="bg-slate-800 p-6 rounded-lg border border-slate-700">
                <h3 class="text-slate-400 text-sm font-semibold uppercase mb-1">Última Actualización</h3>
                <p class="text-slate-300 font-mono text-sm"><?php echo date('Y-m-d H:i:s'); ?></p>
            </div>
        </div>

        <div class="bg-slate-800 rounded-lg border border-slate-700 overflow-hidden shadow-2xl">
            <div class="p-4 bg-slate-800/50 border-b border-slate-700 flex justify-between items-center">
                <h2 class="text-lg font-semibold text-white">Registro de Actividad Sospechosa</h2>
                <span class="text-xs bg-slate-700 px-2 py-1 rounded text-slate-300">Últimos eventos</span>
            </div>
            
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-900/50 text-slate-400 text-xs uppercase tracking-wider">
                            <th class="p-4 font-medium">Fecha / Hora</th>
                            <th class="p-4 font-medium">IP Origen</th>
                            <th class="p-4 font-medium">Tipo de Amenaza</th>
                            <th class="p-4 font-medium">Detalle</th>
                            <th class="p-4 font-medium">User Agent</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-700 text-sm text-slate-300">
                        <?php if (empty($amenazas)): ?>
                            <tr>
                                <td colspan="5" class="p-8 text-center text-slate-500 italic">
                                    No se han detectado amenazas aún. El perímetro está seguro.
                                </td>
                            </tr>
                        <?php else: ?>
                            <?php foreach ($amenazas as $amenaza): ?>
                                <tr class="hover:bg-slate-700/50 transition-colors">
                                    <td class="p-4 font-mono text-xs text-slate-400 whitespace-nowrap">
                                        <?php echo htmlspecialchars($amenaza['fecha']); ?>
                                    </td>
                                    <td class="p-4 font-mono text-blue-300">
                                        <?php echo htmlspecialchars($amenaza['ip']); ?>
                                    </td>
                                    <td class="p-4">
                                        <?php 
                                            $tipo = htmlspecialchars($amenaza['tipo']);
                                            $color = 'bg-gray-700 text-gray-300';
                                            
                                            if (strpos($tipo, 'Honeypot') !== false) $color = 'bg-purple-900/50 text-purple-300 border border-purple-700';
                                            if (strpos($tipo, 'Captcha') !== false) $color = 'bg-yellow-900/50 text-yellow-300 border border-yellow-700';
                                            if (strpos($tipo, 'Keyword') !== false) $color = 'bg-red-900/50 text-red-300 border border-red-700';
                                        ?>
                                        <span class="px-2 py-1 rounded text-xs font-semibold <?php echo $color; ?>">
                                            <?php echo $tipo; ?>
                                        </span>
                                    </td>
                                    <td class="p-4 text-slate-400">
                                        <?php echo htmlspecialchars($amenaza['detalle']); ?>
                                    </td>
                                    <td class="p-4 text-xs text-slate-500 truncate max-w-xs" title="<?php echo htmlspecialchars($amenaza['user_agent']); ?>">
                                        <?php echo htmlspecialchars($amenaza['user_agent']); ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
</body>
</html>
