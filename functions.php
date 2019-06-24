<?php

use\Hcode\Model\User;

function formatPrice(float $vlprice)
{

	return number_format($vlprice, 2, ",", ".");

}

function checkLogin($inadmin = true)
{

	return User::checkLogin($inadmin);

}

function getUsername()
{

	$user = User::getFromSession();

	return $user->getdesperson();

}

?>