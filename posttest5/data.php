<?php

use LDAP\Result;

require 'myadmin.php';

$result = mysqli_query($db, "SELECT * FROM pendaftaran_bisnis")

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
            <button class="btn fourth"> <a href="daftar_bisnis.php">Daftar Bisnis</a></button>
            <button class="btn fourth"> <a href="data.php">tampilkan data</a></button>
        </div>
        <button class="btn fourth"> <a href="daftar_bisnis.php">Tambah Data</a></button><br>

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