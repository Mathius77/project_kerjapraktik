<?php
include_once 'koneksi.php';
$nis=$_POST['nis'];
$sql="SELECT nama, kelas, biaya, uang_kegiatan, ekstrakurikuler FROM v_01 WHERE nis=$nis";
$result = mysqli_query($conn, $sql);
while($res = mysqli_fetch_array($result))
{
    $nama = $res['nama'];
    $kelas = $res['kelas'];
    $biaya = $res['biaya'];
    $uang_kegiatan = $res['uang_kegiatan'];
    $ekstrakurikuler = $res['ekstrakurikuler'];
    $totalbiaya = $res['biaya'] + $res['uang_kegiatan'] + $res['ekstrakurikuler'];
}

$account_arr=array(
    "nama" => $nama,
    "kelas" => $kelas,
    "biaya"=> $biaya,
    "uang_kegiatan"=> $uang_kegiatan,
    "ekstrakurikuler"=> $ekstrakurikuler,
    "totalbiaya" => $totalbiaya     
);

// make it json format
print_r(json_encode($account_arr));
?>