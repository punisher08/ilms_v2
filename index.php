<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$autoloadPath = __DIR__.'/autoload/autoload.php';
$configPath = __DIR__.'/config.php';

if (file_exists($autoloadPath )  && file_exists($configPath ) ) {
    require_once (__DIR__.'/autoload/autoload.php');
    require_once (__DIR__.'/config.php');
} 

// Get the requested URL path
$requestPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// print_r($_SERVER['HTTP_HOST']);

// Define mapping of URL paths to corresponding controller actions
$routes = [
    '/' => 'HomeController@index',
    '/login' => 'HomeController@login',
    '/signup' => 'HomeController@signup',
    '/register' => 'HomeController@register',
    '/api/userList' => 'HomeController@validateUser',
    
    // Authenticated User
    '/signin' => 'UserController@signin',
    '/logout' => 'UserController@signout',
    
    '/dashboard' => 'UserController@index',
    '/student' => 'UserController@profile',
    '/masterlist' => 'UserController@getAllUsers',
    '/masterlist/update' => 'UserController@update',
    '/masterlist/delete' => 'UserController@deleteUser',
    '/masterlist/paginate' => 'UserController@getAllUsers',
    '/masterlist/add' => 'UserController@addStudent',
    '/masterlist/register' => 'UserController@register',
    
    // update password
    '/password/reset' => 'HomeController@resetPassword',
    '/send/password/reset' => 'HomeController@sendResetPassword',
    '/password/reset/form' => 'HomeController@createNewpassword',
    '/password/update' => 'HomeController@update_password',


    // from another app
    '/api/web/v1/get/masterlist' => 'WebController@test',

 
];
// Find the corresponding route or use a default route
$route = $routes[$requestPath] ?? '@';

// Parse the route to get the controller and action
list($controllerName, $actionName) = explode('@', $route);

// Build the full namespace for the controller class
$controllerNamespace = 'Controller\\' . $controllerName;

if (class_exists($controllerNamespace)) {
    $controller = new $controllerNamespace($config);
    if (method_exists($controller, $actionName)) {
        $controller->$actionName();
    } else {
        require_once __DIR__.'/action-not-found.php';
    }
} else {
    require_once __DIR__.'/404.php';
}
