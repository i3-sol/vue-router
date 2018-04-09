<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    //basically , it is a spa controller that resolve all incoming requests.
    public function index()
    {
        return view('index');
    }
}
