<?php
include"koneksi.php";
$nis=$_GET['nis'];
$sql="select * from tsiswaprestasi where nis='$nis'";
$hasil=$conn->query($sql);
$data=$hasil->fetch_assoc();
$nama_siswa=$data['nama_siswa'];
$asal_sekolah=$data['asal_sekolah'];
$nilai_uas=$data['nilai_uas'];

echo"<h2 align=center>Update Data Siswa berprestasi</h2>";
echo"<form method='POST' action='target_edit.php'>
<table width=100% border=1>
<tr>
	<td>NIS</td>
	<td><input type=hidden name=nis value='$nis'>$nis  </td>
</tr>
<tr>
	<td>NAMA SISWA</td>
	<td><input type=text name=nama_siswa value='$nama_siswa'></td>
</tr>
<tr>
	<td>ASAL SEKOLAH</td>
	<td><input type=text name=asal_sekolah value='$asal_sekolah'></td>
</tr>
<tr>
	<td>NILAI UAS</td>
	<td><input type=text name=nilai_uas value='$nilai_uas'></td>
</tr>
<tr>
	<td></td>
	<td><input type=submit value='UPDATE DATA'></td>
</tr>
</table></form>
";
?>
