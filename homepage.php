<?php

?>



<!DOCTYPE html>
<html>
<head>
	<title>Food Guide</title>
   <link href="CSS/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="CSS/all.min.css">
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand" href="#" style="color:blue;font-size: 60px;">Food Guide</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" >
      <li class="nav-item active" style="font:right;">
        <a class="nav-link" href="#" style="color: white;font-size: 20px;margin-left: 50px;">Home <span class="sr-only">(current)</span></a>
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
        <a class="nav-link" href="contact.php" style="color: white;font-size: 20px;">Contact<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="index.php" style="color: white;font-size: 20px;">Log Out<span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="foodgallery.php">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>


  </div>
</nav>
</header>
<body style="background-image: url(images/home.jpg);
            background-image: transparent;
            background-size: cover;
            background-repeat: no-repeat;
           font-family: sans-serif;">
           <div class="footer">
                <p clearfix>&copy;Copy Right 2019 for foodguide.com</p>
           </div>


  
</body>

<style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
}
</style>
</html>
