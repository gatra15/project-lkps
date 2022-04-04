<body class="hold-transition sidebar-mini layout-fixed" >
    <div class="wrapper">
    
      <!-- Preloader -->
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          
            @if (session('tahun_laporan') == 'Pilih Tahun' || session()->missing('tahun_laporan'))
            <li class="pt-2" >   <b style="color: red"> 
               Belum Pilih Tahun Laporan <i class="fas fa-exclamation-triangle"></i>
            </b>
            </li>
            @elseif (session()->has('tahun_laporan'))
            <li class="pt-2 " > <b style="color: green"> 
              Tahun Laporan : {{ session('tahun_laporan') }}
            </b>
            </li>
            @endif
            @hasanyrole('dekan|asesor')
            <li class="me-2 pt-2 ms-2"><b>||</b></li>
            @if (session('prodi') == 'Pilih Prodi' || session()->missing('tahun_laporan') )
            <li class="pt-2" >   <b style="color: red"> 
               Belum Pilih Prodi <i class="fas fa-exclamation-triangle"></i>
            </b>
            </li>
            @elseif (session()->has('prodi'))
            <li class="pt-2 " > <b style="color: green"> 
              Prodi : {{ session('prodi') }}
            </b>
            </li>
            @endif
            @endhasanyrole

        </ul>
        
        <style> 
        .alert-fixed {
    position:fixed; 
    top: 70px; 
    left: 950px; 
    width: 30%;
    z-index:9999; 
    border-radius:0px
    }
    
    .alert-fixed-tolak {
    position:fixed; 
    top: 70px; 
    left: 950px; 
    width: 30%;
    z-index:9999; 
    border-radius:0px
    }
        </style>
        
        <!-- Simulasi Notification -->
        @hasrole('perwakilan')
        @if ($title == 'Simulasi')
        @foreach ($simulasi as $sim)
          @if ($sim->alert == 'success')
          <div class="alert alert-success alert-fixed alert-dismissible fade show center-block"  role="alert">
            {{ $sim->comment }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @elseif ($sim->alert == 'warning')
          <div class="alert alert-danger alert-fixed-tolak alert-dismissible fade show center-block"  role="alert">
            {{ $sim->comment }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @else
          @endif
            
        @endforeach
        @endif
        @endhasrole
  {{--      
        <!-- Identitas Notification -->
        @hasrole('perwakilan')
        @if ($title == 'Identitas Pengusul')
        @foreach ($simulasi as $sim)
          @if ($sim->alert == 'success')
          <div class="alert alert-success alert-fixed alert-dismissible fade show center-block"  role="alert">
            {{ $sim->comment }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @elseif ($sim->alert == 'warning')
          <div class="alert alert-danger alert-fixed-tolak alert-dismissible fade show center-block"  role="alert">
            {{ $sim->comment }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @else
          @endif
            
        @endforeach
        @endif
        @endhasrole
        
        <!-- Tabmong Notification -->
        @hasrole('perwakilan')
        @if ($title == 'Tata Pamong')
        @foreach ($simulasi as $sim)
          @if ($sim->alert == 'success')
          <div class="alert alert-success alert-fixed alert-dismissible fade show center-block"  role="alert">
            {{ $sim->comment }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @elseif ($sim->alert == 'warning')
          <div class="alert alert-danger alert-fixed-tolak alert-dismissible fade show center-block"  role="alert">
            {{ $sim->comment }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @else
          @endif
            
        @endforeach
        @endif
        @endhasrole
        
        <!-- Mahasiswa Notification -->
        @hasrole('perwakilan')
        @if ($title == 'Mahasiswa')
        @foreach ($simulasi as $sim)
          @if ($sim->alert == 'success')
          <div class="alert alert-success alert-fixed alert-dismissible fade show center-block"  role="alert">
            {{ $sim->comment }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @elseif ($sim->alert == 'warning')
          <div class="alert alert-danger alert-fixed-tolak alert-dismissible fade show center-block"  role="alert">
            {{ $sim->comment }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @else
          @endif
            
        @endforeach
        @endif
        @endhasrole
        
        <!-- Profil Dosen Notification -->
        @hasrole('perwakilan')
        @if ($title == 'Profil Dosen')
        @foreach ($simulasi as $sim)
          @if ($sim->alert == 'success')
          <div class="alert alert-success alert-fixed alert-dismissible fade show center-block"  role="alert">
            {{ $sim->comment }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @elseif ($sim->alert == 'warning')
          <div class="alert alert-danger alert-fixed-tolak alert-dismissible fade show center-block"  role="alert">
            {{ $sim->comment }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @else
          @endif
            
        @endforeach
        @endif
        @endhasrole
        
        <!-- Kinerja Dosen Notification -->
        @hasrole('perwakilan')
        @if ($title == 'Kinerja Dosen')
        @foreach ($simulasi as $sim)
          @if ($sim->alert == 'success')
          <div class="alert alert-success alert-fixed alert-dismissible fade show center-block"  role="alert">
            {{ $sim->comment }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @elseif ($sim->alert == 'warning')
          <div class="alert alert-danger alert-fixed-tolak alert-dismissible fade show center-block"  role="alert">
            {{ $sim->comment }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @else
          @endif
            
        @endforeach
        @endif
        @endhasrole
        
        <!-- Keuangan Sarpras Notification -->
        @hasrole('perwakilan')
        @if ($title == 'Keuangan Sarpras')
        @foreach ($simulasi as $sim)
          @if ($sim->alert == 'success')
          <div class="alert alert-success alert-fixed alert-dismissible fade show center-block"  role="alert">
            {{ $sim->comment }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @elseif ($sim->alert == 'warning')
          <div class="alert alert-danger alert-fixed-tolak alert-dismissible fade show center-block"  role="alert">
            {{ $sim->comment }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @else
          @endif
            
        @endforeach
        @endif
        @endhasrole
        
        <!-- Pendidikan Notification -->
        @hasrole('perwakilan')
        @if ($title == 'Pendidikan')
        @foreach ($simulasi as $sim)
          @if ($sim->alert == 'success')
          <div class="alert alert-success alert-fixed alert-dismissible fade show center-block"  role="alert">
            {{ $sim->comment }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @elseif ($sim->alert == 'warning')
          <div class="alert alert-danger alert-fixed-tolak alert-dismissible fade show center-block"  role="alert">
            {{ $sim->comment }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @else
          @endif
            
        @endforeach
        @endif
        @endhasrole
        
        <!-- Penelitian Notification -->
        @hasrole('perwakilan')
        @if ($title == 'Penelitian')
        @foreach ($simulasi as $sim)
          @if ($sim->alert == 'success')
          <div class="alert alert-success alert-fixed alert-dismissible fade show center-block"  role="alert">
            {{ $sim->comment }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @elseif ($sim->alert == 'warning')
          <div class="alert alert-danger alert-fixed-tolak alert-dismissible fade show center-block"  role="alert">
            {{ $sim->comment }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @else
          @endif
            
        @endforeach
        @endif
        @endhasrole
        
        <!-- Luaran Notification -->
        @hasrole('perwakilan')
        @if ($title == 'Luaran')
        @foreach ($simulasi as $sim)
          @if ($sim->alert == 'success')
          <div class="alert alert-success alert-fixed alert-dismissible fade show center-block"  role="alert">
            {{ $sim->comment }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @elseif ($sim->alert == 'warning')
          <div class="alert alert-danger alert-fixed-tolak alert-dismissible fade show center-block"  role="alert">
            {{ $sim->comment }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @else
          @endif
            
        @endforeach
        @endif
        @endhasrole
        
        <!-- Pkm Notification -->
        @hasrole('perwakilan')
        @if ($title == 'Pkm')
        @foreach ($simulasi as $sim)
          @if ($sim->alert == 'success')
          <div class="alert alert-success alert-fixed alert-dismissible fade show center-block"  role="alert">
            {{ $sim->comment }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @elseif ($sim->alert == 'warning')
          <div class="alert alert-danger alert-fixed-tolak alert-dismissible fade show center-block"  role="alert">
            {{ $sim->comment }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @else
          @endif
            
        @endforeach
        @endif
        @endhasrole --}}
            
            

        
        <ul class="navbar-nav text-right  ml-auto flex-nowrap">
          <li class="nav-item">
            <form action="/logout" method="POST"> 
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
            <a href="/" class="brand-link  text-decoration-none">
              <img src="{{ asset('dist/img/undip.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
          @hasrole('perwakilan')
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
                <a href="{{ session()->has('tahun_laporan') && (session('tahun_laporan') != 'Pilih Tahun') ? '/identitas-pengusul' : '/' }}" class="nav-link {{ ($title === "Identitas Pengusul") ? 'active' : '' }}">
                    <i class="nav-icon fas fa-user-edit"></i>
                  <p>
                    Identitas Pengusul
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ session()->has('tahun_laporan') && (session('tahun_laporan') != 'Pilih Tahun') ? '/tata-pamong-tata-kelola-kerjasama' : '/' }}" class="nav-link {{ ($title === "Tata Pamong") ? 'active' : '' }}">
                    <i class="nav-icon fa-solid fa-landmark"></i>
                  <p>
                    Tata Pamong, Tata Kelola, dan Kerjasama
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ session()->has('tahun_laporan') && (session('tahun_laporan') != 'Pilih Tahun') ? '/mahasiswa' : '/' }}" class="nav-link {{ ($title === "Mahasiswa") ? 'active' : '' }}">
                    <i class="nav-icon fa-regular fa-address-card"></i></i>
                  <p>
                    Mahasiswa
                  </p>
                </a>
              </li>
              <li class="nav-item {{ ($title === "Profil Dosen") ? 'menu-open' : ($title === "Kinerja Dosen") ? 'menu-open' : ''}}">
                <a href="{{ session()->has('tahun_laporan') && (session('tahun_laporan') != 'Pilih Tahun') ? '/sdm' : '/' }}" class="nav-link {{ ($title === "Sdm") ? 'active' : ($title === "Profil Dosen") ? 'active' : ($title === "Kinerja Dosen") ? 'active' : ''}} ">
                  <i class="nav-icon fas fa-user-friends"></i>
                  <p>
                    Sumber Daya Manusia
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview ml-3">
                  <li class="nav-item">
                    <a href="{{ session()->has('tahun_laporan') && (session('tahun_laporan') != 'Pilih Tahun') ? '/profil-dosen' : '/' }}" class="nav-link {{ ($title === "Profil Dosen") ? 'active' : '' }}">
                        <i class="nav-icon fas fa-angle-double-right"></i>
                      <p>Profil Dosen</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ session()->has('tahun_laporan') && (session('tahun_laporan') != 'Pilih Tahun') ? '/kinerja-dosen' : '/' }}" class="nav-link {{ ($title === "Kinerja Dosen") ? 'active' : '' }}">
                        <i class="nav-icon fas fa-angle-double-right"></i>
                      <p>Kinerja Dosen</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="{{ session()->has('tahun_laporan') && (session('tahun_laporan') != 'Pilih Tahun') ? '/keuangan-sarana-prasarana' : '/' }}" class="nav-link {{ ($title === "Keuangan Sarpras") ? 'active' : '' }}">
                    <i class="nav-icon fa-solid fa-circle-dollar-to-slot"></i>
                  <p>
                    Keuangan, Sarana, dan Prasarana
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ session()->has('tahun_laporan') && (session('tahun_laporan') != 'Pilih Tahun') ? '/pendidikan' : '/' }}" class="nav-link {{ ($title === "Pendidikan") ? 'active' : '' }}">
                    <i class="nav-icon fas fa-user-graduate"></i>
                  <p>
                    Pendidikan
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ session()->has('tahun_laporan') && (session('tahun_laporan') != 'Pilih Tahun') ? '/penelitian' : '/' }}" class="nav-link {{ ($title === "Penelitian") ? 'active' : '' }}">
                    <i class="nav-icon fas fa-search-location"></i>
                  <p>
                    Penelitian
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ session()->has('tahun_laporan') && (session('tahun_laporan') != 'Pilih Tahun') ? '/pkm' : '/' }}" class="nav-link {{ ($title === "Pkm") ? 'active' : '' }}">
                    <i class="nav-icon fas fa-people-carry"></i>
                  <p>
                    Pengabdian Kepada Masyarakat (PKM)
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ session()->has('tahun_laporan') && (session('tahun_laporan') != 'Pilih Tahun') ? '/luaran-capaian-tridharma' : '/' }}" class="nav-link {{ ($title === "Luaran") ? 'active' : '' }}">
                    <i class="nav-icon fas fa-users"></i>
                  <p>
                    Luaran dan Capaian Tridharma
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ session()->has('tahun_laporan') && (session('tahun_laporan') != 'Pilih Tahun') ? '/simulasi' : '/' }}" class="nav-link {{ ($title === "Simulasi") ? 'active' : '' }}">
                    <i class="nav-icon fas fa-stream"></i>
                  <p>
                    Simulasi Penilaian
                  </p>
                </a>
              </li>

            </ul>
          </nav>
          @endhasrole

          @hasanyrole('dekan|asesor')
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
                <a href="{{ session()->has('tahun_laporan') && (session('tahun_laporan') != 'Pilih Tahun')  && (session('prodi') != 'Pilih Prodi') ? '/identitas-pengusul' : '/' }}" class="nav-link {{ ($title === "Identitas Pengusul") ? 'active' : '' }}">
                    <i class="nav-icon fas fa-user-edit"></i>
                  <p>
                    Identitas Pengusul
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ session()->has('tahun_laporan') && (session('tahun_laporan') != 'Pilih Tahun') && (session('prodi') != 'Pilih Prodi') ? '/tata-pamong-tata-kelola-kerjasama' : '/'  }}" class="nav-link {{ ($title === "Tata Pamong") ? 'active' : '' }}">
                    <i class="nav-icon fa-solid fa-landmark"></i>
                  <p>
                    Tata Pamong, Tata Kelola, dan Kerjasama
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ session()->has('tahun_laporan') && (session('tahun_laporan') != 'Pilih Tahun') && (session('prodi') != 'Pilih Prodi') ? '/mahasiswa' : '/' }}" class="nav-link {{ ($title === "Mahasiswa") ? 'active' : '' }}">
                    <i class="nav-icon fa-regular fa-address-card"></i></i>
                  <p>
                    Mahasiswa
                  </p>
                </a>
              </li>
              <li class="nav-item {{ ($title === "Profil Dosen") ? 'menu-open' : ($title === "Kinerja Dosen") ? 'menu-open' : ''}}">
                <a href="{{ session()->has('tahun_laporan') && (session('tahun_laporan') != 'Pilih Tahun') && (session('prodi') != 'Pilih Prodi') ? '/sdm' : '/' }}" class="nav-link {{ ($title === "Sdm") ? 'active' : ($title === "Profil Dosen") ? 'active' : ($title === "Kinerja Dosen") ? 'active' : ''}} ">
                  <i class="nav-icon fas fa-user-friends"></i>
                  <p>
                    Sumber Daya Manusia
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview ml-3">
                  <li class="nav-item">
                    <a href="{{ session()->has('tahun_laporan') && (session('tahun_laporan') != 'Pilih Tahun') && (session('prodi') != 'Pilih Prodi') ? '/profil-dosen' : '/' }}" class="nav-link {{ ($title === "Profil Dosen") ? 'active' : '' }}">
                        <i class="nav-icon fas fa-angle-double-right"></i>
                      <p>Profil Dosen</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ session()->has('tahun_laporan') && (session('tahun_laporan') != 'Pilih Tahun') && (session('prodi') != 'Pilih Prodi') ? '/kinerja-dosen' : '/' }}" class="nav-link {{ ($title === "Kinerja Dosen") ? 'active' : '' }}">
                        <i class="nav-icon fas fa-angle-double-right"></i>
                      <p>Kinerja Dosen</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="{{ session()->has('tahun_laporan') && (session('tahun_laporan') != 'Pilih Tahun') && (session('prodi') != 'Pilih Prodi') ? '/keuangan-sarana-prasarana' : '/' }}" class="nav-link {{ ($title === "Keuangan Sarpras") ? 'active' : '' }}">
                    <i class="nav-icon fa-solid fa-circle-dollar-to-slot"></i>
                  <p>
                    Keuangan, Sarana, dan Prasarana
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ session()->has('tahun_laporan') && (session('tahun_laporan') != 'Pilih Tahun') && (session('prodi') != 'Pilih Prodi') ? '/pendidikan' : '/' }}" class="nav-link {{ ($title === "Pendidikan") ? 'active' : '' }}">
                    <i class="nav-icon fas fa-user-graduate"></i>
                  <p>
                    Pendidikan
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ session()->has('tahun_laporan') && (session('tahun_laporan') != 'Pilih Tahun') && (session('prodi') != 'Pilih Prodi') ? '/penelitian' : '/' }}" class="nav-link {{ ($title === "Penelitian") ? 'active' : '' }}">
                    <i class="nav-icon fas fa-search-location"></i>
                  <p>
                    Penelitian
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ session()->has('tahun_laporan') && (session('tahun_laporan') != 'Pilih Tahun') && (session('prodi') != 'Pilih Prodi') ? '/pkm' : '/' }}" class="nav-link {{ ($title === "Pkm") ? 'active' : '' }}">
                    <i class="nav-icon fas fa-people-carry"></i>
                  <p>
                    Pengabdian Kepada Masyarakat (PKM)
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ session()->has('tahun_laporan') && (session('tahun_laporan') != 'Pilih Tahun') && (session('prodi') != 'Pilih Prodi') ? '/luaran-capaian-tridharma' : '/' }}" class="nav-link {{ ($title === "Luaran") ? 'active' : '' }}">
                    <i class="nav-icon fas fa-users"></i>
                  <p>
                    Luaran dan Capaian Tridharma
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ session()->has('tahun_laporan') && (session('tahun_laporan') != 'Pilih Tahun') && (session('prodi') != 'Pilih Prodi') ? '/simulasi' : '/' }}" class="nav-link {{ ($title === "Simulasi") ? 'active' : '' }}">
                    <i class="nav-icon fas fa-stream"></i>
                  <p>
                    Simulasi Penilaian
                  </p>
                </a>
              </li>

            </ul>
          </nav>
          @endhasanyrole
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
    
    
    