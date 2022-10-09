<?php
include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if (isset($_POST['payment'])) {
   
    $orderId = $_SESSION['orderId'];
    $select = mysqli_query($conn, "select * from cart where user_id = " . $user_id) or die('query failed');
    while ($row = mysqli_fetch_assoc($select)) {
        $user_id = $row['user_id'];
        $productname = $row['productname'];
        $shopname = $row['shopname'];
        $productprice = $row['productprice'];
        $quantity = $row['quantity'];
        $unit = $row['units'];
        $image = $row['image'];
        mysqli_query($conn, "insert into 
        customerorder (orderId,userid,productname,shopname,productprice,quantity,units)values('" . $orderId . "','" . $user_id . "','" . $productname . "','" . $shopname . "','" . $productprice . "','" . $quantity . "','" . $unit . "')") or die('query failed');
    }
    mysqli_query($conn, "DELETE FROM cart where user_id = $user_id ") or die('sorry the payment is failed');
    echo "<script>alert('payment successful');</script>";
    header('location:grocery.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Payment</title>
    <link rel="stylesheet" href="payment.css">
</head>

<body>
    <form method="post">
        <div class="payment">
            <div class="pay">
                <label>Card Number</label><br>
                <input type="number" name="cardNumber" id="cardNumber" required><br>
                <label>Card Holder Name</label><br>
                <input type="text" name="holderName" id="holderName" required><br>
                <label>Expiry Month</label><br>
                <select name="month" id="month" required>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
                <br>
                <label>Expiry Year</label><br>
                <input type="number" name="year" id="year" required><br>
                <label>CVV</label><br>
                <input type="password" name="cvv" id="cvv" required><br><br>
                <button type="submit" name="payment" onclick="return validate()">MAKE PAYMENT</button>
            </div>
        </div>
    </form>
    <script>
        function validate(){
            const cardNumber = document.getElementById('cardNumber').value;
            const holderName = document.getElementById('holderName').value;
            const year = document.getElementById('year').value;
            const cvv = document.getElementById('cvv').value;
            if((cardNumber.length !== 16) || (year.length !==4) || (cvv.length !==3)){
                alert('Please Enter a valid details');
                return false;
            }
            const regName = /^[a-zA-Z]+$/;
            if(!regName.test(holderName)){
                alert('Please enter a valid details');
                return false;
            }
        }
    </script>
</body>

</html>