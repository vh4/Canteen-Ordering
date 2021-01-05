<?php

namespace App\Http\Controllers;
use Darryldecode\Cart\Cart;

use Illuminate\Http\Request;

class Payments extends Controller
{
    public function index(){

       if(\Cart::session(auth()->id())->getContent()->count() !== 0){

        return view('payment.index');

       }else{

        return redirect('/home');
       }


    }


}
