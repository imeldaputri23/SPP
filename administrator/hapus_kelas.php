<?php 
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
$id_kelas = $_GET['id_kelas'];


// menghapus data dari database
mysqli_query($koneksi,"delete from kelas where id_kelas='$id_kelas'");

// mengalihkan halaman kembali ke index.php
header("location:kelas.php?info=hapus");

?>