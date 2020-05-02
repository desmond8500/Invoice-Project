<!DOCTYPE html>
<html>
@php
    use App\Http\Controllers\Adminlte3Controller;
    $page = new Adminlte3Controller();
    $head = $page->getHead();
    $sidebar= $page->getSidebar();

    $header = '0 AdminLte3/index/header';
    $footer = '0 AdminLte3/index/footer';
    $script ='0 AdminLte3/index/script';
@endphp

@include($head->link,['head'=>$head,'asset'=>$page->assets])
@yield('link')
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        {{-- Narbar --}}
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            @include('0 AdminLte3/index/nav/navlinks')
            {{-- @include('0 AdminLte3/index/nav/searchform') --}}
            @include('0 AdminLte3/index/nav/rightnavbar')
        </nav>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route($sidebar->route) }}" class="brand-link">
                <img src="{{ asset($sidebar->logo) }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">{{ $sidebar->name }}</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                @include('0 AdminLte3/index/sidebar/userpanel')
                @include('0 AdminLte3/index/sidebar/sidebarmenu',['menus'=>$sidebar->menus])
            </div>
        </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include($header)
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @yield('content')
                @include('0 AdminLte3.form.login')
                @include('0 AdminLte3.form.register')
            </div><!-- /.container-fluid -->
        </section>
    </div>
    <!-- /.content-wrapper -->
    @include($footer)

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    @include($script,['asset'=>$page->assets])
    @yield('script')
</body>
</html>
