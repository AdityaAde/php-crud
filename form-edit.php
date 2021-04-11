<?php
include 'koneksi.php';
$id         = $_GET['id_barang'];
$produk     = mysqli_query($koneksi, "select * from produk where id_barang='$id' ");
$row        = mysqli_fetch_array($produk);



?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form method="post" action="update.php">
            <input type="hidden" value="<?php echo $row['id_barang'];?>" name="id_barang">
            <table>
                <tr><td>NAMA PRODUK</td><td><input type="text" value="<?php echo $row['nama_produk'];?>" name="nama_produk"></td></tr>
                <tr><td>KETERANGAN</td><td><input type="text" value="<?php echo $row['keterangan'];?>" name="keterangan"></td></tr>
                <tr><td>HARGA</td><td><input type="text" value="<?php echo $row['harga'];?>" name="harga"></td></tr>
                <tr><td>JUMLAH</td><td><input type="text" value="<?php echo $row['jumlah'];?>" name="jumlah"></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                        <a href="index.php">Kembali</a></td></tr>
            </table>
        </form>
    </body>
</html>