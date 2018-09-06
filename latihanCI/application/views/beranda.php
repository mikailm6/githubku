<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap//css/bootstrap-theme.css">
	<title>Data Siswa</title>
</head>
<body>
	<div class="container">
	<h1 class="page-header text-center">~ DATA SISWA MADINATUL QURAN ~</h1>
	<center>
	<a href="<?php echo base_url();?>index.php/beranda/linktambahdata">
		<span class="glyphicon glyphicon-plus">Tambah Data</span>
	</a>
	</center>
	<br>
	<br>
	<table border="1" align="center" class="table text-center table-striped" >
		<tr class="text-center">
		<thead class="thead-dark">
		<th>ID</th>
		<th>NAMA</th>
		<th>KELAS</th>
		<th>PASSWORD</th>
		<th>ACTION</th>
		</thead>
		</tr>
		<tr>

			<?php
			foreach ($siswa as $siswa ) {
			?>
			<td><?php echo $siswa->id; ?></td>
			<td><?php echo $siswa->nama; ?></td>
			<td><?php echo $siswa->kelas; ?></td>
			<td><?php echo $siswa->password; ?></td>
			<td>
				<a href="<?php echo base_url();?>index.php/beranda/linkeditdata/<?php echo $siswa->id; ?>"><span class="glyphicon glyphicon-pencil"> Edit</span></a>
				<p>   </p>
				<a href="<?php echo base_url();?>index.php/beranda/deletesiswa/<?php echo $siswa->id ?>"><span class="glyphicon glyphicon-remove"> Delete</span></a>
			</td>


			</tr>	
			<?php
			}
			?>
	</table>
	<br>
	</div>

</body>
</html>