<tr x-data="{ modalIsOpen : false }">
    <td class="">{{ $carros->nombre }}</td>
    <td class="">{{ $carros->marca }}</td>
    <td class="">{{ $carros->color }}</td>
    
    @if(getCrudConfig('carros')->delete or getCrudConfig('carros')->update)
        <td>

            @if(getCrudConfig('carros')->update)
                <a href="@route(getRouteName().'.carros.update', $carros->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(getCrudConfig('carros')->delete)
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('Carros') ]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('Carros') ]) }}</p>
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
