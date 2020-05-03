<?php
$koneksi = mysqli_connect('localhost', 'root', 'root', 'paging');

$halaman = 5;
$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
$result = mysqli_query($koneksi,"SELECT * FROM user");
$total = mysqli_num_rows($result);
$pages = ceil($total/$halaman);            
$query = mysqli_query($koneksi,"select * from user LIMIT $mulai, $halaman");
$no = $mulai+1;
?>
       
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paging</title>
    <style>
        body{
            background-color: #6983aa;
            font-family: Arial, Helvetica, sans-serif;
        }
        .card1 {
            background-color: #f4f4f4;
            border-radius: 10px;
            margin-left: 34%;
            margin-top: 5% ;
            margin-bottom: 1% ;
            padding: 2%;
            width: 30%;
            align-items: center;
            display:inline-block;
        }
        .card2 {
            background-color: #f4f4f4;
            border-radius: 10px;
            margin-left: 34%;
            margin-bottom: 1% ;
            padding: 2%;
            width: 30%;
            align-items: center;
            display:inline-block;
        }
        table{
            border-collapse: collapse; 
            text-align: center; 
            margin: auto;
            background-color: white;
            border-radius: 5px;
            width: 100%;
  
        }
        .table tr,td,th{
            border-bottom: 1px solid #8ec6c5; 
            padding-top: 3%;
            padding-bottom: 3%;
        }

    </style>
</head>
<body>
<div class="card1">
        <table >
            <tr>
                <th>No</th>
                <th>Nama</th>		
            </tr>
            <?php 
                while ($data = mysqli_fetch_assoc($query)) {
                    ?>
                    <tr>
                    <td><?php echo $no++; ?></td>                  
                    <td><?php echo $data['nama']; ?></td>                       
                    </tr>
                    <?php               
                } 
            ?>
        </table>
    </div>

    <div class="card2">
      <center>
        <?php for ($i=1; $i<=$pages ; $i++){ ?>
        <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php } ?>
      </center>
      </div>

    
</body>
</html>



   