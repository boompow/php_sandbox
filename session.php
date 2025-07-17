<!-- creating a login page -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="output.css">
</head>
<body class="flex items-center justify-center min-h-[100vh] h-[100%] min-w-[100vw] w-[100%]">
    <div class="border border-slate-400 rounded-md p-6">
        <h1 class="w-[100%] text-2xl font-bold mb-4">Login</h1>
        <form action="session.php" method="post">
            <div>
                <label class="italic text-slate-600" for="username">Username</label>
                <input type="text" class="outline-none border-b border-slate-900 m-2" name="username" placeholder="Alex">
            </div>
            <div>
                <label class="italic text-slate-600" for="password">Password</label>
                <input type="text" class="outline-none border-b border-slate-900 m-2" name="password" placeholder="123">
            </div>
            <input class="bg-green-500 text-white hover:bg-green-600 active:bg-green-500 w-[100%] rounded-sm my-4 py-1.5" type="submit" name="login" value="Login">
        </form>
    </div>
</body>
</html>
<?php
    if(isset($_POST["login"])){
        if(!empty($_POST["username"]) && !empty($_POST["username"])){
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            // to route to the index page
            header("Location: index.php");
        }else{
            echo "Username/Email missing";
        }
    }
?>