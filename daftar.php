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
        <h1 align="center">Pendaftaran Anggota</h1>
        <form method="post" action="scan.php">
            <p>
                <label for="">NIS</label>
                <input type="number" name="nis" style="margin-left : 155px;">
                <br>
                <br>
                <label for="">Nama</label>
                <input type="text" name="nama" style="margin-left : 137px;">
                <br>
                <br>
                <label for="">Kelas</label>
                <select name="kelas" id="kelas" style="margin-left : 140px;">
                    <option value="pilih kelas">--- PILIH KELAS ---</option>
                    <option value="XI RPL 1">XI RPL 1</option>
                    <option value="XI RPL 2">XI RPL 2</option>
                    <option value="XI RPL 3">XI RPL 3</option>
                    <option value="XI RPL 4">XI RPL 4</option>
                </select>
                <br>
                <br>
                <label for="">Tempat, Tanggal Lahir</label>
                <input type="text" name="tempat">
                <input type="date" name="ttl">
            </p>
            <br>
            <input type="submit" value="Kirim" style="margin-left: 200px;">
        </form>
    </div>

    <footer align="center">
        @anjarfaudzan
    </footer>
</body>

</html>