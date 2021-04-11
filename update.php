<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id_barang       = $_POST['id_barang'];
$nama_produk     = $_POST['nama_produk'];
$keterangan      = $_POST['keterangan'];
$harga           = $_POST['harga'];
$jumlah          = $_POST['jumlah'];
// query SQL untuk insert data
$query="UPDATE produk SET nama_produk='$nama_produk',keterangan='$keterangan',harga='$harga',jumlah='$jumlah'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>