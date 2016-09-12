<?php

$EmailFrom = "bonjosefala@gmail.com";
$EmailTo = "bonjosefala@gmail.com";
$Subject = "Email from the Website contact form ";
$Name = Trim(stripslashes($_POST['Name'])); 
$Telephone = Trim(stripslashes($_POST['Telephone']));  
$Email = Trim(stripslashes($_POST['Email'])); 
$Date = Trim(stripslashes($_POST['Date'])); 
$Salon = Trim(stripslashes($_POST['Salon'])); 
$Time = Trim(stripslashes($_POST['Time'])); 
$Thickness = Trim(stripslashes($_POST['Thickness'])); 
$Length = Trim(stripslashes($_POST['Length'])); 
$Message = Trim(stripslashes($_POST['Message'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

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
$Body .= "Date: ";
$Body .= $Date;
$Body .= "\n"; 
$Body .= "Salon Name: ";
$Body .= $Salon;
$Body .= "\n";
$Body .= "Time: ";
$Body .= $Time;
$Body .= "\n"; 
$Body .= "Thickness: ";
$Body .= $Thickness;
$Body .= "\n";
$Body .= "Length: ";
$Body .= $Length;
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
  print "<meta http-equiv=\"refresh\" content=\"0;URL=booking.html\">";
}
//TODO: fix error
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>