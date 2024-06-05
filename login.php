<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Toko Kain</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="assets/logo.svg" alt="" width="3%">
            <h1>Toko Kain</h1>
        </div>
        <h2>Login</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Login">
            </div>
<<<<<<< HEAD
            <?php
            session_start();

            $c_email = getenv("email");
            $c_pass = getenv("password");
            
            $email = "hikmal@gmail.com";
            $pass = "hikmal123";
                 
            setcookie('email', $email, time() + (86400 * 30), "/");
            setcookie('password', $pass, time() + (86400 * 30), "/");
            
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $pass;

            $s_email = "email";
            $s_pass = "password";
            
            $c_emailValue = isset($_COOKIE[$s_email]) ? $_COOKIE[$s_email] : '';
            $c_passValue = isset($_COOKIE[$s_pass]) ? $_COOKIE[$s_pass] : '';
            
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $m_email = isset($_POST['email']) ? $_POST['email'] : '';
                $m_pass = isset($_POST['password']) ? $_POST['password'] : '';
            
                if ($m_email === $c_emailValue && $m_pass === $c_passValue) {
                    echo "<script> alert('Login Berhasil!');
                    window.location.href = 'index.html'; </script>";
                    exit();
                } else {
                    echo '<script>alert("Login GAGAL, Silahkan Cek Username dan Password Anda")</script>';
=======

            <?php 
            include 'koneksi.php';
            if($_POST) {
              $requestEmail = $_POST['email'];
              $requestPassword = $_POST['password'];
            
              $sql = "SELECT * FROM tb_user WHERE email = '$requestEmail'";
              list($id, $email, $password,  $username) = mysqli_fetch_row(mysqli_query($koneksi, $sql));
              $result = mysqli_query($koneksi, $sql);
            
              if(mysqli_num_rows($result) > 0) {
                if (password_verify($requestPassword, $password)) {
                    while($row = mysqli_fetch_assoc($result)) {
                        session_start();
                        $_SESSION['email'] = $row['email'];
                        header('location:admin/dashboard.php');
                    }
                  } else { 
                      echo "
                      <script>
                        alert('email atau password anda salah, Silahkan coba lagi');
                        window.location = 'login.php';
                      </script>
                      ";
                  }
                } else { 
                    echo "
                    <script>
                      alert('email atau password anda salah, Silahkan coba lagi');
                      window.location = 'login.php';
                    </script>
                    ";
>>>>>>> 91e214c73ec3e92191e19df9e750152110c1aaa9
                }
            }
            ?>
        </form>
<<<<<<< HEAD
        <p>Belum Memiliki Akun? <a href="register.html">Register</a></p>
=======
        <p>Belum Memiliki Akun? <a href="register.php">Register</a></p>
>>>>>>> 91e214c73ec3e92191e19df9e750152110c1aaa9
    </div>
</body>
</html>
