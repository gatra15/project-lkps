<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
    
      <!-- Preloader -->
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>       
        </ul>

        <ul class="navbar-nav text-right  ml-auto flex-nowrap">
            <li class="nav-item">
              <form action="/logout" method="post"> 
                  @csrf
                  <button type="submit" class="form-control btn btn-secondary rounded submit px-3">Logout</button>
              </form>
              
            </li>       
          </ul>
      </nav>

      <!-- /.navbar -->
    
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
            <!-- Brand Logo -->
            <a href="/" class="brand-link">
              <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
              <span class="brand-text font-weight-light">S I A P S - F T</span>
            </a>
    
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
    
          <!-- SidebarSearch Form -->
          {{-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
              <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-sidebar">
                  <i class="fas fa-search fa-fw"></i>
                </button>
              </div>
            </div>
          </div> --}}
    
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
              <li class="nav-item menu-open">
                <a href="/user" class="nav-link {{ ($title === "User") ? 'active' : '' }}">
                  <i class="nav-icon fas fa-home"></i>
                  <p>
                    User Access
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/data-prodi" class="nav-link {{ ($title === "Prodi") ? 'active' : '' }}">
                    <i class="nav-icon fas fa-user-edit"></i>
                  <p>
                    Data Program Studi
                  </p>
                </a>
              </li>

            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
    
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        @yield('content')
      </div>
      <!-- /.content-wrapper -->
    
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    
    
    