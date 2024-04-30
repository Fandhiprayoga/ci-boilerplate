<?php

namespace App\Controllers\Dashboard;
use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        return view("dashboard/components/header").
                view("dashboard/components/sidebar_user").
                view("dashboard/user/main_user").
                view("dashboard/components/footer");
    }

}
