@extends('layouts.app')
@section('content')

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- BARRA SUPERIOR DE NAVEGACIÓN -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Enlaces de barra de navegación - IZQUIERDO -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

      </ul>

      <!-- Enlaces de barra de navegación - DERECHO -->
      <ul class="navbar-nav ml-auto">
        <!-- BUSCADOR - barra de navegación -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Menú desplegable de mensajes -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>

        </li>
        <!-- NOTIFICACIONES - Menú Desplegable -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- BARRA LATERAL -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Logo -->
      <a href="{{ url('/') }}" class="brand-link">
        <img src="{{ asset('img/logo.png')}}" alt="UTM" class="brand-image img-circle elevation-1" style="opacity: 10">
        <span class="brand-text font-weight-light">Biblioteca Virtual</span>
      </a>
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- MÓDULO DE USUARIO -->


        <!-- MENÚ - BarraLateral -->
        <nav class="mt-2">

          <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->

          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user-alt"></i>
                <p>
                  {{ Auth::user()->name }}
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                    <i class="far fa-sign-in nav-icon"></i>
                    <p> Cerrar Sesión</p>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                    </form>
                  </a>

                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Libros
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('libro.create') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Nuevo Ingreso</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('libro.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Listado de Libros</p>
                  </a>
                </li>

              </ul>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  Usuario
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('usuario.create') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Nuevo Ingreso </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('usuario.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Listado de Usuario </p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tree"></i>
                <p>
                  Reservaciones
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('reserva.create') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Nueva reservación</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('reserva.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Listado de reservaciones</p>
                  </a>
                </li>

              </ul>
            </li>


          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            @yield('content2')
          </div>
        </div><!-- /.container-fluid -->
      </section>
      @yield('content3')
      <!-- CONTENIDO DEL PANEL -->

      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 1.0
      </div>
      <strong>Copyright &copy; 2022 Wladimir-Arely-Juan-Fernanda.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  @endsection