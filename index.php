<?php 
$title = "New Page name";
include '../header.php';
include '../funkcijos.php';

$cards = ["Ace", 2 , 3 , 4 , 5 , 6 , 7 , 8 , 9 , 10, "Jack", "Qeen", "King" ];
$colors = ["♥ Hearts" , "♦ Diamonds", "♠ Spades", "♣ Clubs"];

// echo '<div class="row">';
// 	echo '<div class= "col-1">';
// 	for ($i=1; $i < 14 ; $i++) { 
// 		if ($i % 50 == 0){
// 			echo '</div><div class= "col-1">';
// 		}
// 		echo $i . ' &#' . $i  . '; <br>';
// 	}
// 	echo '</div>';
// echo '</div>';

/*--I budas--*/
$viso = 0;
//$x = count($cards);
//$y = count($colors);
//echo $x . ' ' . $y . ' ' . $x*$y;

foreach ($colors as $color){ 
	foreach ($cards as $card) { 
		$viso = $viso + 1;
		if ($color == "♥ Hearts" || $color == "♦ Diamonds") {

			//$viso = $viso + 2;
			echo "<p style='color:red'>";
			echo $card . $color . "<br />";
			echo "</p>" ;
		}else {
			echo "<p style='color:black'>";
			echo $card . $color . "<br />";
			echo "</p>" ;
		}
	}
}

echo 'Total: ' . $viso . ' cards ' . "<br />";

echo "<hr>";

/*--II budas--*/
foreach ($colors as $color) {   
	foreach ($cards as $card) { 
		if ($color == "♥ Hearts" || $color == "♦ Diamonds") {

			echo "<p style='color:red'>";
			echo "$card of $color\n". "<br />";
			echo "</p>";
		} else {
			echo "<p style='color:black'>";
			echo "$card of $color\n". "<br />"; 
			echo "</p>";

		}
	}
}




