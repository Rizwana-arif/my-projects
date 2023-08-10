<?php 
 $to="rizwanaarif448@gmail.com";
 $subject="test mail";
 $message="hello! this is a plain text";
 $from="akbarsaba222@gmail.com";
 $headers="From:$from";
 if(mail($to,$subject,$message,$headers)){
    echo ("<script> alert ('Successfully ! Send a mail.') </script>");
 }
 else{
    echo ("<script> alert ('Failed to ! Send a mail.') </script>");
}
?>