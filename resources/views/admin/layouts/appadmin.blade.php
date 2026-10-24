<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="CAMS">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="{{ config('app.name', 'Laravel') }}">
    <meta name="description" content="">

    <title>@yield('title', '') | Admin | {{ config('app.name', 'Laravel') }}</title>
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="48x48" href="{{ asset('img/favicon-48x48.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/apple-touch-icon.png') }}">
    <meta property="og:image" content="{{ asset('/images/logo.png') }}">
    <meta property="og:site_name" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Custom fonts for this template -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    @stack('style')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar"
            style="background: #8e734b;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.home') }}">
                <!--<div class="sidebar-brand-icon rotate-n-15">-->
                <!--    <i class="fas fa-laugh-wink"></i>-->
                <!--</div>-->
                <div class="sidebar-brand-text mx-3">
                    <img class="" src="{{ asset('/images/logo.png') }}"
                        style="width: 90px;height: 55px;margin-left: 55px;margin-top: 7px;">




                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ request()->is('admin') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.home') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Tables -->

            {{--  <li class="nav-item {{ request()->is('admin/resorts/1*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.resorts.index', 1) }}"> <i class="fas fa-building"></i>
                    <span>Resorts</span>
                </a>
            </li>  --}}







            {{--  <li class="nav-item {{ request()->is('admin/resorts/3*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.resorts.index', 3) }}"> <i class="fas fa-building"></i>
                    <span>Resorts (Mega Menu)</span>
                </a>
            </li>  --}}












            {{--
            @php
                $galleryMenuOpen =
                    request()->is('admin/gallery-intro/2*') ||
                    request()->is('admin/gallery-categories*') ||
                    request()->is('admin/gallery/2*');
            @endphp

            <li class="nav-item {{ $galleryMenuOpen ? 'active' : '' }}">
                <a class="nav-link {{ $galleryMenuOpen ? '' : 'collapsed' }}" href="#" data-toggle="collapse"
                    data-target="#collapseGallery" aria-expanded="{{ $galleryMenuOpen ? 'true' : 'false' }}"
                    aria-controls="collapseGallery">

                    <i class="fas fa-image"></i>
                    <span>Manage Gallery</span>
                </a>

                <div id="collapseGallery" class="collapse {{ $galleryMenuOpen ? 'show' : '' }}"
                    aria-labelledby="headingGallery" data-parent="#accordionSidebar">

                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ request()->is('admin/gallery-intro/2*') ? 'active' : '' }}"
                            href="{{ route('admin.gallery-intro.edit', 2) }}">
                            Intro
                        </a>

                        <a class="collapse-item {{ request()->is('admin/gallery-categories*') ? 'active' : '' }}"
                            href="{{ route('admin.gallery-categories.index') }}">
                            Category
                        </a>

                        <a class="collapse-item {{ request()->is('admin/gallery/2*') ? 'active' : '' }}"
                            href="{{ route('admin.galleries.index', 2) }}">
                            Gallery
                        </a>
                    </div>
                </div>
            </li>  --}}


            {{--  <li
                class="nav-item {{ request()->is('admin/contact*') || request()->is('admin/contact-enquiry*') ? 'active' : '' }}">

                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#contactMenu"
                    aria-expanded="{{ request()->is('admin/contact*') || request()->is('admin/contact-enquiry*') ? 'true' : 'false' }}">

                    <i class="fas fa-envelope"></i>
                    <span>Manage Contact</span>

                </a>

                <div id="contactMenu"
                    class="collapse {{ request()->is('admin/contact*') || request()->is('admin/contact-enquiry*') ? 'show' : '' }}">

                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ request()->is('admin/contact') ? 'active' : '' }}"
                            href="{{ route('admin.contact-page.edit') }}">
                            Page
                        </a>

                        <a class="collapse-item {{ request()->is('admin/contact-enquiry*') ? 'active' : '' }}"
                            href="{{ route('admin.contact-enquiry.index') }}">
                            Enquiries
                        </a>

                    </div>

                </div>

            </li>  --}}




            {{--  <li class="nav-item {{ request()->is('admin/resorts/4*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.resorts.index', 4) }}"> <i class="fas fa-building"></i>
                    <span>Resorts (Book Now)</span>
                </a>
            </li>  --}}

            {{--  <li class="nav-item {{ request()->is('admin/contact-page*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.contact-page.edit') }}"> <i class="fas fa-envelope"></i>
                    <span>Contact</span>
                </a>
            </li>  --}}


            {{-- Settings --}}
            {{--  <li class="nav-item {{ request()->routeIs('admin.settings.edit') ? 'active' : '' }}">

                <a class="nav-link {{ request()->routeIs('admin.settings.edit') ? '' : 'collapsed' }}"
                    href="{{ route('admin.settings.edit') }}">

                    <i class="fas fa-cog"></i>
                    <span>Settings</span>

                </a>

            </li>  --}}
            {{-- Newsletter Enquiries --}}
            {{--  <li class="nav-item {{ request()->routeIs('admin.newsletters.*') ? 'active' : '' }}">

                <a class="nav-link" href="{{ route('admin.newsletters.index') }}">

                    <i class="fas fa-envelope"></i>

                    <span>Newsletter Subscribers</span>

                </a>

            </li>  --}}









            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fas fa-bars"></i>
                        </button>
                    </form>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->



                        <li class="nav-item">
                            <form action="{{ route('admin.logout') }}" method="POST">
                                @csrf

                                <button type="submit" class="nav-link btn btn-link"
                                    style="text-decoration: none; border: none; cursor: pointer;">
                                    <i class="fas fa-sign-out-alt mr-2"></i>
                                    Logout
                                </button>
                            </form>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                @yield('content')
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>© {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All Rights Reserved.</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Are you sure you want to logout?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="#"
                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>

                    {{--  <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>  --}}

                    <form action="{{ route('admin.logout') }}" method="POST">
                        @csrf

                        <button type="submit" class="btn btn-primary">
                            Logout
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    @stack('modal')

    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>-->
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>-->

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    @stack('script')

</body>

</html>
