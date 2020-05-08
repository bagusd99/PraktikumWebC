<?php 
require 'function.php';

if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
$type = $_SESSION["role"];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sistem Informasi Universitas Udayana</title>
    <link rel="stylesheet" href="style.css" />
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
            <h1>SEJARAH</h1>
            <p>Cikal bakal Unud adalah Fakultas Sastra Udayana cabang Universitas Airlangga yang diresmikan oleh P. J.
                M.
                Presiden Republik Indonesia Ir. Soekarno, dibuka oleh J. M. Menteri P.P dan K. Prof. DR. Priyono pada
                tanggal 29
                September 1958 sebagaimana tertulis pada Prasasti di Fakultas Sastra Jalan Nias Denpasar.
                <br>Udayana secara sah berdiri pada tanggal 17 Agustus 1962 dan merupakan perguruan tinggi negeri
                tertua
                di daerah Provinsi Bali. Sebelumnya, sejak tanggal 29 September 1958 di Bali sudah berdiri sebuah
                Fakultas yang
                bernama Fakultas Sastra Udayana sebagai cabang dari Universitas Airlangga Surabaya. Fakultas Sastra
                Udayana
                inilah yang merupakan embrio dari pada berdirinya Universitas Udayana. Berdasarkan Surat Keputusan
                Menteri
                PTIPNo.104/1962, tanggal 9 Agustus 1962, Universitas Udayana secara syah berdiri sejak tanggal 17
                Agustus 1962.
                Tetapi oleh karena hari lahir Universitas Udayana jatuh bersamaan dengan hari Proklamasi Kemerdekaan
                RepublikIndonesia maka perayaan Hari Ulang Tahun Universitas Udayana dialihkan menjadi tanggal 29
                September
                dengan mengambil tanggal peresmian Fakultas Sastra yang telah berdiri sejak tahun 1958.
            </p>
            <h1>Visi</h1>
            <p>Terwujudnya sebuah organisasi penjaminan mutu yang profesional untuk mencapai VISI
                Unud yaitu : Unggul, Mandiri
                dan Berbudaya.
            </p>
            <h1>Misi</h1>
            <ol>
                <li>
                    <p>Mendorong sumberdaya manusia di lingkungan UNUD agar senantiasa memiliki kesadaran dan tanggung
                        jawab akan
                        budaya mutu.</p>
                </li>
                <li>
                    <p>kompetensi staf Badan Penjaminan Mutu, baik di tingkat universitas, fakultas, jurusan/program
                        studi, lembaga dan unit lainnya secara terus menerus, dalam menangani penjaminan mutu secara
                        profesional.
                    </p>
                </li>
                <li>
                    <p>Mendorong, menciptakan, mengembangkan, dan memelihara secara terus menerus sistem penjaminan mutu
                        di
                        lingkungan UNUD.</p>
                </li>
            </ol>
        </div>
    </div>
    <div class="footer">
        <h2>UNIVERSITAS UDAYANA</h1>
    </div>
</body>

</html>