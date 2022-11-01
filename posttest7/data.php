<?php

use LDAP\Result;

require 'myadmin.php';

$result = mysqli_query($db, "SELECT * FROM pendaftaran_bisnis");

if (isset($_GET['search'])) {
    $result = mysqli_query($db, "SELECT * FROM pendaftaran_bisnis WHERE nama_bisnis LIKE '%{$_GET['keyword']}%'");
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
    <title>Document</title>
</head>

<body>
    <div class="backround">
        <div class="header">
            <img src="image/apa.png" class="logo">
            <button class="btn fourth"> <a href="index.php">home</a></button>
            <button class="btn fourth"> <a href="me.php">about me</a></button>
            <?php if (isset($_SESSION['is_login'])) : ?>
                <button class="btn fourth"> <a href="daftar_bisnis.php">Daftar Bisnis</a></button>
                <button class="btn fourth"> <a href="data.php">tampilkan data</a></button>
                <button class="btn fourth"> <a href="./session/logout.php">Logout</a></button>
            <?php else : ?>
                <button class="btn fourth"> <a href="./session/login.php">Login</a></button>
                <button class="btn fourth"> <a href="./session/register.php">Register</a></button>
            <?php endif; ?>
        </div>
        <button class="btn fourth"> <a href="daftar_bisnis.php">Tambah Data</a></button><br>

        <form action="" style="margin-bottom: 10px;">
            <label for="">Pencarian</label>
            <div style="display: flex; align-items: center;">
                <input type="text" name="keyword" value="<?= $_GET['keyword'] ?? '' ?>">
                <input type="submit" name="search" id="submit" class="btn btn-primary deep-purple btn-block" style="margin: 0!important"></input>
            </div>
        </form>
        <table border="1">

            <thead>
                <tr>
                    <th>No</th>
                    <th>Pemilik Bisnis</th>
                    <th>Nama Bisnis</th>
                    <th>Telpon</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Jenis Bisnis</th>
                    <th>Waktu Upload</th>
                    <th>Dokumen</th>
                    <th colspan="2">action</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $i = 1;
                while ($row = mysqli_fetch_array($result)) {
                ?>

                    <tr>
                        <td> <?= $i ?></td>
                        <td> <?= $row['pemilik_bisnis'] ?> </td>
                        <td> <?= $row['nama_bisnis'] ?> </td>
                        <td> <?= $row['telpon'] ?> </td>
                        <td> <?= $row['alamat'] ?> </td>
                        <td> <?= $row['email'] ?> </td>
                        <td> <?= $row['jenis_bisnis'] ?> </td>
                        <td> <?= $row['waktu'] ?> </td>
                        <td><img src="gambar/<?= $row['dokumen'] ?>" alt="" width="50px"></td>
                        <td><a href="edit.php?id=<?= $row['id'] ?>">edit</a></td>
                        <td><a href="hapus.php?id=<?= $row['id'] ?>">hapus</a></td>
                    </tr>

                <?php
                    $i++;
                }
                ?>
            </tbody>
        </table>

</body>

</html>