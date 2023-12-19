<?php
include "kepala.php";
include "kiri.php";
include "kanan.php";
?>
    <h2>Form Tambah</h2>
    <hr>

    <?php
 //tambahkan dbconnect
 include('dbconnect.php');

 //query
 $query = "SELECT * FROM material";

 $result = mysqli_query($conn , $query);

 ?>

<link rel="stylesheet" href="assets/style.css">
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
 <div class="container bg-info" style="padding-top: 20px; padding-bottom: 20px;">

  <div class="row">
   <div class="col-sm-9">
    <form role="form" action="insert.php" method="post">
        <table>
            <tr>
                <td><label>Nama Material</label></td>
                <td><input type="text" name="nama_material" class="form-control"></td>
            </tr>
            <tr>
                <td><label>Produsen Material</label></td>
                <td><input type="text" name="produsen_material" class="form-control"></td>
            </tr>
            <tr>
                <td><label>Penggolongan Meterial</label></td>
                <td><input type="text" name="genre_material" class="form-control"></td>
            </tr>
            <tr>
                <td><label>StokMaterial</label></td>
                <td><input type="text" name="stok_material" class="form-control"></td>
            </tr>
        </table>
        <br>
     <button type="submit" class="btn btn-info">Tambahkan</button>     
    </form>
    </ul>
</div>
<?php
include "kaki.php";
?>