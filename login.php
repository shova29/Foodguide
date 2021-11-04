<?php
include_once('connect.php');
session_start();

if(isset($_POST['submit'])){
$email=$_POST['email'];
$password=$_POST['password'];

    $sql = "select email,password from account where email='$email' and password='$password'";
    $result=mysqli_query($conn,$sql);
    $num =mysqli_num_rows($result);
    if ($num==1){
        header('location:homepage.php');
    }
    else{
       echo "Error";
    }
    $conn->close();
}

?>
<html>
<head>
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="style.css">   
</head>
    <body>
    <div class="login-box">
    <div class="form">
    <img src="images/avatar.png" class="avatar">
        <h1 style="font-size:30px">Login Here</h1>
            <form method="post" action="#">
            <input type="email" name="email" class="form-control"  placeholder="Enter Email" required="required">
            <input type="password" name="password" class="form-control" placeholder="Enter Password" required="required">
            <button type="submit"  class="btn btn-primary form-control" name="submit" style="left: 70px;width: 100px;height: 40px;">Login</button><br>
            <p class="message"><a href="registration.php" style="font-size: 20px;">Don't have an account?</a> 
            </p>  
            </form>
        
    </div>   
    </div>
    
    </body>
</html>