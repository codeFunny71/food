<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload
require_once('vendor/autoload.php');

//create an instance of the Base class
$f3 = Base::instance();

//Turn on fat free error reporting
$f3->set('DEBUG', 3);

//Define route
$f3->route('GET /',
    function() {
        echo '<h1>My Fav Foods</h1>';
        $view = new View();
        echo $view->render('views/home.html');
    }
);

//Define a breakfast route
$f3->route('GET /breakfast',
     function() {
        echo '<h1>I love breakfast</h1>';
        $view = new View();
        echo $view->render('views/home.html');
    }
    );

//Define a breakfast route
$f3->route('GET /lunch',
    function() {
        echo '<h1>I love lunch</h1>';
        $view = new View();
        echo $view->render('views/home.html');
    }
);

//Define a breakfast route
$f3->route('GET /dinner',
    function() {
        echo '<h1>I love dinner</h1>';
        $view = new View();
        echo $view->render('views/home.html');
    }
);

//Define a breakfast route
$f3->route('GET /breakfast/pancakes',
    function() {
        echo '<h1>Pancakes are yummy!</h1>';
        $view = new View();
        echo $view->render('views/pancakes.html');
    }
);

//Run fat free
$f3->run();