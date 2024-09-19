<?php
$name				= $_POST['fname'];
$email				= $_POST['email'];
$phone				= $_POST['phone'];
$subject			= $_POST['subject'];
$message			= $_POST['message'];

$msg="
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Untitled Document</title>
</head>

<body>
<table width='500' border='0' cellspacing='0' cellpadding='0'>
  <tr>
    <td width='192' align='left' valign='top'>Name</td>
    <td width='25' align='left' valign='top'>:</td>
    <td width='283' align='left' valign='top'>$name</td>
  </tr>
   <tr>
    <td align='left' valign='top'>Email</td>
    <td align='left' valign='top'>:</td>
    <td align='left' valign='top'>$email</td>
  </tr>
  <tr>
    <td align='left' valign='top'>Phone</td>
    <td align='left' valign='top'>:</td>
    <td align='left' valign='top'>$phone</td>
  </tr>
   <tr>
    <td align='left' valign='top'>Subject</td>
    <td align='left' valign='top'>:</td>
    <td align='left' valign='top'>$subject</td>
  </tr>
  
  <tr>
    <td align='left' valign='top'>Message</td>
    <td align='left' valign='top'>:</td>
    <td align='left' valign='top'>$message</td>
  </tr>
</table>
</body>
</html>";
$access_ip = (getenv(HTTP_X_FORWARDED_FOR)) ? getenv(HTTP_X_FORWARDED_FOR) : getenv(REMOTE_ADDR);
		$India_Time = date("F j, Y, g:i a", time() + 37800);
$subject = "New Contact";
$from = $email;
$headers  = "From: $from\r\n"; 
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
mail('info@mail.com',$subject,$msg,$headers);
header("location:contact-us.php?url=send_successfully");
?>