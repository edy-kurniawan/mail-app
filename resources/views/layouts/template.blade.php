<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>AHAS APP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('assets/images/favicon.ico') }}">
    <link href="{{ url('assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Bootstrap Css -->
    <link href="{{ url('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ url('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ url('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <!-- DataTables -->
    <link href="{{ url('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ url('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <!-- SweetAlert2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('css')
</head>

<body data-sidebar="dark" data-layout-mode="light">

    <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="#" class="logo logo-dark">
                            <span class="logo-sm">
                                <h4 class="text-white mt-4">PANEL APP</h4>
                            </span>
                            <span class="logo-lg">
                                <h4 class="text-white mt-4">PANEL APP</h4>
                            </span>
                        </a>

                        <a href="#" class="logo logo-light">
                            <span class="logo-sm">
                                <h4 class="text-white mt-4">PANEL APP</h4>
                            </span>
                            <span class="logo-lg">
                                <h4 class="text-white mt-4">PANEL APP</h4>
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect"
                        id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..."
                                            aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="dropdown d-none d-lg-inline-block ms-1">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            data-bs-toggle="fullscreen">
                            <i class="bx bx-fullscreen"></i>
                        </button>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user"
                                src="https://ui-avatars.com/api/?name=admin&rounded=true&color=7F9CF5&background=EBF4FF"
                                alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ms-1" key="t-henry">AHAS</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="#"><i
                                    class="bx bx-user font-size-16 align-middle me-1"></i>
                                <span key="t-profile">Profile</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#"><i
                                    class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span
                                    key="t-logout">Logout</span></a>
                        </div>
                    </div>

                    {{-- <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                            <i class="bx bx-cog bx-spin"></i>
                        </button>
                    </div> --}}

                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">
            <div data-simplebar class="h-100">
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title" key="t-menu">MENU ADMIN</li>

                        <li>
                            <a href="{{ route('admin.karyawan.index') }}" class="waves-effect">
                                <i class="fas fa-user"></i>
                                <span>Karyawan</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('admin.kasir.index') }}" class="waves-effect">
                                <i class="fas fa-user-tie"></i>
                                <span>Kasir</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('admin.bengkel.index') }}" class="waves-effect">
                                <i class="fas fa-tools"></i>
                                <span>Bengkel</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('admin.absensi.index') }}" class="waves-effect">
                                <i class="fas fa-user-clock"></i>
                                <span>Absensi</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('admin.gaji.index') }}" class="waves-effect">
                                <i class="fas fa-money-check-alt"></i>
                                <span>Slip Gaji</span>
                            </a>
                        </li>

                    </ul>

                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title" key="t-menu">MENU KASIR</li>

                        <li>
                            <a href="{{ route('kasir.absensi.index') }}" class="waves-effect">
                                <i class="fas fa-user"></i>
                                <span>Absensi</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('kasir.absensi.show', 2) }}" class="waves-effect">
                                <i class="far fa-calendar-alt"></i>
                                <span>Rekap Absensi</span>
                            </a>
                        </li>

                    </ul>

                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title" key="t-menu">MENU MANAGEMENT</li>

                        <li>
                            <a href="{{ route('management.report.index') }}" class="waves-effect">
                                <i class="fas fa-money-check-alt"></i>
                                <span>Slip Gaji</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('management.broadcast.index') }}" class="waves-effect">
                                <i class="fas fa-broadcast-tower"></i>
                                <span>Broadcast Slip Gaji</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('management.report.show', 1) }}" class="waves-effect">
                                <i class="fas fa-chart-line"></i>
                                <span>Gaji Per Bengkel</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('management.report.create') }}" class="waves-effect">
                                <i class="fas fa-chart-bar"></i>
                                <span>Gaji Per Karyawan</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                @yield('content')
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © AHAS
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center px-3 py-4">

                <h5 class="m-0 me-2">Settings</h5>

                <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>

            <!-- Settings -->
            <hr class="mt-0" />
            <h6 class="text-center mb-0">Choose Layouts</h6>

            <div class="p-4">
                <div class="mb-2">
                    <img src="{{ url('assets/images/layouts/layout-1.jpg') }}" class="img-thumbnail" alt="icon apps">
                </div>

                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                    <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                </div>

                <div class="mb-2">
                    <img src="{{ url('assets/images/layouts/layout-2.jpg') }}" class="img-thumbnail" alt="icon apps 2">
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch">
                    <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                </div>
            </div>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="{{ url('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('https://code.jquery.com/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ url('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ url('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ url('assets/libs/node-waves/waves.min.js') }}"></script>

    <!-- Required datatable js -->
    <script src="{{ url('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Bootstrap Toasts Js -->
    <script src="{{ url('assets/js/pages/bootstrap-toastr.init.js') }}"></script>
    <script src="{{ url('assets/js/apps.js') }}"></script>

    <!-- Sweat Alert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('js')
</body>


</html>