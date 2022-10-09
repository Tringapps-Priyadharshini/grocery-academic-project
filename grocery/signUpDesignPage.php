<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel = "stylesheet" href = "signUpDesignPage.css">
</head>
<body>
    <div class = "signup-container">
        <div class = "signup">
            <p><img src = "images/admin.png" alt = "admin" width = "25%" class = "admin" onclick = "admin()"><img src = "images/user.png" alt = "user"  class = "user" width = "25%" onclick = "user()"></p>
        </div>
    </div>
    <script>
        function admin(){
            location.assign("adminSignin.php");
        }

        function user(){
            location.assign("signinhtml.php");
        }
    </script>
</body>
</html>