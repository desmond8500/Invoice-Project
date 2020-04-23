@auth
    <a class="btn btn-outline-{{ $admin_color ?? "success"}} mr-2" href="{{ route('home') }}">Admin</a>
    <a class="btn btn-outline-{{ $deconnexion_color ?? "light"}} mr-2 text-{{ $deconnexion_color ?? "light"}}" href="{{ route('logout') }}">Déconnexion</a>
@else
    {{-- <a class="btn btn-outline-light mr-2 text-light" href="{{ route('login') }}">Connexion</a> --}}
    @include('0 Component.connexion')
    @include('0 Component.register')
    {{-- <a class="btn btn-light" href="{{ route('register') }}">Inscription</a> --}}
@endauth
