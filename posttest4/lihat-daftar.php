<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="index.js"></script>
    <link rel="stylesheet" type="text/css" href="tampilan.css?v2">
    <link href="qna-forum.php"/>
    <title>Lihat Daftar Bisnis</title>
</head>
<body border="1" align="center">
    <div class="backround3">
        <div class="header">
            <img src="apa.png" class="logo">
            <button class="btn fourth" > <a href="./index.php">home</a></button> 
            <button class="btn fourth" > <a href="./me.php">about me</a></button>
            <button class="btn fourth" > <a href="./qna-forum.php">Daftar Bisnis</a></button>
            <button class="darkmd2" id="darkmode-toggle"> light mode</button>

        </div>
        

    <div><h1 align = "center">BISNIS ANDA TELAH TERDAFTAR</h1>

    <div class="box2" align = "center" ><br>
    <table style = "font-family : 'Roboto', sans-serif;">
    <tr>
        <td>Pemilik Bisnis</td>
        <td>:</td>
        <td><?php $pemilik = $_POST['pemilik'];echo $pemilik;?>
        </td>
    </tr>
    <tr>
        <td>Nama Bisnis</td>
        <td>:</td>
        <td><?php $nama = $_POST['nama']; echo $nama;?>
        </td>
    </tr>
    <tr>
        <td>No. Hp</td>
        <td>:</td>
        <td><?php $no_hp = $_POST['no_hp'];echo $no_hp;?>
        </td>
    </tr>
    <tr>
        <td>Alamat Anda</td>
        <td>:</td>
        <td><?php $alamat = $_POST['alamat']; echo $alamat;?>
        </td>
    </tr>
    <tr>
        <td>Email Anda</td>
        <td>:</td>
        <td><?php $email= $_POST['email']; echo $email;?>
        </td>
    </tr>
    <tr>
        <td>Jenis Bisnis</td>
        <td>:</td>
        <td><?php $jenis= $_POST['jenis']; echo $jenis;?>
        </td>
    </tr>
</table>
    </div>
    </div>
   <footer>
            <br>
            <p style="color: white ;">Author : ananta yusra putra akmal</p>
            <p style="color: white ;">source : Github, W3school, giphy, freepick </p>
        </footer>
</body>
</html>