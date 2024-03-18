<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-category">Main</li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#page-layouts" aria-expanded="false">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
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
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                aria-controls="ui-basic">
                <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
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
        <li class="nav-item">
            <a class="nav-link" href="/jenis_bahan">
                <span class="icon-bg"><i class="mdi mdi-settings-box menu-icon"></i></span>
                <span class="menu-title">Jenis Bahan</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/mesin">
                <span class="icon-bg"><i class="mdi mdi-factory menu-icon"></i></span>
                <span class="menu-title">Mesin</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#maps" aria-expanded="false">
                <span class="icon-bg"><i class="mdi mdi-tag-multiple menu-icon"></i></span>
                <span class="menu-title">Bahan / Material</span>
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
        <li class="nav-item">
            <a class="nav-link" href="/pemesanan">
                <span class="icon-bg"><i class="mdi mdi-cart menu-icon"></i></span>
                <span class="menu-title">Pemesanan</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="icon-bg"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
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
        <li class="nav-item">
            <a class="nav-link" href="/produk">
                <span class="icon-bg"><i class="mdi mdi-cube-outline menu-icon"></i></span>
                <span class="menu-title">Produk</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link"
                href="/produksi"
                {{-- target="_blank" --}}>
                <span class="icon-bg">
                    <i class="mdi mdi-library-plus menu-icon"></i>
                </span>
                <span class="menu-title">Produksi</span>
            </a>
        </li>
        <li class="nav-item sidebar-user-actions">
            <div class="user-details">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="d-flex align-items-center">
                            <div class="sidebar-profile-img">
                                <img src="{{ asset('image/user/'.Auth()->User()->foto) }}" class="img-xs rounded-circle" alt="image" />
                            </div>
                            <div class="sidebar-profile-text">
                                <p class="mb-1">{{ Auth()->User()->nama }}</p>
                                <span>{{ Auth()->User()->level }}</span>
                            </div>
                        </div>
                    </div>
                    {{-- <script>
                        document.getElementById("profile-dropdown").addEventListener("click", function() {
                            var dropdownMenu = document.getElementById("dropdown-menu");
                            if (dropdownMenu.classList.contains("show")) {
                                dropdownMenu.classList.remove("show");
                            } else {
                                dropdownMenu.classList.add("show");
                            }
                        });
                    </script> --}}
                    {{-- <div class="badge badge-success"><a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-account-settings"></i></a></div> --}}
                </div>
            </div>
        </li>
        <li class="nav-item sidebar-user-actions">
            <div class="sidebar-user-menu">
                <a href="/user/{{ Auth()->User()->id }}/profile" class="nav-link"><i class="mdi mdi-settings menu-icon"></i>
                    <span class="menu-title">Settings</span>
                </a>
            </div>
        </li>
        {{-- <li class="nav-item sidebar-user-actions">
            <div class="sidebar-user-menu">
                <a href="#" class="nav-link"><i class="mdi mdi-speedometer menu-icon"></i>
                    <span class="menu-title">Take Tour</span></a>
            </div>
        </li> --}}
        <li class="nav-item sidebar-user-actions">
            <div class="sidebar-user-menu">
                <a href="/logout" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                    <span class="menu-title">Log Out</span></a>
            </div>
        </li>
    </ul>
</nav>
