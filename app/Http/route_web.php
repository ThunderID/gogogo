<?php

$router->group(['namespace' => 'Web'], function($router) {
	get('/', ['as' => 'web.home', 'uses' => 'HomeController@index']);
	
	get('/{paket}', ['as' => 'web.tour', 'uses' => 'TourController@paket']);
});