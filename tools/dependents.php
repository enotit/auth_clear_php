<?php
namespace Passing\Tools;
session_start();
require_once "./dbhandler/db.php";
require_once "./tools/health.php";
require_once "./tools/filemanager.php";
require_once "./php_interface/init.php";
require_once "./handler/user.php";

use \Passing\DBHandler\Connect;

Connect::query(
    "SELECT * FROM users");