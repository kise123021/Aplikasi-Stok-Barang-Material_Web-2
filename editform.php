<!DOCTYPE html>
<html lang="en">
<head>
	<title>Toko Material</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
	<script src="js/jquery.js"></script>
</head>
<body>

<?php 
$id = $_GET['id']; 

//koneksi database
include('dbconnect.php');

//query
$query = "SELECT * FROM material WHERE id_material='$id'";
$result = mysqli_query($conn, $query);

?>

<div class="container bg-info" style="padding-top: 20px; padding-bottom: 20px;">

	<h2>Update Data</h2>
	<hr>
	<form role="form" action="edit.php" method="get">

		<?php
		while ($row = mysqli_fetch_assoc($result)) {

		?>
		
		<input type="hidden" name="id_mt" value="<?php echo $row['id_material']; ?>">			

		<!-- form -->
		<div class="row">
		<div class="col-sm-8">
		<font size="4px">
			<form role="form" action="insert.php" method="post">
			<div class="form-group">
				<div class="form-group">
					<label>Nama Material</label><br>
					<input type="text" name="nama_mt" class="form-control" value="<?php echo $row['nama_material']; ?>">			
				</div>

				<div class="form-group">
					<label>Produsen</label><br>
					<input type="text" name="produsen_mt" class="form-control" value="<?php echo $row['produsen_material']; ?>">			
				</div>

				<div class="form-group">
					<label>Genre</label><br>
					<input type="text" name="genre_mt" class="form-control" value="<?php echo $row['genre_material']; ?>">			
				</div>

				<div class="form-group">
					<label>Stok</label><br>
					<input type="text" name="stok_mt" class="form-control" value="<?php echo $row['stok_material']; ?>">			
				</div>
				<br>
				<table>
					<tr>
						<td><button type="button" class="btn btn-success btn-block">Update</button></td>
						<td><button type="buttom" class="btn btn-warning btn-block">Kembali</button></td>
					</tr>
				</table>
				
				
			</form>
			</ul>
		</div>
	

		<?php 
		}
		mysqli_close($conn);
		?>				
	</form>
</div>


</body>
</html> 