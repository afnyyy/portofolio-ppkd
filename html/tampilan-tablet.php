<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    body {
      background: linear-gradient(to right, rgb(139, 202, 253), rgb(247, 241, 227));
      padding: 0;
      margin: 0;
    }

    .container {
      max-width: 1000px;
      margin: auto;
      padding: 20px;

    }

    .header {
      display: flex;
    }

    .header img {
      max-width: 190px;
      align-self: flex-start;
    }

    .kata {
      margin-top: 30px;
      padding-left: 90px;
      flex-grow: 1;
    }

    .kata p {
      margin-top: 100px;
    }

    .btn-option {
      background-color: rgb(38, 38, 114);
      color: white;
      text-decoration: none;
      padding: 20px;
      border-radius: 5px;
      display: flex;
      justify-content: center;
      width: 350px;
      height: 150px;
      font-size: 18px;
      align-items: center;
      font-weight: bold;
      font-family: 'Times New Roman', Times, serif;
    }

    .options {
      display: flex;
      justify-content: center;
      gap: 25px;
      margin-top: 60px;
      margin-left: 85px;
    }

    .btn-option:hover {
      background-color: rgb(226, 206, 28);
    }

    footer {
      position: fixed;
      background-color: rgb(1, 1, 85);
      color: rgb(248, 245, 245);
      text-align: center;
      bottom: 0;
      padding: 10px;
      width: 100%;
      font-size: 18px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="header">
      <div class="kata">
        <h4>Assalamualaikum Wr.Wb</h4>
        <h5>Selamat Datang Di Bank Mandiri</h5>
        <p>Silahkan Pilih Jenis Transaksi Anda </p>

      </div>
      <img src="img/mandiri.png" alt="ini logonya">


    </div>
    <div class="options">

      <a href="" class="btn-option">Customer Service</a>
      <a href="" class="btn-option">Teller Officer</a>
      <a href="" class="btn-option">Pengaduan Nasabah</a>
    </div>



  </div>


  <footer>
    <marquee direction="right">Selamat datang di PT. Mandiri, Tbk<marquee>
  </footer>
</body>

</html>