<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])){
    header('Location: login_admin.php');
}
?>

<?php
//termasuk file koneksi database
include("koneksi.php");

//mendapatkan id dalam data dari URL
$id = $_GET['id'];

//menghapus baris yang diinginkan dari tabel
$result=mysqli_query($conn, "DELETE FROM tbl_login_kasir WHERE id=$id");

//menuju ke halaman index_kasir.php
header("Location: lihat_user_kasir.php");
?>