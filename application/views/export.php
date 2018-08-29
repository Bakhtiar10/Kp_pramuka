<h1>Data Anggota</h1><hr>
<a href="<?php echo base_url("index.php/anggota/export"); ?>">Export ke Excel</a><br><br>

<table border="1" cellpadding="8">
<tr>
<th>No</th>
<th>Nama</th>
<th>Agama</th>
<th>Jenis Kelamin</th>
<th>Gol Darah</th>
<th>Alamat</th>
</tr>

<?php
if( ! empty($anggota)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
	foreach($anggota $data){ // Lakukan looping pada variabel siswa dari controller
		echo "<tr>";
		echo "<td>".$data->id."</td>";
		echo "<td>".$data->nama."</td>";
		echo "<td>".$data->agama."</td>";
		echo "<td>".$data->jenis_kelamin."</td>";
		echo "<td>".$data->gol_darah."</td>";
		echo "<td>".$data->alamat."</td>";
		echo "</tr>";
	}
}else{ // Jika data tidak ada
	echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}
?>
</table>
