<?php 

/*--ZIURETI II buda*/

$cards = ["Ace", 2 , 3 , 4 , 5 , 6 , 7 , 8 , 9 , 10, "Jack", "Qeen", "King" ];
$colors = ["♥ Hearts" , "♦ Diamonds", "♠ Spades", "♣ Clubs"];

/*--I budas--*/
    //nesigauna surykiuoti pagal rusi ir eiliskuma gauasi nesamone
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


echo 'Total: ' . $viso . ' cards';
echo "<hr>";


/*--II budas--*/
       //radau is kazkur tokia israiska bet nesuprantu kaip veikia
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



