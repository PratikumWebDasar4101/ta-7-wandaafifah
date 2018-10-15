
<!DOCTYPE html>

<html>

<head>

	<title></title>

</head>

<body>

		<center>

		<h1>Input Mahasiswa Baru</h1>





		<form  action="prosesinput.php" method="POST" enctype="multipart/form-data">


			Nama : <input type="text" name="nama"  minlength="1" maxlength="20" ><br></br>

			NIM : <input type="number"  name="nim" maxlength="10"  required ><br></br>

			Jenis Kelamin :	<input type="radio" name="jeniskelamin" value="Laki-Laki" required>Laki-laki

					 		<input type="radio" name="jeniskelamin" value="Perempuan" required>Perempuan

					 		<br>

					 			</br>

			Program Studi :

					<select name="prodi">

						<option>Manajemen Informatika</option>		

						<option>perhotelan</option>

						<option>DKV</option>

						<option>Ilmu komunikasi</option>

						<option>Administrasi Bisnis</option>

						<option></option>

					</select>

						<br>

					<br>

			Fakultas :

					<select name="fakultas">

						<option>FIT</option>

						<option>FKB</option>

						<option>FRI</option>

						<option>FIK</option>	

						<option>FIF</option>

						<option>FEB</option>

						<option>FTE</option>

					</select>

						<br>

					<br>
			Asal: <input type="text" name="asal"><br><br>

			Moto Hidup:<input type="textarea" name="motohidup"><br><br>
			
			<input type="submit" name="kirim" value="kirim">
	</form>

</body>

</center>

</html>