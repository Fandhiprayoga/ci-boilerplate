<?php

namespace App\Controllers\Dashboard;
use App\Controllers\BaseController;

class Admins extends BaseController
{
    public function index()
    {
        return view("dashboard/components/header").
        view("dashboard/components/sidebar_admin").
        view("dashboard/admin/main_admin").
        view("dashboard/components/footer");
    }

}
