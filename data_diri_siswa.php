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

    <title>Halaman Siswa</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- icon pencil -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index_siswa.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Siswa</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu_pembayaran_spp"
                    aria-expanded="true" aria-controls="menu_pesan_buku">
                    <i class="fa fa-money" style="font-size:18px"></i>
                    <span>Lihat Pembayaran</span>
                </a>
                <div id="menu_pembayaran_spp" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Daftar</h6>
                        <a class="collapse-item" href="index_siswa.php">Pembayaran SPP</a>
                        <a class="collapse-item" href="lihat_pemesanan_buku_siswa.php">Pemesanan Buku</a>
                        <a class="collapse-item" href="lihat_pemesanan_seragam_siswa.php">Pemesanan Seragam</a>
                    </div>
                </div>
            </li>
        <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu_laporan"
                    aria-expanded="true" aria-controls="menu_pesan_buku">
                    <i class="fa fa-sticky-note" style="font-size:18px"></i>
                    <span>Lihat Transaksi</span>
                </a>
                <div id="menu_laporan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Daftar</h6>
                        <a class="collapse-item" href="lihat_laporan_daftarsiswa_siswa.php">Transaksi Pembayaran SPP</a>
                        <a class="collapse-item" href="lihat_laporan_pemesanan_buku_siswa.php">Transaksi Pemesanan Buku</a>
                        <a class="collapse-item" href="lihat_laporan_pemesanan_seragam_siswa.php">Transaksi Pemesanan</br>Seragam</a>
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
                    <h1 class="h3 mb-2 text-gray-800">Biodata Siswa</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Biodata Siswa</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <?php
                            //termasuk file koneksi database
                            include_once("koneksi.php");

                            //solusi untuk undefined index id adalah dengan menambahkan isset
                            if(isset($_POST['update'])){
                            $id = (isset($_POST['id']) ? $_POST['id'] : '');
                            $nama = $_POST['nama'];
                            $tempat_lahir_siswa = $_POST['tempat_lahir_siswa'];
                            $tgl_lahir_siswa = $_POST['tgl_lahir_siswa'];
                            $jns_kelamin_siswa = $_POST['jns_kelamin_siswa'];
                            $agama_siswa = $_POST['agama_siswa'];
                            $alamat_siswa = $_POST['alamat_siswa'];
                            $nama_ayah = $_POST['nama_ayah'];
                            $tempat_lahir_ayah = $_POST['tempat_lahir_ayah'];
                            $tgl_lahir_ayah = $_POST['tgl_lahir_ayah'];
                            $agama_ayah = $_POST['agama_ayah'];
                            $pend_ayah = $_POST['pend_ayah'];
                            $kerja_ayah = $_POST['kerja_ayah'];
                            $alamat_ayah = $_POST['alamat_ayah'];
                            $nama_ibu = $_POST['nama_ibu'];
                            $tempat_lahir_ibu = $_POST['tempat_lahir_ibu'];
                            $tgl_lahir_ibu = $_POST['tgl_lahir_ibu'];
                            $agama_ibu = $_POST['agama_ibu'];
                            $pend_ibu = $_POST['pend_ibu'];
                            $kerja_ibu = $_POST['kerja_ibu'];
                            $alamat_ibu = $_POST['alamat_ibu'];
                            
                            //mengecek field yang kosong
                            if(empty($nama) || empty($tempat_lahir_siswa) || empty($tgl_lahir_siswa) || empty($jns_kelamin_siswa) || empty($agama_siswa) || empty($alamat_siswa) || empty($nama_ayah) || empty($tempat_lahir_ayah) || empty($tgl_lahir_ayah) || empty($agama_ayah) || empty($pend_ayah) || empty($kerja_ayah) || empty($alamat_ayah)  || empty($nama_ibu) || empty($tempat_lahir_ibu) || empty($tgl_lahir_ibu) || empty($agama_ibu) || empty($pend_ibu) || empty($kerja_ibu) || empty($alamat_ibu)){
                                if(empty($nama)){
                                    echo "<font color='red'>Nama Lengkap Siswa masih kosong.</font><br/>";
                                }

                                if(empty($tempat_lahir_siswa)){
                                    echo "<font color='red'>Tempat Lahir Siswa masih kosong.</font><br/>";
                                }

                                if(empty($tgl_lahir_siswa)){
                                    echo "<font color='red'>Tanggal Lahir masih kosong.</font><br/>";
                                }

                                if(empty($jns_kelamin_siswa)){
                                    echo "<font color='red'>Jenis Kelamin Siswa masih kosong.</font><br/>";
                                }

                                if(empty($agama_siswa)){
                                    echo "<font color='red'>Agama Siswa masih kosong.</font><br/>";
                                }

                                if(empty($alamat_siswa)){
                                    echo "<font color='red'>Alamat Siswa masih kosong.</font><br/>";
                                }

                                if(empty($nama_ayah)){
                                    echo "<font color='red'>Nama Ayah masih kosong.</font><br/>";
                                }

                                if(empty($tempat_lahir_ayah)){
                                    echo "<font color='red'>Tempat Lahir Ayah masih kosong.</font><br/>";
                                }

                                if(empty($tgl_lahir_ayah)){
                                    echo "<font color='red'>Tanggal Lahir Ayah masih kosong.</font><br/>";
                                }

                                if(empty($agama_ayah)){
                                    echo "<font color='red'>Agama Ayah masih kosong.</font><br/>";
                                }

                                if(empty($pend_ayah)){
                                    echo "<font color='red'>Pendidikan Ayah masih kosong.</font><br/>";
                                }

                                if(empty($kerja_ayah)){
                                    echo "<font color='red'>Kerja Ayah masih kosong.</font><br/>";
                                }

                                if(empty($alamat_ayah)){
                                    echo "<font color='red'>Alamat Ayah masih kosong.</font><br/>";
                                }

                                if(empty($nama_ibu)){
                                    echo "<font color='red'>Nama Ibu masih kosong.</font><br/>";
                                }

                                if(empty($tempat_lahir_ibu)){
                                    echo "<font color='red'>Tempat Lahir Ibu masih kosong.</font><br/>";
                                }

                                if(empty($tgl_lahir_ibu)){
                                    echo "<font color='red'>Tanggal Lahir Ibu masih kosong.</font><br/>";
                                }

                                if(empty($agama_ibu)){
                                    echo "<font color='red'>Agama Ibu masih kosong.</font><br/>";
                                }

                                if(empty($pend_ibu)){
                                    echo "<font color='red'>Pendidikan Ibu masih kosong.</font><br/>";
                                }

                                if(empty($kerja_ibu)){
                                    echo "<font color='red'>Kerja Ibu masih kosong.</font><br/>";
                                }

                                if(empty($alamat_ibu)){
                                    echo "<font color='red'>Alamat Ibu masih kosong.</font><br/>";
                                }
                                    } else{
                                        //update tabel
                                        $result = mysqli_query($conn, "UPDATE tbl_siswa SET nama='$nama', tempat_lahir_siswa='$tempat_lahir_siswa', tgl_lahir_siswa='$tgl_lahir_siswa', jns_kelamin_siswa='$jns_kelamin_siswa', agama_siswa='$agama_siswa', alamat_siswa='$alamat_siswa', nama_ayah='$nama_ayah', tempat_lahir_ayah='$tempat_lahir_ayah', tgl_lahir_ayah='$tgl_lahir_ayah', agama_ayah='$agama_ayah', pend_ayah='$pend_ayah', kerja_ayah='$kerja_ayah', alamat_ayah='$alamat_ayah', nama_ibu='$nama_ibu', tempat_lahir_ibu='$tempat_lahir_ibu', tgl_lahir_ibu='$tgl_lahir_ibu', agama_ibu='$agama_ibu', pend_ibu='$pend_ibu', kerja_ibu='$kerja_ibu', alamat_ibu='$alamat_ibu' WHERE id=$id");                     
                                        //menuju ke halaman lihat_siswa.php
                                        //pengganti header:('Location:...')
                                        echo"<script> window.location.href='profil_siswa.php';</script>";
                                    }
                                    }
                                    ?>
                                    <?php
                                        //mendapatkan id dari URL
                                        //solusi untuk undefined index id adalah dengan menambahkan isset
                                        $id = (isset($_GET['id']) ? $_GET['id'] : '');

                                        //select data yang terkait dengan id di tabel produk
                                        $result = mysqli_query($conn, "SELECT * FROM tbl_siswa WHERE id='$id'");

                                        while($res = mysqli_fetch_array($result))
                                        {
                                            $nama = $res['nama'];
                                            $tempat_lahir_siswa = $res['tempat_lahir_siswa'];
                                            $tgl_lahir_siswa = $res['tgl_lahir_siswa'];
                                            $jns_kelamin_siswa = $res['jns_kelamin_siswa'];
                                            $agama_siswa = $res['agama_siswa'];
                                            $alamat_siswa = $res['alamat_siswa'];
                                            $nama_ayah = $res['nama_ayah'];
                                            $tempat_lahir_ayah = $res['tempat_lahir_ayah'];
                                            $tgl_lahir_ayah = $res['tgl_lahir_ayah'];
                                            $agama_ayah = $res['agama_ayah'];
                                            $pend_ayah = $res['pend_ayah'];
                                            $kerja_ayah = $res['kerja_ayah'];
                                            $alamat_ayah = $res['alamat_ayah'];
                                            $nama_ibu = $res['nama_ibu'];
                                            $tempat_lahir_ibu = $res['tempat_lahir_ibu'];
                                            $tgl_lahir_ibu = $res['tgl_lahir_ibu'];
                                            $agama_ibu = $res['agama_ibu'];
                                            $pend_ibu = $res['pend_ibu'];
                                            $kerja_ibu = $res['kerja_ibu'];
                                            $alamat_ibu = $res['alamat_ibu'];
                                        }
                                    ?>

                                    <a href="profil_siswa.php" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-600">
                                            <i class="fas fa-arrow-left"></i>
                                        </span>
                                        <span class="text">Kembali</span>
                                    </a>

                            <form action="data_diri_siswa.php" method="post" name="form1">
                                    <table width="25%" border="0" cellpadding=10 class="column">
                                        <tr>
                                            <td><strong>Data Pribadi Siswa</strong></td>
                                        </tr>
                                        <tr> 
                                            <td>Nama Lengkap</td>
                                            <td><input type="text" name="nama" style="width: 260px;" value="<?php echo $nama;?>"></td>
                                        </tr>
                                        <tr> 
                                            <td>Tempat & Tanggal Lahir</td>
                                            <td><input type="text" name="tempat_lahir_siswa" style="width: 260px;" value="<?php echo $tempat_lahir_siswa;?>" placeholder="Tempat Lahir">  <input type="date" name="tgl_lahir_siswa" style="width: 260px;" value="<?php echo date('Y-m-d', strtotime($tgl_lahir_siswa)); ?>"></td>
                                        </tr>
                                        <tr> 
                                            <td>Jenis Kelamin</td>
                                            <td>
                                            <select  name="jns_kelamin_siswa" style="width: 260px;" value="<?php echo $jns_kelamin_siswa;?>">
                                                <option value="Laki-Laki" <?php echo (($jns_kelamin_siswa == "Laki-Laki") ? "Selected" : "")?>>Laki-Laki</option>
                                                <option value="Perempuan" <?php echo (($jns_kelamin_siswa == "Perempuan") ? "Selected" : "")?>>Perempuan</option>
                                            </select>
                                            </td>
                                        </tr>
                                        <tr> 
                                            <td>Agama</td>
                                            <td>
                                            <select  name="agama_siswa" style="width: 260px;" value="<?php echo $agama_siswa;?>">
                                                <option value="Islam" <?php echo (($agama_siswa == "Islam") ? "Selected" : "")?>>Islam</option>
                                                <option value="Kristen" <?php echo (($agama_siswa == "Kristen") ? "Selected" : "")?>>Kristen</option>
                                                <option value="Katholik" <?php echo (($agama_siswa == "Katholik") ? "Selected" : "")?>>Katholik</option>
                                                <option value="Hindu" <?php echo (($agama_siswa == "Hindu") ? "Selected" : "")?>>Hindu</option>
                                                <option value="Buddha" <?php echo (($agama_siswa == "Buddha") ? "Selected" : "")?>>Buddha</option>
                                                <option value="Kong Hu Chu" <?php echo (($agama_siswa == "Kong Hu Chu") ? "Selected" : "")?>>Kong Hu Chu</option>
                                            </select>
                                            </td>
                                        </tr>
                                        <tr> 
                                            <td>Alamat Rumah</td>
                                            <td><textarea id="alamat_siswa" name="alamat_siswa" rows="4" cols="50"><?php echo $alamat_siswa;?></textarea></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Data Orang Tua/Wali</strong></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Data Ayah</strong></td>
                                        </tr>
                                        <tr> 
                                            <td>Nama Lengkap</td>
                                            <td><input type="text" name="nama_ayah" style="width: 260px;" value="<?php echo $nama_ayah;?>"></td>
                                        </tr>
                                        <tr> 
                                            <td>Tempat & Tanggal Lahir</td>
                                            <td><input type="text" name="tempat_lahir_ayah" style="width: 260px;" value="<?php echo $tempat_lahir_ayah;?>" placeholder="Tempat Lahir">  <input type="date" name="tgl_lahir_ayah" style="width: 260px;" value="<?php echo date('Y-m-d', strtotime($tgl_lahir_ayah)); ?>"></td>
                                        </tr>
                                        <tr> 
                                            <td>Agama</td>
                                            <td>
                                            <select  name="agama_ayah" style="width: 260px;" value="<?php echo $agama_ayah;?>">
                                                <option value="Islam" <?php echo (($agama_ayah == "Islam") ? "Selected" : "")?>>Islam</option>
                                                <option value="Kristen" <?php echo (($agama_ayah == "Kristen") ? "Selected" : "")?>>Kristen</option>
                                                <option value="Katholik" <?php echo (($agama_ayah == "Katholik") ? "Selected" : "")?>>Katholik</option>
                                                <option value="Hindu" <?php echo (($agama_ayah == "Hindu") ? "Selected" : "")?>>Hindu</option>
                                                <option value="Buddha" <?php echo (($agama_ayah == "Buddha") ? "Selected" : "")?>>Buddha</option>
                                                <option value="Kong Hu Chu" <?php echo (($agama_ayah == "Kong Hu Chu") ? "Selected" : "")?>>Kong Hu Chu</option>
                                            </select>
                                            </td>
                                        </tr>
                                        <tr> 
                                            <td>Pendidikan Terakhir</td>
                                            <td><input type="text" name="pend_ayah" style="width: 260px;" value="<?php echo $pend_ayah;?>"></td>
                                        </tr>
                                        <tr> 
                                            <td>Pekerjaan</td>
                                            <td><input type="text" name="kerja_ayah" style="width: 260px;" value="<?php echo $kerja_ayah;?>"></td>
                                        </tr>
                                        <tr> 
                                            <td>Alamat Rumah</td>
                                            <td><textarea id="alamat_ayah" name="alamat_ayah" rows="4" cols="50"><?php echo $alamat_ayah;?></textarea></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Data Ibu</strong></td>
                                        </tr>
                                        <tr> 
                                            <td>Nama Lengkap</td>
                                            <td><input type="text" name="nama_ibu" style="width: 260px;" value="<?php echo $nama_ibu;?>"></td>
                                        </tr>
                                        <tr> 
                                            <td>Tempat & Tanggal Lahir</td>
                                            <td><input type="text" name="tempat_lahir_ibu" style="width: 260px;" value="<?php echo $tempat_lahir_ibu;?>" placeholder="Tempat Lahir">  <input type="date" name="tgl_lahir_ibu" style="width: 260px;" value="<?php echo date('Y-m-d', strtotime($tgl_lahir_ibu)); ?>"></td>
                                        </tr>
                                        <tr> 
                                            <td>Agama</td>
                                            <td>
                                            <select  name="agama_ibu" style="width: 260px;" value="<?php echo $agama_ibu;?>">
                                                <option value="Islam" <?php echo (($agama_ibu == "Islam") ? "Selected" : "")?>>Islam</option>
                                                <option value="Kristen" <?php echo (($agama_ibu == "Kristen") ? "Selected" : "")?>>Kristen</option>
                                                <option value="Katholik" <?php echo (($agama_ibu == "Katholik") ? "Selected" : "")?>>Katholik</option>
                                                <option value="Hindu" <?php echo (($agama_ibu == "Hindu") ? "Selected" : "")?>>Hindu</option>
                                                <option value="Buddha" <?php echo (($agama_ibu == "Buddha") ? "Selected" : "")?>>Buddha</option>
                                                <option value="Kong Hu Chu" <?php echo (($agama_ibu == "Kong Hu Chu") ? "Selected" : "")?>>Kong Hu Chu</option>
                                            </select>
                                            </td>
                                        </tr>
                                        <tr> 
                                            <td>Pendidikan Terakhir</td>
                                            <td><input type="text" name="pend_ibu" style="width: 260px;" value="<?php echo $pend_ibu;?>"></td>
                                        </tr>
                                        <tr> 
                                            <td>Pekerjaan</td>
                                            <td><input type="text" name="kerja_ibu" style="width: 260px;" value="<?php echo $kerja_ibu;?>"></td>
                                        </tr>
                                        <tr> 
                                            <td>Alamat Rumah</td>
                                            <td><textarea id="alamat_ibu" name="alamat_ibu" rows="4" cols="50"><?php echo $alamat_ibu; ?></textarea></td>
                                        </tr>
                                        <!-- Agar variabel $id terbaca dalam query UPDATE, maka perlu untuk menambahkan $_GET['id'] di button Update -->
                                        <tr>
                                            <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                                            <td><input type="submit" name="update" value="Update"></td>
                                        </tr>
                                    </table>
                                    <div class="column picture">
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