<?php
include("database.php");
if(!empty($_POST['tenthpageform']) && $_POST['tenthpageform'] == 'add4')
{
	$ticketbb = $_POST['ticketpp4'];
	$amountbb = $_POST['amountpp4'];
	$ticketcc=1000;
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
