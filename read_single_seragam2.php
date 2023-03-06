<?php
include_once 'koneksi.php';
$id=$_POST['id'];
$sql="SELECT tingkat, jns_pakaian, ukuran, harga FROM tbl_lihat_seragam WHERE id=$id";
$result = mysqli_query($conn, $sql);
while($res = mysqli_fetch_array($result))
{
    $tingkat = $res['tingkat'];
    $jns_pakaian = $res['jns_pakaian'];
    $ukuran = $res['ukuran'];
    $harga = $res['harga'];
}

$account_arr=array(
    "tingkat" => $tingkat,
    "jns_pakaian" => $jns_pakaian,
    "ukuran" => $ukuran,
    "harga" => $harga
);

// make it json format
print_r(json_encode($account_arr));
?>