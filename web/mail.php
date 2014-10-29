<?php

## CONFIG ##

function pg_connection_string() {
  return "dbname=d33ctd618elu1m host=ec2-54-225-156-230.compute-1.amazonaws.com port=5432 user=rrjgtkgpzrdpwq password=xkXWwifU7VsWxSpknFubQDpqNy sslmode=require";
}

# Establish db connection
$db = pg_connect(pg_connection_string());
if (!$db) {
    echo "Database connection error.";
    exit;
}

$name = $_REQUEST['Name'];
$email = $_REQUEST['Email'];

$result = pg_query($db, "INSERT INTO subscribers VALUES ($name, $email);");

$location = "index.php";

if ($result){
  header( "Location: $location" );
}
else{
header( "Location: $location" );
}
# LIST EMAIL ADDRESS
// $recipient = "eaglecitynepal@gmail.com";

# SUBJECT (Subscribe/Remove)
// $subject = "Subscribe";

# RESULT PAGE

## FORM VALUES ##

# SENDER - WE ALSO USE THE RECIPIENT AS SENDER
# DON'T INCLUDE UNFILTERED USER INPUT IN THE MAIL HEADER!
# SEE ALSO: How to protect a php Email Form using php mail or mb_send_mail against Mail Header Injection
$sender = $recipient;

# MAIL BODY

# add more fields here if required

## SEND MESSGAE ##

// mail( $recipient, $subject, $body, "From: $sender" ) or die ("Mail could not be sent.");

## SHOW RESULT PAGE ##

?>
