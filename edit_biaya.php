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
            padding-left: 100px;
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
                    <h1 class="h3 mb-2 text-gray-800">Edit Biaya SPP</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Edit Biaya SPP</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <?php
                            //termasuk file koneksi database
                            include_once("koneksi.php");

                            //solusi untuk undefined index id adalah dengan menambahkan isset
                            if(isset($_POST['update'])){
                            $id = (isset($_POST['id']) ? $_POST['id'] : '');
                            $thn_ajar = $_POST['thn_ajar'];
                            $kelas = $_POST['kelas'];
                            $biaya = $_POST['biaya'];
                            $uang_kegiatan = $_POST['uang_kegiatan'];
                            $ekstrakurikuler = $_POST['ekstrakurikuler'];

                            //mengecek field yang kosong
                            if(empty($thn_ajar) || empty($kelas) || empty($biaya)){
                                    if(empty($thn_ajar)){
                                        echo "<font color='red'>Tahun Ajaran Pembayaran masih kosong.</font><br/>";
                                    }

                                    if(empty($kelas)){
                                        echo "<font color='red'>Kelas Pembayaran masih kosong.</font><br/>";
                                    }

                                    if(empty($biaya)){
                                        echo "<font color='red'>Biaya masih kosong.</font><br/>";
                                    }
                                    } else{
                                        //update tabel
                                        $result = mysqli_query($conn, "UPDATE tbl_tentukan_biaya SET thn_ajar='$thn_ajar', kelas='$kelas', biaya='$biaya', uang_kegiatan='$uang_kegiatan', ekstrakurikuler='$ekstrakurikuler' WHERE id=$id");                     
                                        //menuju ke halaman lihat_biaya.php
                                        //pengganti header:('Location:...')
                                        echo"<script> window.location.href='lihat_biaya.php';</script>";
                                    }
                                    }
                                    ?>
                                    <?php
                                        //mendapatkan id dari URL
                                        //solusi untuk undefined index id adalah dengan menambahkan isset
                                        $id = (isset($_GET['id']) ? $_GET['id'] : '');

                                        //select data yang terkait dengan id di tabel produk
                                        $result = mysqli_query($conn, "SELECT * FROM tbl_tentukan_biaya WHERE id='$id'");

                                        while($res = mysqli_fetch_array($result))
                                        {
                                            $thn_ajar = $res['thn_ajar'];
                                            $kelas = $res['kelas'];
                                            $biaya = $res['biaya'];
                                            $uang_kegiatan = $res['uang_kegiatan'];
                                            $ekstrakurikuler = $res['ekstrakurikuler'];
                                        }
                                    ?>

                                    <a href="lihat_biaya.php" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-600">
                                            <i class="fas fa-arrow-left"></i>
                                        </span>
                                        <span class="text">Kembali</span>
                                    </a>

                            <form action="edit_biaya.php" method="post" name="form1">
                                    <table width="25%" border="0" cellpadding=10 class="column">
                                        <tr> 
                                            <td>Tahun Ajaran</td>
                                            <td><input type="text" name="thn_ajar" style="width: 260px;" value="<?php echo $thn_ajar;?>"></td>
                                        </tr>
                                        <tr> 
                                            <td>Kelas</td>
                                            <td>
                                            <select  name="kelas" style="width: 260px;">
                                                <option value="1" <?php echo (($kelas == "1") ? "Selected" : "")?>>1</option>
                                                <option value="2" <?php echo (($kelas == "2") ? "Selected" : "")?>>2</option>
                                                <option value="3" <?php echo (($kelas == "3") ? "Selected" : "")?>>3</option>
                                                <option value="4" <?php echo (($kelas == "4") ? "Selected" : "")?>>4</option>
                                                <option value="5" <?php echo (($kelas == "5") ? "Selected" : "")?>>5</option>
                                                <option value="6" <?php echo (($kelas == "6") ? "Selected" : "")?>>6</option>
                                                <option value="7" <?php echo (($kelas == "7") ? "Selected" : "")?>>7</option>
                                                <option value="8" <?php echo (($kelas == "8") ? "Selected" : "")?>>8</option>
                                                <option value="9" <?php echo (($kelas == "9") ? "Selected" : "")?>>9</option>
                                            </select>
                                            </td>
                                        </tr>
                                        <tr> 
                                            <td>Biaya</td>
                                            <td><input type="number" name="biaya" style="width: 260px;" value="<?php echo $biaya;?>"></td>
                                        </tr>
                                        <tr> 
                                            <td>Uang Kegiatan</td>
                                            <td><input type="number" name="uang_kegiatan" style="width: 260px;" value="<?php echo $uang_kegiatan;?>"></td>
                                        </tr>
                                        <tr> 
                                            <td>Ekstrakurikuler</td>
                                            <td><input type="number" name="ekstrakurikuler" style="width: 260px;" value="<?php echo $ekstrakurikuler;?>"></td>
                                        </tr>
                                        <!-- Agar variabel $id terbaca dalam query UPDATE, maka perlu untuk menambahkan $_GET['id'] di button Update -->
                                        <tr>
                                            <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                                            <td><input type="submit" name="update" value="Update"></td>
                                        </tr>
                                    </table>
                                    <div class="column picture">
                                    <table>
                                        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="250" height="250" viewBox="0 0 768.00284 555.67411" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M845.58271,178.55573c-.015.0516-.03047.09693-.04549.14853a2.35786,2.35786,0,0,0-.08421.30279,8.13322,8.13322,0,0,0-.30051,2.02208,7.97652,7.97652,0,0,0,.02233.8749,8.22974,8.22974,0,0,0,.16,1.11046,7.919,7.919,0,0,0,.3432,1.19743,5.81,5.81,0,0,0,.22426.54427,8.57789,8.57789,0,0,0,5.90023,4.86208l.00627-.00048a3.71163,3.71163,0,0,0,.38431.078,8.51347,8.51347,0,0,0,2.1843.11159l.01255-.00095a8.51352,8.51352,0,0,0,4.83851-1.9757c.83654-.6942.92789-1.42743,1.97228-1.10212,3.33155,1.03775,5.55737-4.45262,3.89222-7.46a3.06122,3.06122,0,0,0-.01317-.33959c-.15955-2.1006-3.322-2.63611-5.16628-3.75106l-.009.03717a1.61638,1.61638,0,0,1-3.05044.21885q-.50553-1.21849-.918-2.47032C852.40135,170.41745,842.95727,174.39581,845.58271,178.55573Z" transform="translate(-215.99858 -172.16294)" fill="#2f2e41"/><path d="M823.41839,197.61827c-.48126,1.12152-15.32037,1.00134-16,2-5.24,7.71,13.64917,40.51422,8.40918,48.23425l-.73.87a34.49511,34.49511,0,0,0,4.91-2.77c.14-3.16.28-6.33.43-9.49a26.0832,26.0832,0,0,1,3.76,6.61c1.22-.86,2.22082-2.45422,7.45-5.59a32.79519,32.79519,0,0,1,7.24658-5.96521Z" transform="translate(-215.99858 -172.16294)" fill="#2f2e41"/><path d="M834.19391,260.80614a12.29005,12.29005,0,0,0-18.61949,7.26985l-22.55016,58.75646-38.76115-22.00569a12.00024,12.00024,0,1,0-7.48695,11.93573c8.16277,8.712,43.5513,44.43127,58.2019,30.4749,12.31456-11.731,30.08594-57.1961,34.36382-72.89613A12.29133,12.29133,0,0,0,834.19391,260.80614Z" transform="translate(-215.99858 -172.16294)" fill="#a0616a"/><path d="M658.31471,300.14676c-10.66433-28.27468-13.17174-57.144-4.87376-86.80095a6.64448,6.64448,0,0,1,6.25445-6.99857l65.554-3.68076a6.64445,6.64445,0,0,1,6.99853,6.25444l4.87375,86.801a6.64445,6.64445,0,0,1-6.2544,6.99857l-65.554,3.68076A6.64445,6.64445,0,0,1,658.31471,300.14676Z" transform="translate(-215.99858 -172.16294)" fill="#e6e6e6"/><path d="M661.871,273.64691c-7.39022-13.66073-6.35958-33.87739-3.13329-55.80353a6.2226,6.2226,0,0,1,5.85747-6.55437l56.33813-3.16331a6.22288,6.22288,0,0,1,6.55469,5.85745l4.337,77.241a6.22287,6.22287,0,0,1-5.85778,6.55439l-34.90031,1.9596A27.71843,27.71843,0,0,1,661.871,273.64691Z" transform="translate(-215.99858 -172.16294)" fill="#fff"/><circle cx="474.25605" cy="106.18051" r="5.80453" fill="#6c63ff"/><path d="M706.19477,225.11551c-1.77114-2.95233-5.87164-3.2162-9.3136-3.13887a39.97213,39.97213,0,0,0-10.53956,1.18074c-3.399,1.01064-6.63679,3.07867-8.27755,6.22136-2.01626,3.86311-1.30826,8.5461-.22534,12.76671a85.20858,85.20858,0,0,0,9.712,23.04906l2.51764,1.72055a52.26194,52.26194,0,0,0,17.01224-36.85744A9.03383,9.03383,0,0,0,706.19477,225.11551Z" transform="translate(-215.99858 -172.16294)" fill="#6c63ff"/><path d="M334.9104,524.00443c-21.30981-79.56616-17.87725-168.74454,0-263.5345a8.86341,8.86341,0,0,1,8.85315-8.85315H607.18836a8.86341,8.86341,0,0,1,8.85315,8.85315V524.00442a8.86341,8.86341,0,0,1-8.85315,8.85315H343.76355A8.86342,8.86342,0,0,1,334.9104,524.00443Z" transform="translate(-215.99858 -172.16294)" fill="#f2f2f2"/><path d="M336.59754,458.05342A898.01918,898.01918,0,0,1,340.882,266.44626a8.86341,8.86341,0,0,1,8.85316-8.85315H601.21536a8.85315,8.85315,0,0,1,8.85315,8.85315V518.03285a8.85315,8.85315,0,0,1-8.85315,8.85315H411.55308A75.17932,75.17932,0,0,1,336.59754,458.05342Z" transform="translate(-215.99858 -172.16294)" fill="#fff"/><path d="M497.61621,307.27455H391.73954a2.28324,2.28324,0,1,1,0-4.56647H497.61621a2.28324,2.28324,0,0,1,0,4.56647Z" transform="translate(-215.99858 -172.16294)" fill="#6c63ff"/><path d="M551.21285,328.14867H391.73954a2.28324,2.28324,0,1,1,0-4.56647H551.21285a2.28324,2.28324,0,0,1,0,4.56647Z" transform="translate(-215.99858 -172.16294)" fill="#f2f2f2"/><path d="M551.216,344.45289H391.736a2.285,2.285,0,0,0,0,4.57h159.48a2.285,2.285,0,0,0,0-4.57Z" transform="translate(-215.99858 -172.16294)" fill="#f2f2f2"/><path d="M551.21285,369.8969H391.73954a2.28323,2.28323,0,1,1,0-4.56646H551.21285a2.28323,2.28323,0,0,1,0,4.56646Z" transform="translate(-215.99858 -172.16294)" fill="#f2f2f2"/><path d="M551.21285,390.771H391.73954a2.28324,2.28324,0,1,1,0-4.56647H551.21285a2.28324,2.28324,0,0,1,0,4.56647Z" transform="translate(-215.99858 -172.16294)" fill="#f2f2f2"/><path d="M551.21285,411.771H391.73954a2.28324,2.28324,0,1,1,0-4.56647H551.21285a2.28324,2.28324,0,0,1,0,4.56647Z" transform="translate(-215.99858 -172.16294)" fill="#f2f2f2"/><path d="M551.21285,432.771H391.73954a2.28324,2.28324,0,1,1,0-4.56647H551.21285a2.28324,2.28324,0,0,1,0,4.56647Z" transform="translate(-215.99858 -172.16294)" fill="#f2f2f2"/><path d="M551.21285,453.771H391.73954a2.28324,2.28324,0,1,1,0-4.56647H551.21285a2.28324,2.28324,0,0,1,0,4.56647Z" transform="translate(-215.99858 -172.16294)" fill="#f2f2f2"/><path d="M551.21285,474.771H391.73954a2.28324,2.28324,0,1,1,0-4.56647H551.21285a2.28324,2.28324,0,0,1,0,4.56647Z" transform="translate(-215.99858 -172.16294)" fill="#f2f2f2"/><path d="M513.37046,335.727c-7.00644-2.50307-16.08033-1.52673-20.99762,4.57505-4.40432,5.46524-4.93258,14.16707.6713,19.04441,6.82173,5.93729,16.26953,3.75314,23.71808.4034,6.81573-3.06515,14.31817-8.007,14.21275-16.39385a13.568,13.568,0,0,0-5.74459-10.98425,13.75363,13.75363,0,0,0-12.32106-1.55975c-1.79878.65729-1.0218,3.55763.79752,2.89284a10.54235,10.54235,0,0,1,14.1595,8.20072c1.05226,6.9633-4.89716,11.47317-10.42619,14.22071-6.06569,3.01423-13.7858,5.89813-20.27947,2.43518-5.55463-2.96218-6.57044-9.71835-3.491-14.90682,3.81792-6.43272,12.41332-7.35335,18.90325-5.0348,1.82141.65071,2.60549-2.24693.79752-2.89284Z" transform="translate(-215.99858 -172.16294)" fill="#6c63ff"/><path d="M419.37046,377.727c-7.00644-2.50307-16.08033-1.52673-20.99762,4.57505-4.40432,5.46524-4.93258,14.16707.6713,19.04441,6.82173,5.93729,16.26953,3.75314,23.71808.4034,6.81573-3.06515,14.31817-8.007,14.21275-16.39385a13.568,13.568,0,0,0-5.74459-10.98425,13.75363,13.75363,0,0,0-12.32106-1.55975c-1.79878.65729-1.0218,3.55763.79752,2.89284a10.54235,10.54235,0,0,1,14.1595,8.20072c1.05226,6.9633-4.89716,11.47317-10.42619,14.22071-6.06569,3.01423-13.7858,5.89813-20.27947,2.43518-5.55463-2.96218-6.57044-9.71835-3.491-14.90682,3.81792-6.43272,12.41332-7.35335,18.90325-5.0348,1.82141.65071,2.60549-2.24693.79752-2.89284Z" transform="translate(-215.99858 -172.16294)" fill="#e6e6e6"/><path d="M512.37046,461.727c-7.00644-2.50307-16.08033-1.52673-20.99762,4.57505-4.40432,5.46524-4.93258,14.16707.6713,19.04441,6.82173,5.93729,16.26953,3.75314,23.71808.4034,6.81573-3.06515,14.31817-8.007,14.21275-16.39385a13.568,13.568,0,0,0-5.74459-10.98425,13.75363,13.75363,0,0,0-12.32106-1.55975c-1.79878.65729-1.0218,3.55763.79752,2.89284a10.54235,10.54235,0,0,1,14.1595,8.20072c1.05226,6.9633-4.89716,11.47317-10.42619,14.22071-6.06569,3.01423-13.7858,5.89813-20.27947,2.43518-5.55463-2.96218-6.57044-9.71835-3.491-14.90682,3.81792-6.43272,12.41332-7.35335,18.90325-5.0348,1.82141.65071,2.60549-2.24693.79752-2.89284Z" transform="translate(-215.99858 -172.16294)" fill="#e6e6e6"/><path d="M508.97744,490.10606a69.25372,69.25372,0,0,0,19.59683,38.46564,68.30033,68.30033,0,0,0,61.46771,18.047c1.86959-.39044,1.62682-3.38306-.26257-2.98848a66.18282,66.18282,0,0,1-39.76072-4.092,65.3142,65.3142,0,0,1-38.05276-49.69472c-.29005-1.902-3.28024-1.65057-2.98849.26257Z" transform="translate(-215.99858 -172.16294)" fill="#e6e6e6"/><path d="M594.5664,565.92l22.314-12.85a1.50785,1.50785,0,0,0,.11159-2.38431l-22.97385-16.63154c-1.55489-1.12563-3.49458,1.1644-1.92752,2.29885q11.48694,8.31576,22.97386,16.63154l.1116-2.38432-22.314,12.85c-1.67566.965.04208,3.427,1.70432,2.46978Z" transform="translate(-215.99858 -172.16294)" fill="#e6e6e6"/><path d="M527.97744,329.29971a69.25379,69.25379,0,0,1,19.59683-38.46564,68.30041,68.30041,0,0,1,61.46771-18.047c1.86959.39044,1.62682,3.38307-.26257,2.98849a66.18289,66.18289,0,0,0-39.76072,4.092,65.31423,65.31423,0,0,0-38.05276,49.69473c-.29,1.902-3.28024,1.65057-2.98849-.26258Z" transform="translate(-215.99858 -172.16294)" fill="#3f3d56"/><path d="M613.5664,253.48575l22.314,12.85a1.50786,1.50786,0,0,1,.11159,2.38432l-22.97385,16.63153c-1.55489,1.12564-3.49458-1.16439-1.92752-2.29884l22.97386-16.63154.1116,2.38431-22.314-12.85c-1.67566-.965.04208-3.427,1.70432-2.46979Z" transform="translate(-215.99858 -172.16294)" fill="#3f3d56"/><path d="M408.97447,410.10606a69.25377,69.25377,0,0,1-19.59682,38.46564,68.30034,68.30034,0,0,1-61.46772,18.047c-1.86958-.39044-1.62682-3.38306.26257-2.98848a66.1828,66.1828,0,0,0,39.76072-4.092A65.3142,65.3142,0,0,0,405.986,409.84349c.29005-1.902,3.28024-1.65057,2.98849.26257Z" transform="translate(-215.99858 -172.16294)" fill="#e6e6e6"/><path d="M323.38552,485.92l-22.314-12.85a1.50785,1.50785,0,0,1-.11159-2.38431l22.97386-16.63154c1.55488-1.12563,3.49457,1.1644,1.92751,2.29885l-22.97386,16.63154-.11159-2.38432,22.314,12.85c1.67565.965-.04209,3.427-1.70432,2.46978Z" transform="translate(-215.99858 -172.16294)" fill="#e6e6e6"/><path d="M230.66165,517.53078c-11.1808-19.23782-16.51009-39.89874-14.088-62.44482a4.89247,4.89247,0,0,1,3.69163-5.84261l47.1597-10.63954a4.89247,4.89247,0,0,1,5.8426,3.69163l14.088,62.44482a4.89246,4.89246,0,0,1-3.6916,5.84261l-47.15971,10.63954A4.89247,4.89247,0,0,1,230.66165,517.53078Z" transform="translate(-215.99858 -172.16294)" fill="#f2f2f2"/><path d="M230.02394,497.85372c-7.02709-9.02268-8.73545-23.82979-9.057-40.1452a4.58186,4.58186,0,0,1,3.45732-5.47179L264.954,443.093a4.582,4.582,0,0,1,5.472,3.45727l12.53637,55.56739a4.58205,4.58205,0,0,1-3.45755,5.47184l-25.10736,5.66438A20.40974,20.40974,0,0,1,230.02394,497.85372Z" transform="translate(-215.99858 -172.16294)" fill="#fff"/><circle cx="35.20902" cy="325.6522" r="4.27401" fill="#f2f2f2"/><path d="M256.31519,457.2225c-1.645-1.92882-4.655-1.62214-7.14523-1.14769a29.43205,29.43205,0,0,0-7.51061,2.13831,9.91306,9.91306,0,0,0-5.25532,5.524c-.99479,3.05052.08848,6.36539,1.38784,9.2989a62.74079,62.74079,0,0,0,9.85417,15.55857l2.03746.94355a38.48166,38.48166,0,0,0,7.87561-28.83425A6.65175,6.65175,0,0,0,256.31519,457.2225Z" transform="translate(-215.99858 -172.16294)" fill="#f2f2f2"/><circle cx="35.20902" cy="325.6522" r="4.27401" fill="#e6e6e6"/><path d="M256.31519,457.2225c-1.645-1.92882-4.655-1.62214-7.14523-1.14769a29.43205,29.43205,0,0,0-7.51061,2.13831,9.91306,9.91306,0,0,0-5.25532,5.524c-.99479,3.05052.08848,6.36539,1.38784,9.2989a62.74079,62.74079,0,0,0,9.85417,15.55857l2.03746.94355a38.48166,38.48166,0,0,0,7.87561-28.83425A6.65175,6.65175,0,0,0,256.31519,457.2225Z" transform="translate(-215.99858 -172.16294)" fill="#e6e6e6"/><polygon points="629.594 531.961 618.117 531.96 612.656 487.69 629.596 487.69 629.594 531.961" fill="#a0616a"/><path d="M810.95025,721.05826a4.88192,4.88192,0,0,0,4.851,4.86067h21.60622l.66943-1.38737,3.05614-6.30625,1.1836,6.30625.262,1.38737h8.14959l-.11642-1.39708-2.17322-26.05943-2.84266-.17463-12.28262-.72764-3.01734-.18434v7.781C828.00627,707.592,810.03827,716.79909,810.95025,721.05826Z" transform="translate(-215.99858 -172.16294)" fill="#2f2e41"/><polygon points="584.775 523.056 573.944 526.854 554.141 486.885 570.127 481.28 584.775 523.056" fill="#a0616a"/><path d="M773.68752,722.66405a4.88193,4.88193,0,0,0,6.18618,2.98148l20.38883-7.15012.1726-1.53073.797-6.9623,3.20384,5.55924.70633,1.22251,7.69041-2.69694-.5722-1.27983-10.67459-23.87195-2.74028.77593-11.83136,3.378-2.90834.82457,2.57495,7.34256C785.32614,704.31219,771.41744,718.94667,773.68752,722.66405Z" transform="translate(-215.99858 -172.16294)" fill="#2f2e41"/><polygon points="575.852 177.536 582.968 209.7 635.004 214.407 639.786 186.401 575.852 177.536" fill="#a0616a"/><path d="M854.47668,372.29786,795.92082,371.32l-1.25927,17.094-45.218,135.925-8.0347,33.419,23.03023,124.08486,38.99985-.02471s-.8092-32.59991-2.36582-33.95091-4.80575.0203-2.3967-6.94125,4.18694-9.21,1.33678-12.00821-6.29643-.45093-4.18105-7.116,19.37409-97.66556,19.37409-97.66556V687.28715h40.12621s8.40081-7.67419,4.534-11.67075-7.00479-4.78105-3.86684-10.27246,9.9473-4.10775,4.18916-11.07548c-4.57468-5.53567,6.36891-158.192,11.06055-220.708A64.86146,64.86146,0,0,0,856.222,386.97458l0,0Z" transform="translate(-215.99858 -172.16294)" fill="#2f2e41"/><path d="M824.328,245.21852l25.90059-1.33425,12.03015,19.00908s22.635,3.78429,21.066,30.45685-27.54006,50.07785-27.54006,50.07785l1.11019-3.80615-1.92811,5.50928.24725,3.09348,2.6303,3.27611.27081,3.38809-2.33044,5.36058,3.16914,5.13274-66.62958-6.45537-2.43647-8.87571,3.55428-4.76616-1.98531-6.21666,2.98465-5.97939,1.55631-1.29722s-17.02663-25.58012,2.51942-44.84669l7.84487-13.33628,8.77774-10.70925Z" transform="translate(-215.99858 -172.16294)" fill="#6c63ff"/><circle cx="614.77564" cy="37.27356" r="24.56093" fill="#a0616a"/><path d="M849.4284,244.81828a11.82866,11.82866,0,0,1-3.96-6.5,25.41452,25.41452,0,0,0,.35,9.28c-1.33,1-2.62,1.95-3.84,2.81a26.08337,26.08337,0,0,0-3.76-6.61c-.15,3.16-.29,6.33-.43,9.49a34.49492,34.49492,0,0,1-4.91,2.77l.73-.87c5.24-7.72-8.32-21.93-3.08-29.64,1.47-2.16-5.17-19.23-10.23-20-4.5-.68-4.31.62-8.67,1.57a21.81777,21.81777,0,0,0-2.09-5.41,17.87547,17.87547,0,0,1-.17,5.7c-1.55.06-2.76948-.92763-4.42-1.18-10.53-1.61-9.46-12.99994-6.53-16.61,2.94-3.6,12.7-4.68,17.2-5.85.41-.4,1.34-.15,1.75-.53,8.624-7.89252,20.158-9.19959,30.53759-5.70145a18.87843,18.87843,0,0,1,2.70969,1.17935c8.81,4.61658,16.35,10.9709,15.8027,20.90211-.25635,4.6515-1.31222,5.37554,0,8,.322.644-2.49921,6.7077,2.2504,7.35385s2.60782,4.31305,3.7496,5.64615C876.84186,225.78286,860.98968,240.84608,849.4284,244.81828Z" transform="translate(-215.99858 -172.16294)" fill="#2f2e41"/><path d="M627.05005,586.423c-5.15377-21.64585-4.29431-42.96571,4.53083-63.85372a4.8925,4.8925,0,0,1,5.22058-4.52879l48.22373,3.42179a4.89247,4.89247,0,0,1,4.52877,5.22057l-4.53084,63.85372a4.89246,4.89246,0,0,1-5.22054,4.52879l-48.22374-3.42179A4.89247,4.89247,0,0,1,627.05005,586.423Z" transform="translate(-215.99858 -172.16294)" fill="#f2f2f2"/><path d="M632.11761,567.39894c-4.12451-10.66663-1.48736-25.33683,2.91283-41.051a4.58185,4.58185,0,0,1,4.88923-4.24134l41.44424,2.94073a4.58206,4.58206,0,0,1,4.24158,4.88924l-4.03183,56.82113a4.58206,4.58206,0,0,1-4.88945,4.24133l-25.67385-1.82173A20.40974,20.40974,0,0,1,632.11761,567.39894Z" transform="translate(-215.99858 -172.16294)" fill="#fff"/><circle cx="436.41267" cy="401.31196" r="4.27401" fill="#f2f2f2"/><path d="M669.01524,536.083c-1.01845-2.32147-3.98886-2.89641-6.51008-3.16074a29.43232,29.43232,0,0,0-7.80815-.12,9.913,9.913,0,0,0-6.62581,3.77254c-1.83276,2.63369-1.75213,6.12013-1.35457,9.30381a62.7411,62.7411,0,0,0,4.94529,17.74028l1.67852,1.49136a38.48169,38.48169,0,0,0,15.86118-25.335A6.65172,6.65172,0,0,0,669.01524,536.083Z" transform="translate(-215.99858 -172.16294)" fill="#f2f2f2"/><path d="M885.24043,361.18159l-.96692-75.30707a12.15626,12.15626,0,0,0-12.15478-11.96421h0a12.1563,12.1563,0,0,0-12.13917,12.80092l3.40255,78.19481.0646,47.60124a10.60809,10.60809,0,1,0,13.0239,3.96649Z" transform="translate(-215.99858 -172.16294)" fill="#a0616a"/><path d="M949.50756,726.812H916.321l-.14258-.25879c-.42432-.76953-.834-1.585-1.2168-2.42285-3.41846-7.31836-4.86328-15.68848-6.13818-23.07325l-.96-5.5664a3.43688,3.43688,0,0,1,5.41015-3.36231q7.56519,5.50488,15.13623,10.999c1.91114,1.39062,4.09375,3,6.18409,4.73925.20166-.97949.41259-1.96191.62353-2.93066a3.43916,3.43916,0,0,1,6.28076-1.08594l3.88281,6.23828c2.832,4.55567,5.33155,9.04492,4.82227,13.88672a.75716.75716,0,0,1-.01318.17578,10.94679,10.94679,0,0,1-.56348,2.33106Z" transform="translate(-215.99858 -172.16294)" fill="#f0f0f0"/><path d="M982.817,727.52974l-315.3575.30732a1.19069,1.19069,0,0,1,0-2.38135l315.3575-.30731a1.19069,1.19069,0,0,1,0,2.38134Z" transform="translate(-215.99858 -172.16294)" fill="#cacaca"/></svg>
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