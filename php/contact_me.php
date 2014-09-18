<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
    echo "No arguments Provided!";
    return false;
   }

$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$logline = "=====\n\nName: " . $name . "\nEmail: " . $email_address . "\nPhone: " . $phone . "\nMessage: " . $message . "\n\n=====";

// Write to log file:
$logfile = '../log/mail.txt';

// Open the log file in “Append” mode
if (!$handle = fopen($logfile, 'a+')) {
    die("Failed to open log file");
}

// Write $logline to our logfile.
if (fwrite($handle, $logline) === FALSE) {
    die("Failed to write to log file");
}

fclose($handle);
return true;
?>
