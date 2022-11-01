<?php
require 'myadmin.php';

//Menangkap id dari  url yang dikirimkan
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    //Tampilkan value input dari id 
    $result = mysqli_query($db, "SELECT * FROM pendaftaran_bisnis WHERE id= '$id'");
    $row = mysqli_fetch_array($result);
}


if (isset($_POST['kirim'])) {
    $id = $_POST['id'];
    $pemilik_bisnis = $_POST['pemilik_bisnis'];
    $nama_bisnis = $_POST['nama_bisnis'];
    $telpon = $_POST['telpon'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $jenis_bisnis = $_POST['jenis_bisnis'];
    $gambar = $_FILES['dokumen']['name'];
    $waktu = $_POST['waktu'];
    if ($_FILES['dokumen']['name'] != '') {

        $result = mysqli_query($db, "SELECT * FROM pendaftaran_bisnis WHERE id='$id'");
        $row = mysqli_fetch_array($result);
        unlink("gambar/{$row['dokumen']}");

        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));
        $gambar_baru = "$pemilik_bisnis.$ekstensi";
    
        $tmp = $_FILES['dokumen']['tmp_name'];
        if (move_uploaded_file($tmp, "gambar/$gambar_baru")) {
            $result = mysqli_query($db,
            "UPDATE pendaftaran_bisnis SET
            pemilik_bisnis = '$pemilik_bisnis',
            nama_bisnis = '$nama_bisnis',
            telpon = '$telpon',
            alamat = '$alamat',
            email = '$email',
            jenis_bisnis = '$jenis_bisnis',
            dokumen = '$gambar_baru' WHERE id='$id'"
            );
        }
    } else {
        $result = mysqli_query(
            $db,
            "UPDATE pendaftaran_bisnis SET
            pemilik_bisnis = '$pemilik_bisnis',
            nama_bisnis = '$nama_bisnis',
            telpon = '$telpon',
            alamat = '$alamat',
            email = '$email',
            jenis_bisnis = '$jenis_bisnis' WHERE id='$id'"
        );
    }

    if ($result) {
        echo "berhasil kirim";
        header("Location:index.php");
    } else {
        echo "gagal kirim";
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
    <link rel="stylesheet" type="text/css" href="tampilan.css?v2">
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
            <h1 class="text-h1" align="center">Edit File</h1>
            <div class="box"><br>
                <form action="edit.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value=<?= isset($row) ?  $row['id'] : '' ?>>

                    <label for="">Pemilik bisnis :</label><br><br>
                    <input type="text" name="pemilik_bisnis" value=<?= isset($row) ?  $row['pemilik_bisnis'] : '' ?>><br><br>
                    <label for="">Nama Bisnis :</label><br>
                    <input type="text" name="nama_bisnis" value=<?= isset($row) ?  $row['nama_bisnis'] : '' ?>><br><br>
                    <label for="">No_HP :</label><br>
                    <input type="text" name="telpon" value=<?= isset($row) ?  $row['telpon'] : '' ?>><br><br>
                    <label for="">alamat :</label><br>
                    <input type="text" name="alamat" value=<?= isset($row) ?  $row['alamat'] : '' ?>><br><br>
                    <label for="">Email :</label><br>
                    <input type="email" name="email" value=<?= isset($row) ?  $row['email'] : '' ?>><br><br>
                    <label for="">Jenis Bisnis :</label><br>
                    <select type="text" name="jenis_bisnis" value=<?= isset($row) ?  $row['jenis_bisnis'] : '' ?>><br><br>
                        <option>Toko</option>
                        <option>Cafe</option>
                        <option>Persewaan</option>
                    <label for="dokumen">Gambar :</label><br>
                    <input type="file" name="dokumen" id="dokumen" value=<?= isset($row) ?  $row['dokumen'] : '' ?>><br><br>
                    <input type="submit" name="kirim" id="submit" class="btn btn-primary deep-purple btn-block"></input>
            </div>

            </form>
            <footer>
                <br>
                <p style="color: whitesmoke ;">Author : ananta yusra putra akmal</p>
                <p style="color: whitesmoke ;">source : Github, W3school, giphy, freepick </p>
            </footer>
</body>

</html>