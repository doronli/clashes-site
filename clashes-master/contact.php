<?php 

  if(isset($_POST['email'])) {
	  
	$name =$_POST["name"];
	$companyName =$_POST["companyName"];
	$phone =$_POST["phoneNumber"];
	$from =$_POST["email"];
	$date=$_POST["date"];
	$hour=$_POST["hour"];
	
	// Email Receiver Address
	$receiver="lisbona107@gmail.com";
	$receiver2="clash.israel9@gmail.com";
	$subject="message from customer";

	$message = "
	company name: $name \n
	Name of company representative: $companyName \n
	phone number: $phone \n
	email: $from \n
	date: $date \n
	hour: $hour
	";
$headers .= 'From: <'.$from.'>' . "\r\n";
   if(mail($receiver,$subject,$message))  
   {
	   //Success Message
      echo "ההודעה נשלחה בהצלחה, נחזור אליך עד יום עסקים אחד";
      mail($receiver2,$subject,$message);
   }
   else
   {	
   	 //Fail Message
      echo "ההודעה אינה נשלחה, נסה שוב!";
   }
}
?>
