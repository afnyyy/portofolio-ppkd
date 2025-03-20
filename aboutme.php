
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
  <?php require_once "inc/navbar.php" ?>
  <div class="container">
    <h1 class="text-center">About Me</h1>
    <p>Hi, saya adalah web developer. Saat ini sedang belajar HTML di Petani Kode.</p>
    <br>
    <p>Saya memang masih baru dalam web developer. Karena itu, saya tidak akan pernah berhenti belajar. Lorem ipsum
      dolor sit, amet consectetur adipisicing elit. Praesentium, blanditiis accusantium! Sunt perferendis consequatur
      ex, sapiente velit, modi vel itaque, dicta necessitatibus pariatur quod! Sapiente quam soluta molestiae numquam
      doloremque.</p>
    <br>
    <p>Saya ingin menguasai bahasa HTML, CSS, dan Javascript. Simak video lengkap tentang saya. Lorem ipsum dolor sit
      amet consectetur adipisicing elit. Sunt, velit nemo? Similique incidunt vitae et eaque possimus dolorem, a illum
      nulla est. Quo dignissimos quasi earum. Molestias ullam itaque laboriosam. Lorem, ipsum dolor sit amet consectetur
      adipisicing elit. Optio placeat similique sed dignissimos laboriosam rem maiores recusandae suscipit id,
      consequuntur, provident nostrum? Itaque vitae soluta distinctio quia eius harum sint!</p>
  </div>
  <div class="video text-center">
    <iframe width="750" height="500"
      src="https://www.youtube.com/embed/tgbNymZ7vqY?playlist=tgbNymZ7vqY&loop=1"></iframe>
  </div>

  <?php require_once "inc/footer.php" ?>
</body>

</html>