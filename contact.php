<?php

$name = $_Post['Name'];
$email = $_Post['Email'];
$subject = $_Post['Subject'];
$message = $_Post['Message'];


mail("ry551359@gmail.com" ,$subject , $message , $email );


header("Location: index.html");

?>