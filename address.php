<?php
include_once 'db.php';

if(isset($_POST['cancel']))
{
	header('location:mainpage.php');
}
$userid=$_SESSION['loggedinId'];
$getdata=mysqli_query($conn,"SELECT * FROM `address` WHERE username='$_SESSION[uname]'");
$rw=mysqli_fetch_assoc($getdata);
	mysqli_close($conn);
	?>
<html>
<head>
<title></title>
<script src="https://kit.fontawesome.com/1737359327.js" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="adres">
</head>
<body>

<div class="nav">

    <a href="mainpage.php"><h1>Taberan</h1></a>
</div>

    <div class="navbar">
        <a href="fashion.php" class="fash"> <i class="fa-solid fa-shirt"></i> Fashion</a>
        <a href="elect.php" class="elec"> <i class="fa-solid fa-mobile-screen-button"></i> Electronics</a>
        <a href="newrelease.php" class="new"> <i class="fa-solid fa-box-open"></i> New Release</a>
        <a href="customerservice.php" class="ser"> <i class="fa-solid fa-user"></i> Customer Service</a>
        <a href="logout.php" class="out"> <i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
</div>
<h2>Address Information</h2>
<div class="adres">
    <form method="POST" action="adres_code.php">
        <a> Full Name : <input type="text" name="fuln" placeholder="Enter FullName" value="<?php echo $rw['fullname'];?>" required > </br></a>
        <a> Address 1 :<input type="text" name="adrr1" placeholder="Enter Street Address" value="<?php echo $rw['adr1'];?>" required > </br></a>
        <a> Address 2 :<input type="text" name="adrr2" placeholder="Enter Address Apt,suit,building etc." value="<?php echo $rw['adr2'];?>" required> </br></a>
        <a> City Name :<input type="text" name="cityy" placeholder="Enter City "  value="<?php echo $rw['city'];?>" required> </br></a>
        <a>PhoneNumber:<input type="text" name="num" placeholder="Enter PhoneNumber " value="<?php echo $rw['number'];?>" required> </br></br></a>

        <input type="submit" name="submit1" value="Order"> </br>
		<input type="submit" name="upd" value="Update Address"> 
		<a href="mainpage.php"><input type="submit" name="cancel" value="Cancel Order"></a>
</div>
</form>
<div class="footer"></div>

</body>
</html>


