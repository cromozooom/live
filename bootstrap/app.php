<?php

session_start();

require __DIR__.'/../vendor/autoload.php';

$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true,
    ],
]);
// Fetch DI Container
$container = $app->getContainer();

// Register Smarty View helper
$container['view'] = function ($container) {
    $view = new \Slim\Views\Smarty(__DIR__.'/../views/templates', [
        'cacheDir' => false,
        'compileDir' => __DIR__.'/../views/templates_c',
    ]);

    // Add Slim specific plugins
    $smartyPlugins = new \Slim\Views\SmartyPlugins($container['router'], $container['request']->getUri());
    $view->registerPlugin('function', 'path_for', [$smartyPlugins, 'pathFor']);
    $view->registerPlugin('function', 'base_url', [$smartyPlugins, 'baseUrl']);


    return $view;
};

//Controllers 
$container['HomeController'] = function ($container) {
    return new \App\Controllers\HomeController($container);
};


require __DIR__.'/../app/routes.php';