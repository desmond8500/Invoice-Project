@php
    use App\Models\Module;
    $modules = Module::all();
@endphp
<button class="btn btn-secondary mr-4" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Menu
</button>
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="{{ route('index')}} ">Accueil</a>
    @foreach ($modules as $module)
        @if ($module->route != 'false' && $module->route != "true")
            <a class="dropdown-item" href="{{ route($module->route)}}">{{ $module->name }}</a>
        @endif
    @endforeach
</div>
