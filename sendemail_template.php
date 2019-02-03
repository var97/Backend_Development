<?php

## CONFIG ##

# LIST EMAIL ADDRESS
$recipient = "Enter your Email-id Here";

# SUBJECT (Subscribe/Remove)
$subject = "New Subscription";

# RESULT PAGE
$location = "Result Page URL";

## FORM VALUES ##

# SENDER - WE ALSO USE THE RECIPIENT AS SENDER IN THIS SAMPLE
# DON'T INCLUDE UNFILTERED USER INPUT IN THE MAIL HEADER!
$sender = $recipient;

# MAIL BODY
$body .= "Email: ".$_REQUEST['sender']." \n";
# add more fields here if required

## SEND MESSGAE ##

mail( $recipient, $subject, $body, "From: $sender" ) or die ("Mail could not be sent.");

## SHOW RESULT PAGE ##

header( "Location: $location" );
?>