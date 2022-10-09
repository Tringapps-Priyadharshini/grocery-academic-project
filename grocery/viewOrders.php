<?php
    include 'config.php';
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
        <div class = "display-container">
            <div class = "display">
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
                    if(isset($_GET['order']){
                        $orderId = $_GET['order'];
                    }
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
                </table>

                

                </div>
</div>
</body>
</html>