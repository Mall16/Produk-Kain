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
                }
            }
            ?>
        </form>
        <p>Belum Memiliki Akun? <a href="register.php">Register</a></p>
    </div>
</body>
</html>
