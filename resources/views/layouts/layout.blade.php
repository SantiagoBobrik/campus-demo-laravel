<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Fly Education</title>
    <!-- base:css -->
    <link rel="stylesheet" href="../vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="../vendors/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="../vendors/flag-icon-css/css/flag-icon.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('../css/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />

</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center">
                <a class="navbar-brand brand-logo " href="/cursos"><img
                        src="https://static.wixstatic.com/media/b73633_d70fe123ce904c00beb774c66cd71fd4~mv2.jpg/v1/fill/w_360,h_160,al_c,q_80,usm_0.66_1.00_0.01/LOGO%20IAAC.webp"
                        alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="/cursos"><img
                        src="https://static.wixstatic.com/media/b73633_d70fe123ce904c00beb774c66cd71fd4~mv2.jpg/v1/fill/w_360,h_160,al_c,q_80,usm_0.66_1.00_0.01/LOGO%20IAAC.webp"
                        alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>

                <ul class="navbar-nav navbar-nav-right">


                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="https://via.placeholder.com/30x30" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                    <i class="mdi mdi-logout"></i>
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>

                            </a>
                        </div>
                    </li>

                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>

        <div class="container-fluid page-body-wrapper">
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">


                    @if ( auth()->user()->name == 'Anac')

                    <li class="nav-item">
                        <a class="nav-link" href="/anac">
                            <i class="mdi mdi-clipboard-text-outline menu-icon"></i>
                            <span class="menu-title">Anac</span>
                        </a>
                    </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="/cursos">
                            <i class="mdi mdi-clipboard-text-outline menu-icon"></i>
                            <span class="menu-title">Todos los cursos</span>
                        </a>
                    </li>

                    <!-- nav nuevo -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <i class="mdi mdi-airplane menu-icon"></i>
                            <span class="menu-title">PCA HVI</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="/materias_pca">Todas las materias</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="/legislacion_pca">Legislacion</a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- fin nav nuevo -->


                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">

                    <div class="dashboard-header d-flex flex-column grid-margin">
                        <div
                            class="d-flex align-items-center justify-content-between flex-wrap border-bottom pb-3 mb-3">
                            <div class="d-flex align-items-center">
                                <h4 class="mb-0 font-weight-bold">@yield('title')</h4>
                            </div>
                        </div>
                    </div>

                    @yield('content')
                </div>





                <!-- base:js -->
                <script src="../vendors/js/vendor.bundle.base.js"></script>
                <!-- endinject -->
                <!-- Plugin js for this page-->
                <script src="../vendors/jquery.flot/jquery.flot.js"></script>
                <script src="../vendors/jquery.flot/jquery.flot.pie.js"></script>
                <script src="../vendors/jquery.flot/jquery.flot.resize.js"></script>
                <script src="../vendors/jqvmap/jquery.vmap.min.js"></script>
                <script src="../vendors/jqvmap/maps/jquery.vmap.world.js"></script>
                <script src="../vendors/jqvmap/maps/jquery.vmap.usa.js"></script>
                <script src="../vendors/peity/jquery.peity.min.js"></script>
                <script src="../js/jquery.flot.dashes.js"></script>
                <script src="../js/off-canvas.js"></script>
                <script src="../js/hoverable-collapse.js"></script>
                <script src="../js/template.js"></script>
                <script src="../js/settings.js"></script>
                <script src="../js/todolist.js"></script>
                <script src="../js/dashboard.js"></script>
                <script src="../js/file-upload.js"></script>


</body>

</html>