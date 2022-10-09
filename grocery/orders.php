<?php
    include 'config.php';
    session_start();
    $user_id = $_SESSION['user_id'];
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
    <div class = "display-container">
        <div class = "display">
        <table class = "tableStyle" border = "1">
            <tr>
                <th>Image</th>
                <th>Product Name</th>
                <th>Shop Name</th>
                <th>Product Price</th>
                <th>Quantity</th>
                <th>Units</th>
                <th>Status</th>
            </tr>
            <?php
                $select = mysqli_query($conn,"select * from myorders where user_id = ".$user_id);
                while($row = mysqli_fetch_assoc($select)){ ?>
                    <tr>
                        <td><img src = "UploadedImages/<?php echo $row['image'];?>" alt = "product image" width = "200" height="200"></td>
                        <td><?php echo $row['productname']; ?></td>
                        <td><?php echo $row['shopname']; ?> </td>
                        <td><?php echo $row['productprice']; ?></td>
                        <td><?php echo $row['quantity']; ?></td>
                        <td><?php echo $row['units']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                    </tr>

                <?php }?>
        </table>
    </div></div>
</body>
</html>