<?php
session_start();
if (isset($_SESSION['login_in'])) {
    include "../koneksi.php";
    if (isset($_GET['id_binatang'])) {
    $tampilbinatang = mysqli_query(conf, "SELECT * FROM binatang WHERE id_binatang = '$_GET[id_binatang]'");
    $binatang = mysqli_fetch_array($tampilbinatang);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Edit Data</h2>
  <p>Silakan mengedit data binatang pada form dibawah ini...!</p>
  <form class="" method="POST" action="edit-fungsi.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="nama">Nama:</label>
      <div class="col-sm-10">
        <input type="nama" class="form-control" id="nama" placeholder="Nama binatang" name="nama">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="jenisbinatang">Jenis Binatang:</label>
      <div class="col-sm-10">          
        <input type="jenisbinatang" class="form-control" id="jenisbinatang" placeholder="Jenis Binatang" name="jenisbinatang">
        </div>
      </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="namalatin">Nama Latin:</label>
      <div class="col-sm-10">          
        <input type="namalatin" class="form-control" id="namalatin" placeholder="Nama Latin" name="namalatin">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="edit">Simpan</button>
      </div>
    </div>
  </form>
</div>
</body>
</html>
<?php
} else {
  header("location:../index.php");
}
?>