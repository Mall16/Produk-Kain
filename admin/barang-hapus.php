<?php
include '../koneksi.php';
$id = $_GET['id'];
if(!isset($_GET['id'])) {
  echo "
    <script>
      alert('Tidak ada ID yang Terdeteksi');
      window.location = 'barang.php';
    </script>
  ";
}

$sql = "SELECT * FROM tb_kain WHERE id_kain = '$id'";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($result);

  session_start();
  if($_SESSION['email'] == null) {
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
      button{
        border: none;
        color: #fff;
        padding: 5px 15px;
        border-radius: 5px;
        font-size: 20px;
        cursor: pointer;
      }
      .btn-no{
         background-color: #27ff6f;
      }
      .btn-yes{
        background-color: #ff1111;
      }
    </style>
</head>
<body>
    <?php
        include 'nav.php';
    ?>
    <div class="container">
      <center>
        <h2>Data Barang</h2>
        <h3>Hapus Data Barang</h3>
        <div>
          <h4>Ingin Menghapus Data ?</h4>
          <form
            action="barang-proses.php"
            method="post"
            enctype="multipart/form-data"
          >
            <input type="hidden" name="id" value="<?= $data['id_kain'] ?>">
            <button type="submit" class="btn-yes" name="hapus">Yes</button>
		        <button type="submit" class="btn-no" name="tidak">No</button>
          </form>
        </div>
      </center>
    </div>
</body>
</html>
