<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header p-0">
                <h3 class="card-title">{{ __('ListTitle', ['name' => __(\Illuminate\Support\Str::plural('Mantenimiento')) ]) }}</h3>

                <div class="px-2 mt-4">

                    <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                        <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                        <li class="breadcrumb-item active">{{ __(\Illuminate\Support\Str::plural('Mantenimiento')) }}</li>
                    </ul>

                    <div class="row justify-content-between mt-4 mb-4">
                        @if(getCrudConfig('Mantenimiento')->create && hasPermission(getRouteName().'.mantenimiento.create', 0, 0))
                        <div class="col-md-4 right-0">
                            <a href="@route(getRouteName().'.mantenimiento.create')" class="btn btn-success">{{ __('CreateTitle', ['name' => __('Mantenimiento') ]) }}</a>
                        </div>
                        @endif
                        @if(getCrudConfig('Mantenimiento')->searchable())
                        <div class="col-md-4">
                            <div class="input-group">
                                <input type="text" class="form-control" @if(config('easy_panel.lazy_mode')) wire:model.lazy="search" @else wire:model="search" @endif placeholder="{{ __('Search') }}" value="{{ request('search') }}">
                                <div class="input-group-append">
                                    <button class="btn btn-default">
                                        <a wire:target="search" wire:loading.remove><i class="fa fa-search"></i></a>
                                        <a wire:loading wire:target="search"><i class="fas fa-spinner fa-spin" ></i></a>
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
                            <th scope="col" style='cursor: pointer' wire:click="sort('id_vehiculo')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'id_vehiculo') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'id_vehiculo') fa-sort-amount-up ml-2 @endif'></i> {{ __('Id_vehiculo') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('tipo')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'tipo') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'tipo') fa-sort-amount-up ml-2 @endif'></i> {{ __('Tipo') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('fecha')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'fecha') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'fecha') fa-sort-amount-up ml-2 @endif'></i> {{ __('Fecha') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('observaciones')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'observaciones') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'observaciones') fa-sort-amount-up ml-2 @endif'></i> {{ __('Observaciones') }} </th>
                            
                            @if(getCrudConfig('Mantenimiento')->delete or getCrudConfig('Mantenimiento')->update)
                                <th scope="col">{{ __('Action') }}</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mantenimientos as $mantenimiento)
                            @livewire('admin.mantenimiento.single', [$mantenimiento], key($mantenimiento->id))
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="m-auto pt-3 pr-3">
                {{ $mantenimientos->appends(request()->query())->links() }}
            </div>

            <div wire:loading wire:target="nextPage,gotoPage,previousPage" class="loader-page"></div>

        </div>
    </div>
</div>
