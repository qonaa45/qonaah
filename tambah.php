<?php
//MENGGUNAKAN KONEKSI 
include "koneksi.php";
?>

<b>Tambah Data Mahasiswa</b>
<hr>

<form method="POST" action="">
	<table border="1">
		<tr>
			<td>NPM</td>
			<td>:</td>
			<td>
				<input type="text" name="npm" required>
			</td>
		</tr>
		<tr>
			<td>NAMA</td>
			<td>:</td>
			<td>
				<input type="text" name="nama" required>
			</td>
		</tr>
		<tr>
			<td>PRODI</td>
			<td>:</td>
			<td>
				<input type="text" name="prodi" required>
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>
				<button type="submit" name="tombol_save">SAVE</button>
			</td>
		</tr>

	</table>
</form> 

<?php
// MENYIMPAN DATA
if (isset($_POST['tombol_save'])) {
	$query = mysqli_query($koneksi,"INSERT INTO tb_mahasiswa (npm, nama, prodi) VALUES ('$_POST[npm]', '$_POST[nama]', '$_POST[prodi]' )");

	if ($query) {
		echo "Data berhasil ditambahkan!";
		header ('location:index.php');
	} else {
		echo "Data gagal ditambahkan!";
	}

}
?>