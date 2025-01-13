<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('UpdateTitle', ['name' => __('Mantenimiento')]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                <li class="breadcrumb-item"><a href="@route(getRouteName() . '.home')"
                        class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName() . '.mantenimiento.read')"
                        class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('Mantenimiento')) }}</a></li>
                <li class="breadcrumb-item active">{{ __('Update') }}</li>
            </ul>
        </div>
    </div>

    <form class="form-horizontal" wire:submit.prevent="update" enctype="multipart/form-data">

        <div class="card-body">

            <!-- Id_vehiculo Input -->
            <div class='form-group'>
                <label for='input-id_vehiculo' class='col-sm-2 control-label '> {{ __('Vehiculo') }}</label>
                <select id='input-id_vehiculo' wire:model.lazy='id_vehiculo'
                    class="form-control  @error('id_vehiculo') is-invalid @enderror" style="height:300px;">
                    @foreach (getCrudConfig('Mantenimiento')->inputs()['id_vehiculo']['select'] as $key => $value)
                        <option value='{{ $key }}'>{{ $value }}</option>
                    @endforeach
                </select>
                @error('id_vehiculo')
                    <div class='invalid-feedback'>{{ $message }}</div>
                @enderror
            </div>
            <!-- Tipo Input -->
            <div class='form-group'>
                <label for='input-tipo' class='col-sm-2 control-label '> {{ __('Tipo de Mantenimiento') }}</label>
                <select id='input-tipo' wire:model.lazy='tipo' multiple
                    class="form-control  @error('tipo') is-invalid @enderror">
                    @foreach (getCrudConfig('Mantenimiento')->inputs()['tipo']['options'] as $value)
                        <option value='{{ $value }}'>{{ $value }}</option>
                    @endforeach
                </select>
                @error('tipo')
                    <div class='invalid-feedback'>{{ $message }}</div>
                @enderror
            </div>
            <!-- Fecha Input -->
            <div class='form-group'>
                <label for='input-fecha' class='col-sm-2 control-label '> {{ __('Fecha') }}</label>
                <input type='date' id='input-fecha' wire:model.lazy='fecha'
                    class="form-control  @error('fecha') is-invalid @enderror" autocomplete='on'>
                @error('fecha')
                    <div class='invalid-feedback'>{{ $message }}</div>
                @enderror
            </div>
            <!-- Observaciones Input -->
            <div class='form-group'>
                <label for='input-observaciones' class='col-sm-2 control-label '> {{ __('Observaciones') }}</label>
                <input type='text' id='input-observaciones' wire:model.lazy='observaciones'
                    class="form-control  @error('observaciones') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('observaciones')
                    <div class='invalid-feedback'>{{ $message }}</div>
                @enderror
            </div>


        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info ml-4">{{ __('Update') }}</button>
            <a href="@route(getRouteName() . '.mantenimiento.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>
