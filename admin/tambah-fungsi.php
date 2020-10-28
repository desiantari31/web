<?php
include "../koneksi.php";
if (isset($_POST['tambah'])) {
    $insertSql = mysqli_query($conf, "INSERT into binatang values('', '$_POST[nama]'
    ,'$_POST[jenisbinatang]','$_POST[namalatin]')");
if ($insertSql) {
    echo "<script type='text/javascript'>alert('Data berhasil disimpan...!'); location.href=\"home.php\";</script>";
}
}
?>