<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  if (isset($_GET['login'])) {
    $email = $_GET['email'];
    $password = $_GET['password'];

    $email_table ="admin@gmail.com";
    $password_table ="123456";

    if ($email == $email and $password == $password_table) {
      echo "Berhasil Login";
    } else {
      header("location: 6.php?error=login");
    }
  }
  ?>

  <div class="login">
    <?php if (isset($_GET['login'])) :?>
    <p class="alert">Upss, mohon periksa kembali email dan password anda</p>
    <?php endif ?>


    <form action="" method="post"></form>
    <label for="">Email</label>
    <input type="email" name="email" placeholder="Masukkan Email Anda">
    <br><br>
    <label for="">Password</label>
    <input type="password" name="password">
    <br><br>
    <button name="login" type="submit">Login</button>

  </div>
</body>

</html>