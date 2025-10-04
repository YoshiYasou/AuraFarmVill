<?php
// config.php - generic site config (do not auto-connect here; use dbconfig.php for DB)

// The project is nested under htdocs/AuraFarmvil/AuraFarmVill on this machine.
// Make BASE_URL match that path so generated links and debug messages point to the correct URL.
defined('BASE_URL') || define('BASE_URL', 'http://localhost/AuraFarmvil/AuraFarmVill/');
defined('TIMEZONE') || define('TIMEZONE', 'UTC');

date_default_timezone_set(TIMEZONE);

// Placeholders for other configuration values
// $appEnv = 'development';

?>
