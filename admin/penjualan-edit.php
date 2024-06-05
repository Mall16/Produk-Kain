<?php
include '../koneksi.php';
$id = $_GET['id'];
if(!isset($_GET['id'])) {
  echo "
    <script>
      alert('Tidak ada ID yang Terdeteksi');
      window.location = 'categories.php';
    </script>
  ";
}

$sql = "SELECT * FROM tb_penjualan WHERE id_penjualan = '$id'";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($result);

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
    <title>Admin Web</title>
    <link rel="stylesheet" href="style.css">
    <style>
    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    form {
        display: block;
    }
    
    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }
    
    input {
        margin-bottom: 15px;
        padding: 10px;
        border: 1px solid #000;
        border-radius: 4px;
        box-sizing: border-box;
        width: 100%;
    }
    
    button {
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }
    
    button:hover {
        background-color: #0056b3;
    }
    </style>
</head>
<body>
    <?php
        include 'nav.php';
    ?>
    <div class="container">
        <h2>Edit Data Penjualan</h2>
        <form action="penjualan-proses.php" method="post">
        <input type="hidden" name="id" value="<?= $data['id_penjualan'] ?>">
            <label for="name">Nama Kain :</label>
            <input type="text" id="name" name="name" value="<?= $data['nama_kain'] ?>" required>

            <label for="user">Nama Pembeli :</label>
            <input type="text" id="user" name="user" value="<?= $data['user_name'] ?>" required>

            <label for="jumlah">Jumlah :</label>
            <input type="number" id="jumlah" name="jumlah" value="<?= $data['jml_barang'] ?>" required>

            <button type="submit" name="edit">Simpan</button>
        </form>
    </div>
</body>
</html>
