<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Painel Administrativo {{ \App\Config::SITE_NAME }}</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
          crossorigin="anonymous"/>
    <script src="{{ asset('js/all.min.js') }}"
            crossorigin="anonymous"></script>
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/Chart.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/demo/chart-bar-demo.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/demo/datatables-demo.js') }}"></script>
</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="index.html">{{ \App\Config::SITE_NAME }}</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i>
    </button
    ><!-- Navbar Search-->
    <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"></div>
    <!-- Navbar-->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Activity Log</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item"
                   onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                   href="{{ route('logout') }}">Sair</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Principal</div>
                    <a class="nav-link" href="{{ route('home') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard</a>
                    <div class="sb-sidenav-menu-heading">Configurações</div>
                    <a class="nav-link" href="{{ route('user.index') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                        Usuários
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logado como:</div>
                {{ \Illuminate\Support\Facades\Auth::user()->name }}
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            @yield('content')
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; {{ \App\Config::SITE_NAME }} {{ date('Y') }}</div>
                </div>
            </div>
        </footer>
    </div>
</div>
</body>
</html>
