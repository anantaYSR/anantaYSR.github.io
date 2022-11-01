<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="index.js"></script>
    <link rel="stylesheet" type="text/css" href="tampilan.css">
    <title>About Me</title>
</head>

<body border="1" align="center">
    <div class="backround2">
        <div class="header">
            <img src="image/apa.png" class="logo">

            <button class="btn fourth"> <a href="./index.php">home</a></button>
            <button class="btn fourth"> <a href="./me.php">about me</a></button>
            <?php if (isset($_SESSION['is_login'])) : ?>
                <button class="btn fourth"> <a href="daftar_bisnis.php">Daftar Bisnis</a></button>
                <button class="btn fourth"> <a href="data.php">tampilkan data</a></button>
                <button class="btn fourth"> <a href="./session/logout.php">Logout</a></button>
            <?php else : ?>
                <button class="btn fourth"> <a href="./session/login.php">Login</a></button>
                <button class="btn fourth"> <a href="./session/register.php">Register</a></button>
            <?php endif; ?>

        </div>
        <div class="content">
            <div class="text">
                <h1>Ananta yusra <br> <span>putra akmal</span></h1>
                <p>Nim : 2109106024 <br> Kelas : Informatika A1 2021<br> Praktikum : Pemrograman Web<br> <br> tanggal lahir : 11 Agustus 2003 <br> Github : anantaYSR <br> Git.io : anantaYSR.github.io
                </p>
            </div>
            <img class="ananta" src="image/nanta.JPG" alt="" border>
        </div>
    </div>
    </div>
</body>

</html>