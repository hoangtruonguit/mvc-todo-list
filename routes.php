<?php

$router->get('', 'WorkController@index');
$router->get('works', 'WorkController@index');
$router->get('calendar', 'WorkController@calendar');
$router->post('works', 'WorkController@store');
$router->post('works/update', 'WorkController@update');
$router->post('works/delete', 'WorkController@destroy');