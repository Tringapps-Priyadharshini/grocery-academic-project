<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <link rel="stylesheet" href="register.css">
</head>

<body>
    <div class="signup">
        <p>SIGN UP</p>
        <form action="register.php" method="post">
            <input type="text" name="fname" id="fname" placeholder="FIRST NAME"><br>
            <input type="text" name="lname" id="lname" placeholder="LAST NAME"><br>
            <input type="number" name="contact" id="contact" placeholder="PHONE NUMBER"><br>
            <input type="varchar" id="address" name="address" placeholder="ENTER YOUR ADDRESS..."><br>
            <input type="email" name="email" id="email" placeholder="EMAIL"><br>
            <input type="password" name="pwd" id="pwd" placeholder="PASSWORD"><br>
            <input type="password" name="confirm_pwd" id="confirm_pwd" placeholder="CONFIRM PASSWORD"><br><br>
            <button type="submit" name="submit">SIGN UP</button>
        </form>
    </div>

</body>

</html>