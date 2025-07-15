<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="input.css">
    <title>$_GET and $_POST</title>
</head>
<body>
    <!--with get credentials like password will be desplayed on the URL on submit, hence it is not secure  -->
    <form action="superGlobal.php" method="get">
        <label for="">Username:</label><br>
        <input type="text" name="username" class="p-4"><br>
        <label for="">Password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit">
    </form>

    <form action="superGlobal.php" method="post">
        <label for="quantity">Quantity:</label>
        <input type="text" name="quantity">
        <input type="submit">
    </form>


    <form action="superGlobal.php" method="post">
        <label for="capital">find capital for USA, China, Japan, Canada</label>
        <input type="text" name="country" placeholder="Enter Country">
        <input type="submit">
    </form>

    <form action="superGlobal.php" method="post">
        <input type="radio" name="credit_card" value="Visa"> Visa <br/>
        <input type="radio" name="credit_card" value="Mastercard"> Mastercard <br/>
        <input type="radio" name="credit_card" value="American Express"> American Express <br/>
        <input type="submit" name="confirm" value="confirm">
    </form>

    <form action="superGlobal.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza"> Pizza<br/>
        <input type="checkbox" name="hamburger" value="Hamburger"> Hamburger<br/>
        <input type="checkbox" name="taco" value="Taco"> Taco<br/>
        <input type="checkbox" name="hotdog" value="Hotdog"> Hotdog<br/>
        <input type="submit" name="check" value="check">
    </form>
</body>
</html>
<?php
    // echo $_GET["username"];
    // echo $_GET["password"];

    // do math operations
    // $x = $_POST["quantity"];
    // $total = null;

    // $total = abs($x);
    // $total = ceil($x);
    // $total = floor($x);
    // echo $total;


    // constructing switch statement
    // $grade = "F";

    // switch($grade){
    //     case "A":
    //         echo "Excellent";
    //         break;
    //     case "B":
    //         echo "Very Good";
    //         break;
    //     case "C":
    //         echo "Good";
    //         break;
    //     case "D":
    //         echo "Poor";
    //         break;
    //     case "F":
    //         echo "Failed";
    //         break;
    //     default:
    //         echo "{$grade} is not valid";
    // }


    // getting the current date
    // $date = date("y-m-d/h:m:s");
    // echo $date;


    // associative arrays
    // $capitals = [
    //     "USA"=>"Washington D.C",
    //     "Japan"=>"Kyoto",
    //     "Canada"=>"Otawa",
    //     "China"=>"Beijing"
    // ];

    // $capitals["China"] = "Shenzhen";
    // array_pop($capitals);
    // array_shift($capitals);
    // $countries = array_keys($capitals);
    // $capitals = array_flip($capitals);
    // $capitals = array_reverse($capitals);

    // to get array length
    // echo count($capitals);

    
    // foreach($capitals as $key=>$value){
    //     echo "{$key} = {$value} <br>";
    // }


    // capital finder function
    // $key = $_POST["country"];
    // function capital($key){
    //     global $capitals;
    //     $city = $capitals[$key];

    //     if(isset($city)){
    //         echo $city;
    //     }else{
    //         echo "Country not found in the Database!";
    //     }
    // }

    // capital($key);
    if(isset($_POST["confirm"])){
        if(isset($_POST["credit_card"])){
            $credit_card = $_POST["credit_card"];
            echo "{$credit_card } is selected!";
        }else{
            echo "please select a credit card";
        }

    };


    // checkboxes
    if(isset($_POST["check"])){
        if(isset($_POST["pizza"])){
            echo "Pizza selected <br/>";
        }
        if(isset($_POST["hamburger"])){
            echo "Hamburger selected <br/>";
        }
        if(isset($_POST["hotdog"])){
            echo "Hotdog selected <br/>";
        }
        if(isset($_POST["taco"])){
            echo "Taco is selected <br/>";
        }
         if(empty($_POST["pizza"])){
            echo "Pizza not selected <br/>";
        }
        if(empty($_POST["hamburger"])){
            echo "Hamburger not selected <br/>";
        }
        if(empty($_POST["hotdog"])){
            echo "Hotdog not selected <br/>";
        }
        if(empty($_POST["taco"])){
            echo "Taco is not selected <br/>";
        }
        
    }

    // string functions
    $username = "DoomEye";

    // $username = strtolower($username);
    // $username = strtoupper($username);
    // $username = str_pad($username, 20, "0");
    // $username = str_shuffle($username);
    // $count = strpos($username, "E");
    // $sub = substr($username, 0, 4);
    $fullname = explode("-", $username);


    print_r($fullname);
    ?>