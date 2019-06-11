<?php
require_once "../app/Route/Route.php";

    $route = new Route();
    $route->get('/imagecollection/public/list', 'EmployController@index');
    $route->get('/imagecollection/public/create', 'EmployController@create');
    $route->get('/imagecollection/public/edit', 'EmployController@editEmployer');
    $route->get('/imagecollection/public/detail', 'EmployController@detailEmployer');

    $route->get('/imagecollection/public/delete', 'EmployController@deleteEmployer');

    $route->post('/imagecollection/public/create', 'EmployController@createEmployer');
    $route->post('/imagecollection/public/edit', 'EmployController@updateEmployer');


    $route->run();