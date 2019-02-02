<?php

ini_set('display_errors', 1);
ini_set('display_starup_error', 1);
error_reporting(E_ALL); 

require_once '../vendor/autoload.php'; 

session_start();

$dotenv = Dotenv\Dotenv::create(__DIR__ . '/..');
$dotenv->load();


use Illuminate\Database\Capsule\Manager as Capsule;
use Aura\Router\RouterContainer;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => getenv('DB_TECH'),
    'host'      => getenv('DB_HOST'),
    'database'  => getenv('DB_DDBB'),
    'username'  => getenv('DB_NAME'),
    'password'  => getenv('DB_PASS'),
    'charset'   => getenv('DB_CHAR'),
    'collation' => getenv('DB_COLL'),
    'prefix'    => getenv('DB_PREF'),
]);

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);

$routerContainer = new RouterContainer();
$map = $routerContainer->getMap();
$map->get('index', '/CursoPHP/', [
    'controller' => 'App\Controllers\IndexController',
    'action' => 'indexAction',
    'auth' => true
]);
$map->get('addJobs', '/CursoPHP/Jobs/add', [
    'controller' => 'App\Controllers\JobsController',
    'action' => 'getAddJobAction',
    'auth' => true
]);
$map->post('saveJobs', '/CursoPHP/Jobs/add', [
    'controller' => 'App\Controllers\JobsController',
    'action' => 'getAddJobAction',
    'auth' => true
]);
$map->get('addProject', '/CursoPHP/Projects/add', [
    'controller' => 'App\Controllers\ProjectsController',
    'action' => 'getAddProjectAction',
    'auth' => true
]);
$map->post('saveProject', '/CursoPHP/Projects/add', [
    'controller' => 'App\Controllers\ProjectsController',
    'action' => 'getAddProjectAction',
    'auth' => true
]);
$map->get('addUser', '/CursoPHP/Users/add', [
    'controller' => 'App\Controllers\UsersController',
    'action' => 'getAddUserAction',
    'auth' => true
]);
$map->post('saveUser', '/CursoPHP/Users/add', [
    'controller' => 'App\Controllers\UsersController',
    'action' => 'getAddUserAction',
    'auth' => true
]);
$map->get('loginForm', '/CursoPHP/login', [
    'controller' => 'App\Controllers\AuthController',
    'action' => 'getLogin'
]);
$map->get('logout', '/CursoPHP/logout', [
    'controller' => 'App\Controllers\AuthController',
    'action' => 'getLogout'
]);
$map->post('auth', '/CursoPHP/auth', [
    'controller' => 'App\Controllers\AuthController',
    'action' => 'postLogin'
]);
$map->get('admin', '/CursoPHP/admin', [
    'controller' => 'App\Controllers\AdminController',
    'action' => 'getIndex',
    'auth' => true
]);


$matcher = $routerContainer->getMatcher();
$route = $matcher->match($request);

function printElement($job) {
  
    echo '<li class="work-position">';
    echo '<h5>' . $job->title . '</h5>';
    echo '<p>'.$job->description.'</p>';
    echo $job->getDurationAsString();
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  }

if(!$route) {
    echo 'No route';
} else {
    $handlerData = $route->handler;

    $needsAuth = $handlerData['auth'] ?? false;
    
    $sessionUserId = $_SESSION['userId'] ?? null;
    if($needsAuth && !$sessionUserId){

    $controllerName = 'App\Controllers\AuthController';
    $actionName = 'getLogout';
    
    } else {

    $controllerName = $handlerData['controller'];
    $actionName = $handlerData['action'];

    }

    $controller = new $controllerName;
    $response = $controller->$actionName($request);
    
    foreach($response->getHeaders() as $name => $values) 
    {
        foreach($values as $value) {
            header(sprintf('%s: %s', $name, $value), false);
        }
    }
    http_response_code($response->getStatusCode());
    echo $response->getBody();
}
