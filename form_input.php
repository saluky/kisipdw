<?php
echo"<h2 align=center>Pendataan Siswa berprestasi</h2>";
echo"<form method='POST' action='target_input.php'>
<table width=100% border=1>
<tr>
	<td>NIS</td>
	<td><input type=text name=nis></td>
</tr>
<tr>
	<td>NAMA SISWA</td>
	<td><input type=text name=nama_siswa></td>
</tr>
<tr>
	<td>ASAL SEKOLAH</td>
	<td><input type=text name=asal_sekolah></td>
</tr>
<tr>
	<td>NILAI UAS</td>
	<td><input type=text name=nilai_uas></td>
</tr>
<tr>
	<td></td>
	<td><input type=submit value=SIMPAN></td>
</tr>
</table></form>
";
?>