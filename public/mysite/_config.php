<?php

global $project;
$project = 'SimpsonWestern';


global $databaseConfig;



/*
$databaseConfig = array(
	'type' => 'MySQLPDODatabase',
	'server' => 'localhost',
	'username' => 'simp_west_pre',
	'password' => 'Qf5u8j?4',
	'database' => 'simp_west_preview',
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
*/

require_once 'conf/ConfigureFromEnv.php';

HtmlEditorConfig::get('cms')->addButtonsToLine(2, 'sub', 'sup', 'separator');