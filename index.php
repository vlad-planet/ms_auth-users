<?php

require_once('classes/IAccount.php');
require_once('classes/Authentication.php');
require_once('classes/Users.php');
require_once('classes/Authentication/AuthAccounts.php');

$auth = new AuthAccounts();


$_POST['user'] = 'John';
$_POST['password'] = '1234';

// testing
$user = trim(strip_tags($_POST['user']));
$pass = trim(strip_tags($_POST['password']));

if (!empty($user) && !empty($pass)) {

	
	$loginSucceeded = $auth->login($user, $pass);



	if ($loginSucceeded === true) {
		echo "Поздравляем*! Вы попали по адресу\n";
	} else {
		echo "Ошибка! Попробуйте ещё раз\n";
	}
}
?>