<?php
//variabel
$nama = "Udin";
$no = 1;
$no2 = "3";

//untuk print (memanggil variable)
echo $nama;
echo $no;

echo $nama . "<br>"; //penggabungan dengan java tandda (.)
echo $no + $no2;

//array "key" => "value"
$users = [
  "afny27@gmail.com" => "123F@A7i8",
  "27afny@gmail.com" => "@A7845678"
];
//untuk mengecek database
// var_dumb($users)
print_r ($users);

//untuk mengambil 
// echo $users["afny27@gmail.com"];



//mengambil email & password (menambahkan name di button)
if (isset($_POST["login-yuk"])) {
  $users = [
    "afny27@gmail.com" => "a#3F@A7i",
    "afny@gmail.com" => "a#3F@A7i"
  ];
  $email = $_POST["email"];
  $password = $_POST["password"];

  echo $email . "<br>";
  echo $password;
}

// kondisi jika mau login dan akan pindah ke page berikutnya
if (isset($_POST["login-yuk"])) {
  $users = [
    "afny27@gmail.com" => "a#3F@A7i",
    "27afny@gmail.com" => "a#3F@A7i"
  ];
  $email = $_POST["email"];
  $password = $_POST["password"];

  if (isset($users[$email]) && $users[$email] === $password) {
    header("Location: dashboard.php"); //ini jika sudah ada lokasi yg dituju
  } else {
    header("Location: login.php");
  }
  
}



?>