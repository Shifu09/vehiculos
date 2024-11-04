<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('CreateTitle', ['name' => __('Choferes')]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                <li class="breadcrumb-item"><a href="@route(getRouteName() . '.home')"
                        class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName() . '.choferes.read')"
                        class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('Choferes')) }}</a></li>
                <li class="breadcrumb-item active">{{ __('Create') }}</li>
            </ul>
        </div>
    </div>

    <form class="form-horizontal" wire:submit.prevent="create" enctype="multipart/form-data">

        <div class="card-body">
            <!-- Nombre Input -->
            <div class='form-group'>
                <label for='input-nombre' class='col-sm-2 control-label '> {{ __('Nombre') }}</label>
                <input type='text' id='input-nombre' wire:model.lazy='nombre'
                    class="form-control  @error('nombre') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('nombre')
                    <div class='invalid-feedback'>{{ $message }}</div>
                @enderror
            </div>
            <!-- Apellido Input -->
            <div class='form-group'>
                <label for='input-apellido' class='col-sm-2 control-label '> {{ __('Apellido') }}</label>
                <input type='text' id='input-apellido' wire:model.lazy='apellido'
                    class="form-control  @error('apellido') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('apellido')
                    <div class='invalid-feedback'>{{ $message }}</div>
                @enderror
            </div>
            <!-- Telefono Input -->
            <div class='form-group'>
                <label for='input-telefono' class='col-sm-2 control-label '> {{ __('Telefono') }}</label>
                <input type='text' id='input-telefono' wire:model.lazy='telefono'
                    class="form-control  @error('telefono') is-invalid @enderror" placeholder='' autocomplete='on'
                    maxlength="11">
                @error('telefono')
                    <div class='invalid-feedback'>{{ $message }}</div>
                @enderror
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info ml-4">{{ __('Create') }}</button>
            <a href="@route(getRouteName() . '.choferes.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>
