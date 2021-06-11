<?php
include("database.php");
if(!empty($_POST['eighthpageform']) && $_POST['eighthpageform'] == 'add2')
{
	$ticketbb = $_POST['ticketpp2'];
	$amountbb = $_POST['amountpp2'];
	$ticketcc=300;
	$sql = "insert into cart_information(no_of_tickets,ticket_price,ticket_price_integer) values('$ticketbb','$amountbb','$ticketcc')";
	$success = mysqli_query($con,$sql);
	if($success)
	{
		header("location:addtocart.php");
	}
	else
	{
		header("location:buytickets.php");
	}
}
?>

