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
        width: 40%;
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
                    <h1 class="h3 mb-2 text-gray-800">Input Pemesanan Seragam</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Input Pemesanan Seragam</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <?php
                            // --- koneksi ke database
                            $conn = mysqli_connect("localhost","root","","db_kerjapraktik") or die(mysqli_error());

                            // --- Fungsi tambah data (Create)
                            function tambah($conn){
                                
                                if (isset($_POST['btn_simpan'])){
                                    $id = time();
                                    $nis = $_POST['nis'];
                                    $id_seragam = $_POST['id_seragam'];
                                    $jumlah = $_POST['jumlah'];
                                    $tgl_bayar = $_POST['tgl_bayar'];
                                    
                                    if(!empty($nis) && !empty($id_seragam) && !empty($jumlah) && !empty($tgl_bayar)){
                                        $sql = "INSERT INTO tbl_pesan_seragam (nis, id_seragam, jumlah, tgl_bayar) VALUES('".$nis."','".$id_seragam."','".$jumlah."','".$tgl_bayar."')";
                                        //echo $sql;
                                        $simpan = mysqli_query($conn, $sql);
                                        if($simpan && isset($_GET['aksi'])){
                                            if($_GET['aksi'] == 'create'){
                                                header('location: input_pembayaran_seragam.php');
                                            }
                                        }
                                    } else {
                                        $pesan = "Tidak dapat menyimpan, data belum lengkap!";
                                    }
                                }
                            ?>
                            <a href="lihat_siswa.php" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-600">
                                            <i class="fas fa-arrow-left"></i>
                                        </span>
                                        <span class="text">Kembali</span>
                                    </a>

                            <form action="" method="POST">
                            <table width="25%" border="0" cellpadding=10 class="column">
                                    <td><h2>Tambah data</h2></td>
                                    <tr>
                                        <td>NIS</td> 
                                        <td><input readonly type="text" name="nis" id="nis" onfocusout="BacaNama()" value="<?php echo $_GET['nis']; ?>" style="width: 260px;"/></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Lengkap</td> 
                                        <td><input readonly type="text" name="nama" id="nama" style="width: 260px;"/></td>
                                    </tr>
                                    <tr>
                                        <td>Tahun Ajaran</td> 
                                        <td><input readonly type="text" name="thn_ajar" id="thn_ajar" style="width: 260px;"/></td>
                                    </tr>
                                    <!--<tr>
                                        <td>id_seragam</td>
                                        <td><input type="text" name="id_seragam" id="id" onfocusout="BacaPesanSeragam()" style="width: 260px;"/></td>
                                    </tr>-->
                                    <tr> 
                                        <td>Pilih Seragam</td>
                                        <td>
                                        <select  name="id_seragam" id="id" onchange="BacaPesanSeragam()" style="width: 260px;">
                                        <option>Pilih Seragam</option>
                                            <?php
                                            include_once("koneksi.php");
                                            $result = mysqli_query($conn, "SELECT * FROM tbl_lihat_seragam");
                                            foreach ($result as $output) {?>
                                            <option value="<?php echo (int)$output['id'] ?>">
                                                <?php echo $output['jns_pakaian'].' - '.$output['tingkat'].' - '.$output['ukuran']; ?>
                                            </option>
                                            <?php } ?>
                                        </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tingkatan</td>
                                        <td><input readonly type="text" name="tingkat" id="tingkat" style="width: 260px;"/></td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Seragam</td>
                                        <td><input readonly type="text" name="jns_pakaian" id="jns_pakaian" style="width: 260px;"/></td>
                                    </tr>
                                    <tr>
                                        <td>Ukuran</td>
                                        <td><input readonly type="text" name="ukuran" id="ukuran" style="width: 260px;"/></td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah</td>
                                        <td><input type="number" name="jumlah" id="jumlah" style="width: 260px;"/></td>
                                    </tr>
                                    <tr>
                                        <td>Harga Satuan</td>
                                        <td><input readonly type="text" name="harga" id="harga" style="width: 260px;"/></tr>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Pembayaran</td>
                                        <td><input type="date" name="tgl_bayar" value="<?php echo date('Y-m-d'); ?>" style="width: 260px;"/></td>
                                    </tr>
                                    <br>
                                    <tr>
                                        <td><input type="submit" name="btn_simpan" value="Simpan"/>
                                        <input type="reset" name="reset" value="Besihkan"/></td>
                                    </tr>
                                    <br>
                                    <p><?php echo isset($pesan) ? $pesan : "" ?></p>
                            </form>
                                </form>
                                <?php
                                }
                                // --- Tutup Fungsi tambah data

                                // --- Fungsi Baca Data (Read)
                                function tampil_data($conn){
                                    //echo $_GET['nis'];
                                    $nis = $_GET['nis'];
                                    $noUrut = 1;
                                    $sql = "SELECT id, nis, nama, thn_ajar, tingkat, jns_pakaian, ukuran, jumlah, harga, DATE_FORMAT(tgl_bayar, '%d/%m/%Y') AS tgl_bayar_saja FROM v_04 WHERE nis=$nis";
                                    $query = mysqli_query($conn, $sql);
                                    
                                    echo "<fieldset>";
                                    echo "<legend><h2></h2></legend>";
                                    

                                    echo "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>";
                                    echo "<tr>
                                            <th>No.</th>
                                            <th>NIS</th>
                                            <th>Nama Lengkap</th>
                                            <th>Tahun Ajaran</th>
                                            <th>Tingkatan</th>
                                            <th>Jenis Seragam</th>
                                            <th>Ukuran</th>
                                            <th>Jumlah</th>
                                            <th>Harga Satuan</th>
                                            <th>Total Harga</th>
                                            <th>Tanggal Pembayaran</th>
                                            <th>Update</th>
                                        </tr>";
                                        
                                        while($data = mysqli_fetch_array($query)){
                                            ?>
                                                <tr>
                                                    <?php $data['total_harga'] = $data['harga'] * $data['jumlah']; ?>
                                                    <td><?php echo $noUrut++; ?></td>
                                                    <td><?php echo $data['nis']; ?></td>
                                                    <td><?php echo $data['nama']; ?></td>
                                                    <td><?php echo $data['thn_ajar']; ?></td>
                                                    <td><?php echo $data['tingkat']; ?></td>
                                                    <td><?php echo $data['jns_pakaian']; ?></td>
                                                    <td><?php echo $data['ukuran']; ?></td>
                                                    <td><?php echo $data['jumlah']; ?></td>
                                                    <td>Rp <?php echo $data['harga']; ?></td>
                                                    <td>Rp <?php echo $data['total_harga']; ?>.00</td>
                                                    <td><?php echo $data['tgl_bayar_saja']; ?></td>
                                                    <td>
                                                        <a href="input_pembayaran_seragam.php?aksi=update&id=<?php echo $data['id']; ?>&nis=<?php echo $data['nis'] ?>"><button type='button' class='btn btn-success'><i class='fa fa-pencil' aria-hidden='true'></i></button></a>
                                                        <a href="input_pembayaran_seragam.php?aksi=delete&id=<?php echo $data['id']; ?>"><button type='button' class='btn btn-danger'><i class='fa fa-trash' aria-hidden='true'></i></button></a>
                                                    </td>
                                                </tr>
                                                
                                            
                                            <?php
                                        }
                                        echo "</table>";
                                        echo "</fieldset>";
                                    }
                                    // --- Tutup Fungsi Baca Data (Read)

                                    // --- Fungsi Ubah Data (Update)
                                    function ubah($conn){

                                        // ubah data
                                        if(isset($_POST['btn_ubah'])){
                                            $id = $_POST['id'];
                                            $nis = $_POST['nis'];
                                            $id_seragam = $_POST['id_seragam'];
                                            $jumlah = $_POST['jumlah'];
                                            $tgl_bayar = $_POST['tgl_bayar'];
                                            
                                            if(!empty($nis) && !empty($id_seragam) && !empty($jumlah) && !empty($tgl_bayar)){
                                                $perubahan = "nis='".$nis."',id_seragam=".$id_seragam.",jumlah=".$jumlah.",tgl_bayar='".$tgl_bayar."'";
                                                $sql_update = "UPDATE tbl_pesan_seragam SET ".$perubahan." WHERE id=$id";
                                                $update = mysqli_query($conn, $sql_update);
                                                if($update && isset($_GET['aksi'])){
                                                    if($_GET['aksi'] == 'update'){
                                                        echo"<script> window.location.href='lihat_siswa.php';</script>";
                                                    }
                                                }
                                            } else {
                                                $pesan = "Data tidak lengkap!";
                                            }
                                        }

                                        // tampilkan form ubah
                                        if(isset($_GET['id'])){
                                            $id=$_GET['id'];
                                            $sql = "SELECT * FROM v_04 WHERE id=$id";
                                            //echo $sql;
                                            $query = mysqli_query($conn, $sql);
                                            while($data = mysqli_fetch_array($query)){
                                
                                ?>
                                        
                                        <a href="lihat_siswa.php" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-600">
                                            <i class="fas fa-arrow-left"></i>
                                        </span>
                                        <span class="text">Kembali</span>
                                    </a>

                                        <form action="" method="POST">
                                        <table width="0%" border="0" cellpadding=10 class="column">
                                            <td><h2>Ubah data</h2></td>
                                            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>"/>
                                            <tr>
                                                <td>NIS</td>
                                                <td><input readonly type="text" name="nis" value="<?php echo $data['nis'] ?>" style="width: 260px;"/></td>
                                            </tr>
                                            <tr>
                                                <td>Nama Lengkap</td>
                                                <td><input readonly type="text" name="nama" value="<?php echo $data['nama'] ?>" style="width: 260px;"/><td>
                                            </tr>
                                            <tr>
                                                <td>Tahun Ajaran</td>
                                                <td><input readonly type="text" name="thn_ajar" value="<?php echo $data['thn_ajar'] ?>" style="width: 260px;"/></td>
                                            </tr>
                                            <tr>
                                                <td>id_seragam</td>
                                                <td><input readonly type="text" name="id_seragam" value="<?php echo $data['id_seragam'] ?>" style="width: 260px;"/></td>
                                            </tr>
                                            <tr>
                                                <td>Tingkatan</td>
                                                <td><input readonly type="text" name="tingkat" value="<?php echo $data['tingkat'] ?>" style="width: 260px;"/></td>
                                            </tr>
                                            <tr>
                                                <td>Jenis Seragam</td>
                                                <td><input readonly type="text" name="jns_pakaian" value="<?php echo $data['jns_pakaian'] ?>" style="width: 260px;"/></td>
                                            </tr>
                                            <tr>
                                                <td>Ukuran</td>
                                                <td><input readonly type="text" name="ukuran" value="<?php echo $data['ukuran'] ?>" style="width: 260px;"/></td>
                                            </tr>
                                            <tr>
                                                <td>Jumlah</td>
                                                <td><input type="number" name="jumlah" value="<?php echo $data['jumlah'] ?>" style="width: 260px;"/></td>
                                            </tr>
                                            <tr>
                                                <td>Harga Satuan</td>
                                                <td><input readonly type="text" name="harga" value="<?php echo $data['harga'] ?>" style="width: 260px;"/></td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Pembayaran</td>
                                                <td><input type="date" name="tgl_bayar" value="<?php echo date('Y-m-d', strtotime($data['tgl_bayar'])); ?>" style="width: 260px;"/></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Yang bisa diubah hanya Jumlah dan Tanggal Pembayaran saja!</strong></td>
                                            </tr>
                                            <br>
                                            <tr>
                                                <td><input type="submit" name="btn_ubah" value="Simpan Perubahan"/></td>
                                            </tr>
                                            <br>
                                            <p><?php echo isset($pesan) ? $pesan : "" ?></p>
                                        </form>
                                    <?php
                                    }
                                }
                                
                            }
                            // --- Tutup Fungsi Update


                            // --- Fungsi Delete
                            function hapus($conn){

                                if(isset($_GET['id']) && isset($_GET['aksi'])){
                                    $id = $_GET['id'];
                                    $sql_hapus = "DELETE FROM tbl_pesan_seragam WHERE id=" . $id;
                                    $hapus = mysqli_query($conn, $sql_hapus);
                                    
                                    if($hapus){
                                        if($_GET['aksi'] == 'delete'){
                                            echo"<script> window.location.href='lihat_siswa.php';</script>";
                                        }
                                    }
                                }
                                
                            }
                            // --- Tutup Fungsi Hapus


                            // ===================================================================

                            // --- Program Utama
                            if (isset($_GET['aksi'])){
                                switch($_GET['aksi']){
                                    case "create":
                                        echo '<a href="input_pembayaran_seragam.php"> &laquo; Home</a>';
                                        tambah($conn);
                                        break;
                                    case "read":
                                        tampil_data($conn);
                                        break;
                                    case "update":
                                        ubah($conn);
                                        tampil_data($conn);
                                        break;
                                    case "delete":
                                        hapus($conn);
                                        break;
                                    default:
                                        echo "<h3>Aksi <i>".$_GET['aksi']."</i> tidak ada!</h3>";
                                        tambah($conn);
                                        tampil_data($conn);
                                }
                            } else {
                                tambah($conn);
                                tampil_data($conn);
                            }

                            ?>
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

<script>
    function BacaNama(){
        $.ajax(
        {
            type: "POST",
            url: 'read_single_seragam.php',
            datatype: 'json',
            data: {
                nis: $("#nis").val()
            },
            success: function(data){
                data = JSON.parse(data);
                //data harus di convert menjadi JSON agar tidak undefined.
                $("#nama").val(data["nama"]);
                $("#thn_ajar").val(data["thn_ajar"]);           
                //# dimaksudkan sebagai id yang terdapat di dalam input total_bayar
            },
            error: function(result){
                alert('error');
            },
        });
    }

    function BacaPesanSeragam(){
        $.ajax(
        {
            type: "POST",
            url: 'read_single_seragam2.php',
            datatype: 'json',
            data: {
                id: $("#id").val()
            },
            success: function(data){
                data = JSON.parse(data);
                //data harus di convert menjadi JSON agar tidak undefined.
                $("#tingkat").val(data["tingkat"]);
                $("#jns_pakaian").val(data["jns_pakaian"]);
                $("#ukuran").val(data["ukuran"]);
                $("#harga").val(data["harga"]);           
                //# dimaksudkan sebagai id yang terdapat di dalam input total_bayar
            },
            error: function(result){
                alert('error');
            },
        });
    }
</script>