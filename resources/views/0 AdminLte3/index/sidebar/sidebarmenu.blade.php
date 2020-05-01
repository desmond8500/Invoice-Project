
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-header">MENU</li>
            @include('0 AdminLte3.index.sidebar.menu',['menus'=>$menus])
            @yield('menu')
        </ul>

    </nav>
