<?php
session_start();
if (!isset($_SESSION["email"])) {
   header("location: /");
  }
?>
<!DOCTYPE html>
<head>
<!-- The page has a title Lifestyle Store-->
<title>Products</title>

<link href="index.css" rel="stylesheet" type="text/css"/>

</head>
<body>
    <div class="header">
        <div class="inner-header">
            <div class="logo">
                <a href="index.php">Lifestyle Store</a>
            </div>
            <div class="header-link">
                <a href="cart.php">Cart</a>
            </div>
            <div class="header-link">
                <a href="settings.php">Settings</a>
            </div>
            <div class="header-link">
                <a href="logout.php">Logout</a>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="banner_content_products">
            <h1>Hello, <?php echo $_SESSION['firstname']; ?> <br> Welcome to our Lifestyle Store!</h1>
            <p>We have the best cameras,watches and shirts for you.No need to hunt around, we have all in one place.</p>
        </div>
    </div>

    <div class="container">
        <div class="items">
            <img src="image/5.jpg" alt="" class="thumbnail">
            <div class="caption">
                <h3>Cannon EOS</h3>
                <p>Price: Rs.36000.00</p>
                <a href="#cart" class="button_products">Add to cart</a>
                
            </div>
        </div>
        <div class="items">
            <img src="image/2.jpg" alt="" class="thumbnail">
            <div class="caption">
                <h3>Sony DSLR</h3>
                <p>Price: Rs.40000.00</p>
                <a href="#cart" class="button_products">Add to cart</a>
            </div>
        </div>
        <div class="items">
            <img src="image/3.jpg" alt="" class="thumbnail">
            <div class="caption">
                <h3>Sony DSLR</h3>
                <p>Price: Rs.50000.00</p>
                <a href="#cart" class="button_products">Add to cart</a>
            </div>
        </div>
        <div class="items">
            <img src="image/4.jpg" alt="" class="thumbnail">
            <div class="caption">
                <h3>Olympus DSLR</h3>
                <p>Price: Rs.80000.00</p>
                <a href="#cart" class="button_products">Add to cart</a>
            </div>
        </div>
        <div class="items">
            <img src="image/9.jpg" alt="" class="thumbnail">
            <div class="caption">
                <h3>Titan Model #301</h3>
                <p>Price: Rs.13000.00</p>
                <a href="#cart" class="button_products">Add to cart</a>
            </div>
        </div>
        <div class="items">
            <img src="image/10.jpg" alt="" class="thumbnail">
            <div class="caption">
                <h3>Titan Model #201</h3>
                <p>Price: Rs.36000.00</p>
                <a href="#cart" class="button_products">Add to cart</a>
            </div>
        </div>
        <div class="items">
            <img src="image/11.jpg" alt="" class="thumbnail">
            <div class="caption">
                <h3>HMT Milan</h3>
                <p>Price: Rs.3000.00</p>
                <a href="#cart" class="button_products">Add to cart</a>
            </div>
        </div>
        <div class="items">
            <img src="image/12.jpg" alt="" class="thumbnail">
            <div class="caption">
                <h3>Faber Luba #111</h3>
                <p>Price: Rs.18000.00</p>
                <a href="#cart" class="button_products">Add to cart</a>
            </div>
        </div>
        <div class="items">
            <img src="image/8.jpg" alt="" class="thumbnail">
            <div class="caption">
                <h3>H&W</h3>
                <p>Price: Rs.800.00</p>
                <a href="#cart" class="button_products">Add to cart</a>
                <br/><br/><br/><br/>
            </div>
        </div>

        <div class="items">
            <img src="image/6.jpg" alt="" class="thumbnail">
            <div class="caption">
                <h3>Luis Phill</h3>
                <p>Price: Rs.1000.00</p>
                <a href="#cart" class="button_products">Add to cart</a>
            </div>
        </div>
        <div class="items">
            <img src="image/13.jpg" alt="" class="thumbnail">
            <div class="caption">
                <h3>John Zok</h3>
                <p>Price: Rs.1500.00</p>
                <a href="#cart" class="button_products">Add to cart</a>
            </div>
        </div>
        <div class="items">
            <img src="image/14.jpg" alt="" class="thumbnail">
            <div class="caption">
                <h3>Jhalsani</h3>
                <p>Price: Rs.1300.00</p>
                <a href="#cart" class="button_products">Add to cart</a>
            </div>
        </div>

    </div>

    <footer>
        <div class="container">
            <centre>
                <p>Copyright &copy; Lifestyle Store.All rights Reserved | Contact Us:+91 90000 00000</p>
            </centre>
        </div>
    </footer>

</body>
</html>