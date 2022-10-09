<?php
    include'config.php';
    session_start();

    if(isset($_POST['login'])){
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $password = mysqli_real_escape_string($conn,md5($_POST['password']));
        $select = mysqli_query($conn,"select * from signup where email = '$email' and password = '$password' ") or die('query failed');

        if(mysqli_num_rows($select) > 0){
            $row = mysqli_fetch_assoc($select);
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            header('location:Grocery.php');            
        }
        else{
            echo "<script>alert('Invalid Email or Password');</script>";
        }
    }



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign in</title>
    <link rel="stylesheet" href="signin.css">
</head>

<body>
    <div class="signinMainDiv">
        <div class="signin">
            <p>SIGN IN</p><br>
            <form action="" method="post">
                <label>EMAIL</label><br>
                <input type="email" name="email" id = "email"><br><br><br>
                <label>PASSWORD</label><br>
                <input type="password" name="password" ><br><br><br>
                <button type="submit" name = "login">SIGN IN</button><br><br>
                <p style="font-size:20px;text-align:left;">Don't you have an account
                    <a href="signuphtml.php">sign up</a>
                </p>
            </form>
        </div>
    </div>

</body>

</html>