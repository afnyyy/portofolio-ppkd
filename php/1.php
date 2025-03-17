<?php
// $ dollar : membuat variable
$nama = "Afnii"; //"tipe string/varchar"
$angkatan = 2025; //int : kumpulan angka dengan bilangan bulat
$tinggi = 162.5; //float : ada angka komanya
$true = true; //bolean : true & false
$false = false;

echo $nama; //outputnya (print)
var_dump($nama); //print juga dengan ...
// print "";
// print_r();

// $nama_depan = "Muhammad";
// $nama_belakang = "Reza";

//array 
$buah = ['salak', 'mangga', 'pepaya'];
echo "<p>$buah</p>";
print "$nama" . "<br>";
print_r($buah);
var_dump($true);
var_dump($false);
echo $nama_depan . " " . $nama_belakang; //tanda titik untuk penambahan

echo "<br>";
echo "<br>";
echo "<br>";

echo "<h1>Constan Variabel di php</h1>";



define ("mobil", "mini cooper"); //mendefinisikan nilai agar tidak berubah
echo mobil;

const motor = "supra batok";
echo motor;
