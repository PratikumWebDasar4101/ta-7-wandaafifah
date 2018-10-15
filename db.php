<?php

$servername = "localhost";

$username = "root";

$password = "";

$db_name = "mahasiswa";

$conn = mysqli_connect($servername,$username,$password,$db_name);

if (!$conn) {

    die("Gagal: " . mysqli_connect_error());

}

?>