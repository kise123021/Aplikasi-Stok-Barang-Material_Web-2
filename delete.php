<?php 

$id = $_GET['id'];

//include(dbconnect.php);
include('dbconnect.php');

//query hapus
$query = "DELETE FROM material WHERE id_material = '$id' ";

if (mysqli_query($conn , $query)) {
 # redirect ke index.php
 header("location:halaman3.php");
}
else{
 echo "ERROR, data gagal dihapus". mysqli_error($conn);
}

mysqli_close($conn);
?>