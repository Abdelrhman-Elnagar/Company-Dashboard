        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('omar.index') }}" class="brand-link">
                <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">صفحة الأدمن</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="https://x.com/Abdlrhmn_Elngar"
                            class="d-block">عبدالرحمن النجار</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-open">
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('omar.index') }}" @class(['nav-link', 'active'=>$active=='dashboard'])>
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>الصفحة الرئيسية</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('companies.index') }}"  @class(['nav-link','active'=>$active=='company'])>
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>الشركات</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('companies.index') }}"  @class(['nav-link','active'=>$active=='logs'])>
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>السجلات</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('companies.index') }}"  @class(['nav-link','active'=>$active=='logs'])>
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>الاحصائيات</p>
                                    </a>
                                </li>
                            </ul>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
