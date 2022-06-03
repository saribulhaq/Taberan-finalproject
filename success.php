<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/1737359327.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="thanks.css">
    <title></title>
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap");
        .success-container {
            width:50%;
            position:absolute;
            top:30%;
            left:50%;
            transform:translate(-50%,-50%);
            color:#bdc3c7;
            font-weight:bold;
            font-family: "Poppins", sans-serif;
        }
    </style>
</head>
<body>
<div class="nav">
<a>  <h1>Taberan</h1></a>
</div>
      <div class="success-container">
        <?php
           if(isset($_GET["amount"]) && !empty($_GET["amount"])){
               ?>
            
          <?php
           }
        ?>
		
</div>
<div class="thn">
    <i class="fa-solid fa-thumbs-up"></i>
<h2>Thank you!</h2>

<p>For using our server.We hope you enjoyed shopping with us.</p>
<h3>Your Transaction has been Successfully Completed</h3>
<p>  <i class="fa-solid fa-check"></i>  Your order has been recieved</p>
<a href="mainpage.php">Back To Home</a>
      </div>  
</body>
</html>