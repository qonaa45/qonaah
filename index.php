</<?php 
//MENGGUNAKAN KONEKSI 
include "koneksi.php";

echo "<b>DATA MAHASISWA</b><hr>";
echo "<a href='tambah.php'>Tambah Data Mahasiswa</a> <br>";

echo "<form method='POST' action=''>";
	echo "<input type='text' name='cari'>";
	echo "<button type='submit' name='tombol_cari'>Cari</button>";
echo "</form>";

echo "<table border=1>";

	echo "<tr>";
		echo "<th> NPM </th>";
		echo "<th> Nama Mahasiswa </th>";
		echo "<th> PRODI </th>";
		echo "<th colspan=2> Aksi </th>";
	echo "</tr>";
	
	if (isset($_POST['tombol_cari'])) {
		// KETIKA MENCARI DATA
		$query = mysqli_query($koneksi, " SELECT * FROM tb_mahasiswa WHERE nama LIKE '%$_POST[cari]%' ");
	}else{
		// KETIKA TIDAK MENCARI DATA
		$query = mysqli_query($koneksi, " SELECT * FROM tb_mahasiswa ");
	}
	while ($tampilkan = mysqli_fetch_array($query)) {
		echo "<tr>";
			echo "<td>$tampilkan[npm] </td>";
			echo "<td>$tampilkan[nama] </td>";
			echo "<td>$tampilkan[prodi] </td>";  
			echo "<td> <a href='edit.php?npm=$tampilkan[npm]' >Edit </a></td>"; 
			echo "<td> <a href='hapus.php?npm=$tampilkan[npm]' >Hapus </a></td>";  
		echo "</tr>";
		
}
echo "</table>";
?>