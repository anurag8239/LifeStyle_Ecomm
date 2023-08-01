<?php
session_start();
if (isset($_SESSION["email"])) {
   header("location: /products.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>
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
    
    <h1 class="h1">Sign Up</h1>

    <div class="form">
        <form action="backend/signup.php" method="post">
            <label for="">First Name:</label>
            <input type="text" name="firstname" required/>

            <br/>
            <br/>

            <label for="">Last Name:</label>
            <input type="text" name="lastname" required/>

            <br/>
            <br/>

            <label for="">Phone Number:</label>
            <input type="phone" name="phone" required/>
            
            <br/>
            <br/>

            <label for="">Email ID:</label>
            <input type="email" name="email" required/>

            <br/>
            <br/>

            <label for="">Address </label>
            <input type="text" name="address" required/>

            <br/>
            <br/>
            

            <label for="">Payment Method:</label>
            
            
            <br/>
            
            <input type="radio" name="payment" id="Credit card" value="Credit Card"/> <label for="Payment Method">Credit Card</label>
            <br/>
            <input type="radio" name="payment" id="UPI" value="UPI"/> <label for="Payment Method">UPI</label>
            <br/>
            <input type="radio" name="payment" id="COD" value="COD"/> <label for="Payment Method">Cash On Delivery</label>

            <br/><br>
            
            <label for="">Set Password</label>
            <input type="password" name="password" required/>
            <br/>
            
            
            
            <button type="submit" class="btn">Sign Up</button>
           
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