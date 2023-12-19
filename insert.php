<?php
//add dbconnect

include('dbconnect.php');

$nama = $_POST['nama_material'];
$produsen = $_POST['produsen_material'];
$genre = $_POST['genre_material'];
$stok = $_POST['stok_material'];

//query

$query =  "INSERT INTO material(nama_material, produsen_material , genre_material , stok_material) VALUES('$nama' , '$produsen' , '$genre' , '$stok')";

if (mysqli_query($conn , $query)) {
 # code redicet setelah insert ke index
 header("location:halaman3.php");
}
else{
 echo "ERROR, tidak berhasil". mysqli_error($conn);
}

mysqli_close($conn);
?>