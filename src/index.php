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
       
    // Home GET route
	$app->get('/','route_home');
    
    //home function
    function route_home() {
       
       //get the slim instance
       $app = Slim::getInstance();
       
       //render the home page and pass in a title
       $app->render('home.tpl', array('title'=>'Site Starter'));
    }

    //run the application
    $app->run();    
?>

