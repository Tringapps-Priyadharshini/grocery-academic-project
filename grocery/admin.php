<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery</title>
    <link rel="stylesheet" href="admin.css">
</head>

<body>
    <div class="nav-head" id = "nav-head">
        <ul>
            <li class = "heading">HAPPY SHOPPING</li>
            <li><a href="adminDisplayAllProducts.php" class= "titleItems">PRODUCTS</a></li>
            <li><a href="adminQuery.php" class = "titleItems">QUERIES</a></li>
            <li><a href = "signUpDesignPage.php" class = "titleItems">LOGOUT</a></li>
        </ul>
    </div>
    <p>welcome</p>
    <script>
        var header = document.getElementById('nav-head');
        var title = header.getElementsByClassName('titleItems');
        for(var i = 0; i < title.length; i++){
            title[i].addEventListener("click",function(){
                var current = document.getElementsByClassName('active');
                current[0].className = current[0].className.replace(" active","");
                this.className += " active";
            })
        }
    </script>


</body>

</html>