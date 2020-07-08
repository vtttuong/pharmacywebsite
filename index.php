
<?php
session_start();
define('PATH_ASSET',__DIR__ . '/assets');
define('PATH_CONTROLLER',__DIR__ . '/controllers');
define('PATH_CORE',__DIR__.'/core');
define('PATH_MODEL',__DIR__.'/models');

require_once PATH_CORE."/Controller.php";

// Connect Database
require_once PATH_CORE."/DB.php";

// Process URL from browser
require_once PATH_CORE."/App.php";

$myApp = new App();
