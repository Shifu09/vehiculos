<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header p-0">
                <h3 class="card-title">
                    {{ __('ListTitle', ['name' => __(\Illuminate\Support\Str::plural('Vehiculos'))]) }}</h3>

                <div class="px-2 mt-4">

                    <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                        <li class="breadcrumb-item"><a href="@route(getRouteName() . '.home')"
                                class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                        <li class="breadcrumb-item active">{{ __(\Illuminate\Support\Str::plural('Vehiculos')) }}</li>
                    </ul>

                    <div class="row justify-content-between mt-4 mb-4">
                        @if (getCrudConfig('Vehiculos')->create && hasPermission(getRouteName() . '.vehiculos.create', 1, 1))
                            <div class="col-md-4 right-0">
                                <a id="boton" style="color: white"
                                    href="@route(getRouteName() . '.vehiculos.create')">{{ __('CreateTitle', ['name' => __('Vehiculos')]) }}</a>
                            </div>
                        @endif
                        @if (getCrudConfig('Vehiculos')->searchable())
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
                            <th scope="col" style='cursor: pointer' wire:click="sort('codigo_auto')"> <i
                                    class='fa @if ($sortType == 'desc' and $sortColumn == 'codigo_auto') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'codigo_auto') fa-sort-amount-up ml-2 @endif'></i>
                                {{ __('Codigo_auto') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('placa')"> <i
                                    class='fa @if ($sortType == 'desc' and $sortColumn == 'placa') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'placa') fa-sort-amount-up ml-2 @endif'></i>
                                {{ __('Placa') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('marca')"> <i
                                    class='fa @if ($sortType == 'desc' and $sortColumn == 'marca') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'marca') fa-sort-amount-up ml-2 @endif'></i>
                                {{ __('Marca') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('modelo')"> <i
                                    class='fa @if ($sortType == 'desc' and $sortColumn == 'modelo') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'modelo') fa-sort-amount-up ml-2 @endif'></i>
                                {{ __('Modelo') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('color')"> <i
                                    class='fa @if ($sortType == 'desc' and $sortColumn == 'color') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'color') fa-sort-amount-up ml-2 @endif'></i>
                                {{ __('Color') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('age')"> <i
                                    class='fa @if ($sortType == 'desc' and $sortColumn == 'age') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'age') fa-sort-amount-up ml-2 @endif'></i>
                                {{ __('Age') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('serial')"> <i
                                    class='fa @if ($sortType == 'desc' and $sortColumn == 'serial') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'serial') fa-sort-amount-up ml-2 @endif'></i>
                                {{ __('Serial') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('estado')"> <i
                                    class='fa @if ($sortType == 'desc' and $sortColumn == 'estado') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'estado') fa-sort-amount-up ml-2 @endif'></i>
                                {{ __('Estado') }} </th>

                            @if (getCrudConfig('Vehiculos')->delete or getCrudConfig('Vehiculos')->update)
                                <th scope="col">{{ __('Action') }}</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vehiculoss as $vehiculos)
                            @livewire('admin.vehiculos.single', [$vehiculos], key($vehiculos->id))
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="m-auto pt-3 pr-3">
                {{ $vehiculoss->appends(request()->query())->links() }}
            </div>

            <div wire:loading wire:target="nextPage,gotoPage,previousPage" class="loader-page"></div>

        </div>
    </div>
</div>
<style>
    #boton {
        font-size: 14px;
        padding: 1em 2.7em;
        font-weight: 500;
        background: rgb(135, 113, 234);
        color: white;
        border: none;
        position: relative;
        overflow: hidden;
        border-radius: 0.6em;
        cursor: pointer;
    }
</style>
