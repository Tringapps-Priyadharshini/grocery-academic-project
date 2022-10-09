<?php
include 'config.php';
session_start();
$id = $_SESSION['user_id'];

if(isset($_POST['next'])){
    $fname = mysqli_real_escape_string($conn,$_POST['fname']);
    $lname = mysqli_real_escape_string($conn,$_POST['lname']);
    $contact = mysqli_real_escape_string($conn,$_POST['contact']);
    $address = mysqli_real_escape_string($conn,$_POST['address']);
    mysqli_query($conn,"insert into `customerdetails`(user_id,firstname,lastname,contact,address,status)values('$id','$fname','$lname','$contact','$address','not delivered')")or die("query failed");
    // $id = mysqli_insert_id($conn);
    // $_SESSION['orderId'] = $id;
    header('location:payment.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details</title>
    <link rel = "stylesheet" href = "customerDetails.css">
</head>
<body>
    <?php
        $select_query = mysqli_query($conn,"select firstname,lastname,contact,address from `signup` where id = '$id'") or die('query failed');
        while($details = mysqli_fetch_assoc($select_query)){
    ?>
    <form action="" method="post">
        <div class="CustomerDetailsMainDiv">
            <div class="details-container">

                <div class="userDetails">
                    <label>FIRST NAME</label><br>
                    <input type="text" name="fname" id = "fname" value = "<?php echo $details['firstname']?>" required><br><br>
                    <label>LAST NAME</label><br>
                    <input type="text" name="lname" id = "lname" value = "<?php echo $details['lastname']?>"  required><br><br>
                    <label>CONTACT NUMBER</label><br>
                    <input type="text" name="contact" id = "contact" value = "<?php echo $details['contact'];?>" pattern = "[6789][0-9]{9}" title = "please enter valid contact number" required><br><br>
                    <label>ADDRESS</label><br>
                    <input type="text" name="address" id = "address" value = "<?php echo $details['address']?>"  required><br>
                    <button type="submit" name = 'next' onclick = "return validate()">NEXT</button>
                </div>
            </div>
        </div>
    </form>
    <?php } ?>
    <script>
        function validate(){
            const fname = document.getElementById('fname').value;
            const lname = document.getElementById('lname').value;
            const address = document.getElementById('address').value;
            const regName = /^[a-zA-Z]+$/;
            if((!regName.test(fname))||(!regName.test(lname))){
                alert('Please enter valid name');
                return false;
            }
            if(address.length < 15){
                alert('please enter valid address');
                return false;
            }
        }

    </script>

</body>
</html>