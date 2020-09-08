<!--
File Name:		action_page.php
Name:						Coda Bool
Course:			COP 2830C at Valencia College
Facilitator:	David Stendel
Description:	php file to gather form data and email to business email
Date:			12/8/2019
-->

<?php

/*
    $to = "email@me.com"; // this is your Email address
    $from = $_POST['noreply@mail.com']; // this is the sender's Email address
    $name = $_POST['name']; // pulls the name variable
	$phone = $_POST['phone']; // pulls the phone variable
    $email = $_POST['email']; // pulls the email variable
	$ampm = $_POST['ampm']; // pulls the amPm variable
	$time = $_POST['timeDrop']; // pulls the time variable
	$date = $_POST['date']; // pulls the date variable
	// composites all the variables into a readable message for emailing.
    $messagefinal = "Email: " . $email . "\n" . "Phone: " . $phone . "\n" . $name . " wants to come in on " . $date . " at " . $time . " " . $ampm;

	// Header for a mail function
    $headers = "From:" . $from;
	// call the mail function with variables
    mail($to,$subject,$messagefinal,$headers);
*/
// exit to the thank_you page which redirects to index.html
header('Location: ../thank_you.html');
exit();
?>
