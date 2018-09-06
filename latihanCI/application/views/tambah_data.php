<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap//css/bootstrap-theme.css">
	<title>Tambah data Siswa</title>
</head>
<body>
	<div class="container">
	<h1 align="center">~ Tambah Data Siswa ~</h1>
	<form class="form-group" method="POST" action = "<?php echo base_url();?>index.php/beranda/tambahdata">
	<table align="center">
		<tr>
			<td>Nama</td>
			<td>Kelas</td>
			<td>Password</td>
		</tr>
		<tr>
			<td><input class="form-control" type="text" name="nama"></td>
			<td><input class="form-control" type="text" name="kelas"></td>
			<td><input class="form-control" type="password" name="password"></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<center>
					<br>
				<button class="btn btn-primary" type="submit">
					<span class="glyphicon glyphicon-plus"></span>
					Tambah
				</button>
				</center>
			</td>
		</tr>
	</table>
	</form>
	
	
</div>
</body>
</html>
