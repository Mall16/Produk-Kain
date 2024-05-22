<?php
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
        <h2>Entry Data Barang</h2>
        <form action="barang-proses.php" method="post">
            <label for="name">Nama Barang (Kain) :</label>
            <input type="text" id="name" name="name" required>

            <label for="harga">Harga /buah :</label>
            <input type="number" id="harga" name="harga" required>

            <label for="stok">Stok :</label>
            <input type="number" id="stok" name="stok" required>

            <button type="submit" name="simpan">Simpan</button>
        </form>
    </div>
</body>
</html>
