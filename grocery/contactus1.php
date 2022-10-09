<?php 
include "grocerynav.php";?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contactus.css">
</head>

<body>

    <form action="contactusstore.php" method="post">
    <div class="contact-container">
        <div class="contact">
            <div class="queries">
                <label>NAME</label><br>
                <input type="text" name="cname" required><br><br>
                <label>SHOP NAME</label><br>
                <input type="text" name="shopname" required><br><br>
                <label>EMAIL</label><br>
                <input type="email" name="email" required><br><br>
                <label>MESSAGE</label><br>
                <textarea rows="5" name="message" required></textarea><br>
                <button type="submit" name="submit">SUBMIT</button><br>
            </div>
        </div>
    </div>
    </form>
</body>
</body>
</body>

</html>