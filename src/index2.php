<?php
require_once __DIR__ . '/../vendor/autoload.php';

use DirkGroenen\Pinterest\Pinterest;

$pinterest = new Pinterest('4998334985220938225', '44af7eeec95fa9db30b8779955bbd9b93d116cf95144da7a5ab0332c73bd941f');


$loginurl = $pinterest->auth->getLoginUrl(CALLBACK_URL, array('read_public'));
echo '<a href=' . $loginurl . '>Authorize Pinterest</a>';

if(isset($_GET["code"])){
	$token = $pinterest->auth->getOAuthToken($_GET["code"]);
	$pinterest->auth->setOAuthToken($token->access_token);
}