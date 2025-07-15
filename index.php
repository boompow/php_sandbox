<?php

//using [] brackets

$movies = ["Casablanca", "Citizen Kane", "Roman Holiday"];
$songs = [
	"Lorde" => "tennis court",
	"Madonna" => "lolita",
	"Lady Gaga" => "poker face"
];
$title = "PHP LOOPS";

require_once("./inc/functions.php");

include("./inc/header.php");

?>

<body>
	<table cellpadding="10" cellspacing="0">
		<?php
		// foreach loop
		foreach ($movies as $movie) {
			echo "<tr><td>$movie</td></tr>";
		};

		// foreach loop for associative arrays
		foreach ($songs as $artist => $song) {
			echo "<tr><td>$artist</td><td>$song</td></tr>";
		};


		output("Hello World");

		//for loop
		for ($i = 0; $i < 10; $i++) {
			// $i ++ is the same as $i += 1 or $i = $i + 1
			echo $i; // to loop through and print 0 to 9
		};

		//while loop
		$i = 0;

		while ($i < count($movies)) {
			echo "<tr><td>$i</td></tr>";

			$i++;
		}


		// scope
		send();

		?>
	</table>
</body>