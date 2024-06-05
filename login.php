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
                }
            }
            ?>
        </form>
        <p>Belum Memiliki Akun? <a href="register.html">Register</a></p>
    </div>
</body>
</html>
