<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
        <img src="{{ asset("/bower_components/admin-lte/dist/img/AdminLTELogo.png") }}" alt="Concordia Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Concordia</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset("/bower_components/admin-lte/dist/img/user2-160x160.jpg") }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a class="d-block" id="username">Usuário</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-header">SITE</li>
                <li class="nav-item">
                    <a href="/meta-tags-page" class="nav-link">
                        <i class="nav-icon fa fa-indent"></i>
                        <p class="text">Meta Tags</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/index-page" class="nav-link">
                        <i class="nav-icon fa fa-indent"></i>
                        <p class="text">Index</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/contact-page" class="nav-link">
                        <i class="nav-icon fa fa-indent"></i>
                        <p class="text">Contact</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/about-page" class="nav-link">
                        <i class="nav-icon fa fa-indent"></i>
                        <p class="text">About</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/list-work-page" class="nav-link">
                        <i class="nav-icon fa fa-indent"></i>
                        <p class="text">Work</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/list-project-page" class="nav-link">
                        <i class="nav-icon fa fa-indent"></i>
                        <p class="text">Project</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/list-oportunidade-page" class="nav-link">
                        <i class="nav-icon fa fa-indent"></i>
                        <p class="text">Oportunidade</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/list-propriedade-page" class="nav-link">
                        <i class="nav-icon fa fa-indent"></i>
                        <p class="text">Propriedade</p>
                    </a>
                </li>
                <li class="nav-header">CONFIGURAÇÕES</li>
                <li class="nav-item">
                    <a href="/trocar-senha" class="nav-link">
                        <i class="nav-icon fa fa-key"></i>
                        <p class="text">Password</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
