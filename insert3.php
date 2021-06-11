<?php
include("database.php");
if(!empty($_POST['ninethpageform']) && $_POST['ninethpageform'] == 'add3')
{
	$ticketbb = $_POST['ticketpp3'];
	$amountbb = $_POST['amountpp3'];
	$ticketcc=500;
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
