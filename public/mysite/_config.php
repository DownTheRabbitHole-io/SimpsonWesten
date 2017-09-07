<?php

global $project;
$project = 'Simpson Western';

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

// aws db settings

$databaseConfig = array(
	'type' => 'MySQLPDODatabase',
	'server' => 'aa5fpiwwsz6tjx.cpgfoemq4syn.ap-southeast-2.rds.amazonaws.com',
	'username' => 'root',
	'password' => 'Mellon25',
	'database' => 'Simpsonwestern',
	'path' => ''
);

//define('SS_ENVIRONMENT_TYPE', 'dev');

//require_once 'conf/ConfigureFromEnv.php';

HtmlEditorConfig::get('cms')->addButtonsToLine(2, 'sub', 'sup', 'separator');