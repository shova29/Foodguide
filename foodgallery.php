<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;

}

.tab {
  float: left;
  border: 0px solid #ccc;
  background-color: #008B8B;
  width: 20%;
  height: 600px;
  opacity: 0.5;
}

.tab button {
  display: block;
  background-color: #008B8B;
  color: white;
  padding: 45px 60px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  font-size: 30px;
}

.tab button:hover {
  background-color: #483D8B;
}

.tab button.active {
  background-color:#708090 ;
}


.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 0px solid #ccc;
  width: 60%;
  border-left: none;
  height: 600px;
  display: none;

}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

.topnav {
  overflow: hidden;
  background-color: #008B8B;
}

.topnav a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
  border-bottom: 3px solid transparent;
}

.topnav a:hover {
  border-bottom: 3px solid black;
}

.topnav a.active {
  border-bottom: 3px solid white;
}


</style>
</head>
<body style="background-image: url(images/image2.jpg);
             background-size: cover; 
             background-repeat:no-repeat;

             ">

<h2 style="color:#483D8B;font-size: 40px;margin-left: 550px;">Food Items</h2>
<p style="color:#A52A2A;font-size: 20px;margin-left: 450px;"> The information of food category item are described below:</p>
<div class="topnav">
  <a class="active" href="#">Food Items</a>
  <a href="homepage.php">Home</a>
  <a href="review.php">Review</a>
  <a href="uploadimage.php">Upload</a>
  <a href="aboutus.php">About</a>
  <a href="contact.php">Contact</a>
  <a href="index.php">Log Out</a>
</div>

<div style="padding-left:24px">
  <h2>For seeing more images click on the picture. </h2>
</div>


<div class="tab">
  <button class="tablinks" onmouseover="openCity(event, 'Biriyani')">Biriyani</button>
  <button class="tablinks" onmouseover="openCity(event, 'Fuska')">Fuska</button>
  <button class="tablinks" onmouseover="openCity(event, 'Icecream')">Icecream</button>
  <button class="tablinks" onmouseover="openCity(event, 'Coffee')">Coffee</button>
</div>

<div id="Biriyani" class="tabcontent">
  <h3>Biriyani</h3>
  <div class="col-md-3 col-sm-12 col-lg-3 Biriyani">
    <a href="photogallery.php">
    <image src="images/Biryani.jpg" height="160" width="220">
    </image>
    </a>
    <p style="color:#000000;font-size: 26px;font-weight:bold;">Name: Kacchi Biriyani</p>
    <p style="color:#000000;font-size: 26px;font-weight:bold;">Price: 300tk</p>
    <p style="color:#000000;font-size: 26px;font-weight:bold;">Rating: 9/10 </p>
    <p style="color:#000000;font-size: 26px;font-weight:bold;">Restuarant Name:7days</p>
    <p style="color:#000000;font-size: 26px;font-weight:bold;">location:2no gate,chittagong.</p>
  </div>
</div>

<div id="Fuska" class="tabcontent">
  <h3>Fuska</h3>
  <div class="col-md-3 col-sm-12 col-lg-3 Fuska">
    <a href="photogallery.php">
    <image src="images/fuska.jpg" height="160" width="220">
    </image>
    </a>
    <p style="color:#000000;font-size: 26px;font-weight:bold;">Name: bombay fuska</p>
    <p style="color:#000000;font-size: 26px;font-weight:bold;">Price:70tk</p>
    <p style="color:#000000;font-size: 26px;font-weight:bold;">Rating: 8/10 </p>
    <p style="color:#000000;font-size: 26px;font-weight:bold;">Restuarant Name:Adda</p>
    <p style="color:#000000;font-size: 26px;font-weight:bold;">location:Keyari market,Chowkbazar.</p>
  </div>
</div>

<div id="Icecream" class="tabcontent">
  <h3>Icecream</h3> 
  <div class="Icecream">
    <a href="photogallery.php">
    <image src="images/ice.jpg" height="160" width="220">
    </image>
    </a>
    <p style="color:#000000;font-size: 26px;font-weight:bold;">Name:Cone </p>
    <p style="color:#000000;font-size: 26px;font-weight:bold;">Price: 80tk</p>
    <p style="color:#000000;font-size: 26px;font-weight:bold;">Rating: 9/10 </p>
    <p style="color:#000000;font-size: 26px;font-weight:bold;">Restuarant Name:Sub-Zero</p>
    <p style="color:#000000;font-size: 26px;font-weight:bold;">location:Stadium,Kazir Dewri.</p>
</div>
</div>

<div id="Coffee" class="tabcontent">
  <h3>Coffee</h3>
  <div class="Coffee">
    <a href="photogallery.php">
    <image src="images/coffee.jpg" height="160" width="220">
    </image>
    </a></br>
  <p style= "color:#000000;font-size: 26px;font-weight:bold;">Name:Cappuccino Coffee </p>
  <p style= "color:#000000;font-size: 26px;font-weight:bold;">Price: 180tk</p>
  <p style= "color:#000000;font-size: 26px;font-weight:bold;">Rating: 9/10 </p>
  <p style= "color:#000000;font-size: 26px;font-weight:bold;">Restuarant Name:Well Food Centre</p>
  <p style= "color:#000000;font-size: 26px;font-weight:bold;">location:Nizam Road GEC Circle.</p>
  </div>

</div>

<div class="clearfix"></div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
   
</body>
</html> 