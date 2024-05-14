<?php
namespace App\Controllers\Dashboard;
use App\Controllers\BaseController;

class Profile extends BaseController {

    public function index() {
        return view("dashboard/components/header").
        view("dashboard/components/sidebar_admin").
        view("dashboard/generals/profiles_view").
        view("dashboard/components/footer"); 
    }
}

