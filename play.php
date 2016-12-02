<?php

require __DIR__.'/lib/Ship.php';

function printShipSummary($someShip)
{
	echo 'Ship Name: '.$someShip->getName();
	echo '<hr/>';
	$someShip->sayHello();
	echo '<hr/>';
	echo $someShip->getNameAndSpecs(false);
	echo '<hr/>';
	echo $someShip->getNameAndSpecs(true);
}