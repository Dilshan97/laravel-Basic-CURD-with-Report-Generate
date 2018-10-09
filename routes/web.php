<?php



Route::get('/', 'HomeController@index');

Route::resource('/deliveries', 'DeliveryController');

Route::get('/dynamic_pdf', 'DynamicPDFController@index');

Route::get('/dynamic_pdf/pdf', 'DynamicPDFController@pdf');