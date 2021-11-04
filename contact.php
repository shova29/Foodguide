<?php
include_once('connect.php');
session_start();
if(isset($_POST['Submit'])){
    $email=$_POST['email'];
    $phonenumber=$_POST['phonenumber'];
    $subject=$_POST['subject'];
    
 

    $sql = "insert into tbcontactinfo  (Email,PhoneNumber,Subject) values ('$email', '$phonenumber', '$subject')";
    if ($conn->query($sql)){
     echo "all information save successfully";
  }
  else{
      echo "Error: ". $sql ."
  ". $conn->error;
  }
  $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	   <link href="CSS/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="CSS/all.min.css">
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand" href="#" style="color: pink;font-size: 70px;">Contact</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" >
      <li class="nav-item active" style="font:right;">
        <a class="nav-link" href="homepage.php" style="color: white;font-size: 20px;margin-left: 50px;">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="foodgallery.php" style="color: white;font-size: 20px;">Food Items</a>
      </li>
       </li>
      <li class="nav-item active">
        <a class="nav-link" href="review.php" style="color: white;font-size: 20px;">Review</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="uploadimage.php" style="color: white;font-size: 20px;">Upload</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="aboutus.php" style="color: white;font-size: 20px;">About<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="index.php" style="color: white;font-size: 20px;">Log Out<span class="sr-only">(current)</span></a>
      </li>
    </ul>


</nav>
</header>
<body style="background-image: url(images/contact.jpg);
             background-size: cover; 
             background-repeat:no-repeat;
            top: 0px;
            left: 0px;

  ">
 <div class="row" >
  <div class="col-5" style="margin-top: 250px;margin-left: 330px;">
    <div class="contact-page">
       <div class="form">
         <form action="#" method="post" >
           <input type="text" class="form-control" name="email" placeholder="Enter Email" required="required" style="font-size: 16px;
            ">
           <input type="number" class="form-control" name="phonenumber" placeholder="Phone Number"style="font-size: 16px;height:60%;" >
           <input type="text" class="form-control" name="subject" placeholder="Your Message" style="font-size: 16px;height:80%;">
           <button type="submit" class ="btn btn-primary form-control " name="Submit">Submit</button>
   
         </form>
       </div>
     </div>
  </div>
</div>
<div class="footer">
                <p clearfix>&copy;Copy Right 2019 for foodguide.com</p>
           </div>

<style>
*{
  margin: 0;
  padding: 0;
}
.contact-page{
 width: 470px;
 height: 450px;
 background: rgba(0, 0, 0, 0.5);
 color: #fff;
 top: 30%;
 left: 70%;
 position: absolute;
 transform: translate(-50%,-50%);
 box-sizing: border-box;
 padding: 70px 30px;
 background-position: center;

}
.form{
  position: relative;
  z-index: 1;
  background: rgba(0, 0, 0, 0.5);
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
}
.form input{
  outline: none;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  border-radius: 20px;
  font-size: 10px;
}
.form button{
  text-transform: uppercase;
  outline: 0;
  background: lightgreen;
  width: 60%;
  height: 12%;
  border: none;
  padding: 15px;
  color: #fff;
  font-size: 14px;
  cursor: pointer;
  transition: .5s;
  border-radius: 20px;
}
.form button:hover{
  background: darkblue;
  border: none;
  border-radius: 20px;
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: right;

}

</style>
</body>
</html




