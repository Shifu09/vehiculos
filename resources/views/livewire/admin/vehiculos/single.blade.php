<tr x-data="{ modalIsOpen: false }">
    <td class="">{{ $vehiculos->codigo_auto }}</td>
    <td class="">{{ $vehiculos->placa }}</td>
    <td class="">{{ $vehiculos->marca }}</td>
    <td class="">{{ $vehiculos->modelo }}</td>
    <td class="">{{ $vehiculos->color }}</td>
    <td class="">{{ $vehiculos->age }}</td>
    <td class="">{{ $vehiculos->serial }}</td>
    <td class="{{ $vehiculos->estado == 'Operativo' ? 'text-success' : 'text-danger' }}">{{ $vehiculos->estado }}</td>

    @if (getCrudConfig('Vehiculos')->delete or getCrudConfig('Vehiculos')->update)
        <td>

            @if (getCrudConfig('Vehiculos')->update && hasPermission(getRouteName() . '.vehiculos.update', 1, 1, $vehiculos))
                <a href="@route(getRouteName() . '.vehiculos.update', $vehiculos->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if (getCrudConfig('Vehiculos')->delete && hasPermission(getRouteName() . '.vehiculos.delete', 1, 1, $vehiculos))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false">
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('Vehiculos')]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('Vehiculos')]) }}</p>
                        <div class="mt-5 d-flex justify-content-between">
                            <a wire:click.prevent="delete"
                                class="text-white btn btn-success shadow">{{ __('Yes, Delete it.') }}</a>
                            <a @click.prevent="modalIsOpen = false"
                                class="text-white btn btn-danger shadow">{{ __('No, Cancel it.') }}</a>
                        </div>
                    </div>
                </div>
            @endif
        </td>
    @endif
</tr>
