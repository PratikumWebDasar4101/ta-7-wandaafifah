<?php

require_once("db.php");
$value = $_GET["cari"];

$sql = "SELECT * FROM data where nim like'%$value%'";
$result = mysqli_query($conn,$sql)
?>

<html>
    <body>

        <table border="1">
</tr>

<tr>
    <th>Nama</th>
    <th>Nim</th>
    <th>Aksi</th>
</tr>
<?php
$result = mysqli_query($conn,$sql);
$row = mysqli_num_rows($result);
if(mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?php echo $row['nama']?></td>
            <td><?php echo $row['nim']?></td>
            <td> <a href="delete.php?id=<?php echo $row['id']?>">delete</a>

            </tr>
            <?php

        }

    }else{
        echo "0 result";

    }

    mysqli_close($conn);

    ?>
      <table>
      <a href="lihatdata.php">kembali kelihat data</a>
</body>


</html>


<?php

require_once("db.php");
$value = $_GET["cari"];

$sql = "SELECT * FROM data where nim like'%$value%'";
$result = mysqli_query($conn,$sql)
?>

<html>
    <body>

        <table border="1">
</tr>

<tr>
    <th>Nama</th>
    <th>Nim</th>
    <th>Aksi</th>
</tr>
<?php
$result = mysqli_query($conn,$sql);
$row = mysqli_num_rows($result);
if(mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?php echo $row['nama']?></td>
            <td><?php echo $row['nim']?></td>
            <td> <a href="delete.php?id=<?php echo $row['id']?>">delete</a>

            </tr>
            <?php

        }

    }else{
        echo "0 result";

    }

    mysqli_close($conn);

    ?>
      <table>
      <a href="lihatdata.php">kembali kelihat data</a>
</body>


</html>

