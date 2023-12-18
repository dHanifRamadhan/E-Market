<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class transactionController extends Controller
{
    //
    public function index()
    {
        $sub = DB::table('transaction_detail')
            ->join('product', 'product.id', '=', 'transaction_detail.product_id')
            ->select('transaction_detail.*', 'product.name as product_name');

        $result = DB::table('transaction')
            ->joinSub($sub, 'sub', function ($join) {
                $join->on('transaction.id', '=', 'sub.transaction_id');
            })
            ->join('users', 'transaction.user_id', '=', 'users.id')
            ->select('transaction.*', 'sub.product_name', 'sub.qty', 'users.name as username')
            ->get();
        return view('Shopping.transaction', ['product' => $result]);
    }

    public function create(Request $request)
    {        
        // $array = [];
        // foreach ($request->sele) {

        // }
        $id = DB::table('transaction')->insertGetId([
            'user_id' => Auth::user()->id,
            'date' => now(),
            'created_at' => now()
        ]);

        foreach ($request->selected_items as $v) {
            DB::table('transaction_detail')->insert([
                'transaction_id' => $id,
                'product_id' => $v,
                'qty' => 1,
                'created_at' => now()
            ]);
        }

        return redirect()->route('transaction');
    }
}
