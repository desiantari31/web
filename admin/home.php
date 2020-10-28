<?php
include "../koneksi.php";
session_start();
$tampil = mysqli_query($conf, "SELECT * FROM binatang");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
            <!-- Font Awesome icons (free version)-->
            <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="styles.css" rel="stylesheet" />
</head>
 
<body>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">ULLL</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="../images/deska.jpg" alt="" /></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#binatang">DATA BINATANG</a></li>
                </ul>
            </div>
        </nav>
<!-- end Nav -->
<div class="container">         
  <table class="table">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Jenis Binatang</th>
        <th>Nama Latin</th>
      </tr>
    </thead>
    <tbody>  
    <?php
    $no=1;
        while($r=mysqli_fetch_array ($tampil)){
            echo"
            <tr>
            <td>$r[nama]</td>
            <td>$r[jenisbinatang]</td>
            <td>$r[namalatin]</td>
            <td>
            <a href='edit.php'><button type='button' class='btn btn-primary btn-sm'>Edit</button></a>
            <a href='hapus.php'><button type='button' class='btn btn-warning btn-sm'>Hapus</button></a> 
            </td>
          </tr>";
          $no++;
        
        }
    ?>
      <div class="container">
        <h2>Data Binatang</h2>
        <p>Selamat datang <b><?php echo $_SESSION['nama']; ?></b>, Silakan mengelola data binatang di bawah ini...!</p>
        <p><a href="tambah.php"><button type="button" class="btn btn-danger">Tambah Data</button></a></p>
        <table class="table">
        <thead>
    
    </tbody>
  </table>
  <p><a href="../logout.php"><button type="button" class="btn btn-info">Logout</button></a></p>
</div>
</body>
</html>
