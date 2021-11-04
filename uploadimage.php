<?php
$conn = mysqli_connect("localhost", "root", "", "food");
if($conn) {
echo "connected";
}
if(isset($_POST['uploadfilesub'])) {

$filename = $_FILES['uploadfile']['name'];
$filetmpname = $_FILES['uploadfile']['tmp_name'];
$folder = 'uploadedimages/';
move_uploaded_file($filetmpname, $folder.$filename);
$sql = "insert into uploadedimage(imagename) values('$filename')";
$qry = mysqli_query($conn,  $sql);
if( $qry) {
echo "image uploaded";
}
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
  <a class="navbar-brand" href="#" style="color:#B22222 ;font-size: 70px;">Food Upload </a>
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
        <a class="nav-link" href="aboutus.php" style="color: white;font-size: 20px;">About<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="contact.php" style="color: white;font-size: 20px;">Contact <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="index.php" style="color: white;font-size: 20px;">Log Out<span class="sr-only">(current)</span></a>
      </li>
    </ul>
   </div>

</nav>
</header>
<body style="background-image:url(images/upload.jpg);
             background-size:cover;
            background-repeat:no-repeat;
">
<h2 style="margin-left:570px;padding-top: 50px;font-family: serif;font-size:50px;"><em>Upload a Picture</em></h2>
<form action="uploadimage.php" method="post" enctype="multipart/form-data" style="text-align: center;padding-top:30px;" > 
        <input type="file" name="uploadfile" />
        <input type="submit" name="uploadfilesub" value="upload" />
</form>
<div class="row">
<div class="col-5">
   <div>
	<?php
    include_once('connect.php');  
    $sql = " select imagename from uploadedimage";  

       $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <?php 
                                  echo "<img src='uploadedimages/".$row['imagename']."' >";
                                  
                             ?>
               
                         
                      
                          <?php   
                          }
            } else {
                echo "0 results";
            }
            mysqli_close($conn);
                ?>

   <div>
</div>
</div>

</body>
<style>
.imagename{
	width:80px;
	height:30px;
	margin: 5px;
}
</style>
<html>