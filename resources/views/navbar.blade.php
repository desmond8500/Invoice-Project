@php
    $navbar = json_decode('{
        "title": "Invoice Project",
        "route": "index"
    }');


@endphp
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route($navbar->route )}}">{{ $navbar->title }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <div class="dropdown d-none d-sm-block">
           {{-- @include('0 Component.navbarMenuButton') --}}
            @foreach (glob('storage/Modules/Tutos/*') as $key => $menu)
                @if (is_dir($menu))
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown{{ $key }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ basename($menu) }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown{{ $key }}">
                            @foreach (glob("$menu/*") as $submenu)
                                <a class="dropdown-item" href="{{ route('tutolist',['section'=>basename($menu), 'subsection'=>basename($submenu)]) }}">{{ basename($submenu) }}</a>
                            @endforeach
                        </div>
                    </li>
                @endif
            @endforeach
          </div>
      </ul>


      <div class="form-inline my-2 my-lg-0">
            {{-- @include('0 Component.navbarLoginButton') --}}
      </div>
    </div>
</nav>
