<?php
	require 'Pokemon.php';
	require 'Attack.php';

	$pikachu = new Pokemon('Pikachu', 'Lightning', 60, [new Attack('Electric Ring', 50, 'Lightning'), new Attack('Pika Punch', 20, 'Lightning')], ['Fire', 1.5], ['Fighting', 20]);
	$Charmeleon = new Pokemon('Charmeleon', 'Fire', 60, [new Attack('Head Butt', 10, 'Fire'), new Attack('Flare', 30, 'Fire')], ['Water', 2], ['Lightning', 10]);
?>

<!-- attack -->
<?php
	echo '<pre>Charmeleon hp: '. $Charmeleon->health . '</pre>';
	echo 'Pikachu valt Charmeleon aan met een Electric Ring attack';
	$pikachu->attack($Charmeleon, $pikachu->getAttack('Electric Ring'));
	print_r('<pre>Charmeleon hp: '. $Charmeleon->health . '</pre>');

	echo '_____________________________';

	echo '<pre>Pikachu hp: '. $pikachu->health . '</pre>';
	echo 'Charmeleon valt Pikachu aan met een Flare attack';
	$Charmeleon->attack($pikachu, $Charmeleon->getAttack('Flare'));
	echo '<pre>Pikachu hp: ' . $pikachu->health . '</pre>'; 

	echo '_____________________________<br><br>';

	print_r(json_encode(Pokemon::getPopulation()));
	echo '<br>';
	print_r(json_encode(Pokemon::getPopulationHealth()));
?>

<!DOCTYPE html>
<html>
<head>
	<title>pokebattle</title>
</head>
</html>