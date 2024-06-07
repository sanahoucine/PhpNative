<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InkTradeLibrary</title>
</head>
<body>
<?php
// Autoload classes
require_once __DIR__ . '/vendor/autoload.php';


// Load configuration
$config = require_once __DIR__ . '/src/config/config.php';


// Load helpers
require_once __DIR__ . '/src/helpers/helper.php';


// Initialize router
$router = new Sanahoucine\PhpNative\Router();


// Define routes
$router->get('/', 'HomeController@index');
$router->get('/about', 'AboutController@index');


// Dispatch the request
$router->dispatch($_SERVER['REQUEST_URI']);
?>
</body>
</html>
