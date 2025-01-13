<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header p-0">
                <h3 class="card-title">{{ __('ListTitle', ['name' => __(\Illuminate\Support\Str::plural('Entrada'))]) }}
                </h3>

                <div class="px-2 mt-4">

                    <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                        <li class="breadcrumb-item"><a href="@route(getRouteName() . '.home')"
                                class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                        <li class="breadcrumb-item active">{{ __(\Illuminate\Support\Str::plural('Entrada')) }}</li>
                    </ul>

                    <div class="row justify-content-between mt-4 mb-4">
                        @if (getCrudConfig('Entrada')->create && hasPermission(getRouteName() . '.entradas.create', 1, 1))
                            <div class="col-md-4 right-0">
                                <a id="button" style="color: white"
                                    href="@route(getRouteName() . '.entrada.create')">{{ __('CreateTitle', ['name' => __('Entrada')]) }}</a>
                            </div>
                        @endif
                        @if (getCrudConfig('Entrada')->searchable())
                            <div class="col-md-4">
                                <div class="input-group">
                                    <input type="text" class="form-control"
                                        @if (config('easy_panel.lazy_mode')) wire:model.lazy="search" @else wire:model="search" @endif
                                        placeholder="{{ __('Search') }}" value="{{ request('search') }}">
                                    <div class="input-group-append">
                                        <button class="btn btn-default">
                                            <a wire:target="search" wire:loading.remove><i class="fa fa-search"></i></a>
                                            <a wire:loading wire:target="search"><i
                                                    class="fas fa-spinner fa-spin"></i></a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="card-body table-responsive p-0">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col" style='cursor: pointer' wire:click="sort('id_vehiculo')"> <i
                                    class='fa @if ($sortType == 'desc' and $sortColumn == 'id_vehiculo') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'id_vehiculo') fa-sort-amount-up ml-2 @endif'></i>
                                {{ __('Vehiculo') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('id_vehiculo')"> <i
                                    class='fa @if ($sortType == 'desc' and $sortColumn == 'modelo') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'modelo') fa-sort-amount-up ml-2 @endif'></i>
                                {{ __('Placa') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('id_chofer')"> <i
                                    class='fa @if ($sortType == 'desc' and $sortColumn == 'id_chofer') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'id_chofer') fa-sort-amount-up ml-2 @endif'></i>
                                {{ __('Chofer') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('fecha')"> <i
                                    class='fa @if ($sortType == 'desc' and $sortColumn == 'fecha') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'fecha') fa-sort-amount-up ml-2 @endif'></i>
                                {{ __('Fecha') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('kilometraje')"> <i
                                    class='fa @if ($sortType == 'desc' and $sortColumn == 'kilometraje') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'kilometraje') fa-sort-amount-up ml-2 @endif'></i>
                                {{ __('Kilometraje') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('observaciones')"> <i
                                    class='fa @if ($sortType == 'desc' and $sortColumn == 'observaciones') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'observaciones') fa-sort-amount-up ml-2 @endif'></i>
                                {{ __('Observaciones') }} </th>

                            @if (getCrudConfig('Entrada')->delete or getCrudConfig('Entrada')->update)
                                <th scope="col">{{ __('Action') }}</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($entradas as $entrada)
                            @livewire('admin.entrada.single', [$entrada], key($entrada->id))
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="m-auto pt-3 pr-3">
                {{ $entradas->appends(request()->query())->links() }}
            </div>

            <div wire:loading wire:target="nextPage,gotoPage,previousPage" class="loader-page"></div>

        </div>
    </div>
</div>
<style>
    #button {
        font-size: 14px;
        padding: 1em 2.7em;
        font-weight: 500;
        background: linear-gradient(90deg, rgba(135, 113, 234, 1) 0%, rgba(125, 114, 234, 1) 19%,
                rgba(120, 119, 241, 1) 44%, rgba(110, 117, 233, 1) 64%, rgba(99, 118, 232, 1) 86%, rgba(2, 0, 36, 1) 135%);
        color: white;
        border: none;
        position: relative;
        overflow: hidden;
        border-radius: 0.6em;
        cursor: pointer;
    }

    #button:hover .transition {
        width: 17em;
        height: 17em;
    }

    #button:active {
        transform: scale(0.97);
    }
</style>
