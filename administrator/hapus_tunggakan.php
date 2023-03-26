<?php 
// koneksi database
include '../koneksi.php';

$id_bayar = $_GET['id_bayar'];


// menghapus data dari database
mysqli_query($koneksi,"delete from tunggakan where id_bayar='$id_bayar'");


header("location:tunggakan.php?info=hapus");

?>