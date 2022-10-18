<?php

require 'myadmin.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $result = mysqli_query($db, "DELETE FROM pendaftaran_bisnis WHERE id= '$id'");

    if ($result) {
        header("Location:data.php");
    }
}
