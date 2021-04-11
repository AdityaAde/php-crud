<?php
// konfigurasi database
$host       =   "localhost";
$user       =   "root";
$password   =   "";
$database   =   "fazztrack";
// perintah php untuk akses ke database
$koneksi = mysqli_connect($host, $user, $password, $database);

if ($koneksi) {
    /* echo ("datanse konej tugas"); */
} else {
    /* echo "database error"; */
}

?>