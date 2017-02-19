<?php

global $project;
$project = 'mysite';

global $databaseConfig;
$databaseConfig = array(
	'type' => 'MySQLPDODatabase',
	'server' => 'localhost',
	'username' => 'root',
	'password' => 'qweyha520',
	'database' => 'Simpsonwestern',
	'path' => ''
);


Security::setDefaultAdmin("admin","password");
