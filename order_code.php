<?php
include_once 'db.php';
if(isset($_REQUEST['order']))
{
	$ord=$_REQUEST['one'];
		
     $sql ="INSERT INTO orders (usname,order_name) 
	        VALUES ('$_SESSION[uname]',$ord)";
			echo "<script>alert('ordered  successfully')</script>";
}
else 
	{
		echo "Error inserting data";
	}
	?>