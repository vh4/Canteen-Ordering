<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Darryldecode\Cart\Cart;
use App\Food;
use App\Order;
use Illuminate\Support\Facades\Auth;

class CartControll extends Controller
{
    //
    public function add($food_id){

        /*
        $cart = session("cart");
        $food = Food::where('food_id', $food_id)->first();
        $cart[$food_id] = [
            'name_food' => $food->name_food,
            'price' => $food->price,
            'description' => $food->description,
            'category' => $food->category,
            'foto_food' => $food->foto_food,
            'jumlah' => 1

        ];
        session(["cart" => $cart]);
        return redirect('/home/cart');
    */
    $food = Food::where('food_id', $food_id)->first();
    $id_user = Auth::user()->id;
        
    Order::create([
        'user_id' => $id_user,
        'food_id' => $food->food_id,
        'tracking' => 'pending',
        ]);


    \Cart::session(auth()->id())->add(array(
        'id' => $food->food_id,
        'name' => $food->name_food,
        'category' => $food->category,
        'foto_food' => $food->foto_food,
        'description' => $food->description,
        'price' => $food->price,
        'attributes' => array(),
        'quantity' => 1,
        'associatedModel' => $food
    ));

    return redirect('/home/cart');


    }



    public function index(){
        //$cart = session("cart");
       // return view("cart.index",['cart' => $cart]);
       $cart = \Cart::session(auth()->id())->getContent();
      return view("cart.index",['cart' => $cart]);

    }

    public function delete($delete_cart){
       // $cart = session("cart");
       // unset($cart[$delete_cart]);

        //session(["cart" => $cart]);
        \Cart::session(auth()->id())->remove($delete_cart);
        return redirect("/home/cart");
    }

    public function update($qty_id){

        \Cart::session(auth()->id())->update($qty_id, [
            'quantity' => array(
                'relative' => false,
                'value' => request('quantity')
            )
        ]);

        return back();


    }
}
