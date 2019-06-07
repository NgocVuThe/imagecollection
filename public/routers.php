<?php
require_once "../app/Route/Route.php";

    $route = new Route();
    $route->get('/imagecollection/public/list', 'EmployController@index');
    $route->run();