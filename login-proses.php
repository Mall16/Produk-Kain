<?php 

include 'koneksi.php';
if(isset($_POST['login'])) {
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
            header('location:admin/pemesanan.php');
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