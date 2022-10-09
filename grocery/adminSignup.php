<?php
    include 'config.php';
    if(isset($_POST['register'])){
        $adminName = $_POST['adminName'];
        $shopname = $_POST['shopname'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $password = mysqli_real_escape_string($conn,md5($_POST['password']));

        $select = mysqli_query($conn,"select * from adminsignup where email = '$email' and password = '$password'");
        if(mysqli_num_rows($select)>0){
            echo "<script>alert('user already exists');</script>";
        }
        else{
            mysqli_query($conn,"insert into adminsignup(name,shopname,contact,email,password) values ('$adminName','$shopname','$contact','$email','$password')") or die("query failed");
            echo  "<script>alert('Registered successfully');</script>";
            header('location:adminSignin.php');
        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Signup</title>
    <link rel = "stylesheet" href = "adminSignup.css">
</head>
<body>
    <div class = "signup-container">
        <div class = "signup">
            <form action = "" method="post" >
                <input type = "text" name = "adminName" placeholder="name" id = "adminName"><br>
                <input type = "text" name = "shopname" placeholder="shop name" id = "shopname"><br>
                <input type = "text" name = "contact" placeholder="contact no." id = "contact" pattern = "[6789][0-9]{9}" title = "please enter valid contact number"><br>
                <input type = "email" name = "email" id = "email" placeholder="email"><br>
                <input type = "password" name = "password" placeholder="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"><br>
                <input type = "password" name = "cpassword" placeholder="confirm password" id="confirmPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"><br><br>
                <button type = "submit" name = "register" onclick = "return validate()">Register</button>
                <p>Already have an account <a href="adminSignin.php">Signin</a></p>
            </form>
        </div>
    </div>

    <script>
        function validate() {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            if (password !== confirmPassword) {
                alert('Password is not valid');
                return false;
            }
            const adminName = document.getElementById('adminName').value;
            const shopname = document.getElementById('shopname').value;
            const regName = /^[a-zA-Z]+$/;
            if((!regName.test(fname))||(!regName.test(lname))){
                alert('Please enter valid name');
                return false;
            }
            const email = document.getElementById('email').value;
            const regEmail = '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';
            if (!regEmail.test(email))
            {
                alert("You have entered an invalid email address!")
                return (false);
            }
        }
    </script>
</body>
</html>