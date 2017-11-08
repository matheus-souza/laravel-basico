<?php

use Odin\Customer;

Route::get('/', function () {

//    LIST CUSTOMERS
//    $customers = Odin\Customer::paginate(10);
//    dd($customers->toArray());
//    echo $customers->render();

//    NEW CUSTOMER
    $data = [
        'name' => 'Matheus Souza',
        'city' => 'Venâncio Aires',
        'state' => 'RS',
        'special_customer' => true,
        'birthdate' => '1998-02-11 00:00:00'
    ];
    $customer = Customer::create($data);
    dd($customer->toArray());

//    GET CUSTOMER
//    $customer = Customer::find(51);
//    dd($customer->birthdate);

});
