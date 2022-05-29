<?php
include"koneksi.php";
$nis=$_POST['nis'];
$nama_siswa=$_POST['nama_siswa'];
$asal_sekolah=$_POST['asal_sekolah'];
$nilai_uas=$_POST['nilai_uas'];
$sql="insert into tsiswaprestasi
(nis,nama_siswa,asal_sekolah,nilai_uas)
values('$nis','$nama_siswa','$asal_sekolah','$nilai_uas')";

cek_crud($conn,$sql);
$conn->close();
header("Refresh:1; url=view.php");
?>
