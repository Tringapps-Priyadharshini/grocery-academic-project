<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="sellernav.css">
</head>

<body>
    <nav id="activeStyle" class="nav-head">
        <ul>
            <li class = "heading">Happy Shopping</li>
            <li><a href="addProducts.php" class="titleItems active" target="myframe">Add Products</a></li>
            <li><a href="viewProducts.php" class="titleItems"  target="myframe">View Products</a></li>
            <li><a href="orderedList.php" class="titleItems" target="myframe">Ordered</a></li>
            <li><a href="Queries.php" class="titleItems" target="myframe">Customer Queries</a></li>
            <li><a href="seller_contact.html" class="titleItems" target="myframe">Contact us</a></li>
            <li><a onclick = "logout()" class = "titleItems">Logout</a></li>
        </ul>
    </nav>
    <iframe name = "myframe" width = "100%" height = "650px" src = "addProducts.php"></iframe>
    <script>
        var header = document.getElementById('activeStyle');
        var title = header.getElementsByClassName('titleItems');
        for (var i = 0; i < title.length; i++) {
            title[i].addEventListener("click", function() {
                var current = document.getElementsByClassName('active');
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            })
        }

        function logout(){
            window.location.assign('signUpDesignPage.php');
        }
    </script>
</body>

</html>