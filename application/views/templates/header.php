<?php 

if (!$this->session->has_userdata('login_session')){
    redirect('login');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="<?= base_url(); ?>assets/icon/BPSDM.jpg ">

    <title>BPSDM | <?= $title ?></title>

    <!-- Custom fonts for this template-->
        <link href="<?= base_url(); ?>assets/sbadmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
            type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">   
    
    <link href="<?php base_url(). 'assets/css/bootstrap.min.css' ?>" rel="stylesheet" type="text/css">
    <link href="<?php base_url(). 'assets/css/jquery-ui.min.css' ?>" rel="stylesheet" type="text/css">
    
    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>assets/sbadmin/css/sb-admin-biru.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/profileee.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/all.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/animate/animate.min.css" rel="stylesheet">
    <!-- Select Chosen -->
    <link href="<?= base_url(); ?>assets/plugin/datepicker/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet">
    <!-- Select Chosen -->
    <link href="<?= base_url(); ?>assets/plugin/chosen/dist/css/component-chosen.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="<?= base_url(); ?>assets/sbadmin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->


            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="text-center d-none d-md-inline">
                    <br>
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

                <div class="sidebar-brand-text text-white mx-3">MENU</div>
                
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <?php if($title == 'Dashboard'): ?>
            <li class="nav-item active">
                <?php else: ?>
            <li class="nav-item">
                <?php endif; ?>
                <a class="nav-link" href="<?= base_url(); ?>home">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            
            <hr class="sidebar-divider d-none d-md-block">
            
            <?php if($this->session->userdata('login_session')['level'] == 'BKPSDM'): ?>
            
            <div class="sidebar-heading">
                Input AKP
            </div>
            <?php if($title == 'Strategis'): ?>
            <li class="nav-item active">
                <?php else: ?>
            <li class="nav-item">
                <?php endif; ?>
                <a class="nav-link" href="<?= base_url() ?>strategis">
                    <i class="fas fa-fw fa-box"></i>
                    <span>AKP Strategis</span>
                </a>
            </li>

            <?php if($title == 'Jabatan'): ?>
            <li class="nav-item active">
                <?php else: ?>
            <li class="nav-item">
                <?php endif; ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>jabatan">
                    <i class="fas fa-fw fa-box"></i>
                    <span>AKP Jabatan</span>
                </a>
            </li>

            <?php if($title == 'Individu'): ?>
            <li class="nav-item active">
                <?php else: ?>
            <li class="nav-item">
                <?php endif; ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>individu">
                    <i class="fas fa-fw fa-box"></i>
                    <span>AKP Individu</span>
                </a>
            </li>

            <div class="sidebar-heading">
                Download Usulan
            </div>
            <?php if($title == 'Usulan'): ?>
            <li class="nav-item active">
                <?php else: ?>
            <li class="nav-item">
                <?php endif; ?>
                <a class="nav-link" href="<?= base_url() ?>usulan">
                    <i class="fas fa-fw fa-boxes"></i>
                    <span>Download usulan</span>
                </a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">
            <?php endif; ?>


            <?php if($this->session->userdata('login_session')['level'] == 'Sosial'): ?>
            
            <div class="sidebar-heading">
                Input AKP
            </div>
            <?php if($title == 'Strategis'): ?>
            <li class="nav-item active">
                <?php else: ?>
            <li class="nav-item">
                <?php endif; ?>
                <a class="nav-link" href="<?= base_url() ?>strategis">
                    <i class="fas fa-fw fa-box"></i>
                    <span>AKP Strategis</span>
                </a>
            </li>

            <?php if($title == 'Jabatan'): ?>
            <li class="nav-item active">
                <?php else: ?>
            <li class="nav-item">
                <?php endif; ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>jabatan">
                    <i class="fas fa-fw fa-box"></i>
                    <span>AKP Jabatan</span>
                </a>
            </li>

            <?php if($title == 'Individu'): ?>
            <li class="nav-item active">
                <?php else: ?>
            <li class="nav-item">
                <?php endif; ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>individu">
                    <i class="fas fa-fw fa-box"></i>
                    <span>AKP Individu</span>
                </a>
            </li>

            <div class="sidebar-heading">
                Download Usulan
            </div>
            <?php if($title == 'Usulan'): ?>
            <li class="nav-item active">
                <?php else: ?>
            <li class="nav-item">
                <?php endif; ?>
                <a class="nav-link" href="<?= base_url() ?>usulan">
                    <i class="fas fa-fw fa-boxes"></i>
                    <span>Download usulan</span>
                </a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">
            <?php endif; ?>
            

            <?php if($this->session->userdata('login_session')['level'] == 'Supervisor'): ?>

            <!-- Heading -->
            <div class="sidebar-heading">
                Laporan
            </div>

            <?php if($title == 'Laporan Barang' or $title == 'Laporan Perawatan' or $title == 'Laporan Perbaikanr'): ?>
            <li class="nav-item active">
                <?php else: ?>
            <li class="nav-item">
                <?php endif; ?>
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages2" aria-expanded="true"
                    aria-controls="collapsePages2">
                    <i class="fas fa-fw fa-print"></i>
                    <span>Laporan</span>
                </a>
                <div id="collapsePages2" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Laporan</h6>
                        <a class="collapse-item" href="<?= base_url() ?>laporanbrg"><b>Data Barang</b></a>
                        <a class="collapse-item" href="<?= base_url() ?>laporanprw/laporan"><b>Data Perawatan</b></a>
                        <a class="collapse-item" href="<?= base_url() ?>laporanprb/laporan"><b>Data Perbaikan</b></a>
                    </div>

                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <?php endif; ?>

            <?php if($this->session->userdata('login_session')['level'] == 'Admin'): ?>
            
            <div class="sidebar-heading">
                Data User
            </div>
            <?php if($title == 'User'): ?>
            <li class="nav-item active">
                <?php else: ?>
            <li class="nav-item">
                <?php endif; ?>
                <a class="nav-link" href="<?= base_url() ?>user">
                    <i class="fas fa-fw fa-user-friends"></i>
                    <span>Data User</span>
                </a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">

            <?php endif; ?>

            <!-- Sidebar Toggler (Sidebar) -->
            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-primary topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() ?>home">
                        <div class="sidebar-brand-icon ">
                            <img src="<?= base_url(); ?>assets/icon/BPSDMicon.png" width="110">
                        </div>
                    </a>

                    <!-- Nama Aplikasi 
                    <h1 class="h3 mb-0 text-gray-800"><b>PERPUSWEB</b></h1>
                    -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        </li>
                        <?php if($this->session->userdata('login_session')['level'] == 'Admin' ): ?>
                        <span class="mr-2 d-none d-lg-inline text-white small mt-4"> Admin  </span>
                        <?php endif; ?>
                        <?php if($this->session->userdata('login_session')['level'] == 'BKPSDM' ): ?>
                        <span class="mr-2 d-none d-lg-inline text-white small mt-4"> User </span>
                        <?php endif; ?>
                        <?php if($this->session->userdata('login_session')['level'] == 'Sosial' ): ?>
                        <span class="mr-2 d-none d-lg-inline text-white small mt-4"> User </span>
                        <?php endif; ?>
                        <?php if($this->session->userdata('login_session')['level'] == 'Kesehatan' ): ?>
                        <span class="mr-2 d-none d-lg-inline text-white small mt-4"> User </span>
                        <?php endif; ?>

                        <div class="topbar-divider d-none d-sm-block"></div>
                        
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                
                                <span></span>
                                <span class="mr-2 d-none d-lg-inline text-white small" id="namaP"><?= $this->session->userdata('login_session')['username'] ?></span>
                                <input type="hidden" name="iduser" id="iduser" value="<?= $this->session->userdata('login_session')['id_user'] ?>">
                                <img class="img-profile rounded-circle" id="img"
                                    src="<?= base_url() ?>assets/upload/pengguna/<?= $this->session->userdata('login_session')['foto'] ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?= base_url() ?>profile">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                               
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item logout" href="#" id="logout" onclick="logout()">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- base url untuk js -->
                <input type="hidden" value="<?= base_url() ?>" id="baseurl">