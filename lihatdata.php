<?php

require_once("db.php");





?>

<!DOCTYPE html>
<head>
    <body>
<table>

<td>
   <form action="search.php" method="get">
                    <input type="text" name="cari" placeholder="Cari Nim Mahasiswa">
                    <input type="submit" name="Cari">
            
        </form>
</td>
<tr>
    <th>Nama</th>
    <th>Nim</th>
    <th>Aksi</th>
</tr>
<?php
$sql = "SELECT * FROM data";
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
    echo "0 Result";

}
mysqli_close($conn);
?>
</body>
</table>

</html>

<h3><a href="form.php"> isi input data mahasiswa</a></h3>