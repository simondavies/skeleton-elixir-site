<?php
/**
 * Basic site wide config information
 * @author Simon Davies
 */
date_default_timezone_set('Europe/London');
//-- Set up dispaly errors for testing, comment out when live
ini_set('display_errors', 1); //-- replace with 0 to stop error reporting or 1 to display errors
error_reporting(E_ALL | E_STRICT);//-- replace with 0 to stop error reporting or E_ALL | E_STRICT to display errors


/**
 * define some site wide constants
 */
//-- root locations for including/requiring files
define('SITE_ROOT', '');
define('SITE_SUB_ROOT', '../');


/**
 * Get some site wide settings and vars
 */
 require_once __DIR__ . '/functions.php';
 $settings = require_once __DIR__ . '/settings.php';
//-- split the settings into managable chunks
 $metadata = $settings['metadata'];
 $social = $settings['social'];
