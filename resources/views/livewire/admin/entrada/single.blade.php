<tr x-data="{ modalIsOpen : false }">
    <td class="">{{ $entrada->id_vehiculo }}</td>
    <td class="">{{ $entrada->id_chofer }}</td>
    <td class="">{{ $entrada->fecha }}</td>
    <td class="">{{ $entrada->kilometraje }}</td>
    <td class="">{{ $entrada->observaciones }}</td>
    
    @if(getCrudConfig('Entrada')->delete or getCrudConfig('Entrada')->update)
        <td>

            @if(getCrudConfig('Entrada')->update && hasPermission(getRouteName().'.entradas.update', 1, 1, $entrada))
                <a href="@route(getRouteName().'.entradas.update', $entrada->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(getCrudConfig('Entrada')->delete && hasPermission(getRouteName().'.entradas.delete', 1, 1, $entrada))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('Entrada') ]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('Entrada') ]) }}</p>
                        <div class="mt-5 d-flex justify-content-between">
                            <a wire:click.prevent="delete" class="text-white btn btn-success shadow">{{ __('Yes, Delete it.') }}</a>
                            <a @click.prevent="modalIsOpen = false" class="text-white btn btn-danger shadow">{{ __('No, Cancel it.') }}</a>
                        </div>
                    </div>
                </div>
            @endif
        </td>
    @endif
</tr>
