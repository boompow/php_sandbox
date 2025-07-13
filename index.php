<?php 
	//using [] brackets
	
	$movies = ["Casablanca", "Citizen Kane", "Roman Holiday"];
	$songs = [
		"Lorde" => "tennis court",
		"Madonna" => "lolita",
		"Lady Gaga" => "poker face"
    ];
	$title = "PHP LOOPS";

    //PHP functions
    function output($value){
	echo("<pre>");
	print_r($value);
	echo("</pre>");
    };

    // PHP scope
    $result = "Amazing PHP!";

    function send(){
        global $result;
        echo $result;
    }


    // array method - array_map(callback, array);
    function cube($n){
        return ($n*$n*$n);
    }

    $a = [1, 2,3, 4, 5, 6, 7, 8];
    // $b = array_map("cube", $a);
    print_r($b);
?>

<!DOCTYPE html>
<html>
<header>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= $title;?></title>
</header>
<body>
<table border="1" cellpadding="10" cellspacing="0">
	<?php
		// foreach loop
		foreach($movies as $movie){
			echo "<tr><td>$movie</td></tr>";
		};
		
		// foreach loop for associative arrays
		foreach($songs as $artist=> $song){
			echo "<tr><td>$artist</td><td>$song</td></tr>";
		};
		

        output("Hello World");

		//for loop
		for($i=0; $i < 10; $i ++){
		// $i ++ is the same as $i += 1 or $i = $i + 1
			echo $i;// to loop through and print 0 to 9
		};
	
		//while loop
		$i = 0;
		
		while($i < count($movies)){
			echo "<tr><td>$i</td></tr>";
			
			$i ++;
		}


        // scope
        send()
	
	?>
</table>
</body>
</html>