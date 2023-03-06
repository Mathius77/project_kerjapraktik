<?php
include_once 'koneksi.php';
$nis=$_POST['nis'];
$sql="SELECT nama, thn_ajar FROM tbl_siswa WHERE nis=$nis";
$result = mysqli_query($conn, $sql);
while($res = mysqli_fetch_array($result))
{
    $nama = $res['nama'];
    $thn_ajar = $res['thn_ajar'];
}

$account_arr=array(
    "nama" => $nama,
    "thn_ajar" => $thn_ajar,   
);

// make it json format
print_r(json_encode($account_arr));
?>