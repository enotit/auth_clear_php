<?php
namespace Passing\Handler;

use Passing\Classes\User;
use Passing\DBHandler\Connect;

class UserHandler
{
	static function trySignIn(string $login, string $password) : bool
	{
		Connect::read('SELECT *');
	}
}