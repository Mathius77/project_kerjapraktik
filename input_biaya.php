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
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu_biaya"
                    aria-expanded="true" aria-controls="menu_biaya">
                    <i class="fas fa-cash-register"></i>
                    <span>SPP</span>
                </a>
                <div id="menu_biaya" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Daftar</h6>
                        <a class="collapse-item" href="lihat_biaya.php">Lihat Biaya SPP</a>
                        <a class="collapse-item active" href="input_biaya.php">Input Biaya SPP</a>
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
                    <h1 class="h3 mb-2 text-gray-800">Input Biaya SPP</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Input Biaya SPP</h6>
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
                                $biaya = $_POST['biaya'];
                                $uang_kegiatan = $_POST['uang_kegiatan'];
                                $ekstrakurikuler = $_POST['ekstrakurikuler'];

                                if(empty($thn_ajar) || empty($kelas) || empty($biaya) || empty($uang_kegiatan) || empty($ekstrakurikuler)){
                                    if(empty($thn_ajar)){
                                        echo "<font color='red'>Tahun Ajaran masih kosong.</font><br/>";
                                    }

                                    if(empty($kelas)){
                                        echo "<font color='red'>Kelas masih kosong.</font><br/>";
                                    }

                                    if(empty($biaya)){
                                        echo "<font color='red'>Biaya masih kosong.</font><br/>";
                                    }

                                    if(empty($uang_kegiatan)){
                                        echo "<font color='red'>Uang Kegiatan masih kosong.</font><br/>";
                                    }

                                    if(empty($ekstrakurikuler)){
                                        echo "<font color='red'>Ekstrakurikuler masih kosong.</font><br/>";
                                    }

                                    //link ke halaman sebelumnya
                                    echo "<br/><a href='javascript:self.history.back();'>Kembali</a>";
                                } else{
                                    // jika semua field terisi, maka masukkan data ke database
                                    $result = mysqli_query($conn, "INSERT INTO tbl_tentukan_biaya(thn_ajar, kelas, biaya, uang_kegiatan, ekstrakurikuler) VALUES('$thn_ajar', '$kelas', '$biaya', '$uang_kegiatan', '$ekstrakurikuler')");

                                    //menampilkan pesan "Data sukses ditambahkan"
                                    echo "<font color='green'>Data sukses ditambahkan.";
                                    echo "<br/><a href='lihat_biaya.php'>Lihat Hasil</a><br>";
                                }
                            }
                            ?>
                            <a href="lihat_biaya.php" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-600">
                                            <i class="fas fa-arrow-left"></i>
                                        </span>
                                        <span class="text">Kembali</span>
                                    </a>

                            <form action="input_biaya.php" method="post" name="form1">
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
                                            <td>Biaya</td>
                                            <td><input type="number" name="biaya" style="width: 260px;"></td>
                                        </tr>
                                        <tr> 
                                            <td>Uang Kegiatan</td>
                                            <td><input type="number" name="uang_kegiatan" style="width: 260px;"></td>
                                        </tr>
                                        <tr> 
                                            <td>Ekstrakurikuler</td>
                                            <td><input type="number" name="ekstrakurikuler" style="width: 260px;"></td>
                                        </tr>
                                        <tr> 
                                            <td></td>
                                            <td><input type="submit" name="submit" value="Tambah"></td>
                                        </tr>
                                    </table>
                                    <div class="column picture">
                                    <table>
                                        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="250" height="250" viewBox="0 0 619.86836 562.03084" xmlns:xlink="http://www.w3.org/1999/xlink"><rect x="60.40639" y="139.84921" width="280.48127" height="277.59048" rx="26.74409" fill="#f2f2f2"/><path d="M424.884,314.33363a68.91168,68.91168,0,0,0-68.91167,68.91167v176.435a21.24414,21.24414,0,0,0,21.24414,21.24414H522.08892A103.36435,103.36435,0,0,0,625.45327,477.5601V335.57777a21.24415,21.24415,0,0,0-21.24414-21.24414Z" transform="translate(-290.06582 -168.98458)" fill="#fff"/><path d="M877.7568,217.21468H311.02633a1,1,0,0,1,0-2H877.7568a1,1,0,0,1,0,2Z" transform="translate(-290.06582 -168.98458)" fill="#e6e6e6"/><ellipse cx="49.31535" cy="9.56458" rx="8.45661" ry="8.64507" fill="#e6e6e6"/><ellipse cx="78.5291" cy="9.56458" rx="8.45661" ry="8.64507" fill="#e6e6e6"/><ellipse cx="107.74285" cy="9.56458" rx="8.45661" ry="8.64507" fill="#e6e6e6"/><path d="M431.12009,185.382a.9967.9967,0,0,1-.71484-.30078l-5.70605-5.833a.99951.99951,0,0,1,0-1.39843l5.70605-5.83252a1,1,0,1,1,1.42969,1.39843l-5.022,5.1333,5.022,5.13379a1,1,0,0,1-.71485,1.69922Z" transform="translate(-290.06582 -168.98458)" fill="#e6e6e6"/><path d="M440.70847,185.382a1,1,0,0,1-.71484-1.69922l5.02148-5.13379-5.02148-5.1333a1,1,0,1,1,1.42969-1.39843l5.70556,5.83252a.99953.99953,0,0,1,0,1.39843l-5.70556,5.833A.9967.9967,0,0,1,440.70847,185.382Z" transform="translate(-290.06582 -168.98458)" fill="#e6e6e6"/><path d="M827.2183,170.905h-10.61a2.18934,2.18934,0,0,0-2.19,2.19v10.62a2.18934,2.18934,0,0,0,2.19,2.19h10.61a2.1979,2.1979,0,0,0,2.2-2.19v-10.62A2.1979,2.1979,0,0,0,827.2183,170.905Z" transform="translate(-290.06582 -168.98458)" fill="#e6e6e6"/><path d="M801.2183,170.905h-10.61a2.18934,2.18934,0,0,0-2.19,2.19v10.62a2.18934,2.18934,0,0,0,2.19,2.19h10.61a2.1979,2.1979,0,0,0,2.2-2.19v-10.62A2.1979,2.1979,0,0,0,801.2183,170.905Z" transform="translate(-290.06582 -168.98458)" fill="#e6e6e6"/><path d="M851.7183,171.405h-10.61a2.18934,2.18934,0,0,0-2.19,2.19v10.62a2.18934,2.18934,0,0,0,2.19,2.19h10.61a2.1979,2.1979,0,0,0,2.2-2.19v-10.62A2.1979,2.1979,0,0,0,851.7183,171.405Z" transform="translate(-290.06582 -168.98458)" fill="#e6e6e6"/><path d="M638.94274,186.98458h-69a9,9,0,0,1,0-18h69a9,9,0,0,1,0,18Z" transform="translate(-290.06582 -168.98458)" fill="#e6e6e6"/><path d="M525.3338,486.38416H371.34105a3.32086,3.32086,0,1,1,0-6.64172H525.3338a3.32086,3.32086,0,0,1,0,6.64172Z" transform="translate(-290.06582 -168.98458)" fill="#f2f2f2"/><path d="M525.3338,391.66156H293.38721a3.32086,3.32086,0,1,1,0-6.64171H525.3338a3.32086,3.32086,0,0,1,0,6.64171Z" transform="translate(-290.06582 -168.98458)" fill="#f2f2f2"/><path d="M525.3383,415.3753H293.382a3.32344,3.32344,0,0,0,0,6.64687H525.3383a3.32344,3.32344,0,0,0,0-6.64687Z" transform="translate(-290.06582 -168.98458)" fill="#f2f2f2"/><path d="M525.3338,452.38245H293.38721a3.32086,3.32086,0,1,1,0-6.64172H525.3338a3.32086,3.32086,0,0,1,0,6.64172Z" transform="translate(-290.06582 -168.98458)" fill="#f2f2f2"/><polygon points="430.582 548.714 419.933 548.713 414.868 507.64 430.584 507.641 430.582 548.714" fill="#a0616a"/><path d="M721.02239,728.80744l-32.74574-.00125v-.41408a12.74625,12.74625,0,0,1,12.74555-12.74536h.00079l5.98141-4.53779,11.16,4.53851,2.85851.00007Z" transform="translate(-290.06582 -168.98458)" fill="#2f2e41"/><polygon points="537.725 548.714 527.077 548.713 522.011 507.64 537.728 507.641 537.725 548.714" fill="#a0616a"/><path d="M828.16609,728.80744l-32.74574-.00125v-.41408a12.74625,12.74625,0,0,1,12.74555-12.74536h.00079l5.98141-4.53779,11.16,4.53851,2.8585.00007Z" transform="translate(-290.06582 -168.98458)" fill="#2f2e41"/><path d="M729.33579,481.73279s-6.99338,7.42211-7.28869,12.23732,3.349-3.93121-.29532,4.81522-3.64434,2.91547-3.64434,8.74642-7.72224,11.52478-7.72224,11.52478L697.651,571.449l7.3368,122.67319h16.03512c14.90172-45.42466,21.83474-80.503,13.8485-96.21067l22.2685-49.4952S799.21831,680.086,800.93726,681.63758s1.71895-.63508,1.71895,1.55153-2.18661,0,0,2.1866l10.20416,10.20416,15.30624-1.45773s2.04837-95.33-15.01092-111.80547c0,0,3.93966-51.01877,0-50.87551s-3.93966,6.70308-3.93966.14326,4.66853-8.31021,4.66853-8.31021L800.76492,477.197Z" transform="translate(-290.06582 -168.98458)" fill="#2f2e41"/><path d="M811.95805,380.16959l-14.82,62.05,3.5,23.08,4.2,27.65-14.52-.94-22.47-1.46-41.72-2.7-3.65-122.45,19.14-20,3.42-9.71,27.67-.17,6.62,11.66,17.02,4.84a42.21587,42.21587,0,0,1,6.14,4.74c4.2,3.89,7.92,8.83,9.66,13.89a18.26132,18.26132,0,0,1,.99,4.57Z" transform="translate(-290.06582 -168.98458)" fill="#e6e6e6"/><path d="M683.16043,537.60686a8.7959,8.7959,0,0,0,2.66491-13.12821l21.10689-38.4259-9.19319-8.45131-24.73528,45.82233a8.78357,8.78357,0,0,0,10.15667,14.18309Z" transform="translate(-290.06582 -168.98458)" fill="#e6e6e6"/><path d="M734.6398,357.91347l-4.91986,88.1348L706.01713,501.435l-15.42727,20.45876,1.75369-9.27062-10.63419-5.32074-.99855-.49563,20.41561-79.228,1.88048-30.78742A38.36336,38.36336,0,0,1,717.10322,369.364l11.80767-9.59191Z" transform="translate(-290.06582 -168.98458)" fill="#e6e6e6"/><path d="M683.16043,537.60686a8.7959,8.7959,0,0,0,2.66491-13.12821l21.10689-38.4259-9.19319-8.45131-24.73528,45.82233a8.78357,8.78357,0,0,0,10.15667,14.18309Z" transform="translate(-290.06582 -168.98458)" fill="#a0616a"/><path d="M734.6398,357.91347l-4.91986,88.1348L706.01713,501.435l-15.42727,20.45876,1.75369-9.27062-10.63419-5.32074-.99855-.49563,20.41561-79.228,1.88048-30.78742A38.36336,38.36336,0,0,1,717.10322,369.364l11.80767-9.59191Z" transform="translate(-290.06582 -168.98458)" fill="#e6e6e6"/><rect x="213.68198" y="191.96732" width="280.48127" height="170.59048" rx="26.74409" fill="#fff"/><path d="M757.48526,532.54255H530.4921A27.77566,27.77566,0,0,1,502.748,504.79841V387.69587a27.77566,27.77566,0,0,1,27.74414-27.74414H757.48526a27.77556,27.77556,0,0,1,27.74365,27.74414V504.79841A27.77556,27.77556,0,0,1,757.48526,532.54255ZM530.4921,361.95173A25.74413,25.74413,0,0,0,504.748,387.69587v43.76968a99.077,99.077,0,0,0,99.077,99.077h153.6603a25.74365,25.74365,0,0,0,25.74365-25.74365v-117.103a25.74413,25.74413,0,0,0-25.74414-25.74414Z" transform="translate(-290.06582 -168.98458)" fill="#3f3d56"/><rect x="243.92262" y="316.26256" width="60" height="7" rx="3.5" fill="#6c63ff"/><rect x="419.92262" y="306.76256" width="44" height="26" rx="3.5" fill="#6c63ff"/><circle cx="261.92262" cy="239.76256" r="18" fill="#6c63ff"/><circle cx="467.79653" cy="138.77976" r="22.60167" fill="#a0616a"/><path d="M776.40434,319.44653c.17634,1.35028-2.26629,1.493-2.81707.24763s.16361-2.65684.85821-3.82811l1.61227-2.71869a3.73532,3.73532,0,0,0-2.4605-5.56408h0c1.47528-3.318-.12574-7.4594-3.06517-9.59131s-7.313,1.857-10.87911,2.54107-6.42119-2.04529-9.67189-.42719l1.953-4.50218-10.81018,4.65749,2.5115-5.06459c-2.72828.14863-3.89,3.47146-4.43363,6.14916-.57923,2.853-2.09906,6.41945-5.20067,5.8284a4.0018,4.0018,0,0,1-3.02643-2.998c-2.39623-9.24107,4.56171-19.34369,13.78545-20.96447a13.5606,13.5606,0,0,1,25.88081,1.23229l3.0242-3.70271.58962,5.24629c2.17326-.231,4.22651,1.30332,5.28261,3.21671s.557,4.38376,1.571,6.31979c4.54466,8.677,3.041,18.44556-3.97631,25.10044" transform="translate(-290.06582 -168.98458)" fill="#2f2e41"/><path d="M855.67531,713.68247a2.26935,2.26935,0,0,0,1.64468-3.93333l-.1555-.61819q.03072-.07428.06179-.1484a6.09416,6.09416,0,0,1,11.24138.04177c1.83859,4.42818,4.17943,8.86389,4.7558,13.546a18.02889,18.02889,0,0,1-.31649,6.20046A72.28135,72.28135,0,0,0,879.48213,698.75a69.76616,69.76616,0,0,0-.43275-7.78294q-.3585-3.17781-.99471-6.31034a73.11893,73.11893,0,0,0-14.50012-30.98962,19.459,19.459,0,0,1-8.09295-8.39652,14.84338,14.84338,0,0,1-1.34991-4.05618c.394.05168,1.48556-5.94866,1.18841-6.31679.549-.83317,1.53177-1.24733,2.13143-2.06035,2.98232-4.0434,7.0912-3.33741,9.23621,2.15727,4.58224,2.31266,4.62659,6.14806,1.815,9.83683-1.78878,2.34682-2.03456,5.52233-3.60409,8.03478.16151.20671.32945.407.49091.61366a73.59123,73.59123,0,0,1,7.681,12.1686,30.59244,30.59244,0,0,1,1.8264-14.20959c1.74819-4.21732,5.02491-7.76915,7.91045-11.415a6.27921,6.27921,0,0,1,11.184,3.08332q.00886.08063.01731.1612-.6429.36267-1.25863.76992a3.0782,3.0782,0,0,0,1.24106,5.60174l.06277.00967a30.628,30.628,0,0,1-.80734,4.57938c3.70179,14.31579-4.29011,19.5299-15.70147,19.76412-.25191.12916-.49739.25833-.74929.38109a75.11456,75.11456,0,0,1,4.04326,19.02779,71.24332,71.24332,0,0,1-.05167,11.50322l.01938-.13562a18.8256,18.8256,0,0,1,6.42661-10.87027c4.9456-4.06264,11.93282-5.55869,17.26825-8.82426a3.533,3.533,0,0,1,5.41122,3.43708l-.02182.14261a20.67547,20.67547,0,0,0-2.31871,1.11733q-.6429.36276-1.25864.76992a3.07824,3.07824,0,0,0,1.24107,5.6018l.06282.00965c.04519.00646.084.01295.12911.01943a30.65453,30.65453,0,0,1-5.63854,8.82923c-2.31464,12.49712-12.256,13.68282-22.89023,10.04353h-.00648a75.09193,75.09193,0,0,1-5.0444,14.72621H856.12687c-.06464-.20022-.12274-.40692-.1809-.60717a20.47485,20.47485,0,0,0,4.9863-.297c-1.337-1.64059-2.674-3.2941-4.011-4.93463a1.11772,1.11772,0,0,1-.084-.09689c-.67817-.8396-1.36282-1.67283-2.041-2.51246l-.00036-.001a29.99039,29.99039,0,0,1,.87876-7.63984Z" transform="translate(-290.06582 -168.98458)" fill="#f2f2f2"/><path d="M577.124,729.82542a1.18647,1.18647,0,0,0,1.19007,1.19h330.29a1.19,1.19,0,0,0,0-2.38H578.314A1.18651,1.18651,0,0,0,577.124,729.82542Z" transform="translate(-290.06582 -168.98458)" fill="#ccc"/><path d="M767.48859,532.25832a8.7959,8.7959,0,0,0,2.19681-13.2146l19.72835-39.15154-9.48764-8.11935L756.83443,518.445a8.78357,8.78357,0,0,0,10.65416,13.81328Z" transform="translate(-290.06582 -168.98458)" fill="#a0616a"/><path d="M812.14805,370.64957l.99,4.57-2.37,63.88-10.13,26.2-10.32,26.71-1.27,3.29-14.69,20.99,1.42-9.33-10.82-4.94-1.01-.45,3.9-11.02,8.97-25.32,3.88-10.96.84-32.61.78-30.83a38.36441,38.36441,0,0,1,13.11-27.91l7.06-6.16C806.688,360.64957,810.40806,365.58958,812.14805,370.64957Z" transform="translate(-290.06582 -168.98458)" fill="#e6e6e6"/><path d="M576.138,530.232l-46.8779-1a22.02467,22.02467,0,0,1-21.99209-22l-2-49.01237C511.02409,498.178,533.14387,523.52476,576.138,530.232Z" transform="translate(-290.06582 -168.98458)" fill="#6c63ff"/></svg>
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