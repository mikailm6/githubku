<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap//css/bootstrap-theme.css">
	<title>Edit data Siswa</title>
</head>
<body>
	<h1 align="center">~ Edit Data Siswa ~</h1>
	<?php extract($siswa); ?>
	<form class="form-group" method="POST" action = "<?php echo base_url();?>index.php/beranda/update/<?php echo $id; ?>">
	<table align="center">
		<tr>
			<td>Nama</td>
			<td>Kelas</td>
			<td>Password</td>

		</tr>
		<tr>
			<td><input class="form-control" type="text" value="<?php echo $nama;?>" name="nama"></td>
			<td><input class="form-control" type="text" value="<?php echo $kelas;?>" name="kelas"></td>
			<td><input class="form-control" type="password" value="<?php echo $password;?>" name="password"></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<br>
				<center>
				<button class="btn btn-primary" type="submit">
					<span class="glyphicon glyphicon-edit"></span>
					Edit
				</button>
				</center>
			</td>
		</tr>
	</table>
	</form>
	
	

</body>
</html>
