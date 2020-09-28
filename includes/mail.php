<?php
if(isset($_POST['submit'])){
    $name = $_POST['name']; 
    $mailFrom = $_POST['email'];
    $subj = $_POST['subject']; 
    $message = $_POST['message'];

    $mailTo = "harzafi55@gmail.com";
    $headers = "From: ".$mailFrom;
 

  if(mail($mailTo, $subj, $message, $headers)){
    header("Location: ../index.php?mailsend=ok");
}
}
 ?>