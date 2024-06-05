<?php
include '../koneksi.php';

// Mengambil total data dari tb_kain
$queryKain = "SELECT COUNT(*) as total FROM tb_kain";
$resultKain = mysqli_query($koneksi, $queryKain);
$totalKain = mysqli_fetch_assoc($resultKain)['total'];

// Mengambil total data dari tb_penjualan
$queryPenjualan = "SELECT COUNT(*) as total FROM tb_penjualan";
$resultPenjualan = mysqli_query($koneksi, $queryPenjualan);
$totalPenjualan = mysqli_fetch_assoc($resultPenjualan)['total'];

session_start();
if ($_SESSION['email'] == null) {
	header('location:../login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Web</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .widget {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .widget h3 {
            margin-top: 0;
        }

        .widget p {
            margin: 5px 0;
            color: #666;
        }
    </style>
</head>
<body>
    <?php
        include 'nav.php';
    ?>
    <div class="container">
        <h2>Selamat Datang </h2>
        <div class="widget">
            <h3>Data Kain</h3>
            <p>Total Data: <?php echo $totalKain; ?></p>
        </div>
        <div class="widget">
            <h3>Data Penjualan</h3>
            <p>Total Data: <?php echo $totalPenjualan; ?></p>
        </div>
    </div>
</body>
</html>
