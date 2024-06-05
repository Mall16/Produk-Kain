<?php 
include '../koneksi.php';

if(isset($_POST['simpan'])) {
    $nama = $_POST['name'];
    $user = $_POST['user'];
    $jumlah = $_POST['jumlah'];

    var_dump($nama, $user, $jumlah);

    $sql = "INSERT INTO tb_penjualan VALUES(NULL, '$nama', '$user', '$jumlah')";

    if(empty($nama) || empty($user)|| empty($jumlah)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'penjualan-input.php';
            </script>
        ";
    }elseif(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Categories Berhasil Ditambahkan');
                window.location = 'penjualan.php'
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'penjualan-input.php'
            </script>
        ";
    }
}elseif(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['name'];
    $user = $_POST['user'];
    $jumlah = $_POST['jumlah'];

    $sql = "UPDATE tb_penjualan SET 
            nama_kain = '$nama',
            user_name = '$user',
            jml_barang = '$jumlah'
            WHERE id_penjualan = $id 
            ";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Categories Berhasil Diubah');
                window.location = 'penjualan.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'penjualan-edit.php';
            </script>
        ";
    }
}elseif(isset($_POST['hapus'])) {
    $id = $_POST['id'];

    // hapus gambar
    $sql = "SELECT * FROM tb_penjualan WHERE id_penjualan = $id";
    $result = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_assoc($result);
    

    $sql = "DELETE FROM tb_penjualan WHERE id_penjualan = $id";
    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Categories Berhasil Dihapus');
                window.location = 'penjualan.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Data Categories Gagal Dihapus');
                window.location = 'penjualan.php';
            </script>
        ";
    }
}else {
    header('location: penjualan.php');
}
