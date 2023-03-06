<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Laporan</title>

    <!-- Hide Button ketika di print -->
    <style>
         @media print {
               .noprint {
                  visibility: hidden;
               }
            }
    </style>
</head>
<body>
        <div class = "noprint">
        <a href="#" class="btn btn-success btn-icon-split" onclick="window.print()">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
        <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
        <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
        </svg>
        <span class="text">Cetak Laporan</span>
        </a>
        </div>
<?php
//termasuk file koneksi database
include_once("koneksi.php");

//mengecek field yang kosong
if(isset($_POST['submit'])){
    //print_r($_POST);
    $tgl_awal = $_POST['tgl_awal'];
    $tgl_akhir = $_POST['tgl_akhir'];

    if(empty($tgl_awal) || empty($tgl_akhir)){
        if(empty($tgl_awal)){
            echo "<font color='red'>Tanggal Awal masih kosong.</font><br/>";
        }

        if(empty($tgl_akhir)){
            echo "<font color='red'>Tanggal Akhir masih kosong.</font><br/>";
        }

    } else{
        // jika semua field terisi, maka masukkan data ke database
        $result = mysqli_query($conn, "SELECT * FROM view_rekap_uang_sekolah WHERE tgl_bayar >'".$tgl_awal."' AND tipe='SD'");
        //print_r($result); die;  
        
        echo '<h5 style="text-align:center;">Rekap Uang Sekolah Pamardi Yuwana Bhakti</h5>';
        echo '</br> Mulai Tanggal : '.$tgl_awal;
        echo '</br> Sampai Tanggal : '.$tgl_akhir;
        echo '</br></br>';
        echo '<table class="" id="dataTable" width="100%" cellspacing="0" border="1">
        <thead align="center">
        <tr>
            <th>No.</th>                                           
            <th>NIS</th>
            <th>Nama Lengkap</th>
            <th>Kelas</th>
            <th>Tingkatan</th>
            <th>Bulan Pembayaran</th>
            <th>Uang Sekolah</th>
            <th>Uang Kegiatan</th>
            <th>Ekstrakurikuler</th>                                           
            <th>Tanggal Pembayaran</th>
            <th>Total Pembayaran</th>
        </tr>
    </thead>
    <tbody align="center">';


$total_uangsekolah = 0;
$total_uangkegiatan = 0;
$total_ekstrakurikuler = 0;
$total_pembayaran = 0;
while($res = mysqli_fetch_array($result)){
$total_uangsekolah = $total_uangsekolah + $res['uang_sekolah'];
$total_uangkegiatan = $total_uangkegiatan + $res['uang_kegiatan'];
$total_ekstrakurikuler = $total_ekstrakurikuler + $res['ekstrakurikuler'];
$total_pembayaran = $total_pembayaran + $res['total_bayar'];
echo "<tr>";
echo "<td>".$noUrut++."</td>";
echo "<td>".$res['nis']."</td>";
echo "<td>".$res['nama']."</td>";
echo "<td>".$res['kelas']."</td>";
echo "<td>".$res['tipe']."</td>";
echo "<td>".$res['bln_bayar']."</td>";
echo "<td>Rp ".$res['uang_sekolah']."</td>";
echo "<td>Rp ".$res['uang_kegiatan']."</td>";
echo "<td>Rp ".$res['ekstrakurikuler']."</td>";            
echo "<td>".$res['tgl_bayar']."</td>";
echo "<td>Rp ".$res['total_bayar']."</td>";
}
echo "<tr>";
echo "<td></td>";
echo "<td colspan='2' style='text-align:left;'><strong>Total:</strong></td>";
echo "<td>-</td>";
echo "<td>-</td>";
echo "<td>-</td>";
echo "<td><strong>Rp ".$total_uangsekolah.".00</strong></td>";
echo "<td><strong>Rp ".$total_uangkegiatan.".00</strong></td>";
echo "<td><strong>Rp ".$total_ekstrakurikuler.".00</strong></td>";
echo "<td>-</td>";
echo "<td><strong>Rp ".$total_pembayaran.".00</strong></td>";
echo "</tr>";
echo '
</tbody>
</table>';
}
}
?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
