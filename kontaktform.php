<?php

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $emailto = "mirkovic0705@yahoo.com";
    $headers = "From: ".$email;
    $txt = "You have recived an e-mail from".$username.".\n\n".$message;

    mail($emailto,$txt,$headers);
    header("Location: index.php?mailsend");
}
?>