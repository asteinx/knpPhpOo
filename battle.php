<?php
require __DIR__ . '/functions.php';
$ships = get_ships();

$ship1Name = isset($_POST['ship1_name']) ? $_POST['ship1_name'] : null;
$ship1Quantity = isset($_POST['ship1_quantity']) ? $_POST['ship1_quantity'] : 1;
$ship2Name = isset($_POST['ship2_name']) ? $_POST['ship2_name'] : null;
$ship2Quantity = isset($_POST['ship2_quantity']) ? $_POST['ship2_quantity'] : 1;

$ship1 = $ships[$ship1Name];
$ship2 = $ships[$ship2Name];

$outcome = battle($ship1, $ship1Quantity, $ship2, $ship2Quantity);

var_dump($ship1, $ship2);die;