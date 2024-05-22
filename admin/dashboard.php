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
    <title>Admin - Web</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include 'nav.php';
    ?>
    <div class="container">
        <h2>Selamat Datang </h2>
        <h3></h3>
    </div>
</body>
</html>
