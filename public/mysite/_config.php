<?php

global $project;
$project = 'mysite';

//Security::setDefaultAdmin("admin","password");

global $databaseConfig;
$databaseConfig = array(
	'type' => 'MySQLPDODatabase',
	'server' => 'localhost',
	'username' => 'root',
	'password' => 'root',
	'database' => 'Simpsonwestern',
	'path' => ''
);

define('SS_ENVIRONMENT_TYPE', 'dev');

HtmlEditorConfig::get('cms')->addButtonsToLine(2, 'sub', 'sup', 'separator');