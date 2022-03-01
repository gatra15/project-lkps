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
                <a href="/" class="nav-link {{ ($title === "Home") ? 'active' : '' }}">
                  <i class="nav-icon fas fa-home"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/identitas-pengusul" class="nav-link {{ ($title === "Identitas Pengusul") ? 'active' : '' }}">
                    <i class="nav-icon fas fa-user-edit"></i>
                  <p>
                    Identitas Pengusul
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/tata-pamong-tata-kelola-kerjasama" class="nav-link {{ ($title === "Tata Pamong") ? 'active' : '' }}">
                    <i class="nav-icon fa-solid fa-landmark"></i>
                  <p>
                    Tata Pamong, Tata Kelola, dan Kerjasama
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/mahasiswa" class="nav-link {{ ($title === "Mahasiswa") ? 'active' : '' }}">
                    <i class="nav-icon fa-regular fa-address-card"></i></i>
                  <p>
                    Mahasiswa
                  </p>
                </a>
              </li>
              <li class="nav-item {{ ($title === "Profil Dosen") ? 'menu-open' : ($title === "Kinerja Dosen") ? 'menu-open' : ''}}">
                <a href="/sdm" class="nav-link {{ ($title === "Sdm") ? 'active' : ($title === "Profil Dosen") ? 'active' : ($title === "Kinerja Dosen") ? 'active' : ''}} ">
                  <i class="nav-icon fas fa-user-friends"></i>
                  <p>
                    Sumber Daya Manusia
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview ml-3">
                  <li class="nav-item">
                    <a href="/profil-dosen" class="nav-link {{ ($title === "Profil Dosen") ? 'active' : '' }}">
                        <i class="nav-icon fas fa-angle-double-right"></i>
                      <p>Profil Dosen</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/kinerja-dosen" class="nav-link {{ ($title === "Kinerja Dosen") ? 'active' : '' }}">
                        <i class="nav-icon fas fa-angle-double-right"></i>
                      <p>Kinerja Dosen</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="/keuangan-sarana-prasarana" class="nav-link {{ ($title === "Keuangan Sarpras") ? 'active' : '' }}">
                    <i class="nav-icon fa-solid fa-circle-dollar-to-slot"></i>
                  <p>
                    Keuangan, Sarana, dan Prasarana
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pendidikan" class="nav-link {{ ($title === "Pendidikan") ? 'active' : '' }}">
                    <i class="nav-icon fas fa-user-graduate"></i>
                  <p>
                    Pendidikan
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/penelitian" class="nav-link {{ ($title === "Penelitian") ? 'active' : '' }}">
                    <i class="nav-icon fas fa-search-location"></i>
                  <p>
                    Penelitian
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pkm" class="nav-link {{ ($title === "Pkm") ? 'active' : '' }}">
                    <i class="nav-icon fas fa-people-carry"></i>
                  <p>
                    Pengabdian Kepada Masyarakat (PKM)
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/luaran-capaian-tridharma" class="nav-link {{ ($title === "Luaran") ? 'active' : '' }}">
                    <i class="nav-icon fas fa-users"></i>
                  <p>
                    Luaran dan Capaian Tridharma
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/matrik" class="nav-link {{ ($title === "Matrik") ? 'active' : '' }}">
                    <i class="nav-icon fas fa-stream"></i>
                  <p>
                    Simulasi Penilaian
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
    
    
    