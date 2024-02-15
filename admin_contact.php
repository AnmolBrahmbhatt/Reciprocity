<html>  
        <head>
          <link rel="stylesheet" href="back.css" type="text/css">
          <?php
session_start();
require_once "./functions/admin.php";
$title = "List book";
require_once "./template/adminheader.php";
require_once "./functions/database_functions.php";
$conn = db_connect();
$query = "SELECT * FROM contact";
  $result = mysqli_query($conn, $query);
?>

    <table class="table" style="margin-top: 20px; background-color:#FFFFFF;">
      <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Query</th>
            <!-- <th>Receivers Name</th>
            <th>Shipment Address</th>
            <th>Shipment City</th>
            <th>Shipment ZipCode</th>
            <th>Shipment Country</th> -->
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)){ ?>
            <tr>
                <td><?php echo $row['con_id']; ?></td>
                <td><?php echo $row['con_nm']; ?></td>
                <td><?php echo $row['con_email']; ?></td>
                <td><?php echo $row['con_query'];?></td>
                <!-- <td><?php echo $row['ship_name']; ?></td>
                <td><?php echo $row['ship_address']; ?></td>
                <td><?php echo $row['ship_city']; ?></td>
                <td><?php echo $row['ship_zip_code']; ?></td>
                <td><?php echo $row['ship_country']; ?></td> -->
                <!-- <td><a href="admin_edit.php?bookisbn=<?php //echo $row['book_isbn']; ?>">Edit</a></td>
                <td><a href="admin_delete.php?bookisbn=<?php //echo $row['book_isbn']; ?>">Delete</a></td> -->
            </tr>
        <?php } ?>
    </table>  

<?php
if(isset($conn)) {mysqli_close($conn);}
require_once "./template/footer.php";
?>
</html>