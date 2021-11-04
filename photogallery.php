<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: Arial;
}

.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 8px -16px;
}
.row,
.row > .column {
  padding: 8px;
}

.column {
  float: left;
  width: 25%;
}
 
.row:after {
  content: "";
  display: table;
  clear: both;
}

.content {
  background-color: white;
  padding: 10px;
}

@media screen and (max-width: 900px) {
  .column {
    width: 50%;
  }
}


@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
</style>
</head>
<body  style="background-image: url(image2.jpg);
             background-size: cover; 
             background-repeat:no-repeat;
             ">

<div class="main">

<h1>Food Guide Gallery</h1>
<hr>

<h2>More Food Images</h2>
<div class="row">
  <div class="column">
    <div class="content">
      <img src="images/biriyani.jpg" alt="Biriyani1" style="width:100%">
      <h3>Biriyani</h3>
      <p style="color:#000000;font-size: 18px;">Name: Kacchi Biriyani</p>
      <p style="color:#000000;font-size: 18px;">Price: 320tk</p>
      <p style="color:#000000;font-size: 18px;">Rating: 8.5/10 </p>
      <p style="color:#000000;font-size: 18px;">Restuarant Name:Zaman Hotel</p>
      <p style="color:#000000;font-size: 18px;">location:GEC,Chittagong.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="images/patilbeef.jpg" alt="Biriyani2" style="width:100%">
      <h3>Biriyani</h3>
      <p style="color:#000000;font-size: 18px;">Name: Patil Biriyani</p>
      <p style="color:#000000;font-size: 18px;">Price: 250tk</p>
      <p style="color:#000000;font-size: 18px;">Rating: 9/10 </p>
      <p style="color:#000000;font-size: 18px;">Restuarant Name:Patil</p>
      <p style="color:#000000;font-size: 18px;">location:Lalkhan Bazar,Chittagong.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="images/hydrabadichickenbiriyani.jpg" alt="Biriyani3" style="width:100%">
      <h3>Biriyani</h3>
       <p style="color:#000000;font-size: 18px;">Name: Hydrabadi Chicken Biriyani</p>
       <p style="color:#000000;font-size: 18px;">Price: 220tk</p>
       <p style="color:#000000;font-size: 18px;">Rating: 8/10 </p>
       <p style="color:#000000;font-size: 18px;">Restuarant Name:Hydrabadi</p>
       <p style="color:#000000;font-size: 18px;">location:Central Plaza,Chittagong.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="images/doifuchka.jpg" alt="Fuska" style="width:100%">
      <h3>Fuska</h3>
       <p style="color:#000000;font-size: 18px;">Name: Doi Fuska</p>
       <p style="color:#000000;font-size: 18px;">Price: 180tk</p>
       <p style="color:#000000;font-size: 18px;">Rating: 9/10 </p>
       <p style="color:#000000;font-size: 18px;">Restuarant Name:Fuska Parlour</p>
       <p style="color:#000000;font-size: 18px;">location:Keyari,Chowkbazar.</p>
    </div>
  </div>

</div> 
</body>
</html>
