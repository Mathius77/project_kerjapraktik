<?php
include_once 'koneksi.php';
$array_nis=$_POST['nis'];
$naik_kelas=$_POST['naik_kelas'];
for($i=0; $i<count($array_nis); $i++ ){
    $nis=substr($array_nis[$i],0,9);
    $thn_ajar=substr($array_nis[$i],10,9);
    $thn_awal=substr($array_nis[$i],10,4);
    $thn_akhir=substr($array_nis[$i],15,4);
    $thn_awal_int=intval($thn_awal);
    $thn_akhir_int=intval($thn_akhir);
    $thn_awal_baru=strval($thn_awal_int+1);
    $thn_akhir_baru=strval($thn_akhir_int+1);
    $thn_ajar_baru=$thn_awal_baru.'-'.$thn_akhir_baru;
    $kelas=substr($array_nis[$i],20);
    $kelas_int=intval($kelas);
    $kelas_baru_int=$kelas_int;
    $kelas_baru=strval($kelas_baru_int);
    if($naik_kelas[$i]=="true"){
        $sql="UPDATE tbl_siswa SET kelas='$kelas_baru', thn_ajar='$thn_ajar_baru' WHERE nis='$nis'";
        $result = mysqli_query($conn, $sql);
    }
};
//print_r(json_encode($sql));
//0123456789012345678901234567890123456789
//201801001-2018-2019-4
?>