<?php
    $password = "12345";

    $hash = password_hash($password, PASSWORD_DEFAULT);

    // echo $hash;

    // to verify hash use password_verify
    if(password_verify("12345", $hash)){
        echo "You are logged in";
    }else{
        echo "incorrect password";
    }
?>