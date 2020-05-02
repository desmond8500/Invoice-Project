<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="{!! route('index') !!}" class="nav-link">Accueil</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="{!! route('home') !!}" class="nav-link">Infyom</a>
    </li>
    @isset($user)
        @if($user->role == 'admin')
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{!! route('backoffice') !!}" class="nav-link">Config</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{!! route('io_generator_builder') !!}" class="nav-link">Generator</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{!! route('home') !!}" class="nav-link">Infyom</a>
            </li>
        @endif
    @endisset
    {{-- <li class="nav-item d-none d-sm-inline-block">
    <a href="#" class="nav-link">Contact</a>
    </li> --}}
</ul>
