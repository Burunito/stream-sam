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
$app->get('/fondos/mundo-jack2', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('fondos/mundo-jack2.twig');
});
$app->get('/fondos/illuminatti', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('fondos/illuminatti.twig');
});
$app->get('/fondos/plaquetachan', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('fondos/plaquetachan.twig');
});
$app->get('/fondos/saitama', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('fondos/saitama.twig');
});
$app->get('/fondos/crikosos', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('fondos/crikosos.twig');
});
$app->get('/fondos/spider-web', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('fondos/spider-web.twig');
});
$app->get('/fondos/cotorrisa', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('fondos/cotorrisa.twig');
});
$app->get('/fondos/evangelion', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('fondos/evangelion.twig');
});
$app->get('/fondos/naruto', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('fondos/naruto.twig');
});
$app->get('/fondos/cisneros', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('fondos/cisneros.twig');
});
$app->get('/fondos/coneja', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('fondos/coneja.twig');
});
$app->get('/fondos/coneja-starting', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('fondos/coneja-starting.twig');
});
$app->get('/fondos/coneja-ending', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('fondos/coneja-ending.twig');
});
$app->get('/fondos/arkantos', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('fondos/arkantos.twig');
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
$app->get('/barras/redes-cotorrisa', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('barras/redes-cotorrisa.twig');
});
$app->get('/barras/redes-naruto', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('barras/redes-naruto.twig');
});
$app->get('/barras/redes-evangelion', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('barras/redes-evangelion.twig');
});
$app->get('/barras/redes-saitama', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('barras/redes-saitama.twig');
});
$app->get('/barras/redes-plaquetachan', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('barras/redes-plaquetachan.twig');
});
$app->get('/barras/redes-illuminatti', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('barras/redes-illuminatti.twig');
});
$app->get('/barras/redes-crikosos', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('barras/redes-crikosos.twig');
});
$app->get('/barras/redes-mundo-jack2', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('barras/redes-mundo-jack2.twig');
});
$app->get('/barras/redes-cisneros', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('barras/redes-cisneros.twig');
});
$app->get('/barras/redes-arkantos', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('barras/redes-arkantos.twig');
});
$app->get('/barras/redes-coneja', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('barras/redes-coneja.twig');
});

//TOPS
$app->get('/tops/tops-rosa-kawai', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('tops/tops-rosa-kawai.twig');
});
$app->get('/tops/tops-morado-spider', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('tops/tops-morado-spider.twig');
});
$app->get('/tops/tops-cotorrisa', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('tops/tops-cotorrisa.twig');
});
$app->get('/tops/tops-naruto', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('tops/tops-naruto.twig');
});
$app->get('/tops/tops-evangelion', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('tops/tops-evangelion.twig');
});

$app->get('/tops/tops-mundo-jack2', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('tops/tops-mundo-jack2.twig');
});
$app->get('/tops/tops-saitama', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('tops/tops-saitama.twig');
});
$app->get('/tops/tops-plaquetachan', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('tops/tops-plaquetachan.twig');
});
$app->get('/tops/tops-illuminatti', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('tops/tops-illuminatti.twig');
});
$app->get('/tops/tops-crikosos', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('tops/tops-crikosos.twig');
});
$app->get('/tops/tops-arkantos', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('tops/tops-arkantos.twig');
});
$app->get('/tops/tops-cisneros', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('tops/tops-cisneros.twig');
});
$app->get('/tops/tops-coneja', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('tops/tops-coneja.twig');
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
$app->get('/marcos/contenido-cotorrisa', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('marcos/contenido-cotorrisa.twig');
});
$app->get('/marcos/contenido-naruto', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('marcos/contenido-naruto.twig');
});
$app->get('/marcos/contenido-evangelion', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('marcos/contenido-evangelion.twig');
});

$app->get('/marcos/contenido-mundo-jack2', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('marcos/contenido-mundo-jack2.twig');
});
$app->get('/marcos/contenido-plaquetachan', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('marcos/contenido-plaquetachan.twig');
});
$app->get('/marcos/contenido-crikosos', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('marcos/contenido-crikosos.twig');
});
$app->get('/marcos/contenido-illuminatti', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('marcos/contenido-illuminatti.twig');
});
$app->get('/marcos/contenido-saitama', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('marcos/contenido-saitama.twig');
});

$app->get('/marcos/contenido-arkantos', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('marcos/contenido-arkantos.twig');
});
$app->get('/marcos/contenido-cisneros', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('marcos/contenido-cisneros.twig');
});
$app->get('/marcos/contenido-coneja', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('marcos/contenido-coneja.twig');
});
$app->get('/marcos/contenido-cisneros-webcam', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('marcos/contenido-cisneros-webcam.twig');
});
$app->get('/marcos/contenido-coneja-webcam', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('marcos/contenido-coneja-webcam.twig');
});
//Objeto moviles

$app->get('/fondos/mundo-jack2-perrito', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('fondos/mundo-jack2-perrito.twig');
});
$app->get('/fondos/mangudai', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('fondos/mangudai.twig');
});
$app->get('/fondos/paladin', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('fondos/paladin.twig');
});
$app->get('/fondos/balas', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('fondos/balas.twig');
});
$app->run();
