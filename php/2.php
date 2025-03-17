<!-- function() -->
 <?php
 $nama = "Afny";
 $kota ="jakarta";
 echo $nama;
 echo "<br>";
 echo strtoupper($nama); //ini untuk huruf kapital semua
 echo "<br>";
 echo $kota;
 echo "<br>";
 echo ucfirst($kota); //ini untuk menggantikan huruf awal menjadi besar


 //casting itu mengubah tipe data awal
 echo "<br><br>";
 echo "<h1>Casting di php</h1>";

 $a = 1; 
 $b = "nama";
 $c = 0.20;
 $d = true;
 
 //mengubahnya
 $a = (string) $a;
 $b = (int) $b;
 $c = (string) $c;
 $c = (string) $c;
 
 //print dengan keterangan tipe datanya (var_dump)
  var_dump($a);
  var_dump($b);
  var_dump($c);
  var_dump($d);



 ?>
