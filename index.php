<?php 
	include 'classes/game.class.php';
	$playerData = array(
		'id'   => 1,
		'blts' => array(1,3,4),
		'name' => 'Test'
	);
	$game = new Game($playerData);
	
	echo $game->getResults();

?>