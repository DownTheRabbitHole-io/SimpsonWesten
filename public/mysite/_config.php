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

// Set the site locale
i18n::set_locale('en_US');
