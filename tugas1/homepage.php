<?php 
require_once "koneksi.php";

$tampilProfile = mysqli_query($conn, "SELECT * FROM profile WHERE id = 5");
$row = mysqli_fetch_assoc($tampilProfile);
// var_dump($row);
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
    header {
      padding: auto;
      padding: 10px;
    }

    .foto img {
      clip-path: circle(50%);
      width: 300px;
      height: 300px;
      object-fit: cover;
      object-position: 50% 100%;
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

    nav a:hover {
      color: white;

    }

    nav a {
      text-decoration: none;
      color: rgb(8, 37, 44);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }


    .datadiri {
      text-align: center;

    }

    .over {
      text-align: center;
    }

    .row {
      text-align: center;
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
  <?php require_once "inc/navbar.php";?>
  <div class="bckgrd">
    <div class="datadiri">
      <div class="foto">
        <img src="img/avatar.jpg" alt="foto">
      </div>
      <h1><?php echo $row['name'] ?></h1>
      <p>Web Developer | Peserta PPKD</p>
      <hr>
    </div>
  </div>

  <div class="over">
    <h2>Overview</h2>
    <p>Hi, Saya adalah web developer. Saat ini sedang belajar HTML di Petani Kode.</p>
  </div>
  <br>
  <br>

  <div class="row justify-content-center">
    <div class="skill col-sm-3 mb-3 mb-sm-0">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Skill</h5>
          <hr>
          <ul>
            <li>HTML (Beginner)</li>
            <li>CSS (Beginner)</li>
            <li>JavaScript (Beginner)</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="pengalaman col-sm-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Pengalaman</h5>
          <hr>
          <ul>
            <li>Pernah internship di PT Bank Rakyat Indonesia,Tbk</li>
            <li>Menjadi leader Team Program Mahasiswa Wirausaha</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit</li>
          </ul>
        </div>
      </div>
    </div>


  </div>


  <?php require_once "inc/footer.php" ?>
  </div>
</body>

</html>