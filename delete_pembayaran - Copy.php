<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])){
    header('Location: login_kasir.php');
}
?>

<?php
//termasuk file koneksi database
include("koneksi.php");
print_r($_POST);
echo "test";
if(isset($_POST['delete_bukti'])){
    
    $id = $_POST['delete'];
    $bukti = $_POST['del_bukti'];
    $sql="DELETE FROM tbl_lihat_pembayaran WHERE id='$id'";
    //$result=mysqli_query($conn, $sql);

    if($result){
        
        unlink("image_upload/".$bukti);
        $_SESSION['status'] = "Gambar telah dihapus";
        header("Location: index_kasir.php");
    }
    else{
        $_SESSION['status'] = "Gambar tidak terhapus";
        header("Location: index_kasir.php"); 
    }
}

//menuju ke halaman index_kasir.php
header("Location: index_kasir.php");
?>