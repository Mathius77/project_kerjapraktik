<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])){
    header('Location: login_kasir.php');
}
?>

<?php
//termasuk file koneksi database
include("koneksi.php");

//mendapatkan id dalam data dari URL
$id = $_GET['id'];
$bukti = $_GET['bukti'];

//menghapus baris yang diinginkan dari tabel
$result=mysqli_query($conn, "DELETE FROM tbl_lihat_pembayaran WHERE id=$id");

unlink($bukti);
//menuju ke halaman index_kasir.php
header("Location: index_kasir.php");
?>