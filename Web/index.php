<?php
/*
 * File yang pertama kali dijalankan dari base url web kita.
 */
require_once __DIR__ . "/AutoLoader.php";

use lib\MVC\Router;

$kernel = new Router($_GET);
$controller = $kernel->getController();
$controller->ExecuteAction();