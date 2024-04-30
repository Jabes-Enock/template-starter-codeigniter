<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        //dd($data);
        return view('home');
    }
    public function about(): string
    {
        return view('about');
    }
}
