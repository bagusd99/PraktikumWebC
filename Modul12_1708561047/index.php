<?php 
require 'function.php';

if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$nama = $_SESSION["username"];
$type = $_SESSION["role"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Unud</title> 
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            <?php echo ($type=='Mahasiswa') ? "background-color: #ffff;" : "background-color: #ffaa64;"; ?>
        }
    </style>
</head>
<body>
  <div class="kiri">
    <div class="logo">
        <img class="unud" src="https://upload.wikimedia.org/wikipedia/id/2/2d/Logo-unud-baru.png" alt="unud">
    </div>
    <div class="isi">
        <h3>ARTIKEL POPULER</h3>
    </div>
    <div class="isi-kiri">
        <a href="#">
            <h4>Desain Web</h4>
        </a>
    </div>
    <div class="isi-kiri">
        <a href="#">
            <h4>HTML</h4>
        </a>
    </div>
    <div class="isi-kiri">
        <a href="#">
            <h4>CSS</h4>
        </a>
    </div>
    <div class="isi-kiri">
        <a href="#">
            <h4>Lain-lain</h4>
        </a>
    </div>
</div>

<div class="kanan">
    <div class="jumbotron"></div>
    <div class="navbar">
        <ul>
            <li>
                <a href="index.php">
                    <h3>HOME</h3>
                </a>
            </li>
            <li>
                <a href="tentangkampus.php">
                    <h3>TENTANG</h3>
                </a>
            </li>
            <li>
                <a href="pengajar.php">
                    <h3>PENGAJAR</h3>
                </a>
            </li>
            <li>
                <a href="kontak.php">
                    <h3>KONTAK</h3>
                </a>
            </li>
            <li>
                <a href="logout.php">
                <h3>LOG OUT</h3>
            </a>
            </li>
        </ul>
    </div>

    <div class="content">
        <h1 style="text-align: center;">Selamat Datang <?= $nama; ?>, <?= $type; ?> Di Universitas Udayana</h1>
        <h2 style="color: black;">Berita Terkini</h2>
        <img src="https://denpasarkota.go.id/uploads/berita/berita_192709090912_UniversitasUdayana(Unud)SiapMenyambut1614IlmuwanMudaDalamPekanIlmiahMahasiswaNasional(Pimnas)Ke-32tahun2019.jpg" alt="foto"
            style="width: 250px; float: left; margin-right: 25px; margin-bottom: 35px;">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa voluptatibus repudiandae voluptatum ab temporibus. Quod soluta mollitia magnam expedita accusamus! Vel inventore quis laboriosam officiis repellendus velit quidem dignissimos a.</p>
        <a target="_blank"
            href="https://www.unud.ac.id/in/berita3307-Polda-Bali-Kolaborasi-dengan-Universitas-Udayana-Ciptakan-Rasa-Aman-dan-Nyaman-Bagi-Masyarakat-di-Tengah-Pandemi-COVID-19.html">Baca
            Selengkapnya</a>
        <h2 style="color: black; clear: both;">Berita Lainnya</h2>
        <div class="gambar1">
        <img src="https://lh3.googleusercontent.com/proxy/-oRRyAGCdpbxRVCY0uzg7TCZtxVRap-ZaVCjA_URhTEiSFtYYBatgF55cvCgTXsuF-jANVM-0-7iUHTW46XjX09ZzYTaMuWjiyZI4OXsX1aXKGw7xejDJJAhdcJy" alt="foto">
        <img src="https://lh3.googleusercontent.com/proxy/-oRRyAGCdpbxRVCY0uzg7TCZtxVRap-ZaVCjA_URhTEiSFtYYBatgF55cvCgTXsuF-jANVM-0-7iUHTW46XjX09ZzYTaMuWjiyZI4OXsX1aXKGw7xejDJJAhdcJy" alt="foto">
        <img src="https://lh3.googleusercontent.com/proxy/-oRRyAGCdpbxRVCY0uzg7TCZtxVRap-ZaVCjA_URhTEiSFtYYBatgF55cvCgTXsuF-jANVM-0-7iUHTW46XjX09ZzYTaMuWjiyZI4OXsX1aXKGw7xejDJJAhdcJy" alt="foto">

    </div>
    </div>
</div>
<div class="footer">
    <h2>UNIVERSITAS UDAYANA</h2>
</div>
</body>
</html>