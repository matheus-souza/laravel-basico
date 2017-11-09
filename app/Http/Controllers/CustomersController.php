<?php

namespace Odin\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        dd('Hello');
    }

    public function get($id)
    {
        dd($id);
    }

    public function create()
    {

    }

    public function update($id)
    {
        dd($id);
    }

    public function delete($id)
    {
        dd($id);
    }

}
