<?php
//MENGGUNAKAN KONEKSI 
include "koneksi.php";
?>

<b>Edit Data Mahasiswa</b>
<hr>
Apakah Anda Yakin Menghapus Data Ini? <br>
<form method="POST" action="">
	<button type="submit" name="tombol_hapus">Ya</button>
	<button type="submit" name="tombol_batal">Tidak</button>
</form>



<?php
//BATAL HAPUS
if (isset($_POST['tombol_batal'])){
	header ('location:index.php');
}

// YA HAPUS
if (isset($_POST['tombol_hapus'])) {
	$query = mysqli_query($koneksi, "DELETE FROM tb_mahasiswa  WHERE npm='$_REQUEST[npm]' ");
		

if ($query) {
		echo "Data Berhasil Dihapus!";
		header ('location:index.php');
	}else{
		echo "Data Gagal Dihapus!";
	}
		
	
}

?>
