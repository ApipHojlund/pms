<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html"><img src="{{ asset('image/logo/Perhitungan.png') }}"
                alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('image/logo/P.png') }}"
                alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>
        <div class="search-field d-none d-xl-block">
            <form class="d-flex align-items-center h-100" action="#">
                <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                        <i class="input-group-text border-0 mdi mdi-magnify"></i>
                    </div>
                    <input type="text" class="form-control bg-transparent border-0" placeholder="Search products" />
                </div>
            </form>
        </div>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" id="profile-dropdown" href="#" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <div class="nav-profile-img">
                        <img src="{{ asset('image/user/' . Auth()->User()->foto) }}" alt="image" />
                    </div>
                    <div class="nav-profile-text">
                        <p class="mb-1 text-black">{{ Auth()->User()->nama }}</p>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm"
                    aria-labelledby="profile-dropdown" id="dropdown-menu">
                    <a href="/user/{{ Auth()->User()->id }}/profile" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon  rounded-circle">
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
                            <div class="preview-icon  rounded-circle">
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
                            <div class="preview-icon  rounded-circle">
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
                            <div class="preview-icon  rounded-circle">
                                <i class="mdi mdi-logout text-danger"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Log Out</p>
                        </div>
                    </a>
                </div>

                {{-- <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm"
                    aria-labelledby="profileDropdown" data-x-placement="bottom-end">
                    <div class="p-3 text-center bg-primary">
                        <img class="img-avatar img-avatar48 img-avatar-thumb" src="assets/images/faces/face28.png"
                            alt="" />
                    </div>
                    <div class="p-2">
                        <h5 class="dropdown-header text-uppercase ps-2 text-dark">
                            User Options
                        </h5>
                        <a class="dropdown-item py-1 d-flex align-items-center justify-content-between"
                            href="#">
                            <span>Inbox</span>
                            <span class="p-0">
                                <span class="badge badge-primary">3</span>
                                <i class="mdi mdi-email-open-outline ms-1"></i>
                            </span>
                        </a>
                        <a class="dropdown-item py-1 d-flex align-items-center justify-content-between"
                            href="#">
                            <span>Profile</span>
                            <span class="p-0">
                                <span class="badge badge-success">1</span>
                                <i class="mdi mdi-account-outline ms-1"></i>
                            </span>
                        </a>
                        <a class="dropdown-item py-1 d-flex align-items-center justify-content-between"
                            href="javascript:void(0)">
                            <span>Settings</span>
                            <i class="mdi mdi-settings"></i>
                        </a>
                        <div role="separator" class="dropdown-divider"></div>
                        <h5 class="dropdown-header text-uppercase ps-2 text-dark mt-2">
                            Actions
                        </h5>
                        <a class="dropdown-item py-1 d-flex align-items-center justify-content-between"
                            href="#">
                            <span>Lock Account</span>
                            <i class="mdi mdi-lock ms-1"></i>
                        </a>
                        <a class="dropdown-item py-1 d-flex align-items-center justify-content-between"
                            href="#">
                            <span>Log Out</span>
                            <i class="mdi mdi-logout ms-1"></i>
                        </a>
                    </div>
                </div> --}}
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-email-outline"></i>
                    <span class="count-symbol bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list"
                    aria-labelledby="messageDropdown">
                    <h6 class="p-3 mb-0 bg-primary text-white py-4">Messages</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <img src="assets/images/faces/face4.jpg" alt="image" class="profile-pic" />
                        </div>
                        <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                            <h6 class="preview-subject ellipsis mb-1 font-weight-normal">
                                Mark send you a message
                            </h6>
                            <p class="text-gray mb-0">1 Minutes ago</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <img src="assets/images/faces/face2.jpg" alt="image" class="profile-pic" />
                        </div>
                        <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                            <h6 class="preview-subject ellipsis mb-1 font-weight-normal">
                                Cregh send you a message
                            </h6>
                            <p class="text-gray mb-0">15 Minutes ago</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <img src="assets/images/faces/face3.jpg" alt="image" class="profile-pic" />
                        </div>
                        <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                            <h6 class="preview-subject ellipsis mb-1 font-weight-normal">
                                Profile picture updated
                            </h6>
                            <p class="text-gray mb-0">18 Minutes ago</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <h6 class="p-3 mb-0 text-center">4 new messages</h6>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                    data-bs-toggle="dropdown">
                    <i class="mdi mdi-bell-outline"></i>
                    <span class="count-symbol bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list"
                    aria-labelledby="notificationDropdown">
                    <h6 class="p-3 mb-0 bg-primary text-white py-4">
                        Notifications
                    </h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-success">
                                <i class="mdi mdi-calendar"></i>
                            </div>
                        </div>
                        <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                            <h6 class="preview-subject font-weight-normal mb-1">
                                Event today
                            </h6>
                            <p class="text-gray ellipsis mb-0">
                                Just a reminder that you have an event today
                            </p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-warning">
                                <i class="mdi mdi-settings"></i>
                            </div>
                        </div>
                        <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                            <h6 class="preview-subject font-weight-normal mb-1">
                                Settings
                            </h6>
                            <p class="text-gray ellipsis mb-0">Update dashboard</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-info">
                                <i class="mdi mdi-link-variant"></i>
                            </div>
                        </div>
                        <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                            <h6 class="preview-subject font-weight-normal mb-1">
                                Launch Admin
                            </h6>
                            <p class="text-gray ellipsis mb-0">New admin wow!</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <h6 class="p-3 mb-0 text-center">See all notifications</h6>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
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