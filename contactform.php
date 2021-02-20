<?php

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $mailFrom = $_POST['mail'];
        $telephone = $_POST['telephon'];
        $message = $_POST['message'];

        $mailTo = "gtala@remax.com.ar";
        $headers= "From: ".$mailFrom;
        $txt= "You have received an email from" .$name.".\n\n".$message;

        mail($mailTo, $headers, $txt );
        header("Location: index.php?mailsend");
    }