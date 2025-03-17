<?php
require_once "koneksi.php"; //menyambungkan ke koneksi yang ada sqlnya

session_start();

if(isset($_POST["login-yuk"])) {
  // $users = [
  //   "afny27@gmail.com" => "a#3F@A7i",
  //   "afny@gmail.com" => "a#3F@A7i"
  // ];
  $email = $_POST["email"];
  $password = $_POST["password"];

  $q_login = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
  if (mysqli_num_rows($q_login) > 0){
    $user = mysqli_fetch_assoc($q_login);

    if ($email == $user['email'] && $password == $user['password']) {
      $_SESSION["EMAILLLL"] = $user['email'];
      $_SESSION["USERNAME"] = $user['username'];
      header("Location: homepage.php");
    }
  }else {
    header("Location: login.php");
  }

  // if (isset($users[$email]) && $users[$email] === $password) {
  //   $_SESSION["EMAILLLL"] = $email;//PART SESSION

  //   header("Location: dashboard.php"); //ini jika sudah ada lokasi yg dituju
  // } else {
  //   header("Location: login.php");
  // }
  
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
  <div class="loginpage">
    <div class="container">
      <div class="row mt-4">
        <div class="col-2"></div>
        <div class="col-8">
          <div class="card">
            <div class="card-header text-center">Login</div>
            <div class="card-body">
              <form action="" method="POST" onsubmit="return validasi()">
                <div class="mt-2">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" class="form-control" name="email" id="email" />
                  <span id = "emailError" class="text-danger" style="display: none">Email Tidak Valid</span>
                </div>
                <div class="mt-2">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" id="password" />
                  <span id = "passwordError" class="text-danger" style="display: none">Password harus terdiri dari 8 karakter ...</span>
                </div>

                <div class="mt-2 text-end">
                  <button type="submit" name="login-yuk" class="btn btn-primary">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-2"></div>
      </div>
    </div>  
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
  <script>
    function validasi(){
      var email = document.getElementById("email").value;
      var passsword = document.getElementById("password").value;
      var emailError = document.getElementById("emailError");
      var passswordError = document.getElementById("passwordError");
      var isValid = true;
      var emailReg = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
      var passReg = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&#])[A-Za-z\d@$!%*?&#]{8,}$/;
      
      if (emailReg.text(email)) {
        //console.log("Valid Email Address");
        emailError.style.display = "none";
      } else if (emailReg.text(email)){
        //console.log("invalid email address");
        emailError.style.display = "none";
        isValid = false;
      }
      return isValid;
      //console.log(passReg.test?(password));
    }
  </script>
</body>

</html>