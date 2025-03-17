<?php
require_once "koneksi.php";
session_start();
session_regenerate_id(); //ini agar tidak bisa kembali ke login

if (empty($_SESSION['EMAILLLL'])) {
  header("Location: login.php");
} 

// INSERT
if (isset($_POST['add-profile'])) {
  $photo = $_FILES['photo'];
  $nama = $_POST['nama'];
  $jabatan = $_POST['jabatan'];
  $deskripsi = $_POST['deskripsi'];
  // var_dump($photo);

  if ($photo["error"] == 0) {
    $fillName = uniqid() . "_" . basename($photo["name"]);
    $fillPath = "assets/uploads/" . $fillName;
    move_uploaded_file($photo['tmp_name'], $fillPath);
    
    $q_insert = mysqli_query($conn, "INSERT INTO profile (photo, nama, jabatan, deskripsi) VALUES ('$fillName', '$nama', '$jabatan', '$deskripsi')");
  
    if ($q_insert) {
      header("Location: profile.php");
    } else {
      header("Location: add_edit_profile.php");
    }
  }
}

//TAMPILAN DATA YNG DIEDIT
if (isset($_GET['idEdt'])) { 
  $idEdt = intval($_GET['idEdt']);
  $edit = mysqli_query($conn, "SELECT * FROM profile WHERE id = $idEdt");
  $row = mysqli_fetch_assoc($edit);
}

//UPDATE
if (isset($_POST['edit-profile'])) {
  $idEdt = intval($_GET['idEdt']);
  $nama = $_POST['nama'];
  $jabatan = $_POST['jabatan'];
  $deskripsi = $_POST['deskripsi'];
  $photo = $_FILES['photo'];
  
  if ($photo["error"] == 0) {
    $fillName = uniqid() . "_" . basename($photo["name"]);
    $fillPath = "assets/uploads/" . $fillName;
    $fieldPhoto = "";

    if (move_uploaded_file($photo['tmp_name'], $fillPath)) {
      // CEK FOTONYA
      $cekFoto = mysqli_query($conn, "SELECT photo FROM profile WHERE id = $idEdt");
      $rowPhoto = mysqli_fetch_assoc($cekFoto);
      //jika ada fotonya maka di unlink
      if ($rowPhoto && file_exists("assets/uploads/" . $rowPhoto['photo'])) {
        unlink("assets/uploads/" . $rowPhoto['photo']);
      }
      $fieldPhoto = "photo='$fillName',";
    } else {
      echo "GAGAL UPDATE FOTO";
    }
  
  }
  $update = mysqli_query($conn, "UPDATE profile SET $fieldPhoto nama='$nama', jabatan='$jabatan', deskripsi='$deskripsi' WHERE id =$idEdt");
  if ($update) {
    header("Location: profile.php");
  } else {
    header("Location: add_edit_profile.php>idEdt=$idEdt");
  }
  
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <?php require_once "inc/navbar.php" ?>
  <div class="container">
    <div class="row mt-3">
      <div class="col-2"></div>
        <div class="col-8">
          <div class="card">
            <div class="card-header text-center fw-bold"><?php echo isset($_GET['idEdt']) ? 'EDIT' : 'ADD'?> Profile</div>
          <div class="card-body">
          <form action="" method="post" enctype="multipart/form-data">
            <div class="mt-1">
              <label for="" class="form-label">Photo</label>
              <input type="file" name="photo" class="form-control">
            </div>
            <?php if (isset($_GET['idEdt'])) {
            ?>
                <div class="mt-1">
                  <img src="assets/uploads/<?php echo $row['photo'] ?>" width="135" alt="">
                </div>
            <?php
            } ?>
            <div class="mt-1">
              <label for="" class="form-label">Nama</label>
              <input type="text" name="nama" class="form-control" value="<?php echo isset($_GET['idEdt']) ? $row['nama'] : "" ?>">
            </div>
            <div class="mt-1">
              <label for="" class="form-label">Jabatan</label>
              <input type="text" name="jabatan" class="form-control" value="<?php echo isset($_GET['idEdt']) ? $row['jabatan'] : "" ?>">
            </div>
            <div class="mt-1">
              <label for="" class="form-label">Deskripsi</label>
              <textarea name="deskripsi" cols="30" rows="3" class="form-control"><?php echo isset($_GET['idEdt']) ? $row['deskripsi'] : "" ?></textarea>
            </div>
            <div class="mt-1">
              <a href="profile.php" class="btn btn-secondary">Back</a>
              <button class="btn btn-success" name="<?php echo isset($_GET['idEdt']) ? 'edit-profile': 'add-profile' ?>" type="submit"><?php echo isset($_GET['idEdt']) ? 'UPDATE' : 'ADD' ?></button>
            </div>
          </form>
        </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>
</html>