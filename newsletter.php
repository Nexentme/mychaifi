<?php
$email=$_POST['email'];

    /*Mail part php start*/
    $to = "Jsthil99@gmail.com";
    $subject = "Newsletter form Aclope";
    $body = "Email: $email";

    $header = "From: $email\r\n";
    $header.= "Bcc: Jsthil99@gmail.com\r\n";
    $header.= "MIME-Version: 1.0\r\n"; 
    $header.= "Content-Type: text/plain; charset=utf-8\r\n"; 
    $header.= "X-Priority: 1\r\n";  
    mail($to,$subject,$body,$header);
    header("Location: thanks-you.html");
    /*Mail part php end*/
?>