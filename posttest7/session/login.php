<?php
require '../myadmin.php';


if(isset($_POST['kirim'])) {
  // * CEK AKUN
  $result = mysqli_query($db, "SELECT * FROM pengguna WHERE email='{$_POST['email']}'");
  $row = mysqli_fetch_array($result);
  if(empty($row)) {
    echo '<script type="text/javascript">alert("Akun tidak terdaftar!!");</script>';
  } else {
    // * CEK PASSWORD
    $isPassCorrect = password_verify($_POST['password'], $row['password']);
    if(!$isPassCorrect) {
      echo '<script type="text/javascript">alert("Password salah!");</script>';
    } else {
      // * LOGIN
      $_SESSION['is_login'] = true;
      $_SESSION['nama'] = $user['nama'];
      header("Location: ../index.php");
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
      <h1 class="text-h1" align="center">Login!</h1>

      <div class="box"><br>
        <form action="" method="post">
          <label for="">Email: </label>
          <input type="text" name="email" required="">
          <label for="">Password: </label>
          <input type="password" name="password" required="">
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