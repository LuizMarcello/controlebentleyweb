<!-- Main Sidebar Container -->

<aside class="main-sidebar sidebar-dark-primary elevation-4" style="overflow-y: scroll">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
        {{-- <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
         class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
        <span class="brand-text font-weight-light">Bentley Brasil</span>
    </a>

    <!-- Sidebar -->
    {{-- <div class="sidebar"> --}}
    <!-- Sidebar user (optional) -->
    {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex"> --}}
    {{-- <div class="image"> --}}
    {{-- <img src="../../dist/img/user2-160x160.jpg"
                 class="img-circle elevation-2" alt="User Image"> --}}
    {{-- </div> --}}
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

    {{-- </div> --}}
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
            <li class=" nav-item menu-open">{{-- Para deixar o menu sempre aberto --}}
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="nav-icon fas fa-satellite-dish"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>

            <li class="nav-item"> {{-- Para recolher o menu da barra lateral --}}
                {{-- <li class="nav-item menu-open"> --}}{{-- Para deixar o menu sempre aberto --}}

                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-arrow-circle-down"></i>
                    <p>
                        Usuários
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('users.index') }}?tipo=fornecedor" class="nav-link">
                            <i class="fas fa-users nav-icon"></i>
                            <p>Lista de usuários</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"> {{-- Para recolher o menu da barra lateral --}}
                {{-- <li class="nav-item menu-open"> --}}{{-- Para deixar o menu sempre aberto --}}

                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-arrow-circle-down"></i>
                    <p>
                        Fornecedor
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('empresas.create') }}?tipo=fornecedor" class="nav-link">
                            <i class="fas fa-file nav-icon"></i>
                            <p>Novo Fornecedor</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('empresas.index') }}?tipo=fornecedor" class="nav-link">
                            <i class="fas fa-list-alt nav-icon"></i>
                            <p>Lista de Fornecedores</p>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item"> {{-- Para recolher o menu da barra lateral --}}
                {{-- <li class="nav-item menu-open"> --}}{{-- Para deixar o menu sempre aberto --}}
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-arrow-alt-circle-up"></i>
                    <p>
                        Cliente
                        <i class="right fas fa-angle-left"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('empresas.create') }}?tipo=cliente" class="nav-link">
                            <i class="fas fa-file nav-icon"></i>
                            <p>Novo Cliente</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('empresas.index') }}?tipo=cliente" class="nav-link">
                            <i class="fas fa-list-alt nav-icon"></i>
                            <p>Lista de Clientes</p>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item"> {{-- Para recolher o menu da barra lateral --}}
                {{-- <li class="nav-item menu-open"> --}}{{-- Para deixar o menu sempre aberto --}}
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-arrow-alt-circle-up"></i>
                    <p>
                        Designação
                        <i class="right fas fa-angle-left"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('designacao.create') }}" class="nav-link">
                            <i class="fas fa-file nav-icon"></i>
                            <p>Nova Designação</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('designacao.index') }}?" class="nav-link">
                            <i class="fas fa-list-alt nav-icon"></i>
                            <p>Lista de Designações</p>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item"> {{-- Para recolher o menu da barra lateral --}}
                {{-- <li class="nav-item menu-open"> --}}{{-- Para deixar o menu sempre aberto --}}
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-arrow-alt-circle-up"></i>
                    <p>
                        Migração
                        <i class="right fas fa-angle-left"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('migracao.create') }}" class="nav-link">
                            <i class="fas fa-file nav-icon"></i>
                            <p>Nova Migração</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('migracao.index') }}?" class="nav-link">
                            <i class="fas fa-list-alt nav-icon"></i>
                            <p>Lista de Migrações</p>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item"> {{-- Para recolher o menu da barra lateral --}}
                {{-- <li class="nav-item menu-open"> --}}{{-- Para deixar o menu sempre aberto --}}
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-money-check-alt"></i>
                    <p>
                        Assistência Técnica
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('tecnicos.create') }}" class="nav-link">
                            <i class="fas fa-dollar-sign nav-icon"></i>
                            <p>Novo Técnico</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('tecnicos.index') }}" class="nav-link">
                            <i class="fas fa-chart-pie nav-icon"></i>
                            <p>Listagem de Técnicos</p>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item"> {{-- Para recolher o menu da barra lateral --}}
                {{-- <li class="nav-item menu-open"> --}}{{-- Para deixar o menu sempre aberto --}}
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

            <li class="nav-item menu-open">{{-- Para deixar o menu sempre aberto --}}
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-satellite-dish"></i>
                    <p>
                        Logistica
                        {{-- <i class="right fas fa-angle-left"></i> --}}
                    </p>
                </a>
            </li>
            <li class="nav-item"> {{-- Para recolher o menu da barra lateral --}}
                {{-- <li class="nav-item menu-open"> --}}{{-- Para deixar o menu sempre aberto --}}
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-money-check-alt"></i>
                    <p>
                        Planos
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('planos.create') }}" class="nav-link">
                            <i class="fas fa-dollar-sign nav-icon"></i>
                            <p>Novo Plano</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('planos.index') }}" class="nav-link">
                            <i class="fas fa-chart-pie nav-icon"></i>
                            <p>Lista de Planos</p>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item"> {{-- Para recolher o menu da barra lateral --}}
                {{-- <li class="nav-item menu-open"> --}}{{-- Para deixar o menu sempre aberto --}}
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-money-check-alt"></i>
                    <p>
                        Distribuidores
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('distribuidors.create') }}" class="nav-link">
                            <i class="fas fa-dollar-sign nav-icon"></i>
                            <p>Novo Distribuidor</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('distribuidors.index') }}" class="nav-link">
                            <i class="fas fa-chart-pie nav-icon"></i>
                            <p>Lista Distribuidores</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item menu-open">{{-- Para deixar o menu sempre aberto --}}
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-satellite-dish"></i>
                    <p>
                        Estoque
                        {{-- <i class="right fas fa-angle-left"></i> --}}
                    </p>
                </a>
            </li>
            <li class="nav-item menu-open">{{-- Para deixar o menu sempre aberto --}}
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-satellite-dish"></i>
                    <p>
                        Equipamentos
                        {{-- <i class="right fas fa-angle-left"></i> --}}
                    </p>
                </a>
            </li>

            <li class="nav-item"> {{-- Para recolher o menu da barra lateral --}}
                {{-- <li class="nav-item menu-open"> --}}{{-- Para deixar o menu sempre aberto --}}
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-money-check-alt"></i>
                    <p>
                        Modem
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('modens.create') }}" class="nav-link">
                            <i class="fas fa-dollar-sign nav-icon"></i>
                            <p>Novo Modem</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('modens.index') }}" class="nav-link">
                            <i class="fas fa-chart-pie nav-icon"></i>
                            <p>Lista de Modens</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"> {{-- Para recolher o menu da barra lateral --}}
                {{-- <li class="nav-item menu-open"> --}}{{-- Para deixar o menu sempre aberto --}}
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-money-check-alt"></i>
                    <p>
                        Antena
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('antenas.create') }}" class="nav-link">
                            <i class="fas fa-dollar-sign nav-icon"></i>
                            <p>Nova Antena</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('antenas.index') }}" class="nav-link">
                            <i class="fas fa-chart-pie nav-icon"></i>
                            <p>Lista de Antenas</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"> {{-- Para recolher o menu da barra lateral --}}
                {{-- <li class="nav-item menu-open"> --}}{{-- Para deixar o menu sempre aberto --}}
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-money-check-alt"></i>
                    <p>
                        Cabo
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('cabos.create') }}" class="nav-link">
                            <i class="fas fa-dollar-sign nav-icon"></i>
                            <p>Novo Cabo</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('cabos.index') }}" class="nav-link">
                            <i class="fas fa-chart-pie nav-icon"></i>
                            <p>Lista de Cabos</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"> {{-- Para recolher o menu da barra lateral --}}
                {{-- <li class="nav-item menu-open"> --}}{{-- Para deixar o menu sempre aberto --}}
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-money-check-alt"></i>
                    <p>
                        Fonte
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('fontes.create') }}" class="nav-link">
                            <i class="fas fa-dollar-sign nav-icon"></i>
                            <p>Nova Fonte</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('fontes.index') }}" class="nav-link">
                            <i class="fas fa-chart-pie nav-icon"></i>
                            <p>Lista de Fontes</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"> {{-- Para recolher o menu da barra lateral --}}
                {{-- <li class="nav-item menu-open"> --}}{{-- Para deixar o menu sempre aberto --}}
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-money-check-alt"></i>
                    <p>
                        Groove
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('grooves.create') }}" class="nav-link">
                            <i class="fas fa-dollar-sign nav-icon"></i>
                            <p>Nova Groove</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('grooves.index') }}" class="nav-link">
                            <i class="fas fa-chart-pie nav-icon"></i>
                            <p>Lista de Grooves</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"> {{-- Para recolher o menu da barra lateral --}}
                {{-- <li class="nav-item menu-open"> --}}{{-- Para deixar o menu sempre aberto --}}
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-money-check-alt"></i>
                    <p>
                        Roteador
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('roteadors.create') }}" class="nav-link">
                            <i class="fas fa-dollar-sign nav-icon"></i>
                            <p>Novo Roteador</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('roteadors.index') }}" class="nav-link">
                            <i class="fas fa-chart-pie nav-icon"></i>
                            <p>Lista de Roteadores</p>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item"> {{-- Para recolher o menu da barra lateral --}}
                {{-- <li class="nav-item menu-open"> --}}{{-- Para deixar o menu sempre aberto --}}
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-money-check-alt"></i>
                    <p>
                        Lnb
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('lnbs.create') }}?tipo=groove" class="nav-link">
                            <i class="fas fa-dollar-sign nav-icon"></i>
                            <p>Novo Lnb</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('lnbs.index') }}" class="nav-link">
                            <i class="fas fa-chart-pie nav-icon"></i>
                            <p>Lista de Lnbs</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"> {{-- Para recolher o menu da barra lateral --}}
                {{-- <li class="nav-item menu-open"> --}}{{-- Para deixar o menu sempre aberto --}}
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-money-check-alt"></i>
                    <p>
                        Ilnb
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('ilnbs.create') }}?tipo=groove" class="nav-link">
                            <i class="fas fa-dollar-sign nav-icon"></i>
                            <p>Novo Ilnb</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('ilnbs.index') }}" class="nav-link">
                            <i class="fas fa-chart-pie nav-icon"></i>
                            <p>Lista de Ilnbs</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"> {{-- Para recolher o menu da barra lateral --}}
                {{-- <li class="nav-item menu-open"> --}}{{-- Para deixar o menu sempre aberto --}}
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-money-check-alt"></i>
                    <p>
                        Trias
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('trias.create') }}?tipo=groove" class="nav-link">
                            <i class="fas fa-dollar-sign nav-icon"></i>
                            <p>Nova Tria</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('trias.index') }}" class="nav-link">
                            <i class="fas fa-chart-pie nav-icon"></i>
                            <p>Lista de Trias</p>
                        </a>
                    </li>
                </ul>
            </li>




            <li class="nav-item"> {{-- Para recolher o menu da barra lateral --}}
                {{-- <li class="nav-item menu-open"> --}}{{-- Para deixar o menu sempre aberto --}}

                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-arrow-circle-down"></i>
                    <p>
                        Ferramentas
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('ferramentas.index') }}?tipo=fornecedor" class="nav-link">
                            <i class="fas fa-users nav-icon"></i>
                            <p>Lista de Ferramentas</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    <!-- /.sidebar -->
</aside>
