<?php 
require_once '../vendor/autoload.php';
require_once '../koneksi.php';

$mpdf = new \Mpdf\Mpdf();
$id = $_GET['idPrint'];
$select = mysqli_query($conn, "SELECT * FROM resume WHERE id = $id");
$row = mysqli_fetch_assoc($select);

$html = '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <table border="1">
      <tr>
        <th>No. </th>
        <td>1</td>
      </tr>

      <tr>
        <th>Tahun Awal</th>
        <td>'.$row['tahun_awal'].'</td>
      </tr>

      <tr>
        <th>SKill</th>
        <td>'.$row['skill'].'</td>
      </tr>

      <tr>
        <th>Resume</th>
        <td>'.$row['instansi'].'</td>
      </tr>

      <tr>
        <th>Deskripsi</th>
        <td>'.$row['deskripsi'].'</td>
      </tr>
    </table>
  </body>

  </html>';
$mpdf->WriteHTML($html);
$mpdf->Output();

?>