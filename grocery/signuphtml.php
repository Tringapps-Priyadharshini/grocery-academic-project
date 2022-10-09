<?php
    include'config.php';

    if(isset($_POST['submit'])){
        $fname = mysqli_real_escape_string($conn,$_POST['fname']);
        $lname = mysqli_real_escape_string($conn,$_POST['lname']);
        $contact = mysqli_real_escape_string($conn,$_POST['contact']);
        $address = mysqli_real_escape_string($conn,$_POST['address']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $password = mysqli_real_escape_string($conn,md5($_POST['password']));
        $cpassword = mysqli_real_escape_string($conn,md5($_POST['confirmPassword']));

        $select = mysqli_query($conn,"select * from signup where email = '$email' and password = '$password' ") or die('query failed');

        if(mysqli_num_rows($select) > 0){
            echo "<script>alert('user already exists');</script>";
        }
        else{
            mysqli_query($conn,"insert into signup(firstname,lastname,contact,address,email,password)values('$fname','$lname','$contact','$address','$email','$password')") or die('query failed');
            echo "<script>alert('registered successfully');</script>";
            header('location:signinhtml.php');
        }
    }



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="signUpStyle.css">
</head>

<body>
    
    <form action="" method="post" onsubmit="checkPassword()">
        <div class="signUpMainDiv">
            <div class="signup">

                <div class="userDetails">
                    <label>FIRST NAME</label><br>
                    <input type="text" name="fname" id = "fname"><br><br>
                    <label>LAST NAME</label><br>
                    <input type="text" name="lname" id = "lname" ><br><br>
                    <label>CONTACT NUMBER</label><br>
                    <input type="text" name="contact" pattern = "[6789][0-9]{9}" title = "please enter valid contact number"><br><br>
                    <label>ADDRESS</label><br>
                    <input type="text" name="address" id = "address" ><br>
                </div>
                <div class="userDetailsmail">
                    <label>EMAIL</label><br>
                    <input type="email" name="email" id = "email" ><br><br>
                    <label>PASSWORD</label><br>
                    <input type="password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                    <br><br>
                    <label>CONFIRM PASSWORD</label><br>
                    <input type="password" name="confirmPassword" id="confirmPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"><br><br><br>
                    <button type="submit" name = 'submit' onclick = "return validate()">SIGNUP</button>
                </div>
                
            </div>
            <label class = "account">Already have an account <a href = "signinhtml.php">signin</a></label>
        </div>
    </form>
    <script>
        function validate() {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            if (password !== confirmPassword) {
                alert('Password is not valid');
                return false;
            }
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