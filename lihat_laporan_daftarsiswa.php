<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login_kasir.php');
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

    <title>Halaman Kasir</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Pengaturan tata letak gambar SVG -->
    <style>
        * {
        box-sizing: border-box;
        }

        /* Create a two-column layout */
        .column {
        float: left;
        width: 50%;
        padding: 5px;
        }

        /* Clearfix (clear floats) */
        .row::after {
        content: "";
        clear: both;
        display: table;
        }

        .picture {
            padding-left: 170px;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard_kasir.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Kasir</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu_pembayaran"
                    aria-expanded="true" aria-controls="menu_pembayaran">
                    <i class="fa fa-money"></i>
                    <span>Pembayaran</span>
                </a>
                <div id="menu_pembayaran" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Daftar</h6>
                        <a class="collapse-item" href="index_kasir.php">Lihat Pembayaran</a>
                        <a class="collapse-item" href="input_pembayaran.php">Input Pembayaran</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu_siswa"
                    aria-expanded="true" aria-controls="menu_siswa">
                    <i class="fas fa-book-reader"></i>
                    <span>Siswa</span>
                </a>
                <div id="menu_siswa" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Daftar</h6>
                        <a class="collapse-item" href="lihat_siswa.php">Lihat Siswa</a>
                        <a class="collapse-item" href="input_siswa.php">Input Siswa</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu_biaya"
                    aria-expanded="true" aria-controls="menu_biaya">
                    <i class="fas fa-cash-register"></i>
                    <span>Biaya</span>
                </a>
                <div id="menu_biaya" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Daftar</h6>
                        <a class="collapse-item" href="lihat_biaya.php">Lihat Biaya</a>
                        <a class="collapse-item" href="input_biaya.php">Input Biaya</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu_buku"
                    aria-expanded="true" aria-controls="menu_buku">
                    <i class="fas fa-book-open"></i>
                    <span>Buku</span>
                </a>
                <div id="menu_buku" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Daftar</h6>
                        <a class="collapse-item" href="lihat_buku.php">Lihat Buku</a>
                        <a class="collapse-item" href="input_buku.php">Input Buku</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu_seragam"
                    aria-expanded="true" aria-controls="menu_seragam">
                    <i class="fas fa-tshirt"></i>
                    <span>Seragam</span>
                </a>
                <div id="menu_seragam" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Daftar</h6>
                        <a class="collapse-item" href="lihat_seragam.php">Lihat Seragam</a>
                        <a class="collapse-item" href="input_seragam.php">Input Seragam</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu_pesan_buku"
                    aria-expanded="true" aria-controls="menu_pesan_buku">
                    <i class="fa fa-shopping-cart" style="font-size:18px"></i>
                    <span>Pemesanan Buku</span>
                </a>
                <div id="menu_pesan_buku" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Daftar</h6>
                        <a class="collapse-item" href="lihat_pembayaran_buku.php">Lihat Pemesanan</a>
                        <a class="collapse-item active" href="input_pembayaran_buku.php">Input Pemesanan</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu_pesan_seragam"
                    aria-expanded="true" aria-controls="menu_pesan_seragam">
                    <i class="fas fa-tags"></i>
                    <span>Pemesanan Seragam</span>
                </a>
                <div id="menu_pesan_seragam" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Daftar</h6>
                        <a class="collapse-item" href="lihat_pembayaran_seragam.php">Lihat Pemesanan</a>
                    </div>
                </div>
            </li>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Nama Institusi -->
                    <form>
                        <img src="asset/logo_pyb1.png" width="450" height="70">
                    </form>

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

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['namalengkap'] ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Lihat Laporan Daftar Siswa</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Input Lihat Laporan Daftar Siswa</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            
                            <a href="lihat_pembayaran_buku.php" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-600">
                                            <i class="fas fa-arrow-left"></i>
                                        </span>
                                        <span class="text">Kembali</span>
                                    </a>

                            <form action="tampil_laporan_daftarsiswa.php" target="_blank" method="post" name="form1">
                                    <table width="25%" border="0" cellpadding=10 class="column">
                                        <tr> 
                                            <td>Tanggal Awal</td>
                                            <td><input type="date" name="tgl_awal" style="width: 260px;" value="<?php echo date('Y-m-d'); ?>"></td>
                                        </tr>
                                        <tr> 
                                            <td>Tanggal Akhir</td>
                                            <td><input type="date" name="tgl_akhir" style="width: 260px;" value="<?php echo date('Y-m-d'); ?>"></td>
                                        </tr>
                                        <tr> 
                                            <td></td>
                                            <td><input type="submit" name="submit" value="Lihat"></td>
                                        </tr>
                                    </table>
                                    <div class="column picture">
                                    <table>
                                        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="300" height="300" viewBox="0 0 1005.56255 548.69495" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M970.1131,720.7499c.096-.28809,9.41382-29.11865-7.07739-54.84473l-1.6836,1.0791c15.96338,24.90332,6.9563,52.8545,6.86353,53.13379Z" transform="translate(-97.21873 -175.65252)" fill="#e4e4e4"/><path d="M951.24342,669.60483a13.11313,13.11313,0,1,0,25.66181-5.41187c-1.49445-7.08631-14.16421-24.72239-21.25053-23.22794S949.749,662.51852,951.24342,669.60483Z" transform="translate(-97.21873 -175.65252)" fill="#e4e4e4"/><path d="M953.63276,702.748c6.32428,6.83412,17.63826,6.64871,17.63826,6.64871s1.06029-11.26571-5.264-18.09983-17.63825-6.64871-17.63825-6.64871S947.30848,695.91386,953.63276,702.748Z" transform="translate(-97.21873 -175.65252)" fill="#e4e4e4"/><path d="M1049.48888,722.7499c.22642-.67986,22.2159-68.71783-16.70212-129.42943l-3.97315,2.5466c37.67237,58.77,16.41634,124.73262,16.1974,125.39174Z" transform="translate(-97.21873 -175.65252)" fill="#e4e4e4"/><path d="M1004.95786,602.05139a30.946,30.946,0,0,0,60.55993-12.77162c-3.52678-16.72316-33.42648-58.343-50.14964-54.81618S1001.43107,585.32822,1004.95786,602.05139Z" transform="translate(-97.21873 -175.65252)" fill="#e4e4e4"/><path d="M1010.59652,680.26672c14.92482,16.128,41.625,15.69046,41.625,15.69046s2.50221-26.58623-12.42261-42.71424-41.625-15.69046-41.625-15.69046S995.67169,664.13871,1010.59652,680.26672Z" transform="translate(-97.21873 -175.65252)" fill="#e4e4e4"/><path d="M677.31479,717.62706l-14.5923-6.1443-10.01026-73.15138H519.40762L508.55725,711.1839l-13.05512,6.52746a3.10016,3.10016,0,0,0,1.38657,5.873H676.11213A3.1,3.1,0,0,0,677.31479,717.62706Z" transform="translate(-97.21873 -175.65252)" fill="#e6e6e6"/><path d="M914.20621,648.06385H259.377a12.97344,12.97344,0,0,1-12.9443-12.97332V542.751h680.7178v92.33952A12.97356,12.97356,0,0,1,914.20621,648.06385Z" transform="translate(-97.21873 -175.65252)" fill="#ccc"/><path d="M927.835,586.39288h-682V191.29161a15.6572,15.6572,0,0,1,15.63964-15.63909H912.1952A15.65735,15.65735,0,0,1,927.835,191.29161Z" transform="translate(-97.21873 -175.65252)" fill="#3f3d56"/><path d="M887.106,204.32813h-600.54a12.06487,12.06487,0,0,0-12.0498,12.06v329.27a12.06487,12.06487,0,0,0,12.0498,12.06h600.54a12.07157,12.07157,0,0,0,12.05029-12.06v-329.27A12.07157,12.07157,0,0,0,887.106,204.32813Z" transform="translate(-97.21873 -175.65252)" fill="#fff"/><path d="M393.01613,204.32813v353.39H286.56593a12.06487,12.06487,0,0,1-12.0498-12.06v-329.27a12.06487,12.06487,0,0,1,12.0498-12.06Z" transform="translate(-97.21873 -175.65252)" fill="#f0f0f0"/><path d="M305.19648,382.84914a8.40614,8.40614,0,0,0-10.26268,7.799l-28.6532,8.44748,11.86177,10.01357,25.391-9.55705a8.45167,8.45167,0,0,0,1.66308-16.703Z" transform="translate(-97.21873 -175.65252)" fill="#ffb6b6"/><path d="M189.42383,446.42383a11.952,11.952,0,0,1-3.80811-23.27588l58.064-19.6001,45.29248-16.5,5.5581,19.45508-39.98388,26.34668-62.62354,13.311A12.02473,12.02473,0,0,1,189.42383,446.42383Z" transform="translate(-97.21873 -175.65252)" fill="#6c63ff"/><polygon points="128.541 538.792 136.693 538.792 140.572 507.347 128.539 507.347 128.541 538.792" fill="#ffb6b6"/><path d="M223.67984,711.78319l16.0552-.00065h.00065A10.23221,10.23221,0,0,1,249.96733,722.014v.33248l-26.287.001Z" transform="translate(-97.21873 -175.65252)" fill="#2f2e41"/><polygon points="66.033 538.792 74.185 538.792 78.064 507.347 66.032 507.347 66.033 538.792" fill="#ffb6b6"/><path d="M161.1721,711.78319l16.05521-.00065h.00065A10.23219,10.23219,0,0,1,187.45959,722.014v.33248l-26.287.001Z" transform="translate(-97.21873 -175.65252)" fill="#2f2e41"/><path d="M163.171,525.829a43.78435,43.78435,0,0,0-2.32742,27.54938l-2.32741,155.984h17.9046l10.02438-85.78189,16.6244-56.523,17.95435,43.88841v91.47083l17.28937-1.03411,9.30966-97.08648-10.63961-69.15749Z" transform="translate(-97.21873 -175.65252)" fill="#2f2e41"/><path d="M228.67108,404.47092l-15.29444-4.65484-3.98986-7.97971H189.74119l-4.95852,8.64469s-19.94927,7.31473-20.61425,42.55846-3.32488,91.76667-3.32488,91.76667l78.66089,11.21416Z" transform="translate(-97.21873 -175.65252)" fill="#6c63ff"/><path d="M251.2538,539.70888A8.40612,8.40612,0,0,0,245.759,528.049l-2.30564-29.78338-12.26093,9.52066,4.06921,26.82319a8.45167,8.45167,0,0,0,15.99219,5.09942Z" transform="translate(-97.21873 -175.65252)" fill="#ffb6b6"/><path d="M230.33447,524.3584l-17.458-44.58789V415.74756a11.95065,11.95065,0,0,1,23.82081-1.38477l7.10009,60.87061L250.52,522.96582Z" transform="translate(-97.21873 -175.65252)" fill="#6c63ff"/><circle cx="106.11386" cy="186.2002" r="19.63241" fill="#ffb9b9"/><path d="M204.61818,355.88489c-.91858,1.17913-2.17774,2.2436-2.38,3.72454-.14984,1.09735.32953,2.18183.37521,3.28843a4.38775,4.38775,0,0,1-4.10213,4.39293,4.86761,4.86761,0,0,0-3.13333-1.7918,2.89129,2.89129,0,0,0-2.97665,1.71964c-.583,1.647.76647,3.31993.98346,5.05349a10.45248,10.45248,0,0,1-.612,3.76625c-.49747,1.989-.6304,4.09344-1.50314,5.94869s-2.81333,3.451-4.82221,3.041c-1.68918-.34481-2.83218-1.981-3.30461-3.639s-.45121-3.41606-.79314-5.10585c-1.11092-5.4907-5.8371-9.55879-7.69135-14.845-2.376-6.77346.47834-14.52123,5.39758-19.74869a16.07587,16.07587,0,0,1,7.48865-4.84854c3.06552-.78061,6.30664-.2195,9.4523-.55331,3.364-.357,6.526-1.724,9.79535-2.59282s6.92109-1.196,9.89285.42029c2.07272,1.12731,3.57381,3.0711,5.505,4.42663a11.54819,11.54819,0,0,0,7.5865,2.03056l-3.21036,1.40331a10.31051,10.31051,0,0,0,4.3248,2.36867,7.48,7.48,0,0,1-4.60883,1.61788,5.26391,5.26391,0,0,0,3.31624,2.55c-2.43766,1.14435-5.02569,2.31676-7.70618,2.05868-1.313-.12638-2.568-.59313-3.865-.83336-2.76456-.512-5.60363.01865-8.36495.54837-1.45.27818-3.22959.5451-3.96184,1.93933C205.09063,353.38626,205.557,354.67983,204.61818,355.88489Z" transform="translate(-97.21873 -175.65252)" fill="#2f2e41"/><circle cx="236.5474" cy="205.37059" r="31.32001" fill="#6c63ff"/><polygon points="255.339 205.371 238.427 205.371 238.427 188.458 234.668 188.458 234.668 205.371 217.755 205.371 217.755 209.129 234.668 209.129 234.668 226.042 238.427 226.042 238.427 209.129 255.339 209.129 255.339 205.371" fill="#fff"/><path d="M600.47428,245.66092a3.6469,3.6469,0,0,0-3.643,3.643v60.998a3.64728,3.64728,0,0,0,3.643,3.64345H846.37687a3.64729,3.64729,0,0,0,3.643-3.64345v-60.998a3.64686,3.64686,0,0,0-3.643-3.643Z" transform="translate(-97.21873 -175.65252)" fill="#fff"/><path d="M600.47428,245.66092a3.6469,3.6469,0,0,0-3.643,3.643v60.998a3.64728,3.64728,0,0,0,3.643,3.64345H846.37687a3.64729,3.64729,0,0,0,3.643-3.64345v-60.998a3.64686,3.64686,0,0,0-3.643-3.643Z" transform="translate(-97.21873 -175.65252)" fill="#e6e6e6"/><path d="M600.92954,309.84676H845.92136V249.75948H600.92954Z" transform="translate(-97.21873 -175.65252)" fill="#fff"/><path d="M628.78433,267.05261a3.18763,3.18763,0,0,0,0,6.37526H818.05811a3.18763,3.18763,0,1,0,.00274-6.37526H628.78433Z" transform="translate(-97.21873 -175.65252)" fill="#e4e4e4"/><path d="M628.78433,286.17837a3.18763,3.18763,0,0,0,0,6.37525H818.05811a3.18763,3.18763,0,0,0,.01422-6.37525h-189.288Z" transform="translate(-97.21873 -175.65252)" fill="#e4e4e4"/><path d="M429.47428,349.16092a3.6469,3.6469,0,0,0-3.643,3.643v60.998a3.64728,3.64728,0,0,0,3.643,3.64345H675.37687a3.64729,3.64729,0,0,0,3.643-3.64345v-60.998a3.64686,3.64686,0,0,0-3.643-3.643Z" transform="translate(-97.21873 -175.65252)" fill="#fff"/><path d="M429.47428,349.16092a3.6469,3.6469,0,0,0-3.643,3.643v60.998a3.64728,3.64728,0,0,0,3.643,3.64345H675.37687a3.64729,3.64729,0,0,0,3.643-3.64345v-60.998a3.64686,3.64686,0,0,0-3.643-3.643Z" transform="translate(-97.21873 -175.65252)" fill="#e6e6e6"/><path d="M429.92954,413.34676H674.92136V353.25948H429.92954Z" transform="translate(-97.21873 -175.65252)" fill="#fff"/><path d="M457.78433,370.55261a3.18763,3.18763,0,0,0,0,6.37526H647.05811a3.18763,3.18763,0,1,0,.00274-6.37526H457.78433Z" transform="translate(-97.21873 -175.65252)" fill="#e4e4e4"/><path d="M457.78433,389.67837a3.18763,3.18763,0,0,0,0,6.37525H647.05811a3.18763,3.18763,0,0,0,.01422-6.37525h-189.288Z" transform="translate(-97.21873 -175.65252)" fill="#e4e4e4"/><path d="M729.21114,512.87384a7.53637,7.53637,0,0,0,6.4045-9.619l21.79308-15.56647-12.98756-5.00094-18.70395,15.54889a7.57718,7.57718,0,0,0,3.49393,14.63752Z" transform="translate(-97.21873 -175.65252)" fill="#ffb7b7"/><path d="M741.31006,502.62159l-7.22961-12.34781.15352-.17509,29.16956-33.20861,22.648-38.623,19.66686,2.50659.29018,5.94467-.05873.0888L774.704,473.77685l-.03322.02834Z" transform="translate(-97.21873 -175.65252)" fill="#3f3d56"/><polygon points="740.467 535.914 729.346 535.913 724.054 493.014 740.469 493.015 740.467 535.914" fill="#ffb7b7"/><path d="M840.52256,722.34748l-35.86183-.00133v-.4536a13.95918,13.95918,0,0,1,13.95842-13.9582H818.62l21.90318.00089Z" transform="translate(-97.21873 -175.65252)" fill="#2f2e41"/><polygon points="644.748 535.55 633.93 532.967 638.746 490.012 654.712 493.824 644.748 535.55" fill="#ffb7b7"/><path d="M742.222,722.34748l-34.8812-8.32907.10534-.44119a13.95916,13.95916,0,0,1,16.8182-10.33524l.00086.00021,21.30423,5.08718Z" transform="translate(-97.21873 -175.65252)" fill="#2f2e41"/><path d="M785.1913,398.65418V379.93305a25.08631,25.08631,0,0,1,50.17262,0v18.72113a3.3736,3.3736,0,0,1-3.36981,3.3698h-43.433A3.3736,3.3736,0,0,1,785.1913,398.65418Z" transform="translate(-97.21873 -175.65252)" fill="#2f2e41"/><circle cx="706.86764" cy="207.69456" r="18.3924" fill="#ffb7b7"/><path d="M779.25648,381.43074a19.86684,19.86684,0,0,1,19.8444-19.84439h3.7444a19.86669,19.86669,0,0,1,19.84422,19.84439v.37443h-7.91279l-2.69884-7.5572-.53969,7.5572h-4.0894l-1.36167-3.813-.27241,3.813H779.25648Z" transform="translate(-97.21873 -175.65252)" fill="#2f2e41"/><path d="M814.81456,480.42059l-46.82973-1.78233-2.61807-30.63715c-2.019-5.60772-2.05172-10.42252-.09683-14.31026a14.32409,14.32409,0,0,1,7.90822-6.8352l10.247-12.37616a13.94748,13.94748,0,0,1,10.82969-5.04783l26.623.182c.64223-.38607,4.53454-2.36427,12.21162.96359,8.327,3.61,6.39339,16.14738,6.37277,16.27334l-.019.11778-.09148.07746-17.70976,14.91361Z" transform="translate(-97.21873 -175.65252)" fill="#3f3d56"/><polygon points="671.139 299.694 648.988 340.08 632.194 523.817 651.169 529.612 684.756 385.882 723.736 525.534 746.481 526.103 730.994 364.944 717.46 302.548 671.139 299.694" fill="#2f2e41"/><path d="M624.99453,445.41035a3.64689,3.64689,0,0,0-4.58886,2.34208L601.59575,505.7778a3.64727,3.64727,0,0,0,2.34194,4.58928L837.85662,586.196a3.64729,3.64729,0,0,0,4.589-2.3425l18.80993-58.02537a3.64687,3.64687,0,0,0-2.34208-4.58886Z" transform="translate(-97.21873 -175.65252)" fill="#fff"/><path d="M624.99453,445.41035a3.64689,3.64689,0,0,0-4.58886,2.34208L601.59575,505.7778a3.64727,3.64727,0,0,0,2.34194,4.58928L837.85662,586.196a3.64729,3.64729,0,0,0,4.589-2.3425l18.80993-58.02537a3.64687,3.64687,0,0,0-2.34208-4.58886Z" transform="translate(-97.21873 -175.65252)" fill="#e6e6e6"/><path d="M605.63465,506.60859l233.05255,75.548,18.52908-57.159-233.05254-75.548Z" transform="translate(-97.21873 -175.65252)" fill="#fff"/><path d="M645.3284,474.48951a3.18763,3.18763,0,0,0-1.96594,6.06457l180.04983,58.36627a3.18763,3.18763,0,1,0,1.96855-6.06372l-.00262-.00085Z" transform="translate(-97.21873 -175.65252)" fill="#6c63ff"/><path d="M639.43059,492.68321a3.18763,3.18763,0,0,0-1.96593,6.06456L817.51449,557.114a3.18763,3.18763,0,0,0,1.97946-6.06018l-.01353-.00438Z" transform="translate(-97.21873 -175.65252)" fill="#6c63ff"/><path d="M827.53864,540.728a7.53632,7.53632,0,0,0-.39673-11.54925l8.64784-25.347-13.46991,3.49968-6.14706,23.53337a7.57718,7.57718,0,0,0,11.36586,9.86316Z" transform="translate(-97.21873 -175.65252)" fill="#ffb7b7"/><path d="M831.40154,525.34659,818.33276,519.521l4.39127-44.21559-4.0866-44.58591,17.44635-9.418,3.69833,4.663.00377.1058,1.95962,56.37951-.01039.04282Z" transform="translate(-97.21873 -175.65252)" fill="#3f3d56"/><path d="M1101.255,724.34746l-683.44821,0a1.56682,1.56682,0,0,1-1.53909-1.13363,1.52912,1.52912,0,0,1,1.47725-1.91893l683.385,0a1.61535,1.61535,0,0,1,1.61617,1.19368A1.52819,1.52819,0,0,1,1101.255,724.34746Z" transform="translate(-97.21873 -175.65252)" fill="#ccc"/><path d="M327.255,724.34746l-228.44821,0a1.56682,1.56682,0,0,1-1.53909-1.13363,1.52912,1.52912,0,0,1,1.47725-1.91893l228.385,0a1.61535,1.61535,0,0,1,1.61617,1.19368A1.52819,1.52819,0,0,1,327.255,724.34746Z" transform="translate(-97.21873 -175.65252)" fill="#ccc"/></svg>
                                    </table>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Mathius Haryanto Widyaputra 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Kamu ingin keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" jika kamu ingin mengakhiri sesi Anda saat ini.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>