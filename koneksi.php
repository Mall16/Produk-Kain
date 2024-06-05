<?php 
// Aktifkan error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = 'localhost';
$username = 'root';
$password = ''; // jika tidak ada password, dikosongkan saja
$database = 'penjualan_kain';

// membuat koneksi
$koneksi = mysqli_connect($servername, $username, $password, $database);

// mengecek koneksi
if(!$koneksi) {
    die('Connection Failed: ' . mysqli_connect_error());
}
?>