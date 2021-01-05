<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class History extends Controller
{
    public function index(){

        $order = Auth::user()->id;
            $arry = DB::table('users')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->join('food', 'orders.food_id', '=', 'food.food_id')
            ->select('name','tracking','id','tanggal_order','name_food','price','category','description')
            ->where('orders.user_id', '=', $order)
            ->orderBy('tanggal_order', 'desc')
            ->get();                 

            $adminfor = DB::table('users')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->join('food', 'orders.food_id', '=', 'food.food_id')
            ->select('name','id','tanggal_order','name_food','price','category','description','tracking','order_id')
            ->orderBy('tanggal_order', 'desc')
            ->get();

            return view("order.index",['arry' => $arry, 'adminfor' => $adminfor]);

    }

    public function confirm($confirm_id){

        DB::table('orders')
        ->where('order_id', $confirm_id)
        ->update(['tracking' => 'success']);

        return redirect('/home/order/history');

    }
}
