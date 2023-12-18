<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopsController extends Controller
{
    //
    public function myStores(Request $request) {
        return view('Markets.my');
    }
}
