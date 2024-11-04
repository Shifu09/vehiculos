<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('UpdateTitle', ['name' => __('Salida') ]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.salida.read')" class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('Salida')) }}</a></li>
                <li class="breadcrumb-item active">{{ __('Update') }}</li>
            </ul>
        </div>
    </div>

    <form class="form-horizontal" wire:submit.prevent="update" enctype="multipart/form-data">

        <div class="card-body">

                        <!-- Id_vehiculo Input -->
            <div class='form-group'>
                <label for='input-id_vehiculo' class='col-sm-2 control-label '> {{ __('Id_vehiculo') }}</label>
                <select id='input-id_vehiculo' wire:model.lazy='id_vehiculo' class="form-control  @error('id_vehiculo') is-invalid @enderror">
                    @foreach(getCrudConfig('Salida')->inputs()['id_vehiculo']['select'] as $key => $value)
                        <option value='{{ $key }}'>{{ $value }}</option>
                    @endforeach
                </select>
                @error('id_vehiculo') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Id_chofer Input -->
            <div class='form-group'>
                <label for='input-id_chofer' class='col-sm-2 control-label '> {{ __('Id_chofer') }}</label>
                <select id='input-id_chofer' wire:model.lazy='id_chofer' class="form-control  @error('id_chofer') is-invalid @enderror">
                    @foreach(getCrudConfig('Salida')->inputs()['id_chofer']['select'] as $key => $value)
                        <option value='{{ $key }}'>{{ $value }}</option>
                    @endforeach
                </select>
                @error('id_chofer') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Destino Input -->
            <div class='form-group'>
                <label for='input-destino' class='col-sm-2 control-label '> {{ __('Destino') }}</label>
                <input type='text' id='input-destino' wire:model.lazy='destino' class="form-control  @error('destino') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('destino') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Kilometraje Input -->
            <div class='form-group'>
                <label for='input-kilometraje' class='col-sm-2 control-label '> {{ __('Kilometraje') }}</label>
                <input type='text' id='input-kilometraje' wire:model.lazy='kilometraje' class="form-control  @error('kilometraje') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('kilometraje') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Fecha Input -->
            <div class='form-group'>
                <label for='input-fecha' class='col-sm-2 control-label '> {{ __('Fecha') }}</label>
                <input type='datetime-local' id='input-fecha' wire:model.lazy='fecha' class="form-control  @error('fecha') is-invalid @enderror" autocomplete='on'>
                @error('fecha') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Observaciones Input -->
            <div class='form-group'>
                <label for='input-observaciones' class='col-sm-2 control-label '> {{ __('Observaciones') }}</label>
                <input type='text' id='input-observaciones' wire:model.lazy='observaciones' class="form-control  @error('observaciones') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('observaciones') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>


        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info ml-4">{{ __('Update') }}</button>
            <a href="@route(getRouteName().'.salida.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>
