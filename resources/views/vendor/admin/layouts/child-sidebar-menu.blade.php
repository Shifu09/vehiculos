<li class="list-divider"></li>
<li class="nav-small-cap"><span class="hide-menu">{{ __('Menu Principal') }}</span></li>
@foreach (\EasyPanel\Models\CRUD::active() as $crud)
    <x-easypanel::crud-menu-item :crud="$crud" />
@endforeach
