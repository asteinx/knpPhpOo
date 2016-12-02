<?php
function get_ships() {
	$ships = array ();
	$ship1 = new Ship ();
	$ship1->setName ( 'Jedi Starfighter' );
	$ship1->setWeaponPower ( 5 );
	$ship1->setJediFactor ( 15 );
	$ship1->setStrength ( 30 );
	$ships ['starfighter'] = $ship1;
	return $ships;
}
function battle($ship1, $ship1Quantity, $ship2, $ship2Quantity) {
	?>

<h3 class="text-center audiowide">
	Winner:
	<?php if ($outcome['winning_ship']): ?>
	                        <?php echo $outcome['winning_ship']['name']; ?>
	                    <?php else: ?>
	                        Nobody
	                    <?php endif; ?>
	</h3>
<?php
}