<?php
    // stored as an associative array
    // setcookie(key, value, expiration period, path)
    $expiration = time() + (86400 * 2); // expires after 2 days
    setcookie("food", "Pizza", $expiration, "/");
    setcookie("drink", "Coffee", $expiration, "/");

    foreach($_COOKIE as $key => $value){
        echo "{$key} = {$value} <br>";
    }

    if(isset($_COOKIE["food"])){
        echo "this is the cookie for favorite food {$_COOKIE["food"]}";
    }
?>