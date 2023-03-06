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

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard_kasir.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu SPP
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu_pembayaran"
                    aria-expanded="true" aria-controls="menu_pembayaran">
                    <i class="fa fa-money"></i>
                    <span>Pembayaran SPP</span>
                </a>
                <div id="menu_pembayaran" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Daftar</h6>
                        <a class="collapse-item" href="index_kasir.php">Lihat Pembayaran SPP</a>
                        <a class="collapse-item" href="input_pembayaran.php">Input Pembayaran SPP</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu_biaya"
                    aria-expanded="true" aria-controls="menu_biaya">
                    <i class="fas fa-cash-register"></i>
                    <span>SPP</span>
                </a>
                <div id="menu_biaya" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Daftar</h6>
                        <a class="collapse-item" href="lihat_biaya.php">Lihat Biaya SPP</a>
                        <a class="collapse-item" href="input_biaya.php">Input Biaya SPP</a>
                    </div>
                </div>
            </li>

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu Siswa
            </div>

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

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu Buku
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu_buku"
                    aria-expanded="true" aria-controls="menu_buku">
                    <i class="fas fa-book-open"></i>
                    <span>Buku</span>
                </a>
                <div id="menu_buku" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Daftar</h6>
                        <a class="collapse-item" href="lihat_buku.php">Lihat Buku</a>
                        <a class="collapse-item active" href="input_buku.php">Input Buku</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu_pesan_buku"
                    aria-expanded="true" aria-controls="menu_pesan_buku">
                    <i class="fa fa-shopping-cart" style="font-size:18px"></i>
                    <span>Pemesanan Buku</span>
                </a>
                <div id="menu_pesan_buku" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Daftar</h6>
                        <a class="collapse-item" href="lihat_pembayaran_buku.php">Lihat Pemesanan</a>
                        <a class="collapse-item" href="input_pembayaran_buku.php">Input Pemesanan</a>
                    </div>
                </div>
            </li>

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu Seragam
            </div>

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

        <!-- Heading -->
        <div class="sidebar-heading">
                Menu Laporan
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu_laporan"
                    aria-expanded="true" aria-controls="menu_pesan_buku">
                    <i class="fa fa-shopping-cart" style="font-size:18px"></i>
                    <span>Lihat Laporan</span>
                </a>
                <div id="menu_laporan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Daftar</h6>
                        <a class="collapse-item" href="lihat_laporan_daftarsiswa_sd.php">Laporan Pembayaran SPP</br>(SD)</a>
                        <a class="collapse-item" href="lihat_laporan_daftarsiswa_smp.php">Laporan Pembayaran SPP</br>(SMP)</a>
                        <a class="collapse-item" href="lihat_laporan_pemesanan_buku.php">Laporan Pemesanan Buku</a>
                        <a class="collapse-item" href="lihat_laporan_pemesanan_seragam.php">Laporan Pemesanan</br>Seragam</a>
                        <a class="collapse-item" href="lihat_laporan_nama_siswa.php">Laporan Daftar Siswa</a>
                        <a class="collapse-item" href="lihat_rekap_uang_sekolah_sd.php">Rekap Uang Sekolah (SD)</a>
                        <a class="collapse-item" href="lihat_rekap_uang_sekolah_smp.php">Rekap Uang Sekolah (SMP)</a>

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
                    <h1 class="h3 mb-2 text-gray-800">Input Buku</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Input Buku</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <?php
                            //termasuk file koneksi database
                            include_once("koneksi.php");

                            //mengecek field yang kosong
                            if(isset($_POST['submit'])){
                                $thn_ajar = $_POST['thn_ajar'];
                                $kelas = $_POST['kelas'];
                                $paket_buku = $_POST['paket_buku'];
                                $biaya = $_POST['biaya'];

                                if(empty($thn_ajar) || empty($kelas) || empty($paket_buku) || empty($biaya)){
                                    if(empty($thn_ajar)){
                                        echo "<font color='red'>Tahun Ajaran masih kosong.</font><br/>";
                                    }

                                    if(empty($kelas)){
                                        echo "<font color='red'>Kelas Lengkap masih kosong.</font><br/>";
                                    }

                                    if(empty($paket_buku)){
                                        echo "<font color='red'>Judul Buku masih kosong.</font><br/>";
                                    }

                                    if(empty($Biaya)){
                                        echo "<font color='red'>Biaya masih kosong.</font><br/>";
                                    }

                                    //link ke halaman sebelumnya
                                    echo "<br/><a href='javascript:self.history.back();'>Kembali</a>";
                                } else{
                                    // jika semua field terisi, maka masukkan data ke database
                                    $result = mysqli_query($conn, "INSERT INTO tbl_lihat_buku(thn_ajar, kelas, paket_buku, biaya) VALUES('$thn_ajar', '$kelas', '$paket_buku', '$biaya')");

                                    //menampilkan pesan "Data sukses ditambahkan"
                                    echo "<font color='green'>Data sukses ditambahkan.";
                                    echo "<br/><a href='lihat_buku.php'>Lihat Hasil</a><br>";
                                }
                            }
                            ?>
                            <a href="lihat_buku.php" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-600">
                                            <i class="fas fa-arrow-left"></i>
                                        </span>
                                        <span class="text">Kembali</span>
                                    </a>

                            <form action="input_buku.php" method="post" name="form1">
                                    <table width="25%" border="0" cellpadding=10 class="column">
                                        <tr> 
                                            <td>Tahun Ajaran</td>
                                            <td><input type="text" name="thn_ajar" style="width: 260px;"></td>
                                        </tr>
                                        <tr> 
                                            <td>Kelas</td>
                                            <td>
                                            <select  name="kelas" style="width: 260px;">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                            </td>
                                        </tr>
                                        <tr> 
                                            <td>Paket Buku</td>
                                            <td><input type="text" name="paket_buku" style="width: 260px;"></td>
                                        </tr>
                                        <tr> 
                                            <td>Biaya</td>
                                            <td><input type="number" name="biaya" style="width: 260px;"></td>
                                        </tr>
                                        <tr> 
                                            <td></td>
                                            <td><input type="submit" name="submit" value="Tambah"></td>
                                        </tr>
                                    </table>
                                    <div class="column picture">
                                    <table>
                                        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="300" height="300" viewBox="0 0 691.33587 489.02997" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M942.37829,365.12258c-9.53656,33.08356-37.38213,56.2424-66.42859,75.91553q-6.0835,4.12119-12.17087,8.05276c-.02749.012-.05582.03768-.08365.05-.19525.12542-.39088.2511-.5728.37734-.83757.5399-1.67544,1.08016-2.50606,1.61384l.45626.205s.448.23823-.04214.03819c-.14589-.061-.29872-.11582-.44431-.17719-16.87415-6.80561-34.048-14.11275-46.97949-26.8619-13.41453-13.23916-21.25393-34.00418-13.99008-51.39659a33.20766,33.20766,0,0,1,3.5956-6.45359c.5892-.84313,1.22378-1.65009,1.88447-2.4421A35.59319,35.59319,0,0,1,866.229,374.85964c2.134-19.86884-14.24941-36.512-30.016-48.79213-15.77356-12.274-33.69674-25.64058-36.74619-45.39912-1.70294-10.9934,2.11992-21.64706,9.08376-30.19945.2156-.25986.43089-.51936.653-.7721a51.945,51.945,0,0,1,33.387-17.91151c24.18672-2.51372,47.6804,10.28875,65.25152,27.10539C936.12263,285.94754,953.21951,327.50678,942.37829,365.12258Z" transform="translate(-254.33206 -205.48502)" fill="#f2f2f2"/><path d="M896.916,321.84967a88.30333,88.30333,0,0,1,10.57914,23.333,76.67467,76.67467,0,0,1,2.65029,22.64563c-.43468,15.70057-5.26563,31.043-12.86659,44.708a141.38984,141.38984,0,0,1-21.32914,28.50182q-6.0835,4.12119-12.17087,8.05276c-.02749.012-.05582.03768-.08365.05-.19525.12542-.39088.2511-.5728.37734-.83757.5399-1.67544,1.08016-2.50606,1.61384,0,0,.90429.4432.41412.24316-.14589-.061-.29872-.11582-.44431-.17719a78.15741,78.15741,0,0,0-25.0093-67.29586A78.82691,78.82691,0,0,0,803.21216,366.486c.5892-.84313,1.22378-1.65009,1.88447-2.4421a81.72794,81.72794,0,0,1,13.49027,5.10487,80.08109,80.08109,0,0,1,36.20832,34.909,81.87421,81.87421,0,0,1,8.91443,44.92834c.69331-.62828,1.38747-1.2702,2.06069-1.90606,12.82253-11.95459,24.2115-25.67651,31.91919-41.51276a91.39288,91.39288,0,0,0,9.57005-43.241c-.62905-16.3343-7.13721-31.46406-16.56016-44.63539-10.09394-14.09647-22.74877-26.5681-36.26251-37.3723a217.37693,217.37693,0,0,0-45.09985-27.84376,1.56289,1.56289,0,0,1-.78653-2.00584,1.32935,1.32935,0,0,1,.653-.7721,1.15723,1.15723,0,0,1,1.005.0427c1.98939.91584,3.965,1.8442,5.92469,2.8127a219.84437,219.84437,0,0,1,45.42128,29.96187C874.92422,293.91268,887.51108,306.93552,896.916,321.84967Z" transform="translate(-254.33206 -205.48502)" fill="#fff"/><circle cx="532.41146" cy="313.69784" r="35.37135" fill="#2f2e41"/><ellipse cx="751.37218" cy="492.34942" rx="14.63642" ry="10.97732" transform="translate(-382.40386 470.02115) rotate(-45)" fill="#2f2e41"/><ellipse cx="810.15005" cy="483.12936" rx="10.97732" ry="14.63642" transform="translate(-206.72186 832.8831) rotate(-66.86956)" fill="#2f2e41"/><path d="M861.65189,671.055a131.81283,131.81283,0,0,1-19.19971,11.07l-.99023-1.75-9.48-16.63995-.83008-1.46-4.84961-8.51-.01025-.01-15.31006-26.9-7.86963-13.81,23.36963-16.39,9.09033,19.22,4.92969,10.44,20.29,42.91Z" transform="translate(-254.33206 -205.48502)" fill="#a0616a"/><path d="M840.772,606.155l-2.93018-4.59-12.96-20.33A16.35623,16.35623,0,0,0,794.982,594.505l8.01025,28.54a5.87464,5.87464,0,0,0,7.98975,3.81c.03027-.01.05029-.02.08007-.03l24.51026-10.95,2.63965-1.18a5.90107,5.90107,0,0,0,2.56006-8.54Z" transform="translate(-254.33206 -205.48502)" fill="#6c63ff"/><path d="M770.35208,606.795l-6.81982,15.4-1.48,3.35-25.25,57.04-.81006,1.83a131.09328,131.09328,0,0,1-19.68018-10.24l.68018-1.92,20.60986-58.15,5.06006-14.28,11.08008,2.79Z" transform="translate(-254.33206 -205.48502)" fill="#a0616a"/><circle cx="787.86534" cy="527.62681" r="30.01929" transform="translate(-307.34259 760.37645) rotate(-61.33681)" fill="#a0616a"/><path d="M840.19193,613.245a66.79891,66.79891,0,0,0-2.3501-11.68,65.095,65.095,0,0,0-18.80957-29.84,17.78783,17.78783,0,0,0-11.90039-4.55h-42.29a17.78318,17.78318,0,0,0-15.92969,25.78l4.83008,9.66,9.79,19.58,2.34961,4.69,10.47021,20.95.83008,1.66,53.1499,14.62.23-.51c.2002-.45.39991-.89.58985-1.33.29-.67.58008-1.32.8501-1.98,5.36035-12.71,7.89013-24.02,8.5-33.98A75.64747,75.64747,0,0,0,840.19193,613.245Z" transform="translate(-254.33206 -205.48502)" fill="#6c63ff"/><path d="M772.51224,572.655a16.33208,16.33208,0,0,0-21.68994,7.8l-3.77,5.69-12.6001,19.02a5.89309,5.89309,0,0,0,2.41016,8.59l.73974.35,24.4502,11.44,1.73975.81a5.65793,5.65793,0,0,0,2.08984.53,5.76186,5.76186,0,0,0,2.82031-.49,5.87867,5.87867,0,0,0,3.23-3.68l8.46-28.31A16.37189,16.37189,0,0,0,772.51224,572.655Z" transform="translate(-254.33206 -205.48502)" fill="#6c63ff"/><path d="M832.002,660.295a5.4613,5.4613,0,0,0-.8501-1.73,22.88259,22.88259,0,0,0-4.84961-4.8l-.01025-.01c-6.42969-4.87-19.23-10.56-43.91993-10.71h-.04A5.8972,5.8972,0,0,0,776.962,646.495l-.60987,1.34-3.93017,8.64a4.50764,4.50764,0,0,1-1.52979,1.85c-3.55029,2.51-14.85009,11.61-20.68994,28.99-.21.62-.41015,1.25-.6001,1.9a132.09857,132.09857,0,0,0,76.37012-.69l.54981-2.27,5.46-22.51995.09033-.37006A5.91045,5.91045,0,0,0,832.002,660.295Z" transform="translate(-254.33206 -205.48502)" fill="#2f2e41"/><path d="M756.32205,508.74476a40.82856,40.82856,0,0,0,23.33326,7.211,25.01983,25.01983,0,0,1-9.91672,4.07982,82.328,82.328,0,0,0,33.62847.18895,21.76455,21.76455,0,0,0,7.03979-2.41786,8.90912,8.90912,0,0,0,4.34529-5.81136c.7378-4.21489-2.54649-8.04421-5.95961-10.625a43.96047,43.96047,0,0,0-36.94134-7.3819c-4.12658,1.06667-8.26049,2.8689-10.94082,6.18286s-3.47428,8.423-.92061,11.83553Z" transform="translate(-254.33206 -205.48502)" fill="#2f2e41"/><rect x="1.08599" y="30.47938" width="542.31608" height="2.17361" fill="#3f3d56"/><circle cx="19.56169" cy="16.30746" r="6.52083" fill="#3f3d56"/><circle cx="38.30909" cy="16.30746" r="6.52083" fill="#3f3d56"/><circle cx="57.05649" cy="16.30746" r="6.52083" fill="#3f3d56"/><path d="M680.28324,362.107H372.48438a6.97561,6.97561,0,1,1,0-13.95122H680.28324a6.97561,6.97561,0,1,1,0,13.95122Z" transform="translate(-254.33206 -205.48502)" fill="#ccc"/><path d="M680.28324,437.09483H372.48438a6.97561,6.97561,0,1,1,0-13.95122H680.28324a6.97561,6.97561,0,1,1,0,13.95122Z" transform="translate(-254.33206 -205.48502)" fill="#e6e6e6"/><path d="M680.28324,465.86923H372.48438a6.97561,6.97561,0,1,1,0-13.95122H680.28324a6.97561,6.97561,0,1,1,0,13.95122Z" transform="translate(-254.33206 -205.48502)" fill="#e6e6e6"/><path d="M630.146,332.46066H422.62159a6.97561,6.97561,0,1,1,0-13.95122H630.146a6.97561,6.97561,0,0,1,0,13.95122Z" transform="translate(-254.33206 -205.48502)" fill="#ccc"/><path d="M480.99771,408.32044h-108.122a6.97562,6.97562,0,1,1,0-13.95123h108.122a6.97561,6.97561,0,0,1,0,13.95123Z" transform="translate(-254.33206 -205.48502)" fill="#e6e6e6"/><path d="M680.67458,408.32044h-108.122a6.97562,6.97562,0,1,1,0-13.95123h108.122a6.97562,6.97562,0,1,1,0,13.95123Z" transform="translate(-254.33206 -205.48502)" fill="#e6e6e6"/><path d="M791.212,205.485H261.93216a7.61168,7.61168,0,0,0-7.6001,7.61v358.65a7.6096,7.6096,0,0,0,7.6001,7.6h395.79c-.1001-.72-.18017-1.45-.26025-2.17H261.93216a5.435,5.435,0,0,1-5.43017-5.43V213.095a5.44356,5.44356,0,0,1,5.43017-5.44H791.212a5.44563,5.44563,0,0,1,5.43994,5.44v219.81c.72021.05,1.45019.11,2.17041.18V213.095A7.61385,7.61385,0,0,0,791.212,205.485Z" transform="translate(-254.33206 -205.48502)" fill="#3f3d56"/><path d="M657.7222,579.345c-.1001-.72-.18017-1.45-.26025-2.17-.02-.11-.02979-.21-.04-.32q-.43506-3.945-.62988-7.97-.82471,3.465-1.48975,6.96c.02978.34.06006.67.09961,1.01.01025.11.02.21.04.32.08008.72.16015,1.45.26025,2.17.27979,2.23.62012,4.43,1.02,6.62.00977-.09.02-.17.02979-.26.28027-2.11.60009-4.21.98-6.31A.092.092,0,0,1,657.7222,579.345Zm141.1001-148.27c-.72022-.07-1.4502-.13-2.17041-.18-.10986-.01-.21-.01-.31983-.02-3.20019-.24-6.43994-.36-9.70019-.36a132.0411,132.0411,0,0,0-131.32959,145.33c.02978.34.06006.67.09961,1.01.01025.11.02.21.04.32.08008.72.16015,1.45.26025,2.17.27979,2.23.62012,4.43,1.02,6.62a132.57434,132.57434,0,0,0,79.27,98.45c2.08008.86,4.17969,1.68,6.31006,2.43,1.3999.51,2.7998.98,4.21973,1.43,1.02.33,2.05029.64,3.08007.94,1.46.43,2.93995.84,4.43018,1.22a131.35519,131.35519,0,0,0,107.61963-19.38h.01025a131.92892,131.92892,0,0,0,56.96973-108.54C918.63187,493.835,865.91214,437.245,798.8223,431.075ZM860.792,669.225a129.37688,129.37688,0,0,1-19.33008,11.15,128.00858,128.00858,0,0,1-14.93994,5.88,130.22913,130.22913,0,0,1-71.08008,2.47q-2.63965-.645-5.23975-1.41-2.56494-.75-5.08008-1.59c-1.37011-.47-2.74023-.95-4.10009-1.46-1.41993-.54-2.81983-1.1-4.21973-1.68A130.33475,130.33475,0,0,1,657.732,579.395a.092.092,0,0,1-.00977-.05c-.1001-.72-.18017-1.45-.26025-2.17-.02-.11-.02979-.21-.04-.32q-.43506-3.945-.62988-7.97-.16481-3.165-.16016-6.37a130.14245,130.14245,0,0,1,130-130c3.26025,0,6.5.12,9.70019.36.10987.01.21.02.31983.03.72021.05,1.45019.11,2.17041.18,65.98974,6.16,117.80957,61.85,117.80957,129.43A129.91362,129.91362,0,0,1,860.792,669.225Zm-119.77,15.04c-1.41993-.54-2.81983-1.1-4.21973-1.68A130.33475,130.33475,0,0,1,657.732,579.395c-.37989,2.1-.69971,4.2-.98,6.31-.00977.09-.02.17-.02979.26a132.57434,132.57434,0,0,0,79.27,98.45c2.08008.86,4.17969,1.68,6.31006,2.43C741.86234,685.995,741.43216,685.135,741.022,684.265Zm55.31-253.39c-3.20019-.24-6.43994-.36-9.70019-.36a132.0411,132.0411,0,0,0-131.32959,145.33c.02978.34.06006.67.09961,1.01.01025.11.02.21.04.32h2.02c-.02-.11-.02979-.21-.04-.32q-.43506-3.945-.62988-7.97-.16481-3.165-.16016-6.37a130.14245,130.14245,0,0,1,130-130c3.26025,0,6.5.12,9.70019.36.10987.01.21.02.31983.03v-2.01C796.542,430.885,796.44193,430.885,796.33206,430.875Z" transform="translate(-254.33206 -205.48502)" fill="#3f3d56"/><path d="M893.92661,464.30169c40.544.6924,40.53765,61.00085-.0013,61.68733C853.38261,525.29667,853.389,464.98822,893.92661,464.30169Z" transform="translate(-254.33206 -205.48502)" fill="#6c63ff"/><path d="M893.92679,511.93982a2.17023,2.17023,0,0,1-2.16765-2.16764V498.27924a.96717.96717,0,0,0-.96591-.9662H879.3003a2.16794,2.16794,0,0,1,0-4.33588h11.49293a.96667.96667,0,0,0,.96591-.96562V480.518a2.1675,2.1675,0,0,1,4.335,0v11.49352a.96667.96667,0,0,0,.96591.96562H908.553a2.16794,2.16794,0,0,1,0,4.33588H897.06005a.96717.96717,0,0,0-.96591.9662v11.49294A2.17017,2.17017,0,0,1,893.92679,511.93982Z" transform="translate(-254.33206 -205.48502)" fill="#fff"/></svg>
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