<div class="horizontal-menu">
    <nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation">
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard">
                        <i class="mdi mdi-file-document-box menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                @can('admin')
                <li class="nav-item">
                    <a href="/user" class="nav-link">
                        <i class="mdi mdi-account menu-icon"></i>
                        <span class="menu-title">User</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                @endcan
                @can('petugas')
                <li class="nav-item">
                    <a href="/material-type" class="nav-link">
                        <i class="mdi mdi-settings menu-icon"></i>
                        <span class="menu-title">Material Type</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                @endcan
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                        <span class="menu-title">Material</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="submenu">
                        <ul>
                            @can('petugas')
                            <li class="nav-item"><a class="nav-link" href="/material">Control Data Material</a></li>
                            @endcan
                            <li class="nav-item"><a class="nav-link" href="/material/all">All Material</a></li>
                            @foreach ($pilih_jenis as $jjenis)
                                <li class="nav-item"><a class="nav-link"
                                        href="/material/choice/{{ $jjenis->id }}">{{ $jjenis->tipe }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="/machine" class="nav-link">
                        <i class="mdi mdi-factory menu-icon"></i>
                        <span class="menu-title">Machine</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                @can('petugas')
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="mdi mdi-codepen menu-icon"></i>
                        <span class="menu-title">Production Pages</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="submenu">
                        <ul class="submenu-item">
                            <li class="nav-item"><a class="nav-link" href="/production">Production</a></li>
                            <li class="nav-item"><a class="nav-link" href="/detail">Detail Production</a></li>
                            <li class="nav-item"><a class="nav-link" href="/product">Product</a></li>
                        </ul>
                    </div>
                </li>
                @endcan
                <li class="nav-item">
                    <a href="docs/documentation.html" class="nav-link">
                        <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                        <span class="menu-title">Documentation</span></a>
                </li>
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                        <span class="nav-profile-name">{{ Auth()->User()->nama }}</span>
                        <span class="online-status"></span>
                        <img src="{{asset('image/user/'.Auth()->User()->foto)}}" class="img-sm rounded-circle" alt="profile" />
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                        @can('admin')
                        <a class="dropdown-item" href="/admin/dashboard">
                            <i class="mdi mdi-laptop text-primary"></i>
                            Admin Dashboard
                        </a>
                        @endcan
                        <a href="/user/profile/{{ Auth()->User()->id }}" class="dropdown-item">
                            <i class="mdi mdi-account text-primary"></i>
                            Profile
                        </a>
                        <a class="dropdown-item" href="/order">
                            <i class="mdi mdi-settings text-primary"></i>
                            Order
                        </a>
                        <a class="dropdown-item" href="/logout">
                            <i class="mdi mdi-logout text-primary"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
