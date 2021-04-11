<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h2>List Produk</h2>

        <form method="post" action="simpan.php">
            <table>
                <tr><td>NAMA PRODUK</td><td><input type="text" name="nama_produk"></td></tr>
                <tr><td>KETERANGAN</td><td><input type="text" name="keterangan"></td></tr>        
                <tr><td>HARGA</td><td><input type="text" name="harga"></td></tr>
                <tr><td>JUMLAH</td><td><input type="text" name="jumlah"></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>
            </table>
        </form>


        <table border="1">
        <tr><th>NO</th><th>NAMA PRODUK</th><th>KETERANGAN</th><th>HARGA</th><th>JUMLAH</th><th>ACTION</th></tr>
        <?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'fazztrack'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT id_barang, nama_produk, keterangan, jumlah, harga 
		FROM produk';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

/* echo '<table>
		<thead>
			<tr>
				<th>ID PRODUK</th>
				<th>NAMA BARANG</th>
				<th>KETERANGAN</th>
				<th>HARGA</th>
                <th>JUMLAH</th>
         
			</tr>
		</thead>
		<tbody>'; */
		
while ($row = mysqli_fetch_array($query))
{
	echo '<tr>
			<td>'.$row['id_barang'].'</td>
			<td>'.$row['nama_produk'].'</td>
            <td>'.$row['keterangan'].'</td>
            <td>'.$row['harga'].'</td>
            <td>'.$row['jumlah'].'</td>	   
            <td>
            <a href="form-edit.php?id_barang=$row[id_barang]">Edit</a>
            <a href="delete.php?id_barang=$row[id_barang]">Delete</a>
		</tr>';
}
echo '
	</tbody>
</table>';



mysqli_free_result($query);



mysqli_close($conn);

?>

        </table>

    </body>
</html>