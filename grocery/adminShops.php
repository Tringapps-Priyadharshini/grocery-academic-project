<?php
    include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shops</title>
    <link rel = "stylesheet" href = "adminShops.css"> 
</head>
<body>
    <?php
        $select = mysqli_query($conn,"select shopname from adminsignup");
        while($row = mysqli_fetch_assoc($select)){
    ?>
    <div class = "shop-container">
        <img src = "images/freshproduct.jpg">
        <div class = "shops">
            <p><?php echo $row['shopname']; ?></p>
        </div>
    </div>
            
    <?php }?>
</body>
</html>