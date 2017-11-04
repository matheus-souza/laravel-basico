<?php

use Illuminate\Database\Seeder;
use Odin\Customer;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::truncate();

        factory(Customer::class, 50)->create();
    }
}
