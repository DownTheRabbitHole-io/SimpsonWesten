<?php

global $project;
$project = 'SimpsonWestern';

//Security::setDefaultAdmin("admin","password");

global $databaseConfig;
/*
$databaseConfig = array(
	'type' => 'MySQLPDODatabase',
	'server' => 'localhost',
	'username' => 'root',
	'password' => 'root',
	'database' => 'Simpsonwestern',
	'path' => ''
);
*/

$databaseConfig = array(
	'type' => 'MySQLPDODatabase',
	'server' => 'localhost',
	'username' => 'simp_west_law',
	'password' => 'Qf5u8j?4',
	'database' => 'simp_west_law',
	'path' => ''
);

//define('SS_ENVIRONMENT_TYPE', 'dev');