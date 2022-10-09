<?php
    include 'config.php';
    include 'grocerynav.php';
    session_start();
    $userId = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders</title>
    <link rel = "stylesheet" href = "CustomerOrder.css">
</head>
<body>
    <?php
        $cusOrder = mysqli_query($conn,"select * from customerdetails");
        if(mysqli_num_rows($cusOrder) > 0){
            while($row = mysqli_fetch_assoc($cusOrder)){
                $orderId =$row['id'];
                $totalPrice = 0;
                $name = $row['firstname']." ".$row['lastname'];
                ?>
                <div class = "display-container">
                    <div class = "display"><br> 
                    <label>Name : <?php echo $name; ?></label><br><br>
                    <label>Contact : <?php echo $row['contact']; ?></label><br><br>
                    <label>Address : <?php echo $row['address']; ?></label><br><br>
                        <table>
                            <tr>
                                <td colspan = "4">
                                    <?php echo $row['date']; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Units</th>
                                <th>Price</th>
                            </tr>
                            <?php
                             $cusOrderDisplay = mysqli_query($conn,"select * from customerorder where orderid = '$orderId'");
                             if(mysqli_num_rows($cusOrderDisplay) > 0){
                                 while($display = mysqli_fetch_assoc($cusOrderDisplay)){
                                     $totalPrice += $display['quantity'] * $display['productprice'];
                             ?>
                            <tr>
                                <td>
                                   <?php echo $display['productname']; ?>
                                </td>
                                <td>
                                <?php echo $display['quantity']; ?>
                                </td>
                                <td><?php echo $display['units']; ?></td>
                                <td><?php echo $display['productprice']; ?></td>
                            </tr>
                            <?php }} ?>
                            <tr>
                                <td colspan = "3">Grand Total </td>
                                <td> <?php echo $totalPrice ?></td>
                            </tr>
                            <tr>
                            <td> <a href="CustomerOrder.php?delete=<?php echo $row['id']; ?> "
                        class='btnDelete'><i class="fas fa-trash"> DELETE</i></a></td>
                                 </tr>
                
                        </table>

                        

                        </div>
        </div>
        <?php }} ?>
</body>
</html>