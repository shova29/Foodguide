<?php
include_once('connect.php');
session_start();
if(isset($_POST['Submit'])){
    $email=$_POST['email'];
    $foodname=$_POST['foodname'];
    $rating=$_POST['rating'];
    $restaurant=$_POST['restaurant'];
    $location=$_POST['location'];
    $comment=$_POST['comment'];

    

    $sql = "insert into tbreviewinfo(EnterEmail,FoodName,FoodRating,RestaurantName,Location,CommentBox) values ('$email','$foodname','$rating',' $restaurant','$location','$comment')";
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
	<title>Food Review </title>
	 <link href="CSS/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="CSS/all.min.css">

</head>
<header>
  <nav class="navbar navbar-expand-lg navbar-light">
    
  <a class="navbar-brand" href="#" style="color: red;right:50%;font-size: 70px;">Food Review</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> 
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" >
      <li class="nav-item active" style="font:right;">
        <a class="nav-link" href="homepage.php" style="color: white;font-size: 20px;margin-left: 80px;">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="foodgallery.php" style="color: white;font-size: 20px;">Food Items</a>
      </li>
       </li>
      <li class="nav-item active">
        <a class="nav-link" href="uploadimage.php" style="color: white;font-size: 20px;">Upload</a>
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



<body style="background-image: url(images/review.jpg);
             background-size: cover;
             background-repeat:no-repeat;
             ">
 <div class="row">
  <div class="col-5" style="margin-top: 100px;margin-left: 20px;">
    <div class="review-page">
      <div class="form">
         <form action="#" method="post" >
          <input type="text" class="form-control" name="email" placeholder="Enter Email" required="required" style="font-size: 20px;">
          <input type="text" class="form-control" name="foodname" placeholder="Food Name" required="required"style="font-size: 20px;">
          <input type="text" class="form-control" name="rating" placeholder="Food Rating" style="font-size: 20px;">
          <input type="text" class="form-control" name="restaurant" placeholder="Restaurant Name" style="font-size: 20px;">
          <input type="text" class="form-control" name="location" placeholder="Location" style="font-size: 20px;">
          <input type="text" class="form-control" name="comment" placeholder="Comment Box" style="font-size: 20px;">
          <button type="submit" class ="btn btn-primary form-control " name="Submit">Submit</button>
   
         </form>
      </div>
    </div>
  </div>

  <div class="col-5">
     <div >
        <table class="table" width="auto" style="margin-top: 60px;color:white;">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Enter Email</th>
                <th scope="col">Food Name</th>
                <th scope="col">Food Rating</th>
                <th scope="col">Restaurant Name</th>
                <th scope="col">Location</th>
                <th scope="col">Comment box</th>
            </tr>
            </thead>
            <tbody>
    <?php
    include_once('connect.php');  
    $sql = " select EnterEmail,FoodName,FoodRating,RestaurantName,Location,CommentBox from tbreviewinfo";  

       $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row['EnterEmail']; ?></td>
                            <td><?php echo $row['FoodName']; ?></td>
                            <td><?php echo $row['FoodRating']; ?></td>
                            <td><?php echo $row['RestaurantName']; ?></td>
                            <td><?php echo $row['Location']; ?></td>
                            <td><?php echo $row['CommentBox']; ?></td>
                        </tr>
                      
                          <?php   }
            } else {
                echo "0 results";
            }
            mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>
 </div>

<style>
.review-page{
 width: 500px;
 height: 600px;
 background: rgba(0, 0, 0, 0.5);
 color: #fff;
 top: 40%;
 left: 50%;
 position: absolute;
 transform: translate(-50%,-50%);
 box-sizing: border-box;
 padding: 70px 30px;

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
  font-size: 14px;
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



</style>
</body>
</html>

