<?php
include_once 'koneksi.php';
$nis=$_POST['nis'];
//$nis='201802001';
$sql="SELECT nama, kelas, paket_buku, id_buku, biaya FROM v_02 WHERE nis=$nis";
$result = mysqli_query($conn, $sql);
while($res = mysqli_fetch_array($result))
{
    $nama = $res['nama'];
    $kelas = $res['kelas'];
    $paket_buku = $res['paket_buku'];
    $id_buku = $res['id_buku'];
    $biaya = $res['biaya'];
}

$account_arr=array(
    "nama" => $nama,
    "kelas" => $kelas,
    "paket_buku" => $paket_buku,
    "id_buku" => $id_buku,
    "biaya" => $biaya
);

// make it json format
print_r(json_encode($account_arr));
?>