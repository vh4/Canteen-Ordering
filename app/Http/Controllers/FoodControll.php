<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;

class FoodControll extends Controller
{
    public function index(){
        $foodpag = Food::orderBy('updated_at', 'desc')->paginate(7);
        return view("food.index",['foodpag' => $foodpag]);

    }

    public function create(Request $req){

        $req->validate([
            'name_food' => 'required',
            'price' => 'required|max:10',
            'description' => 'required',
            'category' => 'required',
            'foto_food' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $namaFotoo = $req->foto_food->getClientOriginalName() . '.' . $req->foto_food->extension();
        $req->foto_food->move(public_path('image'), $namaFotoo);

        Food::Create([
            'name_food' => $req->name_food,
            'price' => $req->price,
            'description' => $req->description,
            'category' => $req->category,
            'foto_food' => $namaFotoo
        ]);

        return redirect('/home/food')->with('status','food berhasil ditambahkan');

    }

    public function update(Request $req, $food_edit){
        $edit = Food::find($food_edit);
        $req->validate([
            'foto_food' => 'file|image|mimes:jpeg,png,jpg|max:2048',
            'price' => 'integer',
          ]);
        
        $edit->update($req->all());
        if($req->hasFile('foto_food')){
            $req->foto_food->move(public_path('image'),$req->file('foto_food')->getClientOriginalName());
            $edit->foto_food = $req->file('foto_food')->getClientOriginalName();
            $edit->save();
        }
        return redirect('/home/food')->with('status','data berhasil di update');

    }
    public function delete($del_food){

        $del = Food::find($del_food);
        $del->delete($del);
        return redirect('/home/food')->with('status','food berhasil di hapus');
    }
}
