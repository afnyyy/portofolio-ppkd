<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Perhitungan Deposito</h1>
  <form action="" method="post">
    <label for="">Nominal Deposito</label>
    <input type="number" name="nominal" id="" class="">
    <br><br>
    <label for="">Jangka Waktu</label>
    <select name="jangka_waktu" id="">
      <option value="1">1 Bulan</option>
      <option value="3">3 Bulan</option>
      <option value="6">6 Bulan</option>
      <option value="12">12 Bulan</option>
    </select>
    <br><br>
    <button name="proses" type="submit">Prosess</button>


  </form>
  <br>
  <!-- OUTPUT -->
  <!-- <p><strong>NILAI ESTIMASI BAGI HASIL/ BULAN : <?php echo "Rp. " . number_format($hasil) ?></strong></p>  -->
  <p><strong>NILAI ESTIMASI BAGI HASIL/ TAHUN : <?php echo "Rp. " . number_format($hasilPerbulan) ?></strong></p>
  
  <br><br>

 <!-- Percobaan soal 2 -->
  <h1>SIMULASI ANGSURAN PEMBIAYAAN</h1>
  <form action="" method="post">
    <label for="">Jumlah Pemohon</label>
    <input type="number" name="jumlah_pemohon" id="" class="">
    <br><br>
    <label for="">Jangka Waktu</label>
    <select name="jangka_waktu" id="">
      <option value="1">1 Bulan</option>
      <option value="3">3 Bulan</option>
      <option value="6">6 Bulan</option>
      <option value="12">12 Bulan</option>
    </select>
    <br><br>
    <button name="hasil" type="submit">Hasil</button>


  </form>
  <br>
  <!-- OUTPUT -->
   
  



  <?php
  $hasil = 0; //ini klo button tidak di klik
  $hasilPerbulan = 0;
  $angsuran = 0;
  if (isset($_POST['hasil'])) {
    // $nomial = $_POST['nominal'];
    $jangka_waktu = $_POST['jangka_waktu'];
    $jumlah_pemohon = $_POST['jumlah_pemohon'];
    $rate = [1 => 4.91, 3 => 6.37, 6 => 6.77, 12 => 7.83];
    $rate = $rate[$jangka_waktu];
    $rate1 = 0.18;


    // print_r($_POST['jangka_waktu']);
    // print_r($rate);

    // $hasil = ($nomial * ($rate / 100)) / 12 * $jangka_waktu; 
    // $hasilPerbulan = $hasil / $jangka_waktu;
    $angsuran = ($jumlah_pemohon * $rate1 / $jangka_waktu) + ($jumlah_pemohon / $jangka_waktu);

  }

  ?>
  <p><strong>ESTIMASI ANGSURAN/ BULAN : <?php echo "Rp. " . number_format($angsuran) ?></strong></p>

  





</body>

</html>