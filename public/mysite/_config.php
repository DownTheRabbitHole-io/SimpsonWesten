<?php

global $project;
$project = 'mysite';

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

// aws db settings

$databaseConfig = array(
	'type' => 'MySQLPDODatabase',
	'server' => 'aa5fpiwwsz6tjx.cpgfoemq4syn.ap-southeast-2.rds.amazonaws.com',
	'username' => 'root',
	'password' => 'Mellon25',
	'database' => 'Simpsonwestern',
	'path' => ''
);



Security::setDefaultAdmin("admin","password");

