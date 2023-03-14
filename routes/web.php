<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\ChartDataController;

$router->get('/', function(){
    return "This is Lumen API";
});

// ============= CHART DATA =============
$router->get('/chartData', ['middleware' => 'auth','uses' => 'ChartDataController@onAllSelect']);


// ============= CLIENT REVIEW =============
$router->get('/testimonial', ['middleware' => 'auth','uses' => 'ClientReviewController@onAllSelect']);


// ============= CONTACT TABLE =============
$router->post('/contactPost', ['middleware' => 'auth','uses' => 'ContactTableController@onContactSend']);


// ============= PROJECT TABLE =============
$router->get('/projectHome', ['middleware' => 'auth','uses' => 'ProjectTabelController@onSelectFour']);
$router->get('/projects', ['middleware' => 'auth','uses' => 'ProjectTabelController@onSelectAll']);
// $router->post('/projectDetails', ['middleware' => 'auth','uses' => 'ProjectTabelController@onSelectDetails']);
$router->get('/project/{id}', ['middleware' => 'auth','uses' => 'ProjectTabelController@onSelectOne']);



// ============= FOOTER TABLE =============
$router->get('/footer', ['middleware' => 'auth','uses' => 'FooterTableController@onSelect']);


// ============= WEBSITE INFO TABLE =============
$router->get('/info', ['middleware' => 'auth','uses' => 'WebsiteInformationController@onSelect']);


// ============= SERVICE TABLE =============
$router->get('/service', ['middleware' => 'auth','uses' => 'ServiceTableController@onSelect']);


// ============= VIDEO =============
$router->get('/video', ['middleware' => 'auth','uses' => 'VideoController@selectVideo']);


// ============= Top Title =============
$router->get('/topTitle', ['middleware' => 'auth','uses' => 'HomeTopTitleController@TopTitle']);


// ============= Tech Description =============
$router->get('/techDesc', ['middleware' => 'auth','uses' => 'TechDescController@TechDesc']);


// ============= Total Project =============
$router->get('/totalProject', ['middleware' => 'auth','uses' => 'TotalProjectController@TotalProject']);


