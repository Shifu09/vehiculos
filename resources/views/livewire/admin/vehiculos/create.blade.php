<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('CreateTitle', ['name' => __('Vehiculos')]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                <li class="breadcrumb-item"><a href="@route(getRouteName() . '.home')"
                        class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName() . '.vehiculos.read')"
                        class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('Vehiculos')) }}</a></li>
                <li class="breadcrumb-item active">{{ __('Create') }}</li>
            </ul>
        </div>
    </div>

    <form class="form-horizontal" wire:submit.prevent="create" enctype="multipart/form-data">

        <div class="card-body">
            <!-- Codigo_auto Input -->
            <div class='form-group'>
                <label for='input-codigo_auto' class='col-sm-2 control-label '> {{ __('Codigo_auto') }}</label>
                <input type='text' id='input-codigo_auto' wire:model.lazy='codigo_auto'
                    class="form-control  @error('codigo_auto') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('codigo_auto')
                    <div class='invalid-feedback'>{{ $message }}</div>
                @enderror
            </div>
            <!-- Placa Input -->
            <div class='form-group'>
                <label for='input-placa' class='col-sm-2 control-label '> {{ __('Placa') }}</label>
                <input type='text' id='input-placa' wire:model.lazy='placa'
                    class="form-control  @error('placa') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('placa')
                    <div class='invalid-feedback'>{{ $message }}</div>
                @enderror
            </div>
            <!-- Marca Input -->
            <div class='form-group'>
                <label for='input-marca' class='col-sm-2 control-label '> {{ __('Marca') }}</label>
                <input type='text' id='input-marca' wire:model.lazy='marca'
                    class="form-control  @error('marca') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('marca')
                    <div class='invalid-feedback'>{{ $message }}</div>
                @enderror
            </div>
            <!-- Modelo Input -->
            <div class='form-group'>
                <label for='input-modelo' class='col-sm-2 control-label '> {{ __('Modelo') }}</label>
                <input type='text' id='input-modelo' wire:model.lazy='modelo'
                    class="form-control  @error('modelo') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('modelo')
                    <div class='invalid-feedback'>{{ $message }}</div>
                @enderror
            </div>
            <!-- Color Input -->
            <div class='form-group'>
                <label for='input-color' class='col-sm-2 control-label '> {{ __('Color') }}</label>
                <input type='text' id='input-color' wire:model.lazy='color'
                    class="form-control  @error('color') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('color')
                    <div class='invalid-feedback'>{{ $message }}</div>
                @enderror
            </div>
            <!-- Age Input -->
            <div class='form-group'>
                <label for='input-age' class='col-sm-2 control-label '> {{ __('Age') }}</label>
                <input type='text' id='input-age' wire:model.lazy='age'
                    class="form-control  @error('age') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('age')
                    <div class='invalid-feedback'>{{ $message }}</div>
                @enderror
            </div>
            <!-- Serial Input -->
            <div class='form-group'>
                <label for='input-serial' class='col-sm-2 control-label '> {{ __('Serial o Carrocería') }}</label>
                <input type='text' id='input-serial' wire:model.lazy='serial'
                    class="form-control  @error('serial') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('serial')
                    <div class='invalid-feedback'>{{ $message }}</div>
                @enderror
            </div>
            <!-- Estado Input -->
            <div class='form-group'>
                <label for='input-estado' class='col-sm-2 control-label '> {{ __('Estado') }}</label>
                <select id='input-estado' wire:model.lazy='estado'
                    class="form-control  @error('estado') is-invalid @enderror">
                    @foreach (getCrudConfig('Vehiculos')->inputs()['estado']['select'] as $key => $value)
                        <option hidden>Seleccione una opción</option>
                        <option value='{{ $key }}'>{{ $value }}</option>
                    @endforeach
                </select>
                @error('estado')
                    <div class='invalid-feedback'>{{ $message }}</div>
                @enderror
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info ml-4">{{ __('Create') }}</button>
            <a href="@route(getRouteName() . '.vehiculos.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>
