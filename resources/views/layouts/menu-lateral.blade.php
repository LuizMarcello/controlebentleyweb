<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
        {{-- <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
         class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
        <span class="brand-text font-weight-light">Bentley Brasil</span>
    </a>

    <!-- Sidebar -->
    {{-- <div class="sidebar"> --}}
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            {{-- <img src="../../dist/img/user2-160x160.jpg"
                 class="img-circle elevation-2" alt="User Image"> --}}
        </div>
        <div class="info">
            <a class="d-block">{{ Auth::user()->name }}</a>

            <a class="btn btn-danger btn-sm" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                Sair
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
    {{-- </div> --}}

    <!-- SidebarSearch Form -->
    {{-- <div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
      <input class="form-control form-control-sidebar" type="search" placeholder="Search"
      aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-sidebar">
          <i class="fas fa-search fa-fw"></i>
        </button>
      </div>
    </div>
  </div> --}}

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->

            {{-- <li class="nav-item"> --}} {{-- Para recolher o menu da barra lateral --}}
            <li class="nav-item menu-open">{{-- Para deixar o menu sempre aberto --}}
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="nav-icon fas fa-arrow-circle-down"></i>
                    <p>
                        Dashboard

                    </p>
                </a>
            </li>

            {{-- <li class="nav-item"> --}} {{-- Para recolher o menu da barra lateral --}}
            <li class="nav-item menu-open">{{-- Para deixar o menu sempre aberto --}}

                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-arrow-circle-down"></i>
                    <p>
                        Entrada
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="../../index.html" class="nav-link">
                            <i class="fas fa-file nav-icon"></i>
                            <p>Novo Fornecedor</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../../index2.html" class="nav-link">
                            <i class="fas fa-list-alt nav-icon"></i>
                            <p>Lista de Fornecedores</p>
                        </a>
                    </li>

                </ul>
            </li>

            {{-- <li class="nav-item"> --}} {{-- Para recolher o menu da barra lateral --}}
            <li class="nav-item menu-open">{{-- Para deixar o menu sempre aberto --}}
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-arrow-alt-circle-up"></i>
                    <p>
                        Saida
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="../../index.html" class="nav-link">
                            <i class="fas fa-file nav-icon"></i>
                            <p>Novo Cliente</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../../index2.html" class="nav-link">
                            <i class="fas fa-list-alt nav-icon"></i>
                            <p>Lista de Clientes</p>
                        </a>
                    </li>

                </ul>
            </li>

            {{-- <li class="nav-item"> --}} {{-- Para recolher o menu da barra lateral --}}
            <li class="nav-item menu-open">{{-- Para deixar o menu sempre aberto --}}
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-money-check-alt"></i>
                    <p>
                        Financeiro
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="../../index.html" class="nav-link">
                            <i class="fas fa-dollar-sign nav-icon"></i>
                            <p>Novo Lançamento</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../../index2.html" class="nav-link">
                            <i class="fas fa-chart-pie nav-icon"></i>
                            <p>Relatório Financeiro</p>
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
