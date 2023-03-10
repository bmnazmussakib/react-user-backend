<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\ChartDataController;

$router->get('/', function(){
    return "This is Lumen API";
});

// ============= CHART DATA =============
$router->get('/chartData', 'ChartDataController@onAllSelect');


// ============= CLIENT REVIEW =============
$router->get('/testimonial', 'ClientReviewController@onAllSelect');


// ============= CONTACT TABLE =============
$router->post('/contactPost', 'ContactTableController@onContactSend');


// ============= PROJECT TABLE =============
$router->get('/projectHome', 'ProjectTabelController@onSelectFour');
$router->get('/projects', 'ProjectTabelController@onSelectAll');
// $router->post('/projectDetails', 'ProjectTabelController@onSelectDetails');
$router->get('/project/{id}', 'ProjectTabelController@onSelectOne');



// ============= FOOTER TABLE =============
$router->get('/footer', 'FooterTableController@onSelect');


// ============= WEBSITE INFO TABLE =============
$router->get('/info', 'WebsiteInformationController@onSelect');


// ============= SERVICE TABLE =============
$router->get('/service', 'ServiceTableController@onSelect');


// ============= VIDEO =============
$router->get('/video', 'VideoController@selectVideo');


// ============= Top Title =============
$router->get('/topTitle', 'HomeTopTitleController@TopTitle');


// ============= Tech Description =============
$router->get('/techDesc', 'TechDescController@TechDesc');


// ============= Total Project =============
$router->get('/totalProject', 'TotalProjectController@TotalProject');


