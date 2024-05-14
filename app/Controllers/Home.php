<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {

        if (auth()->loggedIn()) {
            if (auth()->user()->can('admin.access')) {
                return redirect()->to('dashboardadmin');
            } else {
                return redirect()->to('dashboarduser');
            }
        }
        return view('welcome_header').view('welcome_message').view('welcome_footer');
    }

    public function logout()
    {
        auth()->logout();
    }
}
