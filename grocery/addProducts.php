<?php
    include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];
$shopname = $_SESSION['shopname'];

if (isset($_POST['upload'])) {
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    $category = $_POST['categories'];
    $productImage = $_FILES['productImage']['name'];
    $productImage_tmp_name = $_FILES['productImage']['tmp_name'];
    $productImageFolder = 'UploadedImages/' . $productImage;
    $unit = $_POST['unit'];
    $select = mysqli_query($conn,"select * from add_product where productName = '".$productName."' and shopname = '".$shopname."' ");
    if (
        empty($productName) || empty($productPrice) || empty($productImage) ||
        empty($category) || empty($unit)
    ) {
        echo "<script>alert('please fill out all fields');</script>";
    }
    else if(mysqli_num_rows($select) > 0) {
        echo "<script>alert('This product is already added');</script>";
    }
    else {
        $insert = "insert into add_product(user_id,shopname,productname,productprice,category,units,image) 
value ('$user_id','$shopname','$productName','$productPrice','$category','$unit','$productImage')";
        $upload = mysqli_query($conn, $insert);
        if ($upload) {
            move_uploaded_file($productImage_tmp_name, $productImageFolder);
            echo "<script>alert('New product added successfully');</script>";
        } else {
            echo "<script>alert('could not add the product');</script>";
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
    <title>addProducts</title>
    <link rel="stylesheet" href="addProducts.css">
</head>

<body>
    <div class="formContainer">
        <div class="productDetails">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                <input type="text" name="productName" placeholder="name"><br><br>
                <input type="number" name="productPrice" placeholder="price"><br><br>
                <select name="categories" class="category">
                    <option value="nuts">nuts</option>
                    <option value="pulses">pulses</option>
                    <option value="rice">rice</option>
                    <option value="spices">spices</option>
                    <option value="oils">oils</option>
                    <option value="seeds">seeds</option>
                    <option value="others">others</option>
                </select><br><br>
                <input type="text" name="unit" placeholder="how many g/kg/l/ml ?"><br><br>
                <input type="file" name="productImage" accept="image/*" class="upload"><br><br><br>
                <button type="submit" name="upload">Add Products</button><br>
        </div>
    </div><br><br>
</body>

</html>