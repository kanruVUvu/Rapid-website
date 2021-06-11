<?php
include("database.php");
   session_start();
   
   if(!empty($_POST['taskbbc']) && $_POST['taskbbc'] == 'add') 
   {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['mailid2']);
      $mypassword = mysqli_real_escape_string($con,$_POST['pwd2']); 
      $logintype = mysqli_real_escape_string($con,$_POST['abc']); 
      $sql = "SELECT * FROM customerdashboardlogin WHERE mail_address = '$myusername' and password = '$mypassword' and login_as_type = '$logintype'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if(($count == 1) && ($_POST['abc']=="PARTNER")) {
		  $_SESSION['retailer_name']=$row['user_name'];
		  $_SESSION['retailer_mailid']=$row['user_mailid'];
		  $_SESSION['retailer_phoneno']=$row['user_phoneno'];
		  $_SESSION['retailer_address']=$row['user_address'];
		  $_SESSION['loggedIn'] = true;
         header("location:https://outre.digital/stage/rapid/appretailer/dashboard.php");
      }
	  elseif(($count == 1) && ($_POST['abc']=="ADMINISTRATOR")) {
		  $_SESSION['administrator_name']=$row['user_name'];
		  $_SESSION['administrator_mailid']=$row['user_mailid'];
		  $_SESSION['administrator_phoneno']=$row['user_phoneno'];
		  $_SESSION['administrator_address']=$row['user_address'];
		  $_SESSION['loggedIn'] = true;
         header("location:https://outre.digital/stage/rapid/appadmin/dashboard.php");
	  }
	  else
	  {
		  $_SESSION['loggedIn'] = false;
		$error = "Your Login Name or Password or Login_as_type is invalid";
		 header("location:index.php");
      }  
		
      }
?>
<?php
include("database.php");
   session_start();
   
   if(!empty($_POST['taskcbc']) && $_POST['taskcbc'] == 'add') 
   {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['mailid2']);
      $mypassword = mysqli_real_escape_string($con,$_POST['pwd2']); 
      $logintype = mysqli_real_escape_string($con,$_POST['abc']); 
      $sql = "SELECT * FROM customerdashboardlogin WHERE mail_address = '$myusername' and password = '$mypassword' and login_as_type = '$logintype'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      	
      if(($count == 1) && ($_POST['abc']=="PARTNER")) {
		 $_SESSION['retailer_name']=$row['user_name'];
		  $_SESSION['retailer_mailid']=$row['user_mailid'];
		  $_SESSION['retailer_phoneno']=$row['user_phoneno'];
		  $_SESSION['retailer_address']=$row['user_address'];
		  $_SESSION['loggedIn'] = true;
         header("location:https://outre.digital/stage/rapid/appretailer/dashboard.php");
      }
	  elseif(($count == 1) && ($_POST['abc']=="ADMINISTRATOR")) {
		  $_SESSION['administrator_name']=$row['user_name'];
		  $_SESSION['administrator_mailid']=$row['user_mailid'];
		  $_SESSION['administrator_phoneno']=$row['user_phoneno'];
		  $_SESSION['administrator_address']=$row['user_address'];
		  $_SESSION['loggedIn'] = true;
         header("location:https://outre.digital/stage/rapid/appadmin/dashboard.php");
	  }
	  else
	  {
		  $_SESSION['loggedIn'] = false;
		$error = "Your Login Name or Password or Login_as_type is invalid";
		 header("location:faq.php");
      }  
		
      }
?>
<?php
include("database.php");
   session_start();
   
   if(!empty($_POST['taskdbc']) && $_POST['taskdbc'] == 'add') 
   {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['mailid2']);
      $mypassword = mysqli_real_escape_string($con,$_POST['pwd2']); 
      $logintype = mysqli_real_escape_string($con,$_POST['abc']); 
      $sql = "SELECT * FROM customerdashboardlogin WHERE mail_address = '$myusername' and password = '$mypassword' and login_as_type = '$logintype'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
     	
      if(($count == 1) && ($_POST['abc']=="PARTNER")) {
		  $_SESSION['retailer_name']=$row['user_name'];
		  $_SESSION['retailer_mailid']=$row['user_mailid'];
		  $_SESSION['retailer_phoneno']=$row['user_phoneno'];
		  $_SESSION['retailer_address']=$row['user_address'];
		  $_SESSION['loggedIn'] = true;
         header("location:https://outre.digital/stage/rapid/appretailer/dashboard.php");
      }
	  elseif(($count == 1) && ($_POST['abc']=="ADMINISTRATOR")) {
		 $_SESSION['administrator_name']=$row['user_name'];
		  $_SESSION['administrator_mailid']=$row['user_mailid'];
		  $_SESSION['administrator_phoneno']=$row['user_phoneno'];
		  $_SESSION['administrator_address']=$row['user_address'];
		  $_SESSION['loggedIn'] = true;
         header("location:https://outre.digital/stage/rapid/appadmin/dashboard.php");
	  }
	  else
	  {
		  $_SESSION['loggedIn'] = false;
		$error = "Your Login Name or Password or Login_as_type is invalid";
		 header("location:t&c.php");
      }  
		
      }
?>
<?php
include("database.php");
   session_start();
   
   if(!empty($_POST['taskebc']) && $_POST['taskebc'] == 'add') 
   {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['mailid2']);
      $mypassword = mysqli_real_escape_string($con,$_POST['pwd2']); 
      $logintype = mysqli_real_escape_string($con,$_POST['abc']); 
      $sql = "SELECT * FROM customerdashboardlogin WHERE mail_address = '$myusername' and password = '$mypassword' and login_as_type = '$logintype'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      	
      if(($count == 1) && ($_POST['abc']=="PARTNER")) {
		 $_SESSION['retailer_name']=$row['user_name'];
		  $_SESSION['retailer_mailid']=$row['user_mailid'];
		  $_SESSION['retailer_phoneno']=$row['user_phoneno'];
		  $_SESSION['retailer_address']=$row['user_address'];
		  $_SESSION['loggedIn'] = true;
         header("location:https://outre.digital/stage/rapid/appretailer/dashboard.php");
      }
	  elseif(($count == 1) && ($_POST['abc']=="ADMINISTRATOR")) {
		  $_SESSION['administrator_name']=$row['user_name'];
		  $_SESSION['administrator_mailid']=$row['user_mailid'];
		  $_SESSION['administrator_phoneno']=$row['user_phoneno'];
		  $_SESSION['administrator_address']=$row['user_address'];
		  $_SESSION['loggedIn'] = true;
         header("location:https://outre.digital/stage/rapid/appadmin/dashboard.php");
	  }
	  else
	  {
		  $_SESSION['loggedIn'] = false;
		$error = "Your Login Name or Password or Login_as_type is invalid";
		 header("location:aboutus.php");
      }  
		
      }
?>
<?php
include("database.php");
   session_start();
   
   if(!empty($_POST['taskfbc']) && $_POST['taskfbc'] == 'add') 
   {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['mailid2']);
      $mypassword = mysqli_real_escape_string($con,$_POST['pwd2']); 
      $logintype = mysqli_real_escape_string($con,$_POST['abc']); 
      $sql = "SELECT * FROM customerdashboardlogin WHERE mail_address = '$myusername' and password = '$mypassword' and login_as_type = '$logintype'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      	
      if(($count == 1) && ($_POST['abc']=="PARTNER")) {
		  $_SESSION['retailer_name']=$row['user_name'];
		  $_SESSION['retailer_mailid']=$row['user_mailid'];
		  $_SESSION['retailer_phoneno']=$row['user_phoneno'];
		  $_SESSION['retailer_address']=$row['user_address'];
		  $_SESSION['loggedIn'] = true;
         header("location:https://outre.digital/stage/rapid/appretailer/dashboard.php");
      }
	  elseif(($count == 1) && ($_POST['abc']=="ADMINISTRATOR")) {
		  $_SESSION['administrator_name']=$row['user_name'];
		  $_SESSION['administrator_mailid']=$row['user_mailid'];
		  $_SESSION['administrator_phoneno']=$row['user_phoneno'];
		  $_SESSION['administrator_address']=$row['user_address'];
		  $_SESSION['loggedIn'] = true;
         header("location:https://outre.digital/stage/rapid/appadmin/dashboard.php");
	  }
	  else
	  {
		  $_SESSION['loggedIn'] = false;
		$error = "Your Login Name or Password or Login_as_type is invalid";
		 header("location:raffleprizes.php");
      }  
		
      }
?>
<?php
include("database.php");
   session_start();
   
   if(!empty($_POST['taskgbc']) && $_POST['taskgbc'] == 'add') 
   {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['mailid2']);
      $mypassword = mysqli_real_escape_string($con,$_POST['pwd2']); 
      $logintype = mysqli_real_escape_string($con,$_POST['abc']); 
      $sql = "SELECT * FROM customerdashboardlogin WHERE mail_address = '$myusername' and password = '$mypassword' and login_as_type = '$logintype'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      	
      if(($count == 1) && ($_POST['abc']=="PARTNER")) {
		 $_SESSION['retailer_name']=$row['user_name'];
		  $_SESSION['retailer_mailid']=$row['user_mailid'];
		  $_SESSION['retailer_phoneno']=$row['user_phoneno'];
		  $_SESSION['retailer_address']=$row['user_address'];
		  $_SESSION['loggedIn'] = true;
         header("location:https://outre.digital/stage/rapid/appretailer/dashboard.php");
      }
	  elseif(($count == 1) && ($_POST['abc']=="ADMINISTRATOR")) {
		  $_SESSION['administrator_name']=$row['user_name'];
		  $_SESSION['administrator_mailid']=$row['user_mailid'];
		  $_SESSION['administrator_phoneno']=$row['user_phoneno'];
		  $_SESSION['administrator_address']=$row['user_address'];
		  $_SESSION['loggedIn'] = true;
         header("location:https://outre.digital/stage/rapid/appadmin/dashboard.php");
	  }
	  else
	  {
		  $_SESSION['loggedIn'] = false;
		$error = "Your Login Name or Password or Login_as_type is invalid";
		 header("location:contactus.php");
      }  
		
      }
?>
<?php
include("database.php");
   session_start();
   
   if(!empty($_POST['taskhbc']) && $_POST['taskhbc'] == 'add') 
   {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['mailid2']);
      $mypassword = mysqli_real_escape_string($con,$_POST['pwd2']); 
      $logintype = mysqli_real_escape_string($con,$_POST['abc']); 
      $sql = "SELECT * FROM customerdashboardlogin WHERE mail_address = '$myusername' and password = '$mypassword' and login_as_type = '$logintype'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
     	
      if(($count == 1) && ($_POST['abc']=="PARTNER")) {
		  $_SESSION['retailer_name']=$row['user_name'];
		  $_SESSION['retailer_mailid']=$row['user_mailid'];
		  $_SESSION['retailer_phoneno']=$row['user_phoneno'];
		  $_SESSION['retailer_address']=$row['user_address'];
		  $_SESSION['loggedIn'] = true;
         header("location:https://outre.digital/stage/rapid/appretailer/dashboard.php");
      }
	  elseif(($count == 1) && ($_POST['abc']=="ADMINISTRATOR")) {
		  $_SESSION['administrator_name']=$row['user_name'];
		  $_SESSION['administrator_mailid']=$row['user_mailid'];
		  $_SESSION['administrator_phoneno']=$row['user_phoneno'];
		  $_SESSION['administrator_address']=$row['user_address'];
		  $_SESSION['loggedIn'] = true;
         header("location:https://outre.digital/stage/rapid/appadmin/dashboard.php");
	  }
	  else
	  {
		  $_SESSION['loggedIn'] = false;
		$error = "Your Login Name or Password or Login_as_type is invalid";
		 header("location:buytickets.php");
      }  
		
      }
?>
<?php
include("database.php");
   session_start();
   
   if(!empty($_POST['taskibc']) && $_POST['taskibc'] == 'add') 
   {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['mailid2']);
      $mypassword = mysqli_real_escape_string($con,$_POST['pwd2']); 
      $logintype = mysqli_real_escape_string($con,$_POST['abc']); 
      $sql = "SELECT * FROM customerdashboardlogin WHERE mail_address = '$myusername' and password = '$mypassword' and login_as_type = '$logintype'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      	
      if(($count == 1) && ($_POST['abc']=="PARTNER")) {
		 $_SESSION['retailer_name']=$row['user_name'];
		  $_SESSION['retailer_mailid']=$row['user_mailid'];
		  $_SESSION['retailer_phoneno']=$row['user_phoneno'];
		  $_SESSION['retailer_address']=$row['user_address'];
		  $_SESSION['loggedIn'] = true;
         header("location:https://outre.digital/stage/rapid/appretailer/dashboard.php");
      }
	  elseif(($count == 1) && ($_POST['abc']=="ADMINISTRATOR")) {
		  $_SESSION['administrator_name']=$row['user_name'];
		  $_SESSION['administrator_mailid']=$row['user_mailid'];
		  $_SESSION['administrator_phoneno']=$row['user_phoneno'];
		  $_SESSION['administrator_address']=$row['user_address'];
		  $_SESSION['loggedIn'] = true;
         header("location:https://outre.digital/stage/rapid/appadmin/dashboard.php");
	  }
	  else
	  {
		  $_SESSION['loggedIn'] = false;
		$error = "Your Login Name or Password or Login_as_type is invalid";
		 header("location:addtocart.php");
      }  
		
      }
?>
<?php
include("database.php");
   session_start();
   
   if(!empty($_POST['taskjbc']) && $_POST['taskjbc'] == 'add') 
   {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['mailid2']);
      $mypassword = mysqli_real_escape_string($con,$_POST['pwd2']); 
      $logintype = mysqli_real_escape_string($con,$_POST['abc']); 
      $sql = "SELECT * FROM customerdashboardlogin WHERE mail_address = '$myusername' and password = '$mypassword' and login_as_type = '$logintype'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
     	
      if(($count == 1) && ($_POST['abc']=="PARTNER")) {
		 $_SESSION['retailer_name']=$row['user_name'];
		  $_SESSION['retailer_mailid']=$row['user_mailid'];
		  $_SESSION['retailer_phoneno']=$row['user_phoneno'];
		  $_SESSION['retailer_address']=$row['user_address'];
		  $_SESSION['loggedIn'] = true;
         header("location:https://outre.digital/stage/rapid/appretailer/dashboard.php");
      }
	  elseif(($count == 1) && ($_POST['abc']=="ADMINISTRATOR")) {
		  $_SESSION['administrator_name']=$row['user_name'];
		  $_SESSION['administrator_mailid']=$row['user_mailid'];
		  $_SESSION['administrator_phoneno']=$row['user_phoneno'];
		  $_SESSION['administrator_address']=$row['user_address'];
		  $_SESSION['loggedIn'] = true;
         header("location:https://outre.digital/stage/rapid/appadmin/dashboard.php");
	  }
	  else
	  {
		  $_SESSION['loggedIn'] = false;
		$error = "Your Login Name or Password or Login_as_type is invalid";
		 header("location:privacypolicy.php");
      }  
		
      }
?>

<?php
include("database.php");
if(!empty($_POST['helloindia']) && $_POST['helloindia'] == 'add')
{
	$fullname = $_POST['fname'];
	$mailidg = $_POST['eaddress'];
	$telpno = $_POST['pno'];
	$queryboxs = $_POST['querybox'];
	$sql = "insert into contactusformtable(full_name,mail_address,phone_number,queries_info) values('$fullname','$mailidg','$telpno','$queryboxs')";
	$success = mysqli_query($con,$sql);
	if($success)
	{
		$myemail = "dheerajraopathur@gmail.com"; 
            $emailto = "hello@outre.com.au"; 
            // $emailcc = "cc@domain.com"; 
            $emailcc = "";
            $subject = "Contact us email"; 
            // $headers = "From: $myemail"; 
            $headers = "From: $myemail\nMIME-Version: 1.0\nContent-Type: text/html; charset=utf-8\n";

            $body ="
            <html>
            <body>
            <table>
                <tr>                
                    <td>Name</td>
                    <td>$fullname</td>
                </tr>
                <tr>                
                    <td>Telephone</td>
                    <td>$telpno</td>
                </tr>
                <tr>                
                    <td>Email</td>
                    <td>$mailidg</td>
                </tr>
                <tr>                
                    <td>Comments</td>
                    <td>$queryboxs</td>
                </tr>
            <table>
            </body>
            </html>
            ";
            $send = mail($emailto, $subject . ' ' . "", $body, $headers); 
		header("location:contactus.php");
	}
	else
	{
		header("location:contactus.php");
	}
	
}
?>
<?php
include("database.php");
if(!empty($_POST['helloaustralia']) && $_POST['helloaustralia'] == 'add')
{
	$mailidg = $_POST['eaddress'];
	$fullname = $_POST['fname'];
	$telpno = $_POST['pno'];
	$ticketexactnumber=$_POST['total_ticketinfo'];
	$tickettotalprice=$_POST['total_amountinfo'];
	$ticketpurchasedfrom=$_POST['ticket_purchased_from'];
	$sql = "insert into payment_checkout_customerdetails(mail_address_checkout,full_name_checkout,phone_no_checkout,total_no_of_tickets,total_amount_checkout,ticket_bought_from) values('$mailidg','$fullname','$telpno','$ticketexactnumber','$tickettotalprice','$ticketpurchasedfrom')";
	$success = mysqli_query($con,$sql);
	if($success)
	{
		header("location:addtocart.php");
	}
	else
	{
		header("location:addtocart.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['seventhpageform']) && $_POST['seventhpageform'] == 'add1')
{
	$ticketbb = $_POST['ticketpp'];
	$amountbb = $_POST['amountpp'];
	$ticketcc=100;
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
<?php
include("database.php");
if(!empty($_POST['hello990']) && $_POST['hello990'] == 'add997')
{
$ID4 = $_REQUEST['id'];
    $q="delete from cart_information where ID='$ID4'";
    $result = mysqli_query($con,$q);
    if($result)
    {
        header("location:addtocart.php");
    }
}
?>
<?php
include("database.php");
session_start();
if(!empty($_POST['taskpqc']) && $_POST['taskpqc'] == 'add')
{
	$fullmailid = $_POST['mailid2'];
	$sql = "SELECT ID FROM customerdashboardlogin WHERE mail_address = '$fullmailid'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
	if($count==1)
	{
		$myemail = "dheerajraopathur@gmail.com"; 
            $emailto = $fullmailid; 
            // $emailcc = "cc@domain.com"; 
            $emailcc = "";
            $subject = "Email to reset or change Password"; 
            // $headers = "From: $myemail"; 
            $headers = "From: $myemail\nMIME-Version: 1.0\nContent-Type: text/html; charset=utf-8\n";

            $body ="
            <html>
            <body>
			 <table>
                <tr>                
                    <td>Reset your Password</td>
                </tr>
                <tr>                
                    <td>Use the url below to reset your Partner Password. If you did'nt request a new password , you can safely delete this mail.</td>
                </tr>
                <tr>                
                    <td>copy and paste the following link in your browser: https://outre.digital/stage/rapid/website/forgotpassword.php</td>
                </tr>
			</table>
            </body>
            </html>
            ";
            $send = mail($emailto, $subject . ' ' . "", $body, $headers); 
			 $_SESSION['login'] = true;
		header("location:t&c.php");
	}
	else
	{
		$_SESSION['login'] = false;
		header("location:t&c.php");
	}
	
}
?>
<?php
include("database.php");
if(!empty($_POST['taskqqc']) && $_POST['taskqqc'] == 'add')
{
	$fullmailid = $_POST['mailid2'];
	$sql = "SELECT ID FROM customerdashboardlogin WHERE mail_address = '$fullmailid'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
	if($count==1)
	{
		$myemail = "dheerajraopathur@gmail.com"; 
            $emailto = $fullmailid; 
            // $emailcc = "cc@domain.com"; 
            $emailcc = "";
            $subject = "Email to reset or change Password"; 
            // $headers = "From: $myemail"; 
            $headers = "From: $myemail\nMIME-Version: 1.0\nContent-Type: text/html; charset=utf-8\n";

            $body ="
            <html>
            <body>
            <table>
                <tr>                
                    <td>Reset your Password</td>
                </tr>
                <tr>                
                    <td>Use the url below to reset your Partner Password. If you did'nt request a new password , you can safely delete this mail.</td>
                </tr>
                <tr>                
                   <td>copy and paste the following link in your browser: https://outre.digital/stage/rapid/website/forgotpassword.php</td>
                </tr>
			</table>
		
            </body>
            </html>
            ";
            $send = mail($emailto, $subject . ' ' . "", $body, $headers); 
			$_SESSION['login'] = true;
		header("location:aboutus.php");
	}
	else
	{
		$_SESSION['login'] = false;
		header("location:aboutus.php");
	}
	
}
?>
<?php
include("database.php");
if(!empty($_POST['tasktqc']) && $_POST['tasktqc'] == 'add')
{
	$fullmailid = $_POST['mailid2'];
	$sql = "SELECT ID FROM customerdashboardlogin WHERE mail_address = '$fullmailid'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
	if($count==1)
	{
		$myemail = "dheerajraopathur@gmail.com"; 
            $emailto = $fullmailid; 
            // $emailcc = "cc@domain.com"; 
            $emailcc = "";
            $subject = "Email to reset or change Password"; 
            // $headers = "From: $myemail"; 
            $headers = "From: $myemail\nMIME-Version: 1.0\nContent-Type: text/html; charset=utf-8\n";

            $body ="
            <html>
            <body>
        <table>
                <tr>                
                    <td>Reset your Password</td>
                </tr>
                <tr>                
                    <td>Use the url below to reset your Partner Password. If you did'nt request a new password , you can safely delete this mail.</td>
                </tr>
                <tr>                
                    <td>copy and paste the following link in your browser: https://outre.digital/stage/rapid/website/forgotpassword.php</td>
                </tr>
			</table>
            </body>
            </html>
            ";
            $send = mail($emailto, $subject . ' ' . "", $body, $headers); 
			$_SESSION['login'] = true;
		header("location:addtocart.php");
	}
	else
	{
		$_SESSION['login'] = false;
		header("location:addtocart.php");
	}
	
}
?>
<?php
include("database.php");
if(!empty($_POST['taskzqc']) && $_POST['taskzqc'] == 'add')
{
	$fullmailid = $_POST['mailid2'];
	$sql = "SELECT ID FROM customerdashboardlogin WHERE mail_address = '$fullmailid'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
	if($count==1)
	{
		$myemail = "dheerajraopathur@gmail.com"; 
            $emailto = $fullmailid; 
            // $emailcc = "cc@domain.com"; 
            $emailcc = "";
            $subject = "Email to reset or change Password"; 
            // $headers = "From: $myemail"; 
            $headers = "From: $myemail\nMIME-Version: 1.0\nContent-Type: text/html; charset=utf-8\n";

            $body ="
            <html>
            <body>
            <table>
                <tr>                
                    <td>Reset your Password</td>
                </tr>
                <tr>                
                    <td>Use the url below to reset your Partner Password. If you did'nt request a new password , you can safely delete this mail.</td>
                </tr>
                <tr>                
                    <td>copy and paste the following link in your browser: https://outre.digital/stage/rapid/website/forgotpassword.php</td>
                </tr>
			</table>
            </body>
            </html>
            ";
            $send = mail($emailto, $subject . ' ' . "", $body, $headers); 
			$_SESSION['login'] = true;
		header("location:buytickets.php");
	}
	else
	{
		$_SESSION['login'] = false;
		header("location:buytickets.php");
	}
	
}
?>
<?php
include("database.php");
if(!empty($_POST['tasksqc']) && $_POST['tasksqc'] == 'add')
{
	$fullmailid = $_POST['mailid2'];
	$sql = "SELECT ID FROM customerdashboardlogin WHERE mail_address = '$fullmailid'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
	if($count==1)
	{
		$myemail = "dheerajraopathur@gmail.com"; 
            $emailto = $fullmailid; 
            // $emailcc = "cc@domain.com"; 
            $emailcc = "";
            $subject = "Email to reset or change Password"; 
            // $headers = "From: $myemail"; 
            $headers = "From: $myemail\nMIME-Version: 1.0\nContent-Type: text/html; charset=utf-8\n";

            $body ="
            <html>
            <body>
            <table>
                <tr>                
                    <td>Reset your Password</td>
                </tr>
                <tr>                
                    <td>Use the url below to reset your Partner Password. If you did'nt request a new password , you can safely delete this mail.</td>
                </tr>
                <tr>                
                    <td>copy and paste the following link in your browser: https://outre.digital/stage/rapid/website/forgotpassword.php</td>
                </tr>
			</table>
			
            </body>
            </html>
            ";
            $send = mail($emailto, $subject . ' ' . "", $body, $headers); 
			$_SESSION['login'] = true;
		header("location:contactus.php");
	}
	else
	{
		$_SESSION['login'] = false;
		header("location:contactus.php");
	}
	
}
?>
<?php
include("database.php");
if(!empty($_POST['tasknqc']) && $_POST['tasknqc'] == 'add')
{
	$fullmailid = $_POST['mailid2'];
	$sql = "SELECT ID FROM customerdashboardlogin WHERE mail_address = '$fullmailid'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
	if($count==1)
	{
		$myemail = "dheerajraopathur@gmail.com"; 
            $emailto = $fullmailid; 
            // $emailcc = "cc@domain.com"; 
            $emailcc = "";
            $subject = "Email to reset or change Password"; 
            // $headers = "From: $myemail"; 
            $headers = "From: $myemail\nMIME-Version: 1.0\nContent-Type: text/html; charset=utf-8\n";

            $body ="
            <html>
            <body>
           <table>
                <tr>                
                    <td>Reset your Password</td>
                </tr>
                <tr>                
                    <td>Use the url below to reset your Partner Password. If you did'nt request a new password , you can safely delete this mail.</td>
                </tr>
                <tr>                
                    <td>copy and paste the following link in your browser: https://outre.digital/stage/rapid/website/forgotpassword.php</td>
                </tr>
			</table>
			
            </body>
            </html>
            ";
            $send = mail($emailto, $subject . ' ' . "", $body, $headers); 
			$_SESSION['login'] = true;
		header("location:faq.php");
	}
	else
	{
		$_SESSION['login'] = false;
		header("location:faq.php");
	}
	
}
?>
<?php
include("database.php");
if(!empty($_POST['taskmqc']) && $_POST['taskmqc'] == 'add')
{
	$fullmailid = $_POST['mailid2'];
	$sql = "SELECT ID FROM customerdashboardlogin WHERE mail_address = '$fullmailid'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
	if($count==1)
	{
		$myemail = "dheerajraopathur@gmail.com"; 
            $emailto = $fullmailid; 
            // $emailcc = "cc@domain.com"; 
            $emailcc = "";
            $subject = "Email to reset or change Password"; 
            // $headers = "From: $myemail"; 
            $headers = "From: $myemail\nMIME-Version: 1.0\nContent-Type: text/html; charset=utf-8\n";

            $body ="
            <html>
            <body>
            <table>
                <tr>                
                    <td>Reset your Password</td>
                </tr>
                <tr>                
                    <td>Use the url below to reset your Partner Password. If you did'nt request a new password , you can safely delete this mail.</td>
                </tr>
                <tr>                
                    <td>copy and paste the following link in your browser: https://outre.digital/stage/rapid/website/forgotpassword.php</td>
                </tr>
			</table>
			
            </body>
            </html>
            ";
            $send = mail($emailto, $subject . ' ' . "", $body, $headers); 
			$_SESSION['login'] = true;
		header("location:index.php");
	}
	else
	{
		$_SESSION['login'] = false;
		header("location:index.php");
	}
	
}
?>
<?php
include("database.php");
if(!empty($_POST['taskvqc']) && $_POST['taskvqc'] == 'add')
{
	$fullmailid = $_POST['mailid2'];
	$sql = "SELECT ID FROM customerdashboardlogin WHERE mail_address = '$fullmailid'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
	if($count==1)
	{
		$myemail = "dheerajraopathur@gmail.com"; 
            $emailto = $fullmailid; 
            // $emailcc = "cc@domain.com"; 
            $emailcc = "";
            $subject = "Email to reset or change Password"; 
            // $headers = "From: $myemail"; 
            $headers = "From: $myemail\nMIME-Version: 1.0\nContent-Type: text/html; charset=utf-8\n";

            $body ="
            <html>
            <body>
            <table>
                <tr>                
                    <td>Reset your Password</td>
                </tr>
                <tr>                
                    <td>Use the url below to reset your Partner Password. If you did'nt request a new password , you can safely delete this mail.</td>
                </tr>
                <tr>                
                   <td>copy and paste the following link in your browser: https://outre.digital/stage/rapid/website/forgotpassword.php</td>
                </tr>
			</table>
			
            </body>
            </html>
            ";
            $send = mail($emailto, $subject . ' ' . "", $body, $headers); 
			$_SESSION['login'] = true;
		header("location:privacypolicy.php");
	}
	else
	{
		$_SESSION['login'] = false;
		header("location:privacypolicy.php");
	}
	
}
?>
<?php
include("database.php");
if(!empty($_POST['taskrqc']) && $_POST['taskrqc'] == 'add')
{
	$fullmailid = $_POST['mailid2'];
	$sql = "SELECT ID FROM customerdashboardlogin WHERE mail_address = '$fullmailid'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
	if($count==1)
	{
		$myemail = "dheerajraopathur@gmail.com"; 
            $emailto = $fullmailid; 
            // $emailcc = "cc@domain.com"; 
            $emailcc = "";
            $subject = "Email to reset or change Password"; 
            // $headers = "From: $myemail"; 
            $headers = "From: $myemail\nMIME-Version: 1.0\nContent-Type: text/html; charset=utf-8\n";

            $body ="
            <html>
            <body>
            <table>
                <tr>                
                    <td>Reset your Password</td>
                </tr>
                <tr>                
                    <td>Use the url below to reset your Partner Password. If you did'nt request a new password , you can safely delete this mail.</td>
                </tr>
                <tr>                
                   <td>copy and paste the following link in your browser: https://outre.digital/stage/rapid/website/forgotpassword.php</td>
                </tr>
			</table>
			
            </body>
            </html>
            ";
            $send = mail($emailto, $subject . ' ' . "", $body, $headers);
$_SESSION['login'] = true;			
		header("location:raffleprizes.php");
	}
	else
	{
		$_SESSION['login'] = false;
		header("location:raffleprizes.php");
	}
	
}
?>

