<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
{{--    <a href="index3.html" class="brand-link">--}}
{{--        <img src="{{asset('assets/adminPanel')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">--}}
{{--        <span class="brand-text font-weight-light">AdminLTE 3</span>--}}
{{--    </a>--}}

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('assets/adminPanel')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{url('shopkeeper/profile/setting')}}" class="d-block">Shop Dashboard</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Shop Setting
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('shopkeeper.profile.setting')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profile Setting</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Product List
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{route('shopkeeper.product.add')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Product Add</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('shopkeeper.product.list')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Product List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Order List
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{route('shopkeeper.pending.customer')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pending Order</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('shopkeeper.processing.customer')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Processing order</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('shopkeeper.completed.customer')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Completed order</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Bank Balance List
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{route('shopkeeper.bank.list')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Bank List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('shopkeeper.balance')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Balance Withdrawal</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Withdrawal
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{route('shopkeeper.withdrawal.list')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Withdrawal List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Financial Report
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{route('shopkeeper.financial.report')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Financial Report</p>
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
