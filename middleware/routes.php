<?php

	//home function
    function home() {
       
       //get the slim instance
       $app = Slim::getInstance();
       
       //render the home page and pass in a title
       $app->render('home.tpl', array('title'=>'Site Starter'));
    }
?>