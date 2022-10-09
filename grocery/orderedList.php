<?php
    include 'config.php';
    session_start();
    $user_id = $_SESSION['user_id'];
    $shopname = $_SESSION['shopname'];
    if(isset($_GET['delete'])){ 
        $orderid = $_GET['delete'];
        mysqli_query($conn,"UPDATE myorders set status = 'delivered' where orderid = ".$orderid);
        mysqli_query($conn,"DELETE FROM customer_order where orderid = '".$orderid."'"); 
    }; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordered List</title>
    <link rel = "stylesheet" href = "orderedList.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"
crossorigin="anonymous"></script>
</head>
<body>
    <div class = "display-container">
        <div class = "display">
        <table border = "1" class = "tableStyle">
            <tr>
                <th>Name</th>
                <th>OrderId</th>
                <th>Contact</th>
                <th>Address</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Quantity</th>
                <th>Units</th>
                <th>Action</th>
            </tr>
            <?php
                $select = mysqli_query($conn,"select * from customer_order where shopname = '".$shopname."'");
                if(mysqli_num_rows($select)>0){
                while($row = mysqli_fetch_assoc($select)){ ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['orderid']; ?></td>
                        <td><?php echo $row['contact']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['productname']; ?></td>
                        <td><?php echo $row['productprice']; ?></td>
                        <td><?php echo $row['quantity']; ?></td>
                        <td><?php echo $row['units']; ?></td>
                        <td> <a href="orderedList.php?delete=<?php echo $row['orderid']; ?> "
                        class='btnDelete'><i class="fas fa-trash"> DELETE</i></a></td>
                    </tr>

                <?php }}?>
        </table>
    </div>
    </div>
</body>
</html>