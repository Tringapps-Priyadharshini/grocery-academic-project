<?php
include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];
if (!isset($user_id)) {
    header('location:signinhtml.php');
};
if (isset($_GET['logout'])) {
    unset($user_id);
    session_destroy();
    header('location:signinhtml.php');
}
if (isset($_POST['update_cart'])) {
    $update_quantity = $_POST['cart_quantity'];
    $update_id = $_POST['cart_id'];
    mysqli_query($conn, "update `cart` set quantity = '$update_quantity' where id = 
'$update_id'") or die("query failed");
    echo "<script>alert('cart quantity updated successfully');</script>";
}
if (isset($_GET['remove'])) {
    $remove_id = $_GET['remove'];
    mysqli_query($conn, 'delete from `cart` where id = '.$remove_id) or die('query 
failed');
    header('location:cart.php');
}
if (isset($_GET['delete_all'])) {
    mysqli_query($conn, "delete from `cart` where user_id = '$user_id' ") or die('query 
failed');
    header('location:grocery.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
    <link rel="stylesheet" href="cart.css">
</head>

<body>
    <div class="products">
        <div class="box-container">
            <table border="1" class="cartDetails">
                <tr>
                    <th>PRODUCT NAME</th>
                    <th>PRODUCT IMAGE</th>
                    <th>SHOP NAME</th>
                    <th>PRODUCT PRICE</th>
                    <th>UNITS</th>
                    <th>QUANTITY</th>
                    <th>TOTAL PRICE</th>
                    <th>ACTION</th>
                </tr>
                <?php
                $total = 0;
                $cart_query = mysqli_query($conn, "select * from `cart` where user_id = '$user_id' ") or die('query failed');
                if (mysqli_num_rows($cart_query) > 0) {
                    while ($fetch_cart = mysqli_fetch_assoc($cart_query)) {
                ?>
                        <tr>
                            <td>
                                <img src="UploadedImages/<?php echo $fetch_cart['image']; ?>" alt="" height=100>
                            </td>
                            <td>
                                <h3><?php echo $fetch_cart['productname'] ?></h3>
                            </td>
                            <td>
                                <h3><?php echo $fetch_cart['shopname'] ?></h3>
                            </td>
                            <td>
                                <h3><?php echo $fetch_cart['productprice'] ?></h3>
                            </td>
                            <td>
                                <h3><?php echo $fetch_cart['units'] ?></h3>
                            </td>
                            <td>
                                <form action="" method="post">
                                    <input type="hidden" name="cart_id" value="<?php echo
                                                                                $fetch_cart['id']; ?>">
                                    <input type="number" min="1" name="cart_quantity" value="<?php
                                                                                                echo $fetch_cart['quantity'] ?>">
                                    <input type="submit" name="update_cart" value="update" class='btnUpdate'>
                                </form>
                            </td>
                            <td>$
                                <?php
                                echo $sub_total = (float)($fetch_cart['productprice']) *
                                    (int)($fetch_cart['quantity']); ?>/-
                            </td>
                            <td>
                                <?php
                                $location = 'cart.php?remove=' . $fetch_cart['id']; 
                                ?>
                                <a href=<?php echo ($location); ?> onclick = 'return confirm("Remove Item from cart")' class='btnRemove'>REMOVE</a>
                            </td>
                        </tr>
                <?php
                        $total += $sub_total;
                    };
                } else {
                    echo '<tr> <td style = "padding:20px;text-transform:uppercase" colspan = "8">no 
items are added in the cart</td></tr>';
                }
                ?>
                <tr>
                    <td colspan="6" class="grandTotal">
                        grand total
                    </td>
                    <td class="grandTotal">$<?php echo $total; ?>/-</td>
                    <td><a href="cart.php?delete_all" onclick="return confirm('delete all from cart?');" class="btndeleteall <?php echo ($total > 1) ? '' : 'disabled'; ?>">DELETE&nbsp;ALL</a></td>
                </tr>
            </table>
            <div class="checkout">
                <a href="CustomerDetails.php" class="btnCheckOut <?php echo ($total > 1) ? '' :
                                                                        'disabled'; ?>">proceed to checkout</a>
            </div>
        </div>
    </div>
    </div>
</body>

</html>