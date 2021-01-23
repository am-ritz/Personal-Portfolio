<?php

$name = $_REQUEST['Name'];
$email = $_REQUEST['Email'];
$subject = $_REQUEST['Subject'];
$message = $_REQUEST['Message'];

mail("ry551359@gmail.com" ,$subject , $message , "From: $name <$email>" );
echo "<script type='text/javascript'>alert('your message has been sent successfully');
window.history.log(-1);
</script>";

?>