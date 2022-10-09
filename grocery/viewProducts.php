<?php
include 'config.php'; 
session_start();
$user_id = $_SESSION['user_id'];
$shopname = $_SESSION['shopname'];

if(isset($_GET['delete'])){ 
    $id = $_GET['delete']; 
    mysqli_query($conn,"DELETE FROM add_product where id = $id "); 
    header('location:viewProducts.php'); 
}; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>View Product</title>
 <link rel = "stylesheet" href = "viewProducts.css">
 <script src="https://kit.fontawesome.com/a076d05399.js"
crossorigin="anonymous"></script>
</head>
<body>
 <?php
 $select = mysqli_query($conn, "select * from add_product where user_id = '$user_id' and shopname = '$shopname' "); 
 ?>
 <div class = "display-container">
 <div class="display">
 <table class="tableStyle" border="1">
 <thead>
 <tr>
 <th>Product image</th>
 <th>Product name</th>
 <th>Shop Name</th>
 <th>Product price</th>
 <th>category</th>
 <th>Units</th>
 <th colspan="2">action</th>
 </tr>
 </thead>
 <?php
 if(mysqli_num_rows($select)>0){
 while ($row = mysqli_fetch_assoc($select)) { 
 ?>
 <tr>
 <td><br><img src="UploadedImages/<?php echo $row['image']; ?>"
alt="image">
 </td>
 <td><?php echo $row['productname']; ?></td>
 <td><?php echo $row['shopname']; ?></td>
 <td>$<?php echo $row['productprice']; ?>/-</td>
 <td><?php echo $row['category']; ?></td>
 <td><?php echo $row['units']; ?> </td>
 <td>
 <?php
 $location = 'adminUpdate.php?edit=' . $row['id']; 
 ?>
 <a href=<?php echo ($location); ?> class='btnEdit'>
 <i class="fas fa-edit"></i> edit</a><br><br>
 <a href="viewProducts.php?delete=<?php echo $row['id']; ?> "
class='btnDelete'><i class="fas fa-trash"></i> delete</a>
 </td>
 </tr>
 <?php }}
 else{?>
     <tr><td colspan = "6">No Products are added </td></tr>
 <?php } ?>
 </table>
 </div>
 </div>
</body>
</html>