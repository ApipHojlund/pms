<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
            <a class="sidebar-brand brand-logo" href="../../index.html"><img src="{{ asset('image/logo/Perhitungan.png') }}" alt="logo"></a>
            <a class="sidebar-brand brand-logo-mini" href="/admin/dashboard"><img src="{{ asset('image/logo/P.png') }}" alt="logo"></a>
          </div>
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <img class="img-xs rounded-circle " src="{{asset('image/user/'.Auth()->User()->foto)}}" alt="">
              <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
              <h5 class="mb-0 font-weight-normal">{{Auth()->User()->nama}}</h5>
              <span>{{ Auth()->User()->level }}</span>
            </div>
          </div>
          <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
          {{-- <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a> --}}
          <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown" id="dropdown-menu">
            <a href="/user/{{ Auth()->User()->id }}/profile" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-primary"></i>
                    </div>
                </div>
                <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="/user/change-password/{{ Auth()->User()->id }}" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                </div>
                <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                </div>
                <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="/logout" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                    </div>
                </div>
                <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Log Out</p>
                </div>
            </a>
        </div>
        </div>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link collapsed" data-bs-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
          <span class="menu-icon">
            <i class="mdi mdi-laptop"></i>
          </span>
          <span class="menu-title">Dashboard</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="page-layouts" style="">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/admin/dashboard">Dashboard Admin</a></li>
            <li class="nav-item"> <a class="nav-link" href="/dashboard">Public Dashboard</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-account"></i>
          </span>
          <span class="menu-title">User</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/user/all">All User</a></li>
            <li class="nav-item"> <a class="nav-link" href="/user/admin">Admin</a></li>
            <li class="nav-item"> <a class="nav-link" href="/user/petugas">Petugas</a></li>
            <li class="nav-item"> <a class="nav-link" href="/user/customer">Customer</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="/jenis_bahan">
          <span class="menu-icon">
            <i class="mdi mdi-settings-box"></i>
          </span>
          <span class="menu-title">Jenis Bahan</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="/mesin">
          <span class="menu-icon">
            <i class="mdi mdi-factory"></i>
          </span>
          <span class="menu-title">Mesin</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link collapsed" data-bs-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
          <span class="menu-icon">
            <i class="mdi mdi-tag-multiple"></i>
          </span>
          <span class="menu-title">Bahan</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="maps" style="">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/bahan"> Material </a></li>
            <li class="nav-item"> <a class="nav-link" href="/bahan/seluruh"> Seluruh Material </a></li>
                @foreach ($pilih_jenis as $jjenis)
                    <li class="nav-item"><a class="nav-link"
                        href="/bahan/jenis/{{ $jjenis->id }}">{{ $jjenis->tipe }}</a></li>
                @endforeach
          </ul>
        </div>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="/pemesanan">
          <span class="menu-icon">
            <i class="mdi mdi-cart"></i>
          </span>
          <span class="menu-title">Pemesanan</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <span class="menu-icon">
            <i class="mdi mdi-magnify"></i>
          </span>
          <span class="menu-title">Detail Produksi</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/detail_produksi"> All </a></li>
            <li class="nav-item"> <a class="nav-link" href="/detail_produksi/dalam_proses"> dalam proses </a></li>
            <li class="nav-item"> <a class="nav-link" href="/detail_produksi/tertunda"> tertunda / tertahan </a></li>
            <li class="nav-item"> <a class="nav-link" href="/detail_produksi/berhenti"> berhenti / dropped </a></li>
            <li class="nav-item"> <a class="nav-link" href="/detail_produksi/selesai"> selesai </a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="/produksi">
          <span class="menu-icon">
            <i class="mdi mdi-format-list-bulleted"></i>
          </span>
          <span class="menu-title">Produksi</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="documentation">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Documentation</span>
        </a>
      </li>
    </ul>
  </nav>
  <script>
    document.getElementById("profile-dropdown").addEventListener("click", function() {
        var dropdownMenu = document.getElementById("dropdown-menu");
        if (dropdownMenu.classList.contains("show")) {
            dropdownMenu.classList.remove("show");
        } else {
            dropdownMenu.classList.add("show");
        }
    });
</script>
