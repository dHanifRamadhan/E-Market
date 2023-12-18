<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class cartController extends Controller
{
    //
    public function index()
    {
        return view('Shopping.cart.index');
    }

    public function store(Request $request)
    {
        // Validate and store the cart item data
        // ...
        DB::table('cart')->insert([
            'user_id' => Auth::user()->id,
            'product_id' => $request->product_id,
            'qty' => 1,
            'created_at' => now()
        ]);

        return redirect()->route('cart');
    }

    public function delete()
    {
        DB::table('cart')->delete();
        return redirect()->route('cart.index');
    }
}
