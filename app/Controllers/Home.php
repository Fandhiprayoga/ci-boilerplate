<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_header').view('welcome_message').view('welcome_footer');
    }
}
