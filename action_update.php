<?php
include "koneksi_uts.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];

$sql = "UPDATE tbl_ilham SET nama_ilham = '$nama', email_ilham = '$email', alamat_ilham = '$alamat' where id_ilham = '$id'";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "<script>Tidak berhasil diupdate</script>";
}else{
    echo "<script>window.location='dashboard.php'</script>";
}
?>