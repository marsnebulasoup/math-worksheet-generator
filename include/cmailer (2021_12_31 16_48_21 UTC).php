<?php
include 'layout.php';


function sendEmail($to,$emaildata)
{

	$subject = 'Your inquiry';
	$from = 'customersupport@gobop.xyz';
	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers.= 'From: ' . $from . "\r\n" . 'Reply-To: ' . $from . "\r\n" . 'X-Mailer: PHP/' . phpversion();
	$message = $emaildata;
	if (mail($to, $subject, $message, $headers))
	{

		return true;
		
	}
	else
	{
		echo ('<h2 align="center" style="padding-top:15%;font-family:Franklin Gothic Book;" >Please check your email address. You entered: ' . $to . '</h2>');
		return false;
	}
}
function checkCaptcha() 
{
if (isset($_POST["g-recaptcha-response"]))
{
	$resp = $_POST["g-recaptcha-response"];
	$jcode =  file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=6Lci7GUUAAAAAKFBgA8pr74fM50DXEaSA67Fqhwx&response='.$resp);
	$jsonCode = json_decode($jcode, true);
	$jout = $jsonCode['success'];
	if ($jout == 1)
	{
		return true;
	}
	else
	{
		return false;
	}
	

}
}

function doit()
{
	if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"]))
	{

		$name = $_POST["name"];
		$email = $_POST["email"];
		$msg = $_POST["message"];
	}
	$emaildata = ('
	<h1 style="font-family:Franklin Gothic Book;">Thank you, ' . $name . ' for choosing GoBop.xyz.</h1>
    <p style="font-family:Franklin Gothic Book;">We hope you will find our service suitable to your needs.</p>
    <p style="font-family:Franklin Gothic Book;">We are prossesing your request and will get back to you within 48 hours</p>
    <p style="font-family:Franklin Gothic Book;">Our service can be accesed at <a href="http://www.gobop.xyz">gobop.xyz</a>.</p>
	<p style="font-family:Franklin Gothic Book;">Thanks,<br>Customer Support, customersupport@gobop.xyz<br>Online at <a href="http://www.gobop.xyz">GoBop.xyz</a><br></p>
	<img src="http://www.gobop.xyz/imgs/new.png" alt="Gobop.xyz" width="200px" height="100px" />

	');
	$other = ('
	<h1 style="font-family:Franklin Gothic Book;">A customer has an inquiry</h1>
	<pre>Name - '.$name.'<br></pre>
	<pre>Email - '.$email.'<br></pre>
	<pre>Message - </pre>
	<br>
	<pre>'.$msg.'</pre>

	');
	if(sendEmail($email,$emaildata))
	{
		//sendEmail('xeon77345@gmail.com',$other);
		
		sendEmail('customersupport@gobop.xyz',$other);
		echo '<h1 align="center" style="padding-top:15%;font-family:verdana">Thank you for your inquiry</h1><br><h3 align="center">If you do not recive any contact within 48 hours, check your Spam/Junk folder.</h3>';

	}
}

if (isset($_POST['submit']))
{
	if(checkCaptcha())
	{

		doit();

	}
	else
	{
		echo '<h1 align="center" style="padding-top:15%;font-family:verdana">Please check the reCapcha.</h1>';
	}
	
	
}
?>