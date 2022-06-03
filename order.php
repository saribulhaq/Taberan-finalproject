
<html>
<head>
<title></title>
<script src="https://kit.fontawesome.com/1737359327.js" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="order.css">
</head>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCaU9kBPgMUSXkKIfSPchnKeY1VxGjotbU&callback=initMap"
  type="text/javascript"></script>
  <style>

  	#map {
  			width:auto;
  			height: 400px;
  	 }
  </style>

  <script type="text/javascript">

  		x = navigator.geolocation;

  		x.getCurrentPosition(success, failure);

  		function success(position)

  		{
  			var myLat = position.coords.latitude;
  			var myLong = position.coords.longitude;

  			//alert(myLat);

  			var coords = new google.maps.LatLng(myLat,myLong);

  			var mapOptions = {

  				zoom:11,
  				center: coords,
  				mapTypeId: google.maps.MapTypeId.ROADMAP
  			}

  			var map = new google.maps.Map(document.getElementById("map"), mapOptions);
  			var marker = new google.maps.Marker({map:map, position:coords});	
  		}

  		function failure(){ }

  </script>
<body>
<div class="nav">

   <a> <h1>Taberan</h1></a>
</div>
   <div id="map"></div>

<form action="" method="post"></form>
    
       <a href="thank.php"><input type="button" name="cod" value="Pay On Delivery"></a>
    
</form>
</body>
</html>
