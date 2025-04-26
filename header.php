<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
@import url('https://fonts.googleapis.com/css2?family=Kode+Mono:wght@400..700&display=swap');

body {
  margin: 0;
  font-family: "Kode Mono", monospace;
}

.topnav {
  padding: 20px;
  overflow: hidden;
  background-color: transparent;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 19px;
}

.topnav a:hover {
  background-color: white;
  color: black;
  text-decoration: none;
  border-radius: 15px;
}

.topnav a.active {
  color: black;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
.fluid-container{
    background-image: linear-gradient(#89CFF3,white);
}
</style>
</head>
<body>
  <div class="fluid-container">
<div class="container">
<div class="topnav" id="myTopnav">
  <a>RenTo</a>
  <a href="index.php">HOME</a>
  <a href="about.php">WHY CHOOSE US?</a>
  <a href="services.php">OUR SERVICES</a>
  <a href="products.php">PRODUCTS</a>
  <a href="contact.php">CONTACT US</a>
  <a href="cart.php">ADD TO CART</a>
  <a href="login.php">LOGIN</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
</div>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>
