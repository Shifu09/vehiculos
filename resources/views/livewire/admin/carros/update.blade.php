<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('UpdateTitle', ['name' => __('Carros') ]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded" style="background-color: #e9ecef!important;">
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.carros.read')" class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('Carros')) }}</a></li>
                <li class="breadcrumb-item active">{{ __('Update') }}</li>
            </ul>
        </div>
    </div>

    <form class="form-horizontal" wire:submit.prevent="update" enctype="multipart/form-data">

        <div class="card-body">

                        <!-- Nombre Input -->
            <div class='form-group'>
                <label for='input-nombre' class='col-sm-2 control-label '> {{ __('Nombre') }}</label>
                <input type='text' id='input-nombre' wire:model.lazy='nombre' class="form-control  @error('nombre') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('nombre') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Marca Input -->
            <div class='form-group'>
                <label for='input-marca' class='col-sm-2 control-label '> {{ __('Marca') }}</label>
                <input type='text' id='input-marca' wire:model.lazy='marca' class="form-control  @error('marca') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('marca') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Color Input -->
            <div class='form-group'>
                <label for='input-color' class='col-sm-2 control-label '> {{ __('Color') }}</label>
                <input type='text' id='input-color' wire:model.lazy='color' class="form-control  @error('color') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('color') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>


        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info ml-4">{{ __('Update') }}</button>
            <a href="@route(getRouteName().'.carros.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>
