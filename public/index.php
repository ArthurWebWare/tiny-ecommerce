<?php

declare(strict_types=1);

use App\ContainerFactory;
use App\Controllers\Admin\Pages\PagesController;
use App\Controllers\ExceptionDemoController;
use App\Controllers\HelloController;
use App\Controllers\HomeController;
use App\Helpers\Alias;
use Slim\Factory\AppFactory;
use Slim\Routing\RouteCollectorProxy;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

// Set the default timezone.
date_default_timezone_set('Europe/Chisinau');

// Set the absolute path to the root directory.
$rootPath = realpath(__DIR__ . '/..');

// Include the composer autoloader.
include_once($rootPath . '/vendor/autoload.php');

// Create the container for dependency injection.
try {
    $container = ContainerFactory::create($rootPath);
} catch (Exception $e) {
    die($e->getMessage());
}

//Aliases
$aliases = require $rootPath .  '/application/config/aliases.php';
Alias::loadAliases($aliases);

// Set the container to create the App with AppFactory.
AppFactory::setContainer($container);
$app = AppFactory::create();

// Add the routing middleware.
$app->addRoutingMiddleware();

// Add the twig middleware.
$app->addMiddleware(
    TwigMiddleware::create($app, $container->get(Twig::class))
);

// Add error handling middleware.
$displayErrorDetails = true;
$logErrors = true;
$logErrorDetails = false;
$app->addErrorMiddleware($displayErrorDetails, $logErrors, $logErrorDetails);

// Define the app routes.
$app->group('/', function (RouteCollectorProxy $group) {
    $group->get('', HomeController::class)->setName('home');
    $group->get('hello/{name}', HelloController::class)->setName('hello');
    $group->get('exception-demo', ExceptionDemoController::class)->setName('exception-demo');
});

$app->group('/admin/', function (RouteCollectorProxy $group) {
    //Custom Pages CRUD
    $group->get('custom-pages', [PagesController::class, 'listAction'])->setName('List of custom pages');
    $group->get('custom-page/{slug}', [PagesController::class, 'indexAction'])->setName('Edit custom page');
    $group->post('custom-page/{slug}', [PagesController::class, 'createAction']);
    $group->put('custom-page/{slug}', [PagesController::class, 'updateAction']);
    $group->delete('custom-page/{slug}', [PagesController::class, 'deleteAction']);
});

// Run the app.
$app->run();
