<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    //see composer.json which loads libraries and middleware files
    require('vendor/autoload.php');

   //With custom settings	
    $app = new Slim(array(
		'log.enable' => true,
		'log.path' => 'logs/',
		'log.level' => 4,
        'view' => 'SlimmyView' // <- see Middleware
	));  
       
    // GET
	$app->get('/','home');
	
	//Note: routes are defined in ./middleware/routes.php which is autoloaded using
	//composer.json    
    
    //run the application
    $app->run();    
?>

