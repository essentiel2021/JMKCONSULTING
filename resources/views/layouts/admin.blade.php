<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png">

    <link rel="canonical" href="https://demo.adminkit.io/">

    <title>AdminKit Demo - Bootstrap 5 Admin Template</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&amp;display=swap" rel="stylesheet">

    <link class="js-stylesheet" href="{{asset('css/light.css')}}" rel="stylesheet">
    <script src="js/settings.js"></script>
    <style>
        body {
            opacity: 0;
        }
    </style>
    <!-- END SETTINGS -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-120946860-10"></script>
</head>


<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="index.html">
                    <span class="sidebar-brand-text align-middle">
                        AdminKit
                        <sup><small class="badge bg-primary text-uppercase">Pro</small></sup>
                    </span>
                    <svg class="sidebar-brand-icon align-middle" width="32px" height="32px" viewBox="0 0 24 24"
                        fill="none" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="square"
                        stroke-linejoin="miter" color="#FFFFFF" style="margin-left: -3px">
                        <path d="M12 4L20 8.00004L12 12L4 8.00004L12 4Z"></path>
                        <path d="M20 12L12 16L4 12"></path>
                        <path d="M20 16L12 20L4 16"></path>
                    </svg>
                </a>

                <div class="sidebar-user">
                    <div class="d-flex justify-content-center">
                        <div class="flex-shrink-0">
                            <img src="{{asset('img/avatar.jpg')}}" class="avatar img-fluid rounded me-1" alt="Charles Hall">
                        </div>
                        <div class="flex-grow-1 ps-2">
                            <a class="sidebar-user-title dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                Charles Hall
                            </a>
                            <div class="dropdown-menu dropdown-menu-start">
                                <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1"
                                        data-feather="user"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="align-middle me-1"
                                        data-feather="pie-chart"></i> Analytics</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="pages-settings.html"><i class="align-middle me-1"
                                        data-feather="settings"></i> Settings &amp;
                                    Privacy</a>
                                <a class="dropdown-item" href="#"><i class="align-middle me-1"
                                        data-feather="help-circle"></i> Help Center</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Log out</a>
                            </div>

                            <div class="sidebar-user-subtitle">Designer</div>
                        </div>
                    </div>
                </div>

                <ul class="sidebar-nav">
                    <li class="sidebar-item active">
                        <a data-bs-target="#dashboards" data-bs-toggle="collapse" class="sidebar-link">
                            <i class="align-middle" data-feather="sliders"></i> <span
                                class="align-middle">Dashboards</span>
                        </a>
                        <ul id="dashboards" class="sidebar-dropdown list-unstyled collapse show"
                            data-bs-parent="#sidebar">
                            <li class="sidebar-item active"><a class="sidebar-link" href="{{route('sliders.index')}}">Slides</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="#">Mes services</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="#">Mes Projets</a></li>
                        </ul>
                    </li>

                    {{-- <li class="sidebar-header">
                        Components
                    </li> --}}
                    {{-- <li class="sidebar-item">
                        <a data-bs-target="#ui" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-feather="briefcase"></i> <span class="align-middle">UI
                                Elements</span>
                        </a>
                        <ul id="ui" class="sidebar-dropdown list-unstyled collapse "
                            data-bs-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="ui-alerts.html">Alerts <span
                                        class="sidebar-badge badge bg-primary">Pro</span></a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="ui-buttons.html">Buttons</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="ui-cards.html">Cards</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="ui-general.html">General</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="ui-grid.html">Grid</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="ui-modals.html">Modals <span
                                        class="sidebar-badge badge bg-primary">Pro</span></a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="ui-offcanvas.html">Offcanvas <span
                                        class="sidebar-badge badge bg-primary">Pro</span></a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="ui-placeholders.html">Placeholders
                                    <span class="sidebar-badge badge bg-primary">Pro</span></a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="ui-tabs.html">Tabs <span
                                        class="sidebar-badge badge bg-primary">Pro</span></a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="ui-typography.html">Typography</a>
                            </li>
                        </ul>
                    </li> --}}
                </ul>
            </div>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>

                <form class="d-none d-sm-inline-block">
                    <div class="input-group input-group-navbar">
                        <input type="text" class="form-control" placeholder="Search…" aria-label="Search">
                        <button class="btn" type="button">
                            <i class="align-middle" data-feather="search"></i>
                        </button>
                    </div>
                </form>
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <li class="nav-item">
                            <a class="nav-icon js-fullscreen d-none d-lg-block" href="#">
                                <div class="position-relative">
                                    <i class="align-middle" data-feather="maximize"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-icon pe-md-0 dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                <img src="{{asset('img/avatar.jpg')}}" class="avatar img-fluid rounded" alt="Charles Hall">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1"
                                        data-feather="user"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="align-middle me-1"
                                        data-feather="pie-chart"></i> Analytics</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="pages-settings.html"><i class="align-middle me-1"
                                        data-feather="settings"></i> Settings &amp;
                                    Privacy</a>
                                <a class="dropdown-item" href="#"><i class="align-middle me-1"
                                        data-feather="help-circle"></i> Help Center</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="content">
                @yield('content')
            </main>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a href="https://adminkit.io/" target="_blank"
                                    class="text-muted"><strong>AdminKit</strong></a> ©
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>
