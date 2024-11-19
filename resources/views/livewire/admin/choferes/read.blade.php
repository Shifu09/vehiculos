<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header p-0">
                <h3 class="card-title">
                    {{ __('ListTitle', ['name' => __(\Illuminate\Support\Str::plural('Choferes'))]) }}</h3>

                <div class="px-2 mt-4">

                    <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                        <li class="breadcrumb-item"><a href="@route(getRouteName() . '.home')"
                                class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                        <li class="breadcrumb-item active">{{ __(\Illuminate\Support\Str::plural('Choferes')) }}</li>
                    </ul>

                    <div class="row justify-content-between mt-4 mb-4">
                        @if (getCrudConfig('Choferes')->create && hasPermission(getRouteName() . '.choferes.create', 1, 1))
                            <div class="col-md-4 right-0">
                                <a id="button" style="color: white" href="@route(getRouteName() . '.choferes.create')"
                                    class="btn btn-success">{{ __('CreateTitle', ['name' => __('Choferes')]) }}</a>
                            </div>
                        @endif
                        @if (getCrudConfig('Choferes')->searchable())
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
                            <th scope="col" style='cursor: pointer' wire:click="sort('nombre')"> <i
                                    class='fa @if ($sortType == 'desc' and $sortColumn == 'nombre') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'nombre') fa-sort-amount-up ml-2 @endif'></i>
                                {{ __('Nombre') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('apellido')"> <i
                                    class='fa @if ($sortType == 'desc' and $sortColumn == 'apellido') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'apellido') fa-sort-amount-up ml-2 @endif'></i>
                                {{ __('Apellido') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('telefono')"> <i
                                    class='fa @if ($sortType == 'desc' and $sortColumn == 'telefono') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'telefono') fa-sort-amount-up ml-2 @endif'></i>
                                {{ __('Telefono') }} </th>

                            @if (getCrudConfig('Choferes')->delete or getCrudConfig('Choferes')->update)
                                <th scope="col">{{ __('Action') }}</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($choferess as $choferes)
                            @livewire('admin.choferes.single', [$choferes], key($choferes->id))
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="m-auto pt-3 pr-3">
                {{ $choferess->appends(request()->query())->links() }}
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
        background: rgb(135, 113, 234);
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
