<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form method="post" action="simpan.php">
            <table>
            <tr><td>NAMA PRODUK</td><td><input type="text" onkeyup="isi_otomatis()" name="nama_produk"></td></tr>
                <tr><td>KETERANGAN</td><td><input type="text" name="keterangan"></td></tr>        
                <tr><td>HARGA</td><td><input type="text" name="harga"></td></tr>
                <tr><td>JUMLAH</td><td><input type="text" name="jumlah"></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>
            </table>
        </form>
    </body>
</html>