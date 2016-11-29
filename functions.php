<?php
function get_ships()
{
	$ships = array();
	$ship1 = new Ship();
	$ship1->setName('Jedi Starfighter');
	$ship1->setWeaponPower(5);
	$ship1->setJediFactor(15);
	$ship1->setStrength(30);
	$ships['starfighter'] = $ship1;
	return $ships;
	
}