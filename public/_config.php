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
/*
$databaseConfig = array(
	'type' => 'MySQLPDODatabase',
	'server' => 'localhost',
	'username' => 'simp_west_law',
	'password' => 'Qf5u8j?4',
	'database' => 'simp_west_law',
	'path' => ''
);
live
*/

$databaseConfig = array(
	'type' => 'MySQLPDODatabase',
	'server' => 'localhost',
	'username' => 'simp_west_pre',
	'password' => 'Qf5u8j?4',
	'database' => 'simp_west_preview',
	'path' => ''
);



HtmlEditorConfig::get('cms')->addButtonsToLine(2, 'sub', 'sup', 'separator');