<?php
 $buku = [
      [
          "buku"=>"Dilan 1990",
          "penerbit"=>"Pastel Books",
          "tahun_terbit"=>"2014"
      ],
      [
          "buku"=>"Negeri 5 Menara",
          "penerbit"=>"Gramedia",
          "tahun_terbit"=>"2009"
      ],
      [
        "buku"=>"Laskar pelangi",
        "penerbit"=>"Bentang Pustaka",
        "tahun_terbit"=>"2005"
      ],
      [
        "buku"=>"Sang Pemimpi",
        "penerbit"=>"Bentang Pustaka",
        "tahun_terbit"=>"2006"
      ]
      ];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
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
        <h1 align="center">Daftar Buku</h1>
        <center>
            <table border="5" cellpadding="10" cellspasing="0">
                <tr style="background-color: bisque;">
                    <th> Judul Buku</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                </tr>
                <?php foreach($buku as $buku1) :    ?>
                <tr style="background-color: bisque;">
                    <td><?php echo $buku1["buku"]?></td>
                    <td><?php echo $buku1["penerbit"]?></td>
                    <td align="center"><?php echo $buku1["tahun_terbit"]?></td>
                </tr>
                <?php endforeach; ?>
        </center>
        </table>
    </div>

    <footer align="center">
        @anjarfaudzan
    </footer>
</body>

</html>