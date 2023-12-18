<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class defaultFormController extends Controller
{
    //
    public function dashboard() {
        return view('dashboard');
    }

    public function products() {
        return view('Products.landing');
    }

    public function myProfile() {
        return view('Profiles.landing');
    }

    public function setting() {
        return view('setting');
    }
}
