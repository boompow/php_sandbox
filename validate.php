<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitizing and validating</title>
</head>
<body>
    <form action="validate.php" method="post">
        Username: <br>
        <input type="text" name="username"><br>
        Email: <br>
        <input type="text" name="email"><br>
        URL: <br>
        <input type="text" name="url"><br>
        Age: <br>
        <input type="text" name="age"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>
<?php
    // sanitizing user input
    if(isset($_POST["login"])){
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);

        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

        $url = filter_input(INPUT_POST, "url", FILTER_SANITIZE_URL);

        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

        if(empty($_POST["username"])){
            echo "Please enter username<br>";
        }else{
            echo "Hello {$username}<br>";
        }

        if(empty($_POST["email"])){
            echo "Please enter your email<br>";
        }else{
            echo "Your email is {$email}<br>";
        }

        if(empty($_POST["age"])){
            echo "Please enter your age<br>";
        }else{
             echo "Your age is {$age}<br>";
        }

        if(empty($_POST["url"])){
            echo "Please enter URL<br>";
        }else{
             echo "The URL is {$url}<br>";
        }
    }
?>