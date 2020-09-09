<?php

require('../vendor/autoload.php');

$app = new Silex\Application();
$app['debug'] = true;

// Register the monolog logging service
$app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
));

// Register view rendering
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

// Our web handlers

$app->get('/', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('index.twig');
});
$app->get('/barra', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('barra.twig');
});
$app->get('/contenido', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('contenido.twig');
});
$app->get('/test', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('test.twig');
});
$app->get('/tops', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('tops.twig');
});
$app->get('/webcam', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('webcam.twig');
});

$app->run();
