<?php
include_once('connect.php');
session_start();
if(isset($_POST['submit'])){
    $firstname=$_POST['FastName'];
    $lastname=$_POST['LastName'];
    $birthdate=$_POST['date'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $password=$_POST['password'];
    $phonenumber=$_POST['PhoneNumber'];
 

    $sql = "insert into account (FirstName,LastName,birthdate,email,gender,password,phoneNumber) values ('$firstname','$lastname','$birthdate','$email','$gender','$password','$phonenumber')";
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


 <html>
 <head>
<title>registration</title>
<link rel="stylesheet" href="design.css">
<link href="CSS/bootstrap.min.css" rel="stylesheet">
</head>
<body>
 <div class="registration-page">
 <div class="form">
     <form action="#" method="post" >
	 <h2>Register Here</h2>
	 <input type="text" class="form-control" name="FastName" placeholder="FastName" required="required">
	 <input type="text" class="form-control" name="LastName" placeholder="LastName" required="required">
	 <input type="date" class="form-control" name="date"><br>
    <div class="form-group">
          <div class="input-group">
            <select type="select"  name="gender" class="form-control" placeholder="Gender"required="required">
                               <option >Gender</option>
                               <option value="male">Male</option>
                               <option value="Female">Female</option>
                               <option value="others">Others</option>

            </select>
          </div>
   </div>
	 <input type="password" class="form-control" name="password" placeholder="*******">
	 <input type="email"  class="form-control" name="email" placeholder="Email" required="required">
	 <input type="number" class="form-control" name="PhoneNumber" placeholder="PhoneNumber">
	 <button type="submit" class ="btn btn-primary form-control " name="submit">Submit</button>
	 <p class="message">Already have an account?<a href="login.php"> Login</a>
	 </p>
	 </form>
 </div>
 </div>
</body>
<style type="text/css">
body{
  margin: 0;
  padding: 0;
  background: url(images/image1.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  font-family:sans-serif;
}
.avatar{
 width: 100px;
 height: 100px;
 border-radius: 50%;
 position: absolute;
 top: -50px;
 left: calc(50% - 50px);
}

.registration-page{
 width: 500px;
 height: 800px;
 background: transparent;
 color: #fff;
 top: 60%;
 left: 50%;
 position: absolute;
 transform: translate(-50%,-50%);
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
  width: 30%;
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
.form .message{
  margin: 15px 0 0;
  color: #fff;
  font-size: 17px;
}
.form .message a{
  color: blue;
  text-decoration: none;
}
</style>
</html>

