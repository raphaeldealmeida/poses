<?php
require_once __DIR__ . '/../vendor/autoload.php';

use seregazhuk\PinterestBot\Factories\PinterestBot;

$bot = PinterestBot::create();

$username = 'Zoldyako';
//$boards = $bot->boards->forUser($username);


$board = [
572660977557276345,
536561811793714741,
238479811457158595,
238479811457176648,
244601892200830172,
190488327928225465,
337136790794817051,
362258432466002989,
557461328815080322,
];


shuffle($board);

$pins = $bot->boards->pins($board[0])->take(0)->toArray();


$rand = array_rand($pins,1);


$pin = $pins[$rand];

$dirTemp = sys_get_temp_dir();
//const IMAGES_DIR =

//foreach ($pins as $pin){
//	var_dump($pin);
//echo "<img src='{$pin['images']['736x']['url']}' style='height: 90%;'>";
//}
	$originalUrl = $pin['images']['736x']['url'];
	$destination = $dirTemp . DIRECTORY_SEPARATOR . basename($originalUrl);
	//file_put_contents($destination, file_get_contents($originalUrl));

echo "<link rel=\"icon\" href=\"data:;base64,iVBORw0KGgo=\">";
echo "<img src='data:image/jpg;base64,".base64_encode(file_get_contents($originalUrl)). "'/>";
