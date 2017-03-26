<?php

if(!empty($_POST['email'])):
echo $_POST['email'];
die();
endif;

?>



<!DOCTYPE html>
<html>
     <head>
         <title>Login Below</title>
         <link rel="stylesheet" type="text/css" href="css/login.css"
         </head>

         <body>

<div class="header">
    <a href="">Matthew Petrinec Login</a>
    </div>


            <h1>Login</h1>
            <span> or <a href="register.php">Register</span></a>

            <form action="login1.php" method="POST">
                <input type="text" placeholder="Enter your email" name="email">
                <input type="password" placeholder="Password" name="password">
                <input type="submit">
                </form>




</body>

</html>