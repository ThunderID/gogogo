<?php

$router->group(['namespace' => 'Web'], function($router) {
	get('/', ['as' => 'web.home', 'uses' => 'HomeController@index']);
	
	get('/paket/detail/{paket}', ['as' => 'web.tour', 'uses' => 'TourController@paket']);
});