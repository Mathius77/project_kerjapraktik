<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Rekap Uang Sekolah SMP</title>

    <!-- Hide Button ketika di print -->
    <style>
         @media print {
               .noprint {
                  visibility: hidden;
               }
            }
            .kata{
                padding-left: 20%;
            }
    </style>
    <style type= "text/css">
        body{
            font-family: Arial;
            background-color: #fff;
        }
        .kopsurat{
            width: 800px;
            margin: 0 auto;
            background-color: #fff;
            height: 200px;
            padding: 20px;
        }
        .tabel{
            border-bottom: 7px solid #000;
            padding: 20px;
            width: 100%;
        }
        .tengah{
            text-align: center;
            line-height: 7px;
        }
        .gambar{
            text-align: center;
        }
     </style >
     <style>
    * {
    box-sizing: border-box;
    }

    /* Create two equal columns that floats next to each other */
    .column_left {
    float: left;
    width: 50%;
    padding: 30px;
    padding-left: 10%;
    height: 300px; /* Should be removed. Only for demonstration */
    }

    .column_right {
    float: left;
    width: 50%;
    padding: 30px;
    padding-left: 15%;
    height: 300px; /* Should be removed. Only for demonstration */
    }

    /* Clear floats after the columns */
    .row:after {
    content: "";
    display: table;
    clear: both;
    }
</style>
</head>
<body>
<?php
    function tanggal_indonesia($tanggal){
        $bulan = array (
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
        );
        
        $pecahkan = explode('-', $tanggal);
        
        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun
         
        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }
    ?>
        <div class = "noprint">
        <a href="#" class="btn btn-success btn-icon-split" onclick="window.print()">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
        <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
        <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
        </svg>
        <span class="text">Cetak Laporan</span>
        </a>
        </div>
        <div class="kopsurat">
            <table class="tabel">
                <tr>
                    <td class="gambar"><img src="asset/logo_pyb.png" width="130px"></td>
                    <td class="tengah">
                        <h5><b>YAYASAN PENDIDIKAN<b></h5>
                        <h3><b>PAMARDI YUWANA BHAKTI</b></h3>
                        <h6>Jl. Cendrawasih, Bumi Makmur, Pondok Gede, Bekasi</h6>
                        <h6>Phone/Fax : (021) 8485241</h6>
                    </td>
                </tr>
            </table>
        </div>
<?php
//termasuk file koneksi database
include_once("koneksi.php");

//mengecek field yang kosong
if(isset($_POST['submit'])){
    //print_r($_POST);
    $tgl_awal = $_POST['tgl_awal'];

    if(empty($tgl_awal)){
        if(empty($tgl_awal)){
            echo "<font color='red'>Tanggal Awal masih kosong.</font><br/>";
        }

    } else{
        // jika semua field terisi, maka masukkan data ke database
        $result = mysqli_query($conn, "SELECT SUM(a.biaya) AS total_uang_sekolah, SUM(a.uang_kegiatan) AS total_uang_kegiatan, SUM(a.ekstrakurikuler) AS total_ekstrakurikuler FROM tbl_lihat_pembayaran a INNER JOIN tbl_tipe_kelas b ON a.kelas=b.kelas WHERE tgl_bayar='".$tgl_awal."' AND tipe='SMP'");
        //print_r($result); die;  
        $res = mysqli_fetch_array($result);
        $total = $res['total_uang_sekolah'] + $res['total_uang_kegiatan'] + $res['total_ekstrakurikuler'];
        //print_r($res); die;
        echo '<h5 style="text-align:center;">Rekap Uang Sekolah SMP Pamardi Yuwana Bhakti</h5>';
        echo '</br><p class=kata>Tanggal : '.$tgl_awal;
        echo '</p>';
        echo '<table class="" id="dataTable" width="60%" cellspacing="0" border="1" align="center">
        <thead align="center">
        <tr>
            <th>KETERANGAN</th>                                           
            <th style="width:30%">Rp.</th>
        </tr>
        </thead>
        <tbody align="left">
        <tr>
            <td>Uang Sekolah SMP</td>
            <td align="right">'.$res['total_uang_sekolah'].'</td>
        </tr>
        <tr>
            <td>Uang Kegiatan</td>
            <td align="right">'.$res['total_uang_kegiatan'].'</td>
        </tr>
        <tr>
            <td>Uang Ekstrakurikuler</td>
            <td align="right">'.$res['total_ekstrakurikuler'].'</td>
        </tr>
        <tr>
            <td><strong>Jumlah:</strong></td>
            <td align="right"><strong>'.$total.'.00</strong></td>
        </tr>
        ';
    
echo '
</tbody>
</table>
</br><p class=kata><strong>Uang Sekolah SMP yang disetor = Rp '.$total.'.00</strong></p>';
}
}
?>

</br></br></br>
<div class="row">
  <div class="column_left" style="background-color:#fff;">
    </br></br>
    <p>Mengetahui,</p>
    </br></br></br>
    <p><u>St. Widiyanto, S.E.</u></p>
    <p><b>Ketua</b></p>
  </div>
  <div class="column_right" style="background-color:#fff;">
    <p>Bekasi, <?php echo tanggal_indonesia(date('Y-m-d'));?></p>
    <p>Yayasan Pend. Pamardi Yuwana Bhakti</p>
    </br></br></br>
    <p><u>Cecilia Simar Chandra</u></p>
    <p><b>Bendahara</b></p>
  </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
