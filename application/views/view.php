<h1>Data Kegiatan</h1><hr>
<a href="<?php echo base_url("index.php/siswa/export"); ?>">Export ke Excel</a><br><br>

<table border="1" cellpadding="8">
<tr>
	<th>NO</th>
	<th>Nama Kegiatan</th>
	<th>Tanggal </th>
	<th>Gambar</th>
	<th>Keterangan Kegiatan</th>
</tr>

<?php
if( ! empty($siswa)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
	foreach($siswa $data){ // Lakukan looping pada variabel siswa dari controller
		echo "<tr>";
		echo "<td>".$data->id."</td>";
		echo "<td>".$data->nama."</td>";
		echo "<td>".$data->foto."</td>";
		echo "<td>".$data->tgl_kegiatan."</td>";
		echo "<td>".$data->keterangan."</td>";
		echo "</tr>";
	}
}else{ // Jika data tidak ada
	echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}
?>
</table>
