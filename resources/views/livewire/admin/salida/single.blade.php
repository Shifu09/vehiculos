<tr x-data="{ modalIsOpen: false }">
    <td class="">{{ $salida->vehiculo->marca }}</td>
    <td class="">{{ $salida->vehiculo->placa }}</td>
    <td class="">{{ $salida->chofer->nombre }}</td>
    <td class="">{{ $salida->destino }}</td>
    <td class="">{{ $salida->kilometraje . ' Km' }}</td>
    <td class="">{{ $salida->fecha }}</td>
    <td class="">{{ $salida->observaciones }}</td>
    {{-- <td>
        <a href="{{ route('salida.pdf', $salida->id) }}" class="btn btn-success">PDF</a>
    </td> --}}

    @if (getCrudConfig('Salida')->delete or getCrudConfig('Salida')->update)
        <td>

            @if (getCrudConfig('Salida')->update && hasPermission(getRouteName() . '.salida.update', 1, 1, $salida))
                <a href="@route(getRouteName() . '.salida.update', $salida->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if (getCrudConfig('Salida')->delete && hasPermission(getRouteName() . '.salida.delete', 1, 1, $salida))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false">
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('Salida')]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('Salida')]) }}</p>
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
