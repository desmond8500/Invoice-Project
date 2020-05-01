<h3>Interface</h3>
<hr>
<form action="/interface" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <!-- Nom de l'application -->
        <div class="form-group">
            <label>Nom</label>
            <input type="text" class="form-control" name='title' value="{{ $dash->title }} ">
        </div>
        <!-- Logo de l'application  -->
        <div class="form-group">
            <label>Logo</label>
            <input type="text" class="form-control" name='logo' value="{{ $dash->logo }} ">
            {{-- <input type="file" name="logo" class="form-control"> --}}
        </div>
        <div class="form-group">
            <label>Favicon</label>
            <input type="text" class="form-control" name='favicon' value="{{ $dash->favicon }} ">
        </div>
        <div class="form-group">
            <label>Sidebar Color</label>
            <select class="form-control" name='sidebarColor'>
                <option value="{{ $dash->sidebarColor }} ">{{ $dash->sidebarColor }} </option>
            </select>
        </div>
        <div class="form-group">
            <label>Navbar Color</label>
            <select class="form-control" name='navbarColor'>
                <option value="{{ $dash->navbarColor }} ">{{ $dash->navbarColor }} </option>
                <option class="bg-light"    value="navbar-white navbar-light"> <i class="fas fa-circle"></i>  navbar-white navbar-light   </option>
                <option class="bg-success"  value="navbar-success navbar-dark"> success navbar-dark  </option>
                <option class="bg-info"     value="navbar-info navbar-dark">    info navbar-dark     </option>
                <option class="bg-primary"  value="navbar-primary navbar-dark"> primary navbar-dark  </option>
                <option class="bg-danger"   value="navbar-danger navbar-dark">  danger navbar-dark   </option>
                <option class="bg-warning"  value="navbar-warning navbar-dark"> warning navbar-dark  </option>
                <option class="bg-pink"     value="navbar-pink navbar-dark">    pink navbar-dark     </option>
                <option class="bg-purple"   value="navbar-purple navbar-dark">  purple navbar-dark   </option>
                <option class="bg-navy"     value="navbar-navy navbar-dark">    navy navbar-dark     </option>
                <option class="bg-olive"    value="navbar-olive navbar-dark">   olive navbar-dark    </option>
                <option class="bg-teal"     value="navbar-teal navbar-dark">    teal navbar-dark     </option>
                <option class="bg-indigo"   value="navbar-indigo navbar-dark">  indigo navbar-dark   </option>
                <option class="bg-maroon"   value="navbar-maroon navbar-dark">  maroon navbar-dark   </option>
                <option class="bg-orange"   value="navbar-orange navbar-dark">  orange navbar-dark   </option>
                <option class="bg-lime"     value="navbar-lime navbar-dark">    lime navbar-dark     </option>
                <option class="bg-fuchsia"  value="navbar-fuchsia navbar-dark"> fuchsia navbar-dark  </option>
            </select>
        </div>
        <div class="form-group">
            <label>Navbar Type</label>
            <select class="form-control" name='navtype'>
                <option value="{{ $dash->navtype }} ">{{ $dash->navtype }} </option>
                <option value="hold-transition sidebar-mini layout-fixed"> Normal sidebar </option>
                <option value="hold-transition sidebar-mini sidebar-collapse"> Collapsed Sidebar </option>
                <option value="hold-transition sidebar-mini layout-navbar-fixed"> Fixed Navbar </option>
                <option value="hold-transition sidebar-mini layout-boxed"> Boxed Layout </option>
                <option value="hold-transition layout-top-nav"> Top Navigation </option>
            </select>
        </div>
        <div class="form-group">
            <label>Ecommerce</label>
            <select class="form-control" name='ecommerce'>
                @if ($dash->ecommerce == "on")
                    <option value="ON"> ON </option>
                    <option value="OFF"> OFF </option>
                @else
                    <option value="OFF"> OFF </option>
                    <option value="ON"> ON </option>
                @endif
                <option value="{{ $dash->navtype }} ">{{ $dash->navtype }} </option>
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Sauvegarder</button>
</form>

