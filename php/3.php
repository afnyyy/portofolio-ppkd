<?php
//aritmatika
$a = 10;
$b = 3;

$tambah = $a * $b;
echo "Totalnya adalah : " . $tambah;


// =(memberikan sebuah nilai) <, >, =>, <=, == (membandingan), dll (kondisi percabangan), !=(tidak sama)
// ===(ini untuk perbandingan nama dan tipe data)
// && betul semua, AND(gagal)
echo "<br><br>";
$nama = "afni";
$password = "12345";


if ($nama == "afni") {
  echo "sama";
} else {
  echo "tidak sama";
}

echo "<br><br>";
//perbandingan
$a = 1;
if ($nama === $a) {
  echo "sama";
} else {
  echo "tidak sama";
}


echo "<br><br>";
//ini untuk tidak sama dengan
if ($nama != "bambang") {
  echo "sama";
} else {
  echo "tidak sama";
}


echo "<br><br>";
//soal  pengulangan
for ($i=1; $i <= 10 ; $i++) { 
  echo "Totalnya ada " . $i;
}


