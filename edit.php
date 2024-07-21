<?php
//MENGGUNAKAN KONEKSI 
include "koneksi.php";
?>

<b>Edit Data Mahasiswa</b>
<hr>

<?php
$query = mysqli_query($koneksi, " SELECT * FROM tb_mahasiswa WHERE npm='$_REQUEST[npm]' ");
while ($tampilkan = mysqli_fetch_array($query)) {
	?>

	<form method="POST" action="">
	<table border="1">
		<tr>
			<td>NPM</td>
			<td>:</td>
			<td>
				<input type="text" name="npm" VALUE="<?php  echo $tampilkan['npm'];?>" required readonly>
			</td>
		</tr>
		<tr>
			<td>NAMA</td>
			<td>:</td>
			<td>
				<input type="text" name="nama" VALUE="<?php  echo $tampilkan['nama'];?>" required>
			</td>
		</tr>
		<tr>
			<td>PRODI</td>
			<td>:</td>
			<td>
				<input type="text" name="prodi" vALUE="<?php  echo $tampilkan['prodi'];?>" required>
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>
				<button type="submit" name="tombol_edit">EDIT</button>
			</td>
		</tr>

	</table>
</form> 


	<?php
}
?>



<?php
//MENGEDIT DATA
if (isset($_POST['tombol_edit'])) {
	$query = mysqli_query($koneksi, "UPDATE tb_mahasiswa SET nama='$_POST[nama]' WHERE npm='$_POST[npm]' ");

	if ($query) {
		echo "Data Berhasil Diedit!";
		header ('location:index.php');
	}else{
		echo "Data Gagal Diedit!";
	}
}
?>
