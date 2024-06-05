<?php
include('../koneksi.php');
require_once("../dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$query = mysqli_query($koneksi, "SELECT * FROM tb_penjualan");
$html = '
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    table, th, td {
        border: 1px solid black;
    }
    th, td {
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
    h3 {
        margin: 0;
        padding: 0;
    }
    hr {
        margin-top: 20px;
        margin-bottom: 20px;
    }
</style>
';
$html .= '<center><h3>Data Penjualan</h3></center><hr/><br>';
$html .= '<table width="100%">
            <tr>
                <th>NO</th>
                <th>Nama Kain</th>
                <th>Pembeli</th>
                <th>Jumlah Barang</th>
            </tr>';
$no = 1;
while ($penjualan = mysqli_fetch_array($query)) {
    $html .= "<tr>
                <td>" . $no . "</td>
                <td>" . $penjualan['nama_kain'] . "</td>
                <td>" . $penjualan['user_name'] . "</td>
                <td>" . $penjualan['jml_barang'] . "</td>
            </tr>";
    $no++;
}
$html .= "</table>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan-transaksi.pdf');
?>
