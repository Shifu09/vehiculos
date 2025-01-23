<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Reporte de Mantenimiento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header img {
            max-width: 100px;
            margin-bottom: 10px;
        }

        h1 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }

        .info-section {
            margin-bottom: 20px;
        }

        .info-section h2 {
            color: #666;
            font-size: 18px;
            margin-bottom: 10px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 5px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            margin-bottom: 20px;
        }

        .info-item {
            margin-bottom: 10px;
        }

        .info-item strong {
            color: #555;
        }

        .maintenance-details {
            margin-top: 20px;
        }

        .footer {
            margin-top: 50px;
            text-align: center;
            font-size: 12px;
            color: #666;
        }

        .date {
            text-align: right;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('img/aguamerca_logo.png'))) }}"
            alt="Logo">
        <h1>Reporte de Mantenimiento</h1>
    </div>

    <div class="date">
        <p>Fecha: {{ date('d/m/Y') }}</p>
    </div>

    <div class="info-section">
        <h2>Información del Vehículo</h2>
        <div class="info-grid">
            <div class="info-item">
                <strong>Marca:</strong> {{ $mantenimiento->vehiculo->marca }}
            </div>
            <div class="info-item">
                <strong>Modelo:</strong> {{ $mantenimiento->vehiculo->modelo }}
            </div>
            <div class="info-item">
                <strong>Placa:</strong> {{ $mantenimiento->vehiculo->placa }}
            </div>
            <div class="info-item">
                <strong>Color:</strong> {{ $mantenimiento->vehiculo->color }}
            </div>
        </div>
    </div>

    <div class="info-section">
        <h2>Detalles del Mantenimiento</h2>
        <div class="maintenance-details">
            <div class="info-item">
                <strong>Fecha del Mantenimiento:</strong> {{ date('d/m/Y', strtotime($mantenimiento->fecha)) }}
            </div>
            <div class="info-item">
                <strong>Tipo de Mantenimiento:</strong>
                @if (is_array($mantenimiento->tipo))
                    {{ implode(', ', $mantenimiento->tipo) }}
                @else
                    {{ $mantenimiento->tipo }}
                @endif
            </div>
            <div class="info-item">
                <strong>Observaciones:</strong><br>
                {{ $mantenimiento->observaciones }}
            </div>
        </div>
    </div>

    <div class="footer">
        <p>Este documento es un reporte oficial de mantenimiento de vehículos.</p>
        <p>Generado el {{ date('d/m/Y H:i:s') }}</p>
    </div>
</body>

</html>
