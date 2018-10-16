<?php
require_once('db.php');
$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM data WHERE id = '$id'");
$row = mysqli_fetch_assoc($sql);
if(isset($_POST['proses'])){
 $nama				= $_POST["nama"];
 $nim 				= $_POST["nim"];
 $jeniskelamin		= $_POST["jeniskelamin"];
 $prodi				= $_POST["prodi"];
 $fakultas			= $_POST["fakultas"];
 $asal 				= $_POST["asal"];
 $motohidup		= $_POST["motohidup"];
 $sql = "UPDATE mdata SET nama = '$nama', nim = '$nim', jeniskelamin = '$jeniskelamin', prodi = '$prodi', fakultas = '$fakultas', asal = '$asal', motohidup = '$motohidup' WHERE id='$id'";
 if (mysqli_query($conn, $sql)) {
 header('Location: lihatdata.php');
 }else {
 echo "Data gagal diupload! " . $sql . "<br?" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<!DOCTYPE html>

<html>

<head>

	<title></title>

</head>

<body>

		<h1>Edit Data</h1>

		<form method="POST">

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