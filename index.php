<?php
session_start();
if (isset($_SESSION["email"])) {
   header("location: /products.php");
  }
?>
<!DOCTYPE html>
<head>
<!-- The page has a title Lifestyle Store-->
<title>Lifestyle Store</title>
<!-- External css file index.css placed in the folder css is linked-->
<link href="index.css" rel="stylesheet" type="text/css"/>

</head>

<head>
    <script src="index.js"></script>
</head>

<body onload="checkCookie()">
</body>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=">

</head>
<style>
    body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Lato", sans-serif;
    }
    
    #clock {
        height: 10%;
        width: 100%;
        background-color: #14080e;
        color: #e9eb9e;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 50px;
    }
</style>


<body>
    <div id="clock">
    </div>
    <script src="index.js"></script>

</body>


<body>
    <div class="header">
        <div class="inner-header">
            <div class="logo">
                <a href="index.php">Lifestyle Store</a>
            </div>
            <div class="header-link">
                <a href="signup.php">Sign Up</a>
            </div>
            <div class="header-link">
                <a href="login.php">Login</a>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="banner-image">
            <div class="inner-banner-image">
                <div class="banner_content">
                    <h1>We sell lifestyle</h1>
                    <p>Flat 40% OFF on premium brands</p>
                    <a href=login.php class="button_index">Shop Now</a>
                </div>
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