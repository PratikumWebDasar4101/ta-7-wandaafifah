<?php



require_once("db.php");




    $nama = $_POST["nama"];

    $nim = $_POST["nim"];

    $jeniskelamin = $_POST["jeniskelamin"];

    $prodi = $_POST["prodi"];

    $fakultas = $_POST["fakultas"];

    $asal = $_POST["asal"];

    $motohidup = $_POST["motohidup"];


        $sql = "INSERT INTO data VALUES ('','$nama',$nim,'$jeniskelamin','$prodi','$fakultas','$asal','$motohidup')";



        if (mysqli_query($conn, $sql)) {

            mysqli_close($conn);

            echo "Data baru berhasil dibuat";

            echo "Silahkan <a href='lihatdata.php'> Lihat Data </a>";

        }else {

            echo "Error: " . $sql . "<br>" . mysqli_error($conn);

        }

    

?>