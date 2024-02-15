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
$result = getOrders($conn);
?>

    <table class="table" style="margin-top: 20px; background-color:#FFFFFF;">
      <tr>
            <th>ID</th>
            <th>Customer ID</th>
            <th>Amount</th>
            <th>Date</th>
            <th>Receivers Name</th>
            <th>Shipment Address</th>
            <th>Shipment City</th>
            <th>Shipment ZipCode</th>
            <th>Shipment Country</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)){ ?>
            <tr>
                <td><?php echo $row['orderid']; ?></td>
                <td><?php echo $row['customerid']; ?></td>
                <td><?php echo $row['amount']; ?></td>
                <td><?php echo $row['date'];?></td>
                <td><?php echo $row['ship_name']; ?></td>
                <td><?php echo $row['ship_address']; ?></td>
                <td><?php echo $row['ship_city']; ?></td>
                <td><?php echo $row['ship_zip_code']; ?></td>
                <td><?php echo $row['ship_country']; ?></td>
                <!--<td><a href="admin_edit.php?bookisbn=<?php //echo $row['book_isbn']; ?>">Edit</a></td>
                <td><a href="admin_delete.php?bookisbn=<?php //echo $row['book_isbn']; ?>">Delete</a></td>-->
            </tr>
        <?php } ?>
    </table>  

<?php
if(isset($conn)) {mysqli_close($conn);}
require_once "./template/footer.php";
?>
</html>