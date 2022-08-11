<?php 
include('koneksi.php');

$id_buku = $_POST['id_buku'];
$nama_buku = $_POST['nama_buku'];
$jenis_buku = $_POST['jenis_buku'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$nama_file = $_FILES['gambar']['name'];
$source = $_FILES['gambar']['tmp_name'];
$folder = './upload/';

move_uploaded_file($source, $folder.$nama_file);
$edit = mysqli_query($koneksi, "UPDATE produk SET nama_buku='$nama_buku', jenis_buku='$jenis_buku', stok='$stok', harga='$harga', gambar='$nama_file' WHERE id_buku='$id_buku'");

if($edit)
	header('location: daftar_menu.php');
else
	echo "Edit Menu Gagal";


 ?>