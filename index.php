<!-- code written by Pieterjan van Dijk -->
<!DOCTYPE html>
<html>
<head>
	<title>pokebattle</title>
	<Style>
		body {
			background-color: rgb(175,175,175);
		}
		.Pokemons {
			padding: 5px;
			display: inline-block;
			border: solid black 1px;
			line-height: 2px;
			background-color: rgb(230,230,230);
		}
		.attacks {
			line-height: 2px;
		}
	</style>
</head>
<body>

<?php
	require 'Pokemon.php';
	require 'Attack.php';
	require 'pokemons/pikachu.php';
	require 'pokemons/charmeleon.php';
?>
	<div class='Pokemons'>
		<img src='https://assets.pokemon.com/assets/cms2/img/pokedex/full/025.png' alt='pikachu'/>
		<p>name: <?= $pikachu->getName() ?></p>
		<p>energy type: <?= $pikachu->GetEnergyType() ?></p>
		<p>health: <?= $pikachu->GetHealth() ?></p>
		<p>attacks: <?= $pikachu->GetAttackName(0) ?>: <?= $pikachu->GetAttackDamage(0) ?>, <?= $pikachu->GetAttackName(1) ?>: <?= $pikachu->GetAttackDamage(1) ?></p>
	</div>
	<div class='Pokemons'>
		<img src='https://assets.pokemon.com/assets/cms2/img/pokedex/full/005.png' alt='charmeleon'/>
		<p>name: <?= $charmeleon->getName() ?></p>
		<p>energy type: <?= $charmeleon->GetEnergyType() ?></p>
		<p>health: <?= $charmeleon->GetHealth() ?></p>
		<p>attacks: <?= $charmeleon->GetAttackName(0) ?>: <?= $charmeleon->GetAttackDamage(0) ?>, <?= $charmeleon->GetAttackName(1) ?>: <?= $charmeleon->GetAttackDamage(1) ?></p>
	</div>

	<!-- attack -->

	<div class='attacks'>
		<p>Starting amount of Pokemons: <?= count(Pokemon::getPopulation()) ?></p><br>
		<p>Pikachu attacks Charmeleon with Electric Ring. <? $pikachu->attack($charmeleon, 0) ?></p>  
		<p>Charmeleon remaining health:	<?= $charmeleon->getHealth()?>.	</p>
		<p>Charmeleon attacks Pikachu with Flare. <? $charmeleon->attack($pikachu, 1) ?></p>
		<p>Pikachu remaining health: <?= $pikachu->getHealth()?>. </p>
		<p>Pikachu attacks Charmeleon with Pika Punch. <? $pikachu->attack($charmeleon, 1) ?></p>
		<p>Charmeleon remaining health:	<?= $charmeleon->getHealth()?>.	</p>
		<p>Charmeleon attacks Pikachu with Flare. <? $charmeleon->attack($pikachu, 1) ?></p>
		<p>Pikachu remaining health: <?= $pikachu->getHealth()?>. </p>
		<p>Amount of Pokemons: <?= count(Pokemon::getPopulation()) ?></p>
	</div>
</body>
</html>