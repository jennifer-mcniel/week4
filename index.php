<?php

//This is my controller

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require
require_once ('vendor/autoload.php');

//Instantiate the F3 Base Class
$f3 = Base::instance();

//Define a default route
//https://jmcniel.greenriverdev.com/328/hello-fat-free/
$f3->route('GET /', function(){
//    echo below is used for testing before executing the template
        echo '<h1>Hello Week4</h1>';

//    //Render a view page
    $view = new Template();
    echo $view->render('views/info.html');
});



//Run Fat-Free
$f3->run();