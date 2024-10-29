<tr x-data="{ modalIsOpen : false }">
    <td class="">{{ $mantenimiento->id_vehiculo }}</td>
    <td class="">{{ $mantenimiento->tipo }}</td>
    <td class="">{{ $mantenimiento->fecha }}</td>
    <td class="">{{ $mantenimiento->observaciones }}</td>
    
    @if(getCrudConfig('Mantenimiento')->delete or getCrudConfig('Mantenimiento')->update)
        <td>

            @if(getCrudConfig('Mantenimiento')->update && hasPermission(getRouteName().'.mantenimiento.update', 0, 0, $mantenimiento))
                <a href="@route(getRouteName().'.mantenimiento.update', $mantenimiento->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(getCrudConfig('Mantenimiento')->delete && hasPermission(getRouteName().'.mantenimiento.delete', 0, 0, $mantenimiento))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('Mantenimiento') ]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('Mantenimiento') ]) }}</p>
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