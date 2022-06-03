
<?php
    include('db.php');
if(isset($_REQUEST['upd1']))
	{
		$userid=$_SESSION['loggedinId'];
		$up= mysqli_query($conn,"UPDATE `registration` SET `u_name`='$_POST[uname]', `f_name`='$_POST[fname]', `email`='$_POST[email]' WHERE `id`='$userid'");
        echo "<script>alert('Info updated successfully')</script>";
	}

	$userid=$_SESSION['loggedinId'];
$getdata=mysqli_query($conn,"SELECT * FROM registration WHERE id='$userid'");
$row=mysqli_fetch_assoc($getdata);


?>

<html>
<head>
<title></title>
<script src="https://kit.fontawesome.com/1737359327.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="customer">
</head>
<body>
<div class="nav">

    <a href="mainpage.php">  <h1>Taberan</h1></a>
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
    <i class="fas fa-link"></i>
    <span>Women's</span>
  </a>

  <a href="men.php">
    <i class="fas fa-stream"></i>
    <span>Man's</span>
  </a>

  <a href="#">
     <i class="fas fa-calendar"></i>
    <span>Events</span>
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

<div class="help">
    <a> <i class="fa-solid fa-circle-radiation"></i>    Our phone lines are open from 8:00 am to 12 midnight UAE time. You can call us directly at +97145732000 to talk to our team. You can also track your orders and deliveries, return a product, and manage your Prime account by clicking on the help resources below.</a>
    <h1><i class="fa-brands fa-hire-a-helper"></i>ello. What can we help you with?</h1>
    <section></section>
    <p>Some things you can do here</p>
</div>
<div class="box">
    <a class="order" href="#openModal">  <i class="fa-solid fa-people-carry-box"></i>  Your Order</a>
    <div id="openModal" class="modalDialog">
        <div> <a href="#close" title="Close" class="close">X</a>
      
          <h2>Your Orders</h2>
		  <input type="hidden" name="amount" value="<?php echo $_GET['price']?>">
                    <input type="hidden" name="product_name" value="<?php echo $_GET["item_name"]?>">
        </div>
      </div>
    <a class="sett" href="#openModal1">  <i class="fa-solid fa-address-card"></i>  Account Setting</a>
    <div id="openModal1" class="modalDialog">
        <div> <a href="#close" title="Close" class="close">X</a>
      
          <h2>Account Setting</h2>
		  <form action="" method="post">
		 <input type="text" name="uname" placeholder="Enter username" class="ppp" value="<?php echo $row['u_name'];?>" required> </br>
<input type="text" name="fname" placeholder="Enter fullname" value="<?php echo $row['f_name'];?>" required> </br>
<input type="text" name="email" placeholder="Enter Email" value="<?php echo $row['email'];?>" required> </br>
<input type="submit" name="upd1" value="Update">
</form>
        </div>
      </div>
    <a class="con" href="#openModa2">  <i class="fa-solid fa-headphones"></i>  Contact Us</a>
    <div id="openModa2" class="modalDialog">
        <div> <a href="#close" title="Close" class="close">X</a>
      
          <h2>Contact Us </h2>
<p>Address:Dubai Mall,2nd FLoor Taberan Shop</P></br>
<span>Phone:04 429 0245</span></br></br>
<a>Email:Taberan.shop@gmail.com</a>
        </div>
      </div>
</div>
<div class="footer"></div>

</body>
</html>


