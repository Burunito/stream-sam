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

$app->get('/fondos/spider-web', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('fondos/spider-web.twig');
});

//barras
$app->get('/barras/redes-rosa-kawai', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('barras/redes-rosa-kawai.twig');
});
$app->get('/barras/redes-morado-halloween', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('barras/redes-morado-halloween.twig');
});
$app->get('/barras/redes-morado-spiderweb', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('barras/redes-morado-spiderweb.twig');
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
$app->get('/marcos/webcam-morado-spiderweb', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('marcos/webcam-morado-spiderweb.twig');
});
$app->get('/marcos/contenido-morado-spiderweb', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('marcos/contenido-morado-spiderweb.twig');
});
$app->get('/marcos/webcam-morado-halloween', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('marcos/webcam-morado-halloween.twig');
});
$app->get('/marcos/contenido-morado-halloween', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('marcos/contenido-morado-halloween.twig');
});

$app->run();
