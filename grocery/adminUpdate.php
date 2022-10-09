<?php
 @include 'config.php'; 
$category=''; 
 $id = $_GET['edit']; 
 if(isset($_POST['update'])){ 
 $productName = $_POST['productName']; 
 $productPrice = $_POST['productPrice']; 
 $productImage = $_FILES['productImage']['name']; 
 $productImage_tmp_name = $_FILES['productImage']['tmp_name']; 
 $productImageFolder = 'UploadedImages/'.$productImage; 
 if(isset($category)) 
 { 
 $category=$_POST['category']; 
 } 
 if(empty($productName) || empty($productPrice) || empty($productImage)) 
 { 
 $message[] = "please fill out all fields"; 
 } 
 else{ 
 $update = "update add_product set productname = '".$productName."',productprice 
= '".$productPrice."',category = '".$category."',image = '".$productImage."' where id = 
'".$id."'"; 
 $upload = mysqli_query($conn,$update); 
 if($upload){ 
 move_uploaded_file($productImage_tmp_name,$productImageFolder); 
 } 
 else{ 
 $message[] = 'could not add the product'; 
 } 
 } 
 }; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Update Product</title>
 <link rel = "stylesheet" href = "admin_update.css">
</head>
<body>
<!-- <?php
//  if(isset($message)){ 
//  foreach($message as $message){ 
//  echo '<span class = "message">'.$message.'</span>'; 
//  } 
//  } 
 ?> -->
<div class="container">
 <div class = "update">
 <?php
 $query='select * from add_product where id = '.$id; 
 $select=mysqli_query($conn,$query); 
 while($row = mysqli_fetch_assoc($select)){ 
 ?>
<form action = "<?php $_SERVER['PHP_SELF'] ?>" method ="post" enctype
="multipart/form-data">
 <input type = "text" name = "productName" value = "<?php echo $row['productname']; 
?>" placeholder="name"><br><br>
 <input type = "number" name = "productPrice" value = "<?php echo $row['productprice']; 
?>" placeholder="price"><br><br>
 <input type = "file" name = "productImage" accept = "image/*" value = "<?php echo 
$row['image'];?>"><br><br>
 <input type = "text" name = "unit" value = "<?php echo $row['units']; 
?>" placeholder="g/kg/l/ml"><br><br>
 <select name = "category" value = "<?php echo $row['category'] ?>">
 <?php
 $product=['nuts','pulses','rice','spices','oils','seeds','others']; 
 for ($i=0; $i < count($product); $i++) { 
 if($product[$i]==$row['category']) 
 echo('<option selected value='.$product[$i].'>'.$product[$i].'</option>'); 
 else
 echo('<option value='.$product[$i].'>'.$product[$i].'</option>'); 
 } 
 ?>
 </select><br><br>
 <button type = "submit" name = "update">Update Product</button><br><br>
 <a href = "viewProducts.php" class ="btnBack" >go back</a>
 </div>
 <?php } ?>
</div>
</body>
</html>