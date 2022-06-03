
<html>
<head>
<title></title>
<script src="https://kit.fontawesome.com/1737359327.js" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<div class="nav">

    <h1>Taberan</h1>
</div>


   
<input type="checkbox" id="check">
<label for="check">
  <i class="fas fa-bars" id="btn"></i> 
  <i class="fas fa-times" id="cancel"></i>
</label>

<div class="sidebar">
  <header>My Menu</header>

  <a href="mainpage.php" class="active">
    <i class="fas fa-qrcode"></i>
    <span>Home</span>
  </a>

  <a href="womens.php">
    <i class="fa-solid fa-person-dress"></i>
    <span>Women's</span>
  </a>

  <a href="men.php">
    <i class="fa-solid fa-person"></i>
    <span>Man's</span>
  </a>

  <a href="elect.php">
     <i class="fa-solid fa-mobile-screen"></i>
    <span>Elect</span>
  </a>

  <a href="#">
    <i class="far fa-question-circle"></i>
    <span>About</span>
  </a>

  <a href="customerservice.php">
    <i class="fas fa-sliders-h"></i>
    <span>Services</span>
  </a>
  
  <a href="logout.php">
   <i class="fa-solid fa-arrow-right-from-bracket"></i>
    <span>Logout</span>
  </a>
</div>

    <div class="navbar">
        <a href="fashion.php" class="fash"> <i class="fa-solid fa-shirt"></i> Fashion</a>
        <a href="elect.php" class="elec"> <i class="fa-solid fa-mobile-screen-button"></i> Electronics</a>
        <a href="newrelease.php" class="new"> <i class="fa-solid fa-box-open"></i> New Release</a>
        <a href="customerservice.php" class="ser"> <i class="fa-solid fa-user"></i> Customer Service</a>
        <a href="logout.php" class="out"> <i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
</div>



<section class="container">
  <div class="card">
    <div class="card-image one"><img href="elect.php" src="images/electronic-gadgets.jpeg"></div>
    <h2>Electronics</h2>
    <a href="elect.php">See More...</a>
  </div>
    <div class="card">
      <div class="card-image one"><img href="men.php" src="images/accesories.jpg"></div>
    <h2>Man's Outlet</h2>
    <a href="men.php">See More...</a>
  </div>
    <div class="card">
      <div class="card-image one"><img href="kitchen.php" src="images/kitchen.jpg"></div>
    <h2>Kitchen</h2>
    <a href="kitchen.php">See More...</a>
  </div>
  <div class="card">
    <div class="card-image one"><img src="images/womens.jpg"></div>
    <h2>Women's Outlet</h2>
    <a href="womens.php">See More...</a>
  </div>
    <div class="card">
      <div class="card-image one"><img href="perfumes.php" src="images/perfume.jpg"></div>
    <h2>Perfumes</h2>
    <a href="perfumes.php">See More...</a>
  </div>
    <div class="card">
      <div class="card-image one"><img href="furniture.php" src="images/furnitur.jpg"></div>
    <h2>Furniture</h2>
    <a href="furniture.php">See More...</a>
  </div>
</section>

<div class="f1">
  <p>Sport's Equipments</p>
    <a href="gym.php"><img src="images/gg.jpg"></a>
  <a href="ball.php"><img src="images/ball.jpg"></a>
  <a href="cycle.php"><img src="images/cy.jpg"></a>
  <a href="boxing.php"><img src="images/boxing.jpg"></a>
</div>

<div class="footer">
<div id="googleMap"></div>
<script>
    function myMap() {
        var mapProp = {
            center: new google.maps.LatLng(25.1988, 55.2796),
            zoom: 15,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCaU9kBPgMUSXkKIfSPchnKeY1VxGjotbU&callback=myMap"></script>
<h2>Contact Us</h2>
<p>Address:Dubai Mall,2nd FLoor Taberan Shop</P>
<span>Phone:04 429 0245</span>
<a>Email:Taberan.shop@gmail.com</a>
<div class="cc">
<h2>Customer Service</h2>
<p>FAQ</P>
<span>Terms and Conditions</span>
<a>Privacy Policy</a>
</div>
</div>

</body>
</html>
