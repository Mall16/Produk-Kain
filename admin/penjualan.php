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
        <h2>Data Pemesanan</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>TGL-Pesan</th>
                    <th>Status Pembayaran</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>john@example.com</td>
                    <td>2-januari-2024</td>
                    <td class="p">Paid</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>jane@example.com</td>
                    <td>14-januari-2024</td>
                    <td class="n">Not Paid</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>jane@example.com</td>
                    <td>29-januari-2024</td>
                    <td class="p">Paid</td>
                </tr>
                <!-- Tambahkan baris data lainnya sesuai kebutuhan -->
            </tbody>
        </table>
    </div>
</body>
</html>
