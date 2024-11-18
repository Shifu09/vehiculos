<!DOCTYPE html>
<html>

<head>
    <title>Reporte de Salidas</title>
    <style>
        /* Estilos CSS para el reporte */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Reporte de Salidas</h1>
    <table>
        <thead>
            <tr>
                <th>Vehículo</th>
                <th>Chofer</th>
                <th>Destino</th>
                <th>Kilometraje</th>
                <th>Fecha</th>
                <th>Observaciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($salidas as $salida)
                <tr>
                    <td>{{ $salida->destino }}</td>
                    <td>{{ $salida->vehiculo->marca }}</td>
                    <td>{{ $salida->chofer->nombre }}</td>
                    <td>{{ $salida->kilometraje }} Km</td>
                    <td>{{ $salida->fecha }}</td>
                    <td>{{ $salida->observaciones }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
