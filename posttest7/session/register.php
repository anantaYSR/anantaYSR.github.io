<?php
require '../myadmin.php';


if (isset($_POST['kirim'])) {
  // * CEK KONFIRMASI PASSWORD
  if ($_POST['password'] != $_POST['password_confirmation']) {
    echo '<script type="text/javascript">alert("Password dan Konfirmasi Password tidak sama!");</script>';
  } else {
    // * CEK APAKAH EMAIL SUDAH TERDAFTAR
    $result = mysqli_query($db, "SELECT * FROM pengguna WHERE email='{$_POST['email']}'");
    $row = mysqli_fetch_array($result);
    if (!empty($checkEmail)) {
      echo '<script type="text/javascript">alert("Email sudah terdaftar!");</script>';
    } else {
      // * REGISTER
      $nama = $_POST['nama'];
      $email = $_POST['email'];
      $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
      $result = mysqli_query($db, "INSERT INTO pengguna (`nama`, `email`, `password`) VALUES ('$nama', '$email', '$password')");

      if ($result) {
        $_SESSION['is_login'] = true;
        $_SESSION['nama'] = $_POST["name"];
        header("Location: ../index.php");
      } else {
        echo "gagal kirim";
      }
    }
  }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="../index.js" defer></script>
  <link rel="stylesheet" type="text/css" href="../tampilan.css">
  <title>Daftar Bisnis</title>
</head>

<body border="1" align="center">
  <div class="backround">
    <div class="header">
      <img src="../image/apa.png" class="logo">
      <button class="btn fourth"> <a href="./index.php">home</a></button>
      <button class="btn fourth"> <a href="./me.php">about me</a></button>
      <?php if (isset($_SESSION['is_login'])) : ?>
        <button class="btn fourth"> <a href="daftar_bisnis.php">Daftar Bisnis</a></button>
        <button class="btn fourth"> <a href="data.php">tampilkan data</a></button>
        <button class="btn fourth"> <a href="./logout.php">Logout</a></button>
      <?php else : ?>
        <button class="btn fourth"> <a href="./login.php">Login</a></button>
        <button class="btn fourth"> <a href="./register.php">Register</a></button>
      <?php endif; ?>

    </div>


    <div style="display: flex; align-items: center; flex-direction: column;">
      <h1 class="text-h1" align="center">Register!</h1>

      <div class="box"><br>
        <form action="" method="post">
          <label for="">Nama: </label>
          <input type="text" name="nama" required="">
          <label for="">Email: </label>
          <input type="email" name="email" required="">
          <label for="">Password: </label>
          <input type="password" name="password" required="">
          <label for="">Konfirmasi Password: </label>
          <input type="password" name="password_confirmation" required="">
          <br><br>
          <input type="submit" name="kirim" id="submit" class="btn btn-primary deep-purple btn-block"></input>
        </form>
      </div>
    </div>
    <footer>
      <br>
      <p style="color: whitesmoke ;">Author : ananta yusra putra akmal</p>
      <p style="color: whitesmoke ;">source : Github, W3school, giphy, freepick </p>
    </footer>
</body>

</html>