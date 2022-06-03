<?php
include_once 'db.php';
if(!isset($_SESSION['loggedinId']))
{
	header('location:address.php');
}


if(isset($_POST['submit1']))
{
	$funame=$_POST['fuln'];
		$adres=$_POST['adrr1'];
		$adres2=$_POST['adrr2'];
		$cit=$_POST['cityy'];
		$numb=$_POST['num'];
		
     $sql ="INSERT INTO address (username, fullname, adr1, adr2, city, number) 
	        VALUES ('$_SESSION[uname]','$funame','$adres','$adres2','$cit',$numb)";
			header('location:order.php');
	if(mysqli_query($conn,$sql))
	{
		echo "<p style='color:white;'>data inserted Successfully</p>";
	}
	
}
if(isset($_POST['upd']))
	{
		$userid=$_SESSION['loggedinId'];
		$up= mysqli_query($conn,"UPDATE `address` SET `fullname`='$_POST[fuln]', `adr1`='$_POST[adrr1]', `adr2`='$_POST[adrr2]', `city`='$_POST[cityy]', `number`='$_POST[num]' WHERE `username`='$_SESSION[uname]'");
        
	}

?>
<?php
include "address.php";
?>
