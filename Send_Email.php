<?php

    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "Corne@ckps-solutions.com";
    $to = "Sales@ckps-solutions.com";
    $subject = "Web Query";
    $message = $_POST["Email"] . " " . $_POST["NameOfContact"] . " " . $_POST["NameOfCompany"] . " " . $_POST["Message"];
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent."; 
?>
