<?php
// Initialisierung
define('INITIALIZED', true);

// Basepath rausfinden
$base_path = realpath( dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' );

// $system_path setzen
$system_path = $base_path.DIRECTORY_SEPARATOR.'system';
// $application_folder setzen
$application_folder = $base_path.DIRECTORY_SEPARATOR.'application';

// index.php einbinden
require_once($base_path . DIRECTORY_SEPARATOR . 'index.php');