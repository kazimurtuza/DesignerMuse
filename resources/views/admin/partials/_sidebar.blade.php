
<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{asset('assets/adminPanel')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">Admin Panel</a>
        </div>
    </div>

    <!-- SidebarSearch Form -->
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        User Registration
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('admin.user.registration')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Designer Registration</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('admin.shop.registration')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Shop Registration</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Shop Setting
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">

                        <a href="{{route('admin.color.list')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Product Color</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.shop.product.category')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Product Category</p>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Shop
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">

                        <a href="{{route('shop.active.list')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Active Shop List</p>
                        </a>
                    </li>
                    <li class="nav-item">

                        <a href="{{route('admin.shop.order.list')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Shop Order List</p>
                        </a>
                    </li>
                    <li class="nav-item">

                        <a href="{{route('admin.shop.pending.shop.list')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Inactive  Shop List</p>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Payment
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('admin.pending.withdrawal.list')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Withdrawal Request</p>
                        </a>
                    </li>
                    <li class="nav-item">

                        <a href="{{route('admin.completed.withdrawal.list')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Completed Withdrawal</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Designer
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('admin.designer.list')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Designer List</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.designer.old.meeting.list')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Old Meeting List</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.designer.meeting.list')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Meeting List</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('admin.designer.old.project.list')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Old Project List</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.designer.project.list')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Project List</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        General User
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">

                        <a href="{{route('admin.all.general.user.list')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>General User List</p>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Setting
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">

                        <a href="{{route('admin.charge.rate')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Charge Rate</p>
                        </a>
                    </li>
                    <li class="nav-item">

                        <a href="{{route('admin.faq.list')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>FAQ</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.home.setting')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Home Setting</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('admin.about.ous')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>About Ous</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.we.work',['type'=>2])}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>How It Works</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('privacy.condition')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>privacy policy & terms and conditions</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Report
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">

                        <a href="{{route('admin.financial.report')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Financial Report</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{route('support.messages.list')}}" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Support Messages
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
            </li>
        </ul>

    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
