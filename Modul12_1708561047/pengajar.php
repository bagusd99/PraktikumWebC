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
            <a href="#" >
                <h4>Desain Web</h4>
            </a>
        </div>
        <div class="isi-kiri">
            <a href="#" >
                <h4>HTML</h4>
            </a>
        </div>
        <div class="isi-kiri">
            <a href="#" >
                <h4>CSS</h4>
            </a>
        </div>
        <div class="isi-kiri">
            <a href="#" >
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
                <div class="pengajar">
                    <p class="namapengajar">I Gusti Ngurah Anom Cahyadi Putra, ST., M.Cs</p>
                    <img src="https://simdos.unud.ac.id/uploads/file_foto_dir/fc327717d391e35dea37e9467ecfe88e.jpg" alt="">
                    <table>
                        <tr>
                            <td>Jabatan terakhir</td>
                            <td>:</td>
                            <td>TENAGA PENGAJAR</td>
                        </tr>
                        <tr>
                            <td>NIP</td>
                            <td>:</td>
                            <td>198403172019031005</td>
                        </tr>
                        <tr>
                            <td>Fakultas</td>
                            <td>:</td>
                            <td>Fakultas Matematika dan Ilmu Pengetahuan Alam</td>
                        </tr>
                        <tr>
                            <td>Jurusan</td>
                            <td>:</td>
                            <td>Sarjana Teknik Informatika</td>
                        </tr>
                    </table>
                </div>
                <div class="pengajar">
                    <p class="namapengajar">I Gusti Ngurah Anom Cahyadi Putra, ST., M.Cs</p>
                    <img src="https://simdos.unud.ac.id/uploads/file_foto_dir/fc327717d391e35dea37e9467ecfe88e.jpg" alt="">
                    <table>
                        <tr>
                            <td>Jabatan terakhir</td>
                            <td>:</td>
                            <td>TENAGA PENGAJAR</td>
                        </tr>
                        <tr>
                            <td>NIP</td>
                            <td>:</td>
                            <td>198403172019031005</td>
                        </tr>
                        <tr>
                            <td>Fakultas</td>
                            <td>:</td>
                            <td>Fakultas Matematika dan Ilmu Pengetahuan Alam</td>
                        </tr>
                        <tr>
                            <td>Jurusan</td>
                            <td>:</td>
                            <td>Sarjana Teknik Informatika</td>
                        </tr>
                    </table>
                </div>
                <div class="pengajar">
                    <p class="namapengajar">I Gusti Ngurah Anom Cahyadi Putra, ST., M.Cs</p>
                    <img src="https://simdos.unud.ac.id/uploads/file_foto_dir/fc327717d391e35dea37e9467ecfe88e.jpg" alt="">
                    <table>
                        <tr>
                            <td>Jabatan terakhir</td>
                            <td>:</td>
                            <td>TENAGA PENGAJAR</td>
                        </tr>
                        <tr>
                            <td>NIP</td>
                            <td>:</td>
                            <td>198403172019031005</td>
                        </tr>
                        <tr>
                            <td>Fakultas</td>
                            <td>:</td>
                            <td>Fakultas Matematika dan Ilmu Pengetahuan Alam</td>
                        </tr>
                        <tr>
                            <td>Jurusan</td>
                            <td>:</td>
                            <td>Sarjana Teknik Informatika</td>
                        </tr>
                    </table>
                </div>
                <div class="pengajar">
                    <p class="namapengajar">I Gusti Ngurah Anom Cahyadi Putra, ST., M.Cs</p>
                    <img src="https://simdos.unud.ac.id/uploads/file_foto_dir/fc327717d391e35dea37e9467ecfe88e.jpg" alt="">
                    <table>
                        <tr>
                            <td>Jabatan terakhir</td>
                            <td>:</td>
                            <td>TENAGA PENGAJAR</td>
                        </tr>
                        <tr>
                            <td>NIP</td>
                            <td>:</td>
                            <td>198403172019031005</td>
                        </tr>
                        <tr>
                            <td>Fakultas</td>
                            <td>:</td>
                            <td>Fakultas Matematika dan Ilmu Pengetahuan Alam</td>
                        </tr>
                        <tr>
                            <td>Jurusan</td>
                            <td>:</td>
                            <td>Sarjana Teknik Informatika</td>
                        </tr>
                    </table>
                </div>
                <div class="pengajar">
                    <p class="namapengajar">I Gusti Ngurah Anom Cahyadi Putra, ST., M.Cs</p>
                    <img src="https://simdos.unud.ac.id/uploads/file_foto_dir/fc327717d391e35dea37e9467ecfe88e.jpg" alt="">
                    <table>
                        <tr>
                            <td>Jabatan terakhir</td>
                            <td>:</td>
                            <td>TENAGA PENGAJAR</td>
                        </tr>
                        <tr>
                            <td>NIP</td>
                            <td>:</td>
                            <td>198403172019031005</td>
                        </tr>
                        <tr>
                            <td>Fakultas</td>
                            <td>:</td>
                            <td>Fakultas Matematika dan Ilmu Pengetahuan Alam</td>
                        </tr>
                        <tr>
                            <td>Jurusan</td>
                            <td>:</td>
                            <td>Sarjana Teknik Informatika</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <h2>UNIVERSITAS UDAYANA</h1>
    </div>
</body>

</html>