<?php
use DB\Database;
require 'class/Database.php';
//database config
//change here
$server = "localhost";
$dbUser = "dreamcre_classroom";
$dbPass = "classroompassword";
$dbName = "dreamcre_classroom";
//db object
$DB = new Database(
	$server,
	$dbUser,
	$dbPass,
	$dbName
);