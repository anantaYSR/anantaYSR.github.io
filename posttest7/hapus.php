<?php

require 'myadmin.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $result = mysqli_query($db,
    "SELECT * FROM pendaftaran_bisnis WHERE id='$id'");
    $row = mysqli_fetch_array($result);

    $result = mysqli_query($db, "DELETE FROM pendaftaran_bisnis WHERE id= '$id'");
    

    if ($result) {

        unlink("gambar/{$row['dokumen']}");
        echo 'Deleted';
        if($result){
            header("Location:hapus.php");
        }
        header("Location:data.php");

    }
}
