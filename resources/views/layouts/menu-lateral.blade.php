<!-- Main Sidebar Container -->

<aside class="main-sidebar sidebar-dark-primary elevation-4" style="overflow-y: scroll">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
        {{-- <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
         class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
        <span class="brand-text font-weight-light">Bentley Brasil</span>
    </a>

    <!-- Sidebar -->
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
                        <a href="{{ route('clientes.index') }}?" class="nav-link">
                            <i class="fas fa-address-card nav-icon"></i>
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
                        <a href="{{ route('designacoes.index') }}" class="nav-link">
                            <i class="fas fa-list-alt nav-icon"></i>
                            <p>Lista de Designações</p>
                        </a>
                    </li>
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
                        <a href="{{ route('tecnicos.index') }}" class="nav-link">
                            <i class="fas fa-chart-pie nav-icon"></i>
                            <p>Listagem de Técnicos</p>
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
                        <a href="{{ route('ferramentas.index') }}" class="nav-link">
                            <i class="fas fa-users nav-icon"></i>
                            <p>Lista de Ferramentas</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"> {{-- Para recolher o menu da barra lateral --}}
                {{-- <li class="nav-item menu-open"> --}}{{-- Para deixar o menu sempre aberto --}}

                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-arrow-circle-down"></i>
                    <p>
                        Equipamentos
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('equipamentos.index') }}" class="nav-link">
                            <i class="fas fa-users nav-icon"></i>
                            <p>Lista de equipamentos</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    <!-- /.sidebar -->
</aside>
