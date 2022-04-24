<?php
include "koneksi_uts.php";

$id=$_GET['id'];

$sql="DELETE FROM tbl_ilham WHERE id_ilham=$id";
$hasil=mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "<script>alertt('Tidak dihapus')</script>";
}else{
    echo "<script>window.location='dashboard.php'</script>";
}
?>