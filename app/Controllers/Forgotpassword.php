<?php

namespace App\Controllers;

class Forgotpassword extends BaseController
{
    public function index(): string
    {
        return view('view_forgot');
    }
}
