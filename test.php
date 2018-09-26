<?php

if($_POST["submit"]) {
    $recipient="pydev4hire@gmail.com";
    $subject="Rose Office Building Inquiry";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $senderPhone=$_POST["phone"];
    $message=$_POST["message"];
    $mailBody="Name: $sender\nEmail: $senderEmail\n Phone: $senderPhone\n$message";
    $thankYou="<p>Thank you! Someone will contact you shortly with more information.</p>";
    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
}

?><!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Contact form to email</title>
</head>

<body>

    <?=$thankYou ?>

    <form method="post" action="contact.php">
        <label>Name:</label>
        <input name="sender">

        <label>Email address:</label>
        <input name="senderEmail">

        <label>Phone: (optional)</label>
        <input name="phone">

        <label>Message:</label>
        <textarea rows="5" cols="20" name="message"></textarea>

        <input type="submit" name="submit" action="test.php">
    </form>

</body>

</html>