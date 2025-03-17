<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="4.php?deposito">Perhitungan Deposito</a>
<a href="4.php?pembiayaan">Perhitungan Pembiayaan</a>



<?php if(isset($_GET["pembiayaan"])):?>
    <h1>Pembiayaan</h1>
<?php elseif(isset($_GET["deposito"])): ?>
    <h1>Perhitungan Deposito</h1>
    
<form action="" method="post">
    <label for="">Nominal Deposito</label>
    <input type="number" name="nominal" id="" class= "">
    <br><br>
    <label for="">Jangka Waktu</label>
    <select name="jangka_waktu" id="">
        <option value="1">1 Bulan</option>
        <option value="3">3 Bulan</option>
        <option value="6">6 Bulan</option>
        <option value="12">12 Bulan</option>
    </select>
    <br><br>
    <button type="submit" name="process" >Proses</button>
</form>

<p><strong>Nilai Estimasi Bagi Hasil / Tahun : </strong> <?php echo "Rp " .number_format($hasil) ; ?></p>
<p><strong>Nilai Estimasi Bagi Hasil / Bulan :</strong> <?php echo "Rp " .number_format($hasilPerbulan) ; ?></p>

<?php endif?>

<!-- Output -->

<!-- Name untuk memanggil di php -->

<!-- Rate -->
<!-- 1 Bulan = 4.91% -->
<!-- 3 Bulan = 6.37% -->
<!-- 6 Bulan = 6.77% -->
<!-- 12 Bulan = 7.83% -->

<!-- RUmus
(Nilai deposito * Rate) / bulan*jangka_waktu
-->

<!--  Iseet = tidak kosong -->
<!-- $_POST = untuk mengambil nilai yang di input oleh user -->

<!--  -->





</body>
</html>