<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Toko Kain</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="assets/logo.svg" alt="" width="3%">
            <h1>Toko Kain</h1>
        </div>
        <h2>Register</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="password">New Password:</label>
                <input type="password" id="password" name="password">
            </div>
            <div class="form-group">
                <input type="submit" value="Register">
                <p>Sudah Memiliki Akun? <a href="login.php">Login</a></p>
            </div>

            <?php 
include 'koneksi.php';

if($_POST) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO tb_user VALUES(NULL, '$email', '$password', '$username')";

    if(empty($email) || empty($username) || empty($password)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'register.php';
            </script>
        ";
    }elseif(mysqli_query($koneksi, $sql)) {
        echo "  
            <script>
                alert('Registrasi Berhasil Silahkan login');
                window.location = 'login.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'register.php';
            </script>
        ";
    }
}

?>
        </form>
    </div>
</body>
</html>