<?php
include"koneksi.php";
$nis=$_GET['nis'];
$sql="delete from tsiswaprestasi where nis='$nis'";

cek_crud($conn,$sql);
$conn->close();
header("Refresh:1; url=view.php");
?>
