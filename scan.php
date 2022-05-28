<?php $nama= $_POST["nama"]?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Angoota</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <h1>E-Library SMK BN</h1>
        <br>
        <div class="tombol">
            <a href="index.php">Home</a>
            <a href="daftarbuku.php">Daftar Buku</a>
            <a href="bukuterbaru.php">Buku Terbaru</a>
            <a href="daftar.php">Daftar</a>
        </div>
    </div>
    <div class="content">
        <h2 align="center">Selamat Bergabung <?php echo $nama?></h2>
        <p align="center">
            NIS : <?php echo $_POST["nis"]?><br>
            Nama : <?php echo $_POST["nama"]?><br>
            Kelas : <?php echo $_POST["kelas"]?><br>
            Tempat :<?php echo $_POST["tempat"]?><br>
            Tanggal Lahir :<?php echo $_POST["ttl"]?>
        </p>
        <center><button onclick="myalert()">Simpan Data</button></center>
        <script>
        function myalert() {
            alert("DATA BERHASIL DI SIMPAN")
        }
        </script>
        <br>
        <br>
        <h3 align="center">Terima Kasih Sudah Bergabung</h3>
    </div>
    <footer align="center">
        @anjarfaudzan
    </footer>
</body>

</html>