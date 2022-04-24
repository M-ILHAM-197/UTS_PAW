<?php
include "koneksi_uts.php";
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];

$sql = "INSERT INTO tbl_ilham (id_ilham, nama_ilham, email_ilham, alamat_ilham) VALUES (null,'$nama','$email','$alamat')";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
        echo "<script>alert('Tidak berhasil tambah')</script>";
    }else{
        echo "<script>window.location='dashboard.php'</script>";
}
?>