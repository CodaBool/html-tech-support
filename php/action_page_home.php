<!--
File Name:		action_page_home.php
Name:						Coda Bool
Course:			COP 2830C at Valencia College
Facilitator:	David Stendel
Description:	php file to gather form data and email to business email
Date:			12/8/2019
-->

<?php
/*
    $to = "email@me.com"; // Sends to this email
    $from = $_POST['noreply@mail.com']; // Sends from this email
    $name = $_POST['name']; // pulls the name variable
	$phone = $_POST['phone']; // pulls the phone variable
    $email = $_POST['email']; // pulls the email variable
	$address = $_POST['address']; // pulls the address variable
	$suite = $_POST['suite']; // pulls the suite variable
	$city = $_POST['city']; // pulls the city variable
	$state = $_POST['state']; // pulls the state variable
	$zip = $_POST['zip']; // pulls the zip variable
	$amPm = $_POST['amPm']; // pulls the amPm variable
	$time = $_POST['timeDrop']; // pulls the time variable
	$date = $_POST['date']; // pulls the date variable
	// composites all the variables into a readable message for emailing.
    $messagefinal = "Email: " . $email . "\n" . "Phone: " . $phone . "\n" . $name . " wants to schedule in-home support for " . $date . " at " . $time . " " . $amPm . "\n" .
	"Their location is " . $city . " " . $state . " " . $zip " " . $address . " " . $suite;

	// Header for a mail function
    $headers = "From:" . $from;
	// call the mail function with variables
    mail($to,$subject,$messagefinal,$headers);
*/
// exit to the thank_you page which redirects to index.html
header('Location: ../thank_you.html');
exit();
?>
