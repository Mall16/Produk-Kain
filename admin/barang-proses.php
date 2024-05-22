<?php 
include '../koneksi.php';

if(isset($_POST['simpan'])) {
    $nama = $_POST['name'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    var_dump($nama, $harga, $stok);

    $sql = "INSERT INTO tb_kain VALUES(NULL, '$nama', '$harga', '$stok')";

    if(empty($nama) || empty($harga)|| empty($stok)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'barang-input.php';
            </script>
        ";
    }elseif(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Categories Berhasil Ditambahkan');
                window.location = 'barang.php'
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'barang-input.php'
            </script>
        ";
    }
}elseif(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['name'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $sql = "UPDATE tb_kain SET 
            nama_kain = '$nama',
            harga = '$harga',
            stok = '$stok'
            WHERE id_kain = $id 
            ";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Categories Berhasil Diubah');
                window.location = 'barang.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'barang-edit.php';
            </script>
        ";
    }
}elseif(isset($_POST['hapus'])) {
    $id = $_POST['id'];

    // hapus gambar
    $sql = "SELECT * FROM tb_kain WHERE id_kain = $id";
    $result = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_assoc($result);
    

    $sql = "DELETE FROM tb_kain WHERE id_kain = $id";
    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Categories Berhasil Dihapus');
                window.location = 'barang.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Data Categories Gagal Dihapus');
                window.location = 'barang.php';
            </script>
        ";
    }
}else {
    header('location: barang.php');
}
