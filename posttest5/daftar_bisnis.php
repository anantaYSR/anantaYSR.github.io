<?php
require 'myadmin.php';

if (isset($_POST['kirim'])) {
    $pemilik_bisnis = $_POST['pemilik_bisnis'];
    $nama_bisnis = $_POST['nama_bisnis'];
    $telpon = $_POST['telpon'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $jenis_bisnis = $_POST['jenis_bisnis'];

    $result = mysqli_query($db, "INSERT INTO pendaftaran_bisnis (pemilik_bisnis, nama_bisnis, telpon, alamat, email, jenis_bisnis) VALUES ('$pemilik_bisnis', '$nama_bisnis', '$telpon', '$alamat', '$email', '$jenis_bisnis')");

    if ($result) {
        echo "
                <script> 
                    alert('data berhasil di kirim'); 
                </script>
            ";
    } else {
        echo "
                <script> 
                    alert('data gagal di kirim'); 
                </script>
            ";
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
    <script src="index.js"></script>
    <link rel="stylesheet" type="text/css" href="tampilan.css">
    <title>Daftar Bisnis</title>
</head>

<body border="1" align="center">
    <div class="backround">
        <div class="header">
            <img src="image/apa.png" class="logo">
            <button class="btn fourth"> <a href="./index.php">home</a></button>
            <button class="btn fourth"> <a href="./me.php">about me</a></button>
            <button class="btn fourth"> <a href="daftar_bisnis.php">Daftar Bisnis</a></button>
            <button class="btn fourth"> <a href="data.php">tampilkan data</a></button>

        </div>


        <div style="display: flex; align-items: center; flex-direction: column;">
            <h1 class="text-h1" align="center">Daftarkan Bisnis Anda!</h1>

            <div class="box"><br>
                <form action="daftar_bisnis.php" method="post">
                    <label for="" 1>Pemilik Bisnis : </label>
                    <input type="text" name="pemilik_bisnis" required=""> <br><br>
                    <label for="" 1>Nama Bisnis : </label>
                    <input type="text" name="nama_bisnis" required=""> <br><br>
                    <label for="">Nomor Hp : </label>
                    <input type="number" name="telpon" required=""><br><br>
                    <label for="">Alamat : </label>
                    <input type="text" name="alamat" required=""> <br><br>
                    <label for="">Alamat Email : </label>
                    <input type="email" name="email" required=""> <br><br>
                    <label for="">Jenis Bisnis : </label>
                    <select name="jenis_bisnis" required="">
                        <option>Toko</option>
                        <option>Cafe</option>
                        <option>Persewaan</option>
                    </select><br>
                    <br>
                    <input type="submit" name="kirim" id="submit" class="btn btn-primary deep-purple btn-block"><a href="index.php"></a></input>

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