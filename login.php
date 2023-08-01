<?php
session_start();
if (isset($_SESSION["email"])) {
   header("location: /products.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link href="index.css" rel="stylesheet" type="text/css"/>
</head>
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
  
<div class="container_signup_login">
    
    <h1 class="h1">Login</h1>
    
    <div class="form">
        <form action="backend/login.php" method="post">
            <label for="">Registered Email</label>
            <input type="email" name="email" required/>

            <br/>
            <br/>

            <label for="">Password</label>
            <input type="password" name="password" required/>

            <br/>
            <br/>

            <button type="submit">Login</button>

            <p>Don't have an account? <a class="a_login" href="signup.php">Sign Up</a></p>
           
             
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>


        </form>



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