<?php
include"koneksi.php";
$nis=$_POST['nis'];
$nama_siswa=$_POST['nama_siswa'];
$asal_sekolah=$_POST['asal_sekolah'];
$nilai_uas=$_POST['nilai_uas'];
$sql="update tsiswaprestasi set nama_siswa='$nama_siswa',
asal_sekolah='$asal_sekolah',nilai_uas='$nilai_uas'
where nis='$nis'";

cek_crud($conn,$sql);
$conn->close();
header("Refresh:1; url=view.php");
?>
