<?php

session_start();

require_once("db.php");



$id = $_GET["id"];

$sql = "DELETE FROM data WHERE id=$id";

if (mysqli_query($conn, $sql)) {

    header("Location: lihatdata.php");

}else {

    echo "Gagal";

}

?>