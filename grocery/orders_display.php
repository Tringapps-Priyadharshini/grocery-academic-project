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
    <link rel = "stylesheet" href = "orders.css">
</head>
<body>
    <?php
        $cusOrder = mysqli_query($conn,"select * from customerdetails where user_id = '$userId'");
        if(mysqli_num_rows($cusOrder) > 0){
            while($row = mysqli_fetch_assoc($cusOrder)){
                $orderId =$row['id'];
                $totalPrice = 0;
                
                ?>
                <div class = "display-container">
                    <div class = "display">
                        <table>
                            <tr>
                                <td colspan = "3">
                                    <?php echo $row['date']; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <th>Shopname</th>
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
                                   <?php echo $display['shopname']; ?>
                                </td>
                                <td>
                                <?php echo $display['quantity']; ?>
                                </td>
                                <td>
                                <?php echo $display['units']; ?>
                                </td>
                                <td><?php echo $display['productprice']; ?></td>
                            </tr>
                            <?php }} ?>
                            <tr>
                                <td colspan = "4">Grand Total </td>
                                <td> <?php echo $totalPrice ?></td>
                            </tr>
                            <tr>
                                <td colspan = "6">status : <?php echo $row['status'];?> </td>
                            </tr>


                        </table>

                        

                        </div>
        </div>
        <?php }

    } 
    else{  ?>
       <div style = "margin-top:200px;font-size:30px;">
       No orders
       </div>
    
   <?php } ?>
</body>
</html>























/* .display-container {
    display: inline-block;
    align-items: center;
    justify-content: center;
}

.display {
    margin-top: 100px;
    align-items: center;
    border: 1px solid black;
    margin-left: 10px;
}

table {
    text-align: center;
}

th {
    text-transform: uppercase;
    padding: 10px;
    font-size: 20px;
    background-color: gold;
}

td {
    text-transform: capitalize;
    padding: 10px;
    font-family: 'Times New Roman', Times, serif;
    font-style: italic;
    font-size: 20px;
}

tr:nth-last-child(2) {
    background-color: gold;
}

a {
    margin: 0 auto;
} */