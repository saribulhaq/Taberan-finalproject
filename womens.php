<html>
<head>
<title></title>
<script src="https://kit.fontawesome.com/1737359327.js" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="fashion.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div class="nav">

   <a href="mainpage.php"> <h1>Taberan</h1></a>
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
  
  <a href="#">
    <i class="far fa-envelope"></i>
    <span>Contact</span>
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
    <div class="card-image one"><img src="images/c1.jpg"></div>
	 <input type="hidden" name="image_src" id="image_src" value="images/c1.jpg"/>
    <h2>Wome's Red court</h2>
	<p>AED210.99</p>
    <input type="submit" name="submit" value="Order Now" class="buy_now"/>
     <input type="hidden" name="price" id="price" value=" 210.99"/>
     <input type="hidden" name="item_name" id="item_name" value="Wome's Red court"/> 
  </div>
    <div class="card">
      <div class="card-image one"><img src="images/c2.jpg"></div>
	   <input type="hidden" name="image_src" id="image_src" value="images/c2.jpg"/>
    <h2>Women's Printed Shirt </h2>
	<p>AED69.30</p>
  <input type="submit" name="submit" value="Order Now" class="buy_now"/>
     <input type="hidden" name="price" id="price" value=" 69.30"/>
     <input type="hidden" name="item_name" id="item_name" value="Women's Printed Shirt"/> 
  </div>
    <div class="card">
      <div class="card-image one"><img src="images/c3.jpg"></div>
	   <input type="hidden" name="image_src" id="image_src" value="images/c3.jpg"/>
    <h2>Black dress</h2>
    <p>AED76.06</p>
    <input type="submit" name="submit" value="Order Now" class="buy_now"/>
     <input type="hidden" name="price" id="price" value=" 76.06"/>
     <input type="hidden" name="item_name" id="item_name" value="Black dress"/> 
  </div>
  <div class="card">
    <div class="card-image one"><img src="images/c4.jpg"></div>
	 <input type="hidden" name="image_src" id="image_src" value="images/c4.jpg"/>
    <h2>Deniklo women's heart Necklace</h2>
    <p>AED42.91</p>
    <input type="submit" name="submit" value="Order Now" class="buy_now"/>
     <input type="hidden" name="price" id="price" value=" 42.91"/>
     <input type="hidden" name="item_name" id="item_name" value="Deniklo women's heart Necklace"/> 
  </div>
    <div class="card">
      <div class="card-image one"><img src="images/c5.jpg"></div>
	   <input type="hidden" name="image_src" id="image_src" value="images/c5.jpg"/>
    <h2>Shalwar Kameez Women</h2>
    <p>AED168.46</p>
    <input type="submit" name="submit" value="Order Now" class="buy_now"/>
     <input type="hidden" name="price" id="price" value=" 168.46"/>
     <input type="hidden" name="item_name" id="item_name" value="Shalwar Kameez Women"/> 
  </div>
    <div class="card">
      <div class="card-image one"><img src="images/c13.jpg"></div>
	   <input type="hidden" name="image_src" id="image_src" value="images/c13.jpg"/>
    <h2>Nike Shoes</h2>
    <p>	AED446.28</p>
    <input type="submit" name="submit" value="Order Now" class="buy_now"/>
     <input type="hidden" name="price" id="price" value=" 446.28"/>
     <input type="hidden" name="item_name" id="item_name" value="Nike Shoes"/> 
  </div>
  <div class="card">
    <div class="card-image one"><img src="images/c7.jpg"></div>
	 <input type="hidden" name="image_src" id="image_src" value="images/c7.jpg"/>
    <h2>Denim's Jacket Women</h2>
    <p>AED558.50</p>
    <input type="submit" name="submit" value="Order Now" class="buy_now"/>
     <input type="hidden" name="price" id="price" value=" 558.50"/>
     <input type="hidden" name="item_name" id="item_name" value="Denim's Jacket Women"/> 
  </div>
    <div class="card">
      <div class="card-image one"><img src="images/c8.jpg"></div>
	   <input type="hidden" name="image_src" id="image_src" value="images/c8.jpg"/>
    <h2>Women's Makeup Kit </h2>
    <p>AED235.53</p>
    <input type="submit" name="submit" value="Order Now" class="buy_now"/>
     <input type="hidden" name="price" id="price" value=" 235.53"/>
     <input type="hidden" name="item_name" id="item_name" value="Women's Makeup Kit"/> 
  </div>
    <div class="card">
      <div class="card-image one"><img src="images/c9.jpg"></div>
	   <input type="hidden" name="image_src" id="image_src" value="images/c9.jpg"/>
    <h2>Lipstick 4 pcs</h2>
    <p>AED80.06</p>
    <input type="submit" name="submit" value="Order Now" class="buy_now"/>
     <input type="hidden" name="price" id="price" value=" 80.06"/>
     <input type="hidden" name="item_name" id="item_name" value="Lipstick 4 pcs"/> 
  </div>
  <div class="card">
    <div class="card-image one"><img src="images/c10.jpg"></div>
	 <input type="hidden" name="image_src" id="image_src" value="images/c10.jpg"/>
    <h2>Makeup Kit</h2>
    <p>AED266.71</p>
    <input type="submit" name="submit" value="Order Now" class="buy_now"/>
     <input type="hidden" name="price" id="price" value=" 266.71"/>
     <input type="hidden" name="item_name" id="item_name" value="Makeup Kit"/> 
  </div>
    <div class="card">
      <div class="card-image one"><img src="images/c11.jpg"></div>
	   <input type="hidden" name="image_src" id="image_src" value="images/c11.jpg"/>
    <h2>Women's Necklace  </h2>
    <p>AED40.00</p>
    <input type="submit" name="submit" value="Order Now" class="buy_now"/>
     <input type="hidden" name="price" id="price" value=" 40.00"/>
     <input type="hidden" name="item_name" id="item_name" value="Women's Necklace"/> 
  </div>
    <div class="card">
      <div class="card-image one"><img src="images/c12.jpg"></div>
	  <input type="hidden" name="image_src" id="image_src" value="images/c12.jpg"/>
    <h2>Women's Blue diamond necklace</h2>
    <p>AED751.53</p>
      <input type="submit" name="submit" value="Order Now" class="buy_now"/>
     <input type="hidden" name="price" id="price" value=" 751.53"/>
     <input type="hidden" name="item_name" id="item_name" value="Women's Blue diamond necklace"/> 
  </div>
</section>

<div class="footer"></div>
<script>
         $(document).ready(function(){
           $(".buy_now").on('click',function(e){
                e.preventDefault();
                    var image_src = $(this).closest(".card").find("#image_src").attr("value");
                    var item_name = $(this).closest(".card").find("#item_name").attr("value");
                    var price = $(this).closest(".card").find("#price").attr("value");
                    var dt = '&image='+image_src+'&item_name='+item_name+'&price='+price;
                    var url = 'http://localhost:8080/Taberan/checkout.php?'+dt; 
                    
                    $.ajax({
                         url:url,
                         method:'GET',
                         success:function(){
                              window.location.href=url;
                         }
                    });
                   
                    
           });
          
        });
   </script>
</body>
</html>
