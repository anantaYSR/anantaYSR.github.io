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
    <div class="backround3">
        <div class="header">
            <img src="apa.png" class="logo">
            <button class="btn fourth" > <a href="./index.php">home</a></button> 
            <button class="btn fourth" > <a href="./me.php">about me</a></button>
            <button class="btn fourth" > <a href="./daftar-bisnis.php">Daftar Bisnis</a></button>
            <button class="darkmd2" id="darkmode-toggle"> light mode</button>

        </div>
        

    <div><h1 class="text-h1" align = "center">Daftarkan Bisnis Anda!</h1>

    <div class="box"><br>
        <form action="lihat-daftar.php" method="post">
            <label for=""1>Pemilik Bisnis : </label>
                <input type="text" name="pemilik" required=""> <br><br>
            <label for=""1>Nama Bisnis : </label>
                <input type="text" name="nama" required=""> <br><br>
            <label for="">Nomor Hp : </label>
            <input type="number" name = "no_hp" required=""><br><br>
            <label for="">Alamat : </label>
            <input type="text" name="alamat" required=""> <br><br>
            <label for="">Alamat Email : </label>
            <input type="email" name="email" required=""> <br><br>
            <label for="">Jenis Bisnis : </label>
            <select name = "jenis" required="">
                <option>Toko</option>
                <option>Cafe</option>
                <option>Persewaan</option>
            </select><br>
            <br>
            <a href = "lihat-daftar.php"><button type="submit" name="submit" id="submit" class="btn btn-primary deep-purple btn-block">Daftar</button></a>
            
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