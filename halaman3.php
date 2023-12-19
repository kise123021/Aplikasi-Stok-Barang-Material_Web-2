<?php
include "kepala.php";
include "kiri.php";
include "kanan.php";
include('dbconnect.php');

 //query
 $query = "SELECT * FROM material";

 $result = mysqli_query($conn , $query);
?>
<h2>Tabel Daftar Material</h2>
    <hr>
    <font size="2px">
    <div class="col-sm-8">
    <!-- <h3>Tabel Daftar Material</h3> -->
    <!DOCTYPE html>
        <html lang="en">
        <head>
            	<link rel="stylesheet" href="assets/style.css">
                <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
            <style>
                table {
                    border-collapse: collapse;
                    width: 100%;
                }

                th, td {
                    border: 1px solid #dddddd;
                    padding: 8px;
                }

                th {
                    background-color: #f2f2f2;
                }

                
            </style>
        </head>
        <body>

        <table class="table table-striped table-hover dtabel">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Bahan Material</th>
                    <th>Produsen Material</th>
                    <th>Penggolongan Material</th>
                    <th>Stok Material</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['nama_material']; ?></td>
                        <td><?php echo $row['produsen_material']; ?></td>
                        <td><?php echo $row['genre_material']; ?></td>
                        <td><?php echo $row['stok_material']; ?></td>
                        <td>
                            <a href="editform.php?id=<?php echo $row['id_material']; ?>" class="btn btn-success" role="button">Update</a>
                            <a href="delete.php?id=<?php echo $row['id_material'] ?>" class="btn btn-danger" role="button">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                mysqli_close($conn);
                ?>
            </tbody>
        </table>

        </body>
        </html>

        <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
            $('.dtabel').DataTable();
            } );
        </script>
        <br>
<?php
include "kaki.php";
?>