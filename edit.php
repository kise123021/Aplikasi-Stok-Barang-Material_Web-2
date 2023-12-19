<?php
//include('dbconnected.php');
include('dbconnect.php');

$id = $_GET['id_mt'];
$nama = $_GET['nama_mt'];
$produsen = $_GET['produsen_mt'];
$genre = $_GET['genre_mt'];
$stok = $_GET['stok_mt'];

//query update
$query = "UPDATE material SET nama_material='$nama' , produsen_material='$produsen' , genre_material='$genre' , stok_material='$stok' WHERE id_material='$id' ";

if (mysqli_query($conn, $query)) {
 # credirect ke page index
 header("location: halaman3.php");
 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

mysqli_close($conn);
?>