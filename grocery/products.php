<!-- Display various products-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>various products</title>
    <link rel="stylesheet" href="productlayout.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="productTitles">
        <nav id = "productTitles">
            <ul>
                <li><a href="pulses.php" target="myframe" class = "productList active">Pulses</a></li>
                <li>
                    <a href="nuts.php" target="myframe" class = "productList">Nuts</a></li>
                <li><a href="rice.php" target="myframe" class = "productList">Rice</a></li>
                <li>
                    <a href="spices.php" target="myframe" class = "productList">Spices</a></li>
                <li><a href="oils.php" target="myframe" class = "productList">Oils</a></li>
                <li><a href="seeds.php" target="myframe" class = "productList">Seeds</a></li>
                <li><a href="others.php" target="myframe" class = "productList">Others</a></li>
                </ul>
                <a href = "cart.php" class = "cart"><i class="fas fa-shopping-cart" style = "margin-top:20px;"></i></a>

        </nav>
    </div>
    <div class="productsContainer">
        <iframe name="myframe" src = "pulses.php"></iframe>
    </div>
    <script>
        var header = document.getElementById('productTitles');
        var title = header.getElementsByClassName('productList');
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