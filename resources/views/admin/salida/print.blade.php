<!DOCTYPE html>
<html>
<head>
    <title>Reporte de Salida de Vehículo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.6;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
        }
        .content {
            margin-bottom: 20px;
        }
        .section {
            margin-bottom: 25px;
        }
        .info-row {
            margin-bottom: 10px;
        }
        .label {
            font-weight: bold;
            margin-right: 10px;
            min-width: 150px;
            display: inline-block;
        }
        .value {
            display: inline-block;
        }
        .title {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }
        .subtitle {
            font-size: 18px;
            margin-bottom: 15px;
            color: #666;
            border-bottom: 1px solid #ccc;
            padding-bottom: 5px;
        }
        .footer {
            margin-top: 50px;
            text-align: center;
            font-size: 12px;
            color: #666;
            border-top: 1px solid #ccc;
            padding-top: 20px;
        }
        .observaciones {
            margin-top: 20px;
            padding: 10px;
            background-color: #f9f9f9;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1 class="title">Reporte de Salida de Vehículo</h1>
        <p>Fecha de impresión: {{ date('d/m/Y H:i:s') }}</p>
    </div>

    <div class="content">
        <div class="section">
            <h2 class="subtitle">Información del Vehículo</h2>
            <div class="info-row">
                <span class="label">Marca:</span>
                <span class="value">{{ $salida->vehiculo->marca }}</span>
            </div>
            <div class="info-row">
                <span class="label">Modelo:</span>
                <span class="value">{{ $salida->vehiculo->modelo }}</span>
            </div>
            <div class="info-row">
                <span class="label">Placa:</span>
                <span class="value">{{ $salida->vehiculo->placa }}</span>
            </div>
            <div class="info-row">
                <span class="label">Color:</span>
                <span class="value">{{ $salida->vehiculo->color }}</span>
            </div>
        </div>

        <div class="section">
            <h2 class="subtitle">Información del Chofer</h2>
            <div class="info-row">
                <span class="label">Nombre:</span>
                <span class="value">{{ $salida->chofer->nombre }} {{ $salida->chofer->apellido }}</span>
            </div>
            <div class="info-row">
                <span class="label">Cédula:</span>
                <span class="value">{{ $salida->chofer->cedula }}</span>
            </div>
            <div class="info-row">
                <span class="label">Teléfono:</span>
                <span class="value">{{ $salida->chofer->telefono }}</span>
            </div>
        </div>

        <div class="section">
            <h2 class="subtitle">Detalles de la Salida</h2>
            <div class="info-row">
                <span class="label">Destino:</span>
                <span class="value">{{ $salida->destino }}</span>
            </div>
            <div class="info-row">
                <span class="label">Kilometraje:</span>
                <span class="value">{{ $salida->kilometraje }} km</span>
            </div>
            <div class="info-row">
                <span class="label">Fecha y Hora:</span>
                <span class="value">{{ date('d/m/Y H:i', strtotime($salida->fecha)) }}</span>
            </div>
            
            <div class="observaciones">
                <span class="label">Observaciones:</span>
                <p>{{ $salida->observaciones }}</p>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>Este documento es un comprobante oficial de salida de vehículo.</p>
        <p>Fecha y hora de generación: {{ date('d/m/Y H:i:s') }}</p>
    </div>
</body>
</html>
