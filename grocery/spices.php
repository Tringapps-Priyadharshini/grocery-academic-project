<?php
 include 'config.php'; 
 session_start(); 
 $user_id = $_SESSION['user_id']; 
 if(!isset($user_id)){ 
 header('location:signinhtml.php'); 
 }; 
 if(isset($_POST['cart'])){ 
 $productName = $_POST['productName']; 
 $shopname = $_POST['shopname'];
 $productPrice = $_POST['productPrice']; 
 $productImage = $_POST['productImage']; 
 $quantity = $_POST['quantity']; 
 $unit = $_POST['unit'];
 $select_cart = mysqli_query($conn,"select * from `cart` where productname = 
'$productName' and user_id = '$user_id' ") or die('query failed'); 
 if(mysqli_num_rows($select_cart)>0){ 
    echo("<script>alert('product already added to cart');</script>");
 } 
 else{ 
 mysqli_query($conn,"insert into `cart`(user_id,productname,productprice,shopname,quantity,units,image)values('$user_id','$productName','
$productPrice','$shopname','$quantity','$unit','$productImage')"); 
echo("<script>alert('product added to cart');</script>");
 } 
 }; 
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <link rel = "stylesheet" href="productStyle.css">
 </head>
 <body>
 <div class = "products">
 <div class="box-container">
 <?php
 $select = mysqli_query($conn,"select * from add_product where category = 'spices'"); 
 if(mysqli_num_rows($select) > 0){ 
 while($row = mysqli_fetch_array($select)){ 
 ?>
 <form action = "" method = "post" class = "box">
 <div class = "shopname"><?php echo $row['shopname'] ?></div>
 <img src = "UploadedImages/<?php echo $row['image']; ?>" alt ="image">
 <div class = "name"> <?php echo $row['productname'] ?></div>
 <div class = "price">$<?php echo $row['productprice'] ?>/-</div>
 <div class = "unit"><?php echo $row['units'] ?></div>
 <input type = "number" name = "quantity" min = "1" value = "1"> 
 <input type = "hidden" name = "productImage" value ="<?php echo $row['image']; 
?>">
 <input type = "hidden" name = "productName" value = "<?php echo 
$row['productname']; ?> ">
<input type = "hidden" name = "shopname" value = "<?php echo $row['shopname'];?> "> 
 <input type = "hidden" name = "productPrice" value = "<?php echo 
$row['productprice']; ?> ">
<input type = "hidden" name = "unit" value = "<?php echo $row['units'];?> "><br>
 <input type = "submit" name = "cart" value = "add to cart" class = "cart">
 </form> 
 <?php }} ?> 
 </div>
 </div>
 </body>
 </html>
