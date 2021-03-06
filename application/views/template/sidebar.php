<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary  elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('assets/backand/') ?>index3.html" class="brand-link bg-gradient-success">
        <img src="<?= base_url('assets/backand/dist/img/logostmik.png') ?>" class="brand-image elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light font-viga">EXPONENTIAL S</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url('assets/backand/') ?>dist/img/aku.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block font-viga"><?= $this->session->userdata('nama') ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <!-- <li class="nav-header">EXAMPLES</li> -->
                <li class="nav-item">
                    <a href="<?= base_url('admin') ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p class="font-viga">
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p class="font-viga">
                            Siswa
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('siswa') ?>" class="nav-link">
                                <i class="fas fa-graduation-cap nav-icon"></i>
                                <p class="font-viga">Jumlah Siswa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('ta') ?>" class="nav-link">
                                <i class="fas fa-chalkboard-teacher nav-icon"></i>
                                <p class="font-viga">Tahun Akademik</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p class="font-viga">
                            Perhitungan
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('perhitungan') ?>" class="nav-link">
                                <i class="fas fa-cog nav-icon"></i>
                                <p class="font-viga">Forecasting</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('perhitungan/hasil') ?>" class="nav-link">
                                <i class="fas fa-user-cog nav-icon"></i>
                                <p class="font-viga">Hasil Peramalan</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- far fa-envelope" -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p class="font-viga">
                            User
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('user') ?>" class="nav-link">
                                <i class="fas fa-user nav-icon"></i>
                                <p class="font-viga">Users</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('role') ?>" class="nav-link">
                                <i class="fas fa-users nav-icon"></i>
                                <p class="font-viga">Role</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('auth/keluar') ?>" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p class="font-viga">
                            Keluar
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>