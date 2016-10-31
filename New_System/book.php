<?php
session_start();

$EmailFrom = "bonjosefala@gmail.com";
$EmailTo = "bonjosefala@gmail.com";
$Subject = "Email from the Website contact form ";
$Name = Trim(stripslashes($_POST['Name'])); 
$Telephone = Trim(stripslashes($_POST['Telephone']));  
$Email = Trim(stripslashes($_POST['Email'])); 

$Message = Trim(stripslashes($_POST['Message'])); 


// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n"; 
$Body .= "Telephone: ";
$Body .= $Telephone;
$Body .= "\n";

$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
	echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';
  print "<meta http-equiv=\"refresh\" content=\"0;URL=startbackup2.php\">";
}
//TODO: fix error
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=startbackup2.php\">";
}
?>
