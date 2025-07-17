<?php
// $_SERVER is a superglobal variable that contains headers, paths, and script locations.
// the entries in this array are created by the web server.
// Shows nearly everything you need to know about the current env.

foreach($_SERVER as $key =>$value){
    echo "{$key}= {$value}<br>";
}

// $_SERVER["PHP_SELF"] is important for dynamically setting the form actions

// also for handling request in more secure way

if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "form submitted";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_SERVER</title>
    <!-- <link rel="stylesheet" href="output.css"> -->
</head>
<body class="flex items-center justify-center">
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" mehtod="post">
        <div>
            <label for="username">Username</label>
            <input type="text" name="username">
        </div>
        <input type="submit">
    </form>
</body>
</html>