<?php
require_once __DIR__ . '/../vendor/autoload.php';

use seregazhuk\PinterestBot\Factories\PinterestBot;

$bot = PinterestBot::create();

$username = 'Zoldyako';
//$boards = $bot->boards->forUser($username);

$pins = $bot->boards->pins(557461328815080322)->take(0)->toArray();


$rand = array_rand($pins,1);


$pin = $pins[$rand];

//foreach ($pins as $pin){
//	var_dump($pin);
echo "<img src='{$pin['images']['736x']['url']}'>";
//}

