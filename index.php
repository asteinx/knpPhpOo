<?php
require_once __DIR__ . '/lib/Ship.php';
require __DIR__ . '/functions.php';

echo '<style> * {font-family:arial; font-size:22 } </style>';

$myShip = new Ship ();
$myShip->setName('Jedi Starship');
$myShip->setWeaponPower(10);

echo '<hr/>';
echo $myShip->getNameAndSpecs ( false );
echo '<br><br>';

$otherShip = new Ship ();
$otherShip->setName('Imperial Shuttle');
$otherShip->setWeaponPower(5);
$otherShip->setStrength(50);

echo '<hr/>';
echo $otherShip->getNameAndSpecs ( false );

echo '<br><br>';
echo '<hr/>';

$ships = get_ships();

	?>
                        <select class="center-block form-control btn drp-dwn-width btn-default btn-lg dropdown-toggle" name="ship1_name">
                            <option value="">Choose a Ship</option>
                            <?php foreach ($ships as $key => $ship): ?>
                                <option value="<?php echo $key; ?>"><?php echo $ship->getName(); ?></option>
                            <?php endforeach; ?>
                        </select>

<br><br>
                        <select class="center-block form-control btn drp-dwn-width btn-default btn-lg dropdown-toggle" name="ship2_name">
                            <option value="">Choose a Ship</option>
                            <?php foreach ($ships as $key => $ship): ?>
                                <option value="<?php echo $key; ?>"><?php echo $ship->getNameAndSpecs(); ?></option>
                            <?php endforeach; ?>
</select>
<?php

echo '<hr/>';
echo '<br><br>';

echo 'test';