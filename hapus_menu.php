<?php 

include('koneksi.php');

$id_buku = $_GET['id_buku'];

$hapus= mysqli_query($koneksi, "DELETE FROM produk WHERE id_buku='$id_buku'");

if($hapus)
	header('location: daftar_menu.php');
else
	echo "Hapus data gagal";

 ?>