<?php
/**
 * User: Zver
 * Date: 14.11.2016
 * Time: 23:50
 */


// Autoload files using the Composer autoloader.
require_once __DIR__ . '/../vendor/autoload.php';

use HelloWorld\HelloWorld;

echo HelloWorld::sayHelloWorld();