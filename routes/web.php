<?php

use Odin\Customer;

Route::get('/', function () {
    return 'Rota principal no Laravel';
});

Route::group(['prefix' => 'admin'], function() {
    Route::resource('clientes', 'CustomersController');
});