<?php
session_start();
if ($_SESSION['email'] == null) {
	header('location:../login.php');
}
include '../koneksi.php'; // Pastikan file koneksi ada dan benar

// Memeriksa apakah koneksi berhasil
if ($koneksi === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Menjalankan kueri
$sql = "SELECT * FROM tb_kain";
$result = mysqli_query($koneksi, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Web</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .tambah{
            margin-bottom: 5px;
            float: left;
            text-decoration: none;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            background-color: #007bff;
        }
        .btn-edit,
        .btn-hapus{
            text-decoration: none;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .btn-edit{
            background-color: #27ff6f;
        }
        .btn-hapus{
            background-color: #ff1111;
        }
    </style>
</head>
<body>
    <?php
        include 'nav.php';
    ?>
    <div class="container">
        <h2>Data Barang</h2>
        <a class="tambah" href="barang-input.php">Tambah</a>
        <table>
            <thead>
                <tr>
                    <th>Nama Kain</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
			if (mysqli_num_rows($result) == 0) {
                echo "
                <tr>
                    <td colspan='4' align='center'>Data Kosong</td>
                </tr>
                ";
            } else {
                while ($data = mysqli_fetch_assoc($result)) {
                    echo "
                    <tr>
                        <td>{$data['nama_kain']}</td>
                        <td>{$data['harga']}</td>
                        <td>{$data['stok']}</td>
                        <td>
                            <a class='btn-edit' href='barang-edit.php?id={$data['id_kain']}'>Edit</a> | 
                            <a class='btn-hapus' href='barang-hapus.php?id={$data['id_kain']}'>Hapus</a>
                        </td>
                    </tr>
                    ";
                }
            }
			?>
                <!-- Tambahkan baris data lainnya sesuai kebutuhan -->
            </tbody>
        </table>
    </div>
</body>
</html>
