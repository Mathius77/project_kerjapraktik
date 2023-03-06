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
            padding-top: 50px;
            padding-left: 200px;
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
                    <h1 class="h3 mb-2 text-gray-800">Edit Pembayaran SPP</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Edit Pembayaran SPP</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <?php
                            //termasuk file koneksi database
                            include_once("koneksi.php");

                            //solusi untuk undefined index id adalah dengan menambahkan isset
                            if(isset($_POST['update'])){
                            $id = (isset($_POST['id']) ? $_POST['id'] : '');
                            $nis = $_POST['nis'];
                            $nama = $_POST['nama'];
                            $kelas = $_POST['kelas'];
                            $biaya = $_POST['biaya'];
                            $uang_kegiatan = $_POST['uang_kegiatan'];
                            $ekstrakurikuler = $_POST['ekstrakurikuler'];
                            $total_bayar = $_POST['total_bayar'];
                            $tgl_bayar = $_POST['tgl_bayar'];
                            $bln_bayar = $_POST['bln_bayar'];
                            $bukti = $_POST['bukti'];
                            $status = $_POST['status'];

                            $target_dir = "image_upload/";
                            //print_r($_FILES);
                            //echo $bukti;
                            $bukti_name = $_FILES['bukti_baru']['name'];
                            $bukti_extn = pathinfo($bukti_name, PATHINFO_EXTENSION);
                            //echo $bukti_extn;
                            //$nama_bukti = $nis.$tgl_bayar.".".$bukti_extn;
                            $nama_bukti = $nis.$tgl_bayar.".".$bukti_extn;
                            //echo $nama_bukti;
                            $target_file = $target_dir . $nama_bukti;
                            $uploadOk = 1;
                            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                            $check = getimagesize($_FILES["bukti_baru"]["tmp_name"]);
                            if($check !== false) {
                              echo "File is an image - " . $check["mime"] . ".";
                              $uploadOk = 1;
                            } else {
                              echo "File is not an image.";
                              $uploadOk = 0;
                            }
                                                        
                            // Check if $uploadOk is set to 0 by an error
                            if ($uploadOk == 0) {
                                echo "Sorry, your file was not uploaded.";
                            // if everything is ok, try to upload file
                            }


                            //mengecek field yang kosong
                            if(empty($nis) || empty($biaya) || empty($uang_kegiatan) || empty($ekstrakurikuler) || empty($total_bayar) || empty($tgl_bayar) || empty($bln_bayar) || empty($bukti) || empty($status)){
                                    if(empty($nis)){
                                        echo "<font color='red'>NIS masih kosong.</font><br/>";
                                    }

                                    if(empty($biaya)){
                                        echo "<font color='red'>Biaya SPP masih kosong.</font><br/>";
                                    }

                                    if(empty($uang_kegiatan)){
                                        echo "<font color='red'>Uang Kegiatan masih kosong.</font><br/>";
                                    }

                                    if(empty($ekstrakurikuler)){
                                        echo "<font color='red'>Ekstrakurikuler masih kosong.</font><br/>";
                                    }

                                    if(empty($total_bayar)){
                                        echo "<font color='red'>Total Bayar masih kosong.</font><br/>";
                                    }

                                    if(empty($tgl_bayar)){
                                        echo "<font color='red'>Tanggal Pembayaran masih kosong.</font><br/>";
                                    }

                                    if(empty($bln_bayar)){
                                        echo "<font color='red'>Bulan Pembayaran masih kosong.</font><br/>";
                                    }

                                    if(empty($status)){
                                        echo "<font color='red'>Status Pembayaran masih kosong.</font><br/>";
                                    }
                                    } else{
                                        //melakukan pengkodisian apakah gambar di ubah atau tidak pada saat melakukan update.
                                        if($bukti_name==''){
                                            $result = mysqli_query($conn, "UPDATE tbl_lihat_pembayaran SET nis='$nis', nama='$nama', kelas='$kelas', biaya='$biaya', uang_kegiatan='$uang_kegiatan', ekstrakurikuler='$ekstrakurikuler', total_bayar='$total_bayar', tgl_bayar='$tgl_bayar', bln_bayar='$bln_bayar', status='$status' WHERE id=$id");
                                        }
                                        else{
                                            $result = mysqli_query($conn, "UPDATE tbl_lihat_pembayaran SET nis='$nis', nama='$nama', kelas='$kelas', biaya='$biaya', uang_kegiatan='$uang_kegiatan', ekstrakurikuler='$ekstrakurikuler', total_bayar='$total_bayar', tgl_bayar='$tgl_bayar', bln_bayar='$bln_bayar', bukti='$target_file', status='$status' WHERE id=$id");
                                            //$result = mysqli_query($conn, "UPDATE tbl_lihat_pembayaran SET total_bayar=200000 where id=1");                        
                                            //menuju ke halaman index_kasir.php
                                            //pengganti header:('Location:...')
                                            if ($result){
                                                unlink($bukti);
                                                if (move_uploaded_file($_FILES["bukti_baru"]["tmp_name"], $target_file)) {
                                                    echo "The file ". htmlspecialchars( basename( $_FILES["bukti_baru"]["name"])). " has been uploaded.";
                                                } else {
                                                    echo "Sorry, there was an error uploading your file.";
                                                }
                                            }
                                        }
                                        //memanggil $bukti_name dengan menggunakan alert
                                        //echo "<script>alert('$bukti_name');</script>";  
                                        echo"<script> window.location.href='index_kasir.php';</script>";
                                    }
                                    }
                                    ?>
                                    <?php
                                        //mendapatkan id dari URL
                                        //solusi untuk undefined index id adalah dengan menambahkan isset
                                        $id = (isset($_GET['id']) ? $_GET['id'] : '');

                                        //select data yang terkait dengan id di tabel produk
                                        $result = mysqli_query($conn, "SELECT * FROM tbl_lihat_pembayaran WHERE id='$id'");

                                        while($res = mysqli_fetch_array($result))
                                        {
                                            $nis = $res['nis'];
                                            $nama = $res['nama'];
                                            $kelas = $res['kelas'];
                                            $biaya = $res['biaya'];
                                            $uang_kegiatan = $res['uang_kegiatan'];
                                            $ekstrakurikuler = $res['ekstrakurikuler'];
                                            $total_bayar = $res['total_bayar'];
                                            $tgl_bayar = $res['tgl_bayar'];
                                            $bln_bayar = $res['bln_bayar'];
                                            $bukti = $res['bukti'];
                                            $status = $res['status'];
                                        }
                                    ?>

                                    <a href="index_kasir.php" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-600">
                                            <i class="fas fa-arrow-left"></i>
                                        </span>
                                        <span class="text">Kembali</span>
                                    </a>

                            <form action="edit_pembayaran.php" method="post" name="form1" enctype="multipart/form-data">
                                    <table width="25%" border="0" cellpadding=10 class="column">
                                        <tr> 
                                            <td>NIS</td>
                                            <td><input readonly type="number" name="nis" style="width: 260px;" value="<?php echo $nis;?>"></td>
                                        </tr>
                                        <tr> 
                                            <td>Nama Lengkap</td>
                                            <td><input readonly type="text" name="nama" id="nama" style="width: 260px;" value="<?php echo $nama;?>"></td>
                                        </tr>
                                        <tr> 
                                            <td>Kelas</td>
                                            <td><input readonly type="text" name="kelas" id="kelas" style="width: 260px;" value="<?php echo $kelas;?>"></td>
                                        </tr>
                                        <tr> 
                                            <td>Biaya SPP</td>
                                            <td><input readonly type="text" name="biaya" id="biaya" style="width: 260px;" value="<?php echo $biaya;?>"></td>
                                        </tr>
                                        <tr> 
                                            <td>Uang Kegiatan</td>
                                            <td><input readonly type="text" name="uang_kegiatan" id="uang_kegiatan" style="width: 260px;" value="<?php echo $uang_kegiatan;?>"></td>
                                        </tr>
                                        <tr> 
                                            <td>Ekstrakurikuler</td>
                                            <td><input readonly type="text" name="ekstrakurikuler" id="ekstrakurikuler" style="width: 260px;" value="<?php echo $ekstrakurikuler;?>"></td>
                                        </tr>
                                        <tr> 
                                            <td>Total Pembayaran</td>
                                            <td><input readonly type="number" name="total_bayar" style="width: 260px;" value="<?php echo $total_bayar;?>"></td>
                                        </tr>
                                        <tr> 
                                            <td>Tanggal Pembayaran</td>
                                            <td><input type="date" name="tgl_bayar" style="width: 260px;" value="<?php echo date('Y-m-d', strtotime($tgl_bayar)); ?>"></td>
                                        </tr>
                                        <tr> 
                                            <td>Bulan Pembayaran</td>
                                            <td>
                                            <select  name="bln_bayar" style="width: 260px;">
                                                <option value="Januari" <?php echo (($bln_bayar == "Januari") ? "Selected" : "")?>>Januari</option>
                                                <option value="Februari" <?php echo (($bln_bayar == "Februari") ? "Selected" : "")?>>Februari</option>
                                                <option value="Maret" <?php echo (($bln_bayar == "Maret") ? "Selected" : "")?>>Maret</option>
                                                <option value="April" <?php echo (($bln_bayar == "April") ? "Selected" : "")?>>April</option>
                                                <option value="Mei" <?php echo (($bln_bayar == "Mei") ? "Selected" : "")?>>Mei</option>
                                                <option value="Juni" <?php echo (($bln_bayar == "Juni") ? "Selected" : "")?>>Juni</option>
                                                <option value="Juli" <?php echo (($bln_bayar == "Juli") ? "Selected" : "")?>>Juli</option>
                                                <option value="Agustus" <?php echo (($bln_bayar == "Agustus") ? "Selected" : "")?>>Agustus</option>
                                                <option value="September" <?php echo (($bln_bayar == "September") ? "Selected" : "")?>>September</option>
                                                <option value="Oktober" <?php echo (($bln_bayar == "Oktober") ? "Selected" : "")?>>Oktober</option>
                                                <option value="November" <?php echo (($bln_bayar == "November") ? "Selected" : "")?>>November</option>
                                                <option value="Desember" <?php echo (($bln_bayar == "Desember") ? "Selected" : "")?>>Desember</option>
                                            </select>
                                            </td>
                                        </tr>
                                        <tr> 
                                            <td>Bukti Pembayaran</td>
                                            <td><input hidden type="text" name="bukti" style="width: 260px;" value="<?php echo $bukti;?>"><img src="<?php echo $bukti;?>"></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><input type="file" name="bukti_baru" id="bukti_baru" style="width: 260px;"></td>
                                        </tr>
                                        <tr> 
                                            <td>Status</td>
                                            <td>
                                            <select  name="status" style="width: 260px;" value="<?php echo $status;?>">
                                                <option value="Lunas" <?php echo (($status == "Lunas") ? "Selected" : "")?>>Lunas</option>
                                                <option value="Belum Lunas" <?php echo (($status == "Belum Lunas") ? "Selected" : "")?>>Belum Lunas</option>
                                            </select>
                                            </td>
                                        </tr>
                                        <!-- Agar variabel $id terbaca dalam query UPDATE, maka perlu untuk menambahkan $_GET['id'] di button Update -->
                                        <tr>
                                            <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                                            <td><input type="submit" name="update" value="Update"></td>
                                        </tr>
                                    </table>
                                    <div class="column picture">
                                    <table>
                                        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="200" height="200" viewBox="0 0 598.11121 535.11426" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M304.29593,302.51687a4.59436,4.59436,0,0,0-3.18166,5.65638l76.71619,273.97819a4.59431,4.59431,0,0,0,5.65637,3.1816l282.81481-79.19052a4.59437,4.59437,0,0,0,3.18162-5.65631L592.76707,226.508a4.59434,4.59434,0,0,0-5.65633-3.18168Z" transform="translate(-300.94439 -182.44287)" fill="#e6e6e6"/><path d="M387.04091,572.39573l269.50474-75.46358L583.55634,236.26384,314.0516,311.72742Z" transform="translate(-300.94439 -182.44287)" fill="#fff"/><path d="M349.68366,346.53414c-1.79809.50348-2.53942,3.49029-1.65249,6.6578s3.07152,5.335,4.86961,4.83156L475.8179,323.60568c1.79808-.50348,2.53941-3.4903,1.65248-6.6578s-3.07151-5.335-4.8696-4.83156Z" transform="translate(-300.94439 -182.44287)" fill="#e6e6e6"/><path d="M359.58247,381.886c-1.79808.50348-2.53941,3.49029-1.65248,6.6578s3.07151,5.335,4.8696,4.83156l122.91712-34.41782c1.79809-.50348,2.53942-3.49029,1.65249-6.6578s-3.07152-5.335-4.86961-4.83156Z" transform="translate(-300.94439 -182.44287)" fill="#e6e6e6"/><path d="M369.36719,416.83036c-1.79809.50348-2.53942,3.49026-1.65249,6.6578s3.07152,5.335,4.86961,4.83156L495.50143,393.9019c1.79808-.50348,2.53942-3.49027,1.65248-6.6578s-3.07151-5.335-4.8696-4.83156Z" transform="translate(-300.94439 -182.44287)" fill="#e6e6e6"/><path d="M379.266,452.18218c-1.79809.50348-2.53943,3.49027-1.65249,6.6578s3.07151,5.335,4.8696,4.83156l122.91712-34.41782c1.79809-.50348,2.53943-3.49026,1.65249-6.6578s-3.07152-5.335-4.86961-4.83156Z" transform="translate(-300.94439 -182.44287)" fill="#e6e6e6"/><path d="M534.9799,295.05735a5.96564,5.96564,0,1,0,3.21712,11.48936l22.97873-6.43423a5.96564,5.96564,0,0,0-3.21712-11.48937Z" transform="translate(-300.94439 -182.44287)" fill="#e6e6e6"/><path d="M544.68685,329.724a5.96564,5.96564,0,1,0,3.21712,11.48936l22.97872-6.43423a5.96564,5.96564,0,0,0-3.21712-11.48937Z" transform="translate(-300.94439 -182.44287)" fill="#e6e6e6"/><path d="M554.39379,364.39058a5.96563,5.96563,0,1,0,3.21711,11.48936l22.97873-6.43423a5.96564,5.96564,0,0,0-3.21712-11.48937Z" transform="translate(-300.94439 -182.44287)" fill="#e6e6e6"/><path d="M564.10073,399.05721a5.96564,5.96564,0,0,0,3.21712,11.48936l22.97873-6.43424a5.96564,5.96564,0,0,0-3.21712-11.48936Z" transform="translate(-300.94439 -182.44287)" fill="#e6e6e6"/><path d="M573.37484,459.14634a7.60151,7.60151,0,1,0,4.0993,14.63992l29.27976-8.19858a7.6015,7.6015,0,0,0-4.09929-14.63992h0Z" transform="translate(-300.94439 -182.44287)" fill="#6c63ff"/><rect x="382.94479" y="459.87697" width="225" height="2" transform="translate(-406.86374 -31.78243) rotate(-15.64269)" fill="#e6e6e6"/><polygon points="520.202 506.072 502.825 510.273 478.352 445.247 503.999 439.047 520.202 506.072" fill="#a0616a"/><path d="M773.78964,717.55713l-.11768-.48584a22.23326,22.23326,0,0,1,16.36792-26.80518l33.99854-8.21924,5.33618,22.07276Z" transform="translate(-300.94439 -182.44287)" fill="#2f2e41"/><polygon points="443.276 517.91 425.399 517.909 416.894 448.953 443.279 448.954 443.276 517.91" fill="#a0616a"/><path d="M748.55062,717.45361l-57.18628-.00244v-.5a22.20823,22.20823,0,0,1,22.20826-22.20752h.001l34.978.00147Z" transform="translate(-300.94439 -182.44287)" fill="#2f2e41"/><path d="M717.824,673.43319,700.46594,466.56191l71.856-13.245.28375-.05127,21.03174,13.5199-7.32031,76.13381,33.70434,118.69857-29.10218,7.65853L757.16116,559.19046,749.4357,525.714l-3.9592,43.50036L748.41573,676.492Z" transform="translate(-300.94439 -182.44287)" fill="#2f2e41"/><path d="M698.24051,471.25415l-.19011-.24067,24.83039-186.9574.0324-.24493.1748-.17516c.366-.366,9.06584-8.96295,18.01419-8.96295,1.29375,0,2.52377-.03276,3.70359-.06266,6.84753-.178,12.25677-.32041,18.68527,6.10916,6.54991,6.54919,27.91987,30.46463,27.91987,63.21913,0,31.70356,2.88689,130.22765,2.91609,131.21879l.04094,1.39129-1.167-.759c-.288-.18513-29.03062-18.487-53.13652-1.47389-7.53321,5.31739-14.30064,7.18147-20.08725,7.18147C706.50924,481.49732,698.3555,471.40083,698.24051,471.25415Z" transform="translate(-300.94439 -182.44287)" fill="#6c63ff"/><circle cx="737.30161" cy="227.82042" r="35.81548" transform="translate(-319.86766 199.12975) rotate(-28.66321)" fill="#a0616a"/><path d="M682.47425,511.43267a14.66358,14.66358,0,0,0,.85079-22.46873l20.33939-47.976L677.033,445.88934,661.8012,490.69675a14.743,14.743,0,0,0,20.673,20.73592Z" transform="translate(-300.94439 -182.44287)" fill="#a0616a"/><path d="M662.82375,474.11363l6.54955-13.82749a2.693,2.693,0,0,1-.96728-1.00253c-6.11913-10.60487,30.84271-98.6722,33.30632-104.51364-.3756-3.17705-4.25577-36.84436-1.41871-48.19259,3.33974-13.359,10.19724-19.58491,22.92964-20.81814,14.04146-1.31867,17.82978,17.74932,17.86609,17.943l.01282,49.02-16.11487,56.42786-36.7518,74.97321Z" transform="translate(-300.94439 -182.44287)" fill="#6c63ff"/><path d="M741.88113,241.31379c-4.29338.55862-7.532-3.83417-9.03411-7.89482s-2.64661-8.78808-6.37942-10.98156c-5.09979-2.99674-11.62474.60754-17.45662-.38118-6.586-1.11657-10.86811-8.09643-11.20372-14.768s2.31935-13.08815,4.92436-19.23924l.90945,7.64441a15.15938,15.15938,0,0,1,6.62453-13.25057l-1.17219,11.217c.735-6.28405,7.50492-11.15334,13.69633-9.85109l-.1846,6.6835c7.60682-.90452,15.28012-1.81032,22.90947-1.12121s15.312,3.103,21.09438,8.1275c8.64957,7.51589,11.80857,19.89169,10.748,31.30129s-5.77042,22.12808-10.67915,32.48221c-1.23506,2.60513-2.9433,5.54483-5.80719,5.87668-2.57323.29818-4.92778-1.85286-5.72771-4.31671s-.4096-5.14055.06946-7.68631c.72371-3.84576,1.636-7.77663.95558-11.63028s-3.45273-7.66178-7.33739-8.13406-7.85964,3.9681-5.992,7.4069Z" transform="translate(-300.94439 -182.44287)" fill="#2f2e41"/><polygon points="597.729 535.092 339.991 535.092 339.991 532.986 598.111 532.986 597.729 535.092" fill="#3f3d56"/></svg>
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