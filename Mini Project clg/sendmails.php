<?php
$to_email="priyanshugupta1303@gmail.com";
$subject="Fuck Bro";
$body="WSSUUPP";
$headers="From: priyanshu.1923it1179.kiet.edu"

if(mail($to_email, $subject, $body, $headers))
{
    echo "DONE";
}
else
{
    echo "FAIL";
}
?>