<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    require('vendor/autoload.php');

   //With custom settings	
    $app = new Slim(array(
		'log.enable' => true,
		'log.path' => 'logs/',
		'log.level' => 4,
        'view' => 'SlimmyView'
	));  
       
    // Home GET route
	$app->get('/','home');
    
    //home function
    function home() {
       $app = Slim::getInstance();
       $app->render('home.tpl');
    }

    $app->run();   
    
?>

