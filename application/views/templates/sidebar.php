        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-smile"></i>
                </div>
                <div class="sidebar-brand-text mx-3">MEMBER</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- QUERY MENU -->
           <li class="nav-item">
                <a class="nav-link" href="<?= base_url('user/index'); ?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Profile</span></a>
            </li>
            
             <li class="nav-item">
                <a class="nav-link" href="<?= base_url('user/buku'); ?>">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Daftar Buku</span></a>
            </li>
              
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('user/edit'); ?>">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Change profile</span></a>
            </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('user/changepassword'); ?>">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Change password</span></a>
            </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End  of Sidebar --> 