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

//FONDOS
$app->get('/fondos/test', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('fondos/test.twig');
});

$app->get('/fondos/mundo-jack', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('fondos/mundo-jack.twig');
});


//barras
$app->get('/barras/redes-rosa-kawai', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('barras/redes-rosa-kawai.twig');
});

//TOPS
$app->get('/tops/tops-rosa-kawai', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('tops/tops-rosa-kawai.twig');
});


//MARCOS
$app->get('/marcos/webcam-rosa-kawai', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('marcos/webcam-rosa-kawai.twig');
});
$app->get('/marcos/contenido-rosa-kawai', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('marcos/contenido-rosa-kawai.twig');
});

$app->run();
