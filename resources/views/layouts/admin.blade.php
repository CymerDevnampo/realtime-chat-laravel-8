<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Admin Dashboard</title>
    <link rel="shortcut icon" href="{{ asset('/admin/assets/img/pap-icon.png') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap"rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/admin/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/assets/plugins/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/assets/plugins/icons/flags/flags.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/assets/plugins/simple-calendar/simple-calendar.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.2/circle-progress.min.js"></script>

    @stack('css')

</head>

<body>

    <div class="main-wrapper">
        <div class="header">

            <div class="header-left">
                <a href="/cms.pap.com" class="logo">
                    <img src="{{ asset('/admin/assets/img/paplogo.jpg') }}" alt="Logo"><strong class="text-black">
                        Content Controller</strong>
                </a>
                <a href="/cms.pap.com" class="logo logo-small">
                    <img src="{{ asset('/admin/assets/img/paplogo.jpg') }}" alt="Logo" width="30"
                        height="30">
                </a>
            </div>

            <div class="menu-toggle">
                <a href="javascript:void(0);" id="toggle_btn">
                    <i class="fas fa-bars"></i>
                </a>
            </div>

            <div class="top-nav-search">
                <form>
                    <input type="text" class="form-control" placeholder="Search here">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>

            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>

            <ul class="nav user-menu">

                <li class="nav-item dropdown noti-dropdown language-drop me-2">

                    <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
                        <img src="{{ asset('/admin/assets/img/icons/header-icon-01.svg') }}" alt="">
                    </a>

                    <div class="dropdown-menu ">
                        <div class="noti-content">
                            <div>
                                <a class="dropdown-item" href="javascript:;"><i
                                        class="flag flag-lr me-2"></i>English</a>
                                <a class="dropdown-item" href="javascript:;"><i
                                        class="flag flag-bl me-2"></i>Francais</a>
                                <a class="dropdown-item" href="javascript:;"><i class="flag flag-cn me-2"></i>Turkce</a>
                            </div>
                        </div>
                    </div>

                </li>

                <li class="nav-item dropdown noti-dropdown me-2">

                    <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
                        <img src="{{ asset('/admin/assets/img/icons/header-icon-05.svg') }}" alt="">
                    </a>

                    <div class="dropdown-menu notifications">

                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>

                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="{{ asset('/admin/assets/img/profiles/avatar-02.jpg') }}">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Carlson Tech</span>
                                                    has
                                                    approved <span class="noti-title">your estimate</span></p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="{{ asset('/admin/assets/img/profiles/avatar-11.jpg') }}">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">International
                                                        Software
                                                        Inc</span> has sent you a invoice in the amount of <span
                                                        class="noti-title">$218</span></p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="{{ asset('/admin/assets/img/profiles/avatar-17.jpg') }}">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">John Hendry</span>
                                                    sent
                                                    a cancellation request <span class="noti-title">Apple iPhone
                                                        XR</span></p>
                                                <p class="noti-time"><span class="notification-time">8 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="{{ asset('/admin/assets/img/profiles/avatar-13.jpg') }}">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Mercury Software
                                                        Inc</span> added a new product <span class="noti-title">Apple
                                                        MacBook Pro</span></p>
                                                <p class="noti-time"><span class="notification-time">12 mins
                                                        ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="topnav-dropdown-footer">
                            <a href="#">View all Notifications</a>
                        </div>
                    </div>

                </li>

                <li class="nav-item zoom-screen me-2">
                    <a href="#" class="nav-link header-nav-list win-maximize">
                        <img src="{{ asset('/admin/assets/img/icons/header-icon-04.svg') }}" alt="">
                    </a>
                </li>

                <li class="nav-item dropdown has-arrow new-user-menus">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle"
                                src="https://scontent.fceb2-2.fna.fbcdn.net/v/t39.30808-1/431928931_942125730834820_9042270891196965983_n.jpg?stp=cp6_dst-jpg_p200x200&_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_ohc=Ifth-Mw6sEoQ7kNvgG82NJC&_nc_ht=scontent.fceb2-2.fna&oh=00_AYCbYBUdM82EEdXn0rL9dzDAjeLzDgiptpq6U7A3bXMVYQ&oe=6644F110"
                                width="31" alt="Soeng Souy">
                            <div class="user-text">
                                @if (Route::has('login'))
                                    @auth
                                        <h6>{{ Auth::user()->name }}</h6>
                                    @endauth
                                @endif
                                <p class="text-muted mb-0">Administrator</p>
                            </div>
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="https://scontent.fceb2-2.fna.fbcdn.net/v/t39.30808-1/431928931_942125730834820_9042270891196965983_n.jpg?stp=cp6_dst-jpg_p200x200&_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_ohc=Ifth-Mw6sEoQ7kNvgG82NJC&_nc_ht=scontent.fceb2-2.fna&oh=00_AYCbYBUdM82EEdXn0rL9dzDAjeLzDgiptpq6U7A3bXMVYQ&oe=6644F110"
                                    alt="User Image" class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <h6>{{ Auth::user()->name }}</h6>
                                <p class="text-muted mb-0">Administrator</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="/profile">My Profile</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">Logout</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>

            </ul>

        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>

                        <li class="menu-title">
                            <span>Main Menu</span>
                        </li>

                        <li
                            class="submenu {{ request()->is('chat', 'create-about', 'edit-about/*') ? 'active' : '' }}">
                            <a href="#"><i class="fab fa-facebook-messenger"></i> <span> Chats</span>
                                <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="/chat" class="{{ request()->is('chat') ? 'active' : '' }}">Inbox</a>
                                </li>
                            </ul>
                        </li>

                        <li
                            class="submenu {{ request()->is('contacts', 'create-banner', 'edit-banner/*') ? 'active' : '' }}">
                            <a href="#"><i class="fas fa-user-friends"></i> <span>Contacts </span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="/contacts" class="{{ request()->is('contact') ? 'active' : '' }}">List of
                                        Contacts
                                        List</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            @yield('content')

            {{-- @include('pages.adminFooter') --}}
        </div>
    </div>

    <script src="{{ asset('/admin/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('/admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/admin/assets/js/feather.min.js') }}"></script>
    <script src="{{ asset('/admin/assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('/admin/assets/plugins/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ asset('/admin/assets/plugins/apexchart/chart-data.js') }}"></script>
    <script src="{{ asset('/admin/assets/js/script.js') }}"></script>
    <script src="{{ asset('/admin/assets/plugins/simple-calendar/jquery.simple-calendar.js') }}"></script>
    <script src="{{ asset('/admin/assets/js/calander.js') }}"></script>
    <script src="{{ asset('/admin/assets/js/circle-progress.min.js') }}"></script>

    @stack('js')

</body>

</html>
