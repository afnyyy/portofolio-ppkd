<?php

session_start();
session_regenerate_id(); //ini agar tidak bisa kembali ke login

if (empty($_SESSION['EMAILLLL'])) {
  header("Location: login.php");
} 

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
  <title>Document</title>


  <style>
    body {
      padding: 0;
      margin: 0;
    }

    .navbar nav {
      padding: 10px;
      background-color: rgb(176, 235, 250);
      display: flex;
      gap: 30px;
      color: white;
      width: 100%;
      margin-top: -10px;


    }

    nav a {
      text-decoration: none;
      color: rgb(8, 37, 44);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .navbar nav a:hover {
      color: white;

    }

    .content {
      box-shadow: 0 0 3px black;
      padding: 10px;
      min-height: 10px;
    }

    .title {
      text-align: center;
      padding: 0;
      margin: 0;
    }

    form label {
      font-weight: bold;
      display: block;
    }

    form input,
    form textarea {
      width: 30%;
      height: 70%;
      padding: 10px;
      margin-top: 5px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;

    }

    button {
      width: 20%;
      background-color: rgb(176, 235, 250);
      padding: 15px;
      color: rgb(207, 139, 139);
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 15px;
      font-style: bold;
    }

    footer {
      position: fixed;
      background-color: rgb(176, 235, 250);
      color: rgb(44, 43, 43);
      text-align: center;
      bottom: 0;
      padding: 10px;
      width: 100%;

    }
  </style>

</head>

<body>
  <?php require_once "inc/navbar.php"; ?>

  <div class="title">
    <h1>Contact Me</h1>
  </div>

  <div class="content text-center">
    <form action="" method="post">

      <label for="">Email</label>
      <input type="email" name="email" id="email" required>

      <label for="">Pesan</label>
      <textarea name="pesan" id="pesan"></textarea>
      <br>

      <button type="submit">Kirim Pesan</button>
      <!-- <input type="button" type="submit" value="Kirim Pesan"> -->

    </form>
  </div>
  <?php require_once "inc/footer.php" ?>
</body>

</html>