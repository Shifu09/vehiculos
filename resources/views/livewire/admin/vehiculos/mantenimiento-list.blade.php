<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Información del Vehículo -->
                        <div class="mb-4">
                            <h2 class="card-title">Información del Vehículo</h2>
                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <p><strong>Marca:</strong> {{ $vehiculo->marca }}</p>
                                </div>
                                <div class="col-md-4">
                                    <p><strong>Modelo:</strong> {{ $vehiculo->modelo }}</p>
                                </div>
                                <div class="col-md-4">
                                    <p><strong>Placa:</strong> {{ $vehiculo->placa }}</p>
                                </div>
                                <div class="col-md-4">
                                    <p><strong>Color:</strong> {{ $vehiculo->color }}</p>
                                </div>
                                <div class="col-md-4">
                                    <p><strong>Estado:</strong> {{ $vehiculo->estado }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Lista de Mantenimientos -->
                        <div>
                            <h2 class="card-title">Historial de Mantenimientos</h2>

                            @if ($mantenimientos->count() > 0)
                                <div class="table-responsive mt-3">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Fecha</th>
                                                <th>Observaciones</th>
                                                <th class="text-center">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($mantenimientos as $mantenimiento)
                                                <tr>
                                                    <td class="">
                                                        @if (is_array($mantenimiento->tipo))
                                                            {{ implode(',  ', $mantenimiento->tipo) }}
                                                        @else
                                                            {{ $mantenimiento->tipo }}
                                                        @endif
                                                    </td>
                                                    <td>{{ date('d/m/Y', strtotime($mantenimiento->fecha)) }}</td>
                                                    <td>{{ $mantenimiento->observaciones }}</td>
                                                    <td class="text-center">
                                                        <a href="{{ route('admin.mantenimiento.print', $mantenimiento->id) }}"
                                                            class="btn btn-info btn-sm" target="_blank">
                                                            <i class="fas fa-print"></i>
                                                            Imprimir
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <div class="alert alert-warning mt-3">
                                    <p class="mb-0">No hay registros de mantenimiento para este vehículo.</p>
                                </div>
                            @endif
                        </div>

                        <!-- Botón Volver -->
                        <div class="mt-4">
                            <a href="/admin/vehiculos" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i>
                                Volver a la lista
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
