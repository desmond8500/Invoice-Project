@foreach ($menus as $menu)
    @if (is_array($menu->route))
        <li class="nav-item has-treeview  ">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-circle"></i>
                <p>
                    {{ $menu->name }} <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">

                @foreach ($menu->route as $item)
                    <li class="nav-item">
                        @isset($item->subroute)
                            <a href="{!! route($item->route,['categorie'=>$item->subroute]) !!}" class="nav-link">
                            @else
                            <a href="{!! route($item->route) !!}" class="nav-link">
                        @endisset
                            <i class="fa {{ $item->icon ?? 'nav-icon'}} mr-2 ml-4"></i>
                            <p>{{ $item->name }}</p>
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>
    @else
        <li class="nav-item">
            <a href="{{ route($menu->route) }}" class="nav-link">
                <i class="fas {{ $menu->icon }} nav-icon"></i>
                <p>{{ $menu->name }}</p>
            </a>
        </li>
    @endif
@endforeach
