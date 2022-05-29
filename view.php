<?php
#view.php
include"koneksi.php";
$sql="SELECT * FROM tsiswaprestasi";
$hasil=$conn->query($sql);
$k=1;
#Header table view
echo"<h2 align=center>Pendataan Siswa Berprestasi</h2>
<a href=form_input.php>Tambah Data</a> 
<table width=100% border=1>
<tr>
<td>No</td>
<td>NIS</td>
<td>Nama Siswa</td>
<td>Asal Sekolah</td>
<td>Nilai UAS</td>
<td>Aksi</td>
</tr>";
while($data=$hasil->fetch_assoc()){
echo"<tr>
<td>$k</td>
<td>$data[nis]</td>
<td>$data[nama_siswa]</td>
<td>$data[asal_sekolah]</td>
<td>$data[nilai_uas]</td>
<td>
<a href=form_edit.php?nis=$data[nis]>Edit</a> 
<a href=hapus.php?nis=$data[nis]>Hapus</a></td>
</tr>";
$k++;
}
echo"</table>";
?>
