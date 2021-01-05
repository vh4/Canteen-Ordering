<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Menu;
use Illuminate\Http\Request;
use App\Food;

class Profile extends Controller
{
    public function index($id){

        $editprofile = Menu::where('user_id',$id)->first();
        return view("profile.index",['editprofile' => $editprofile]);
    }

    public function edit(Request $request, $id_pr){

        $ed = Menu::where('user_id', $id_pr)->first();

        $request->validate([
            'foto' => 'file|image|mimes:jpeg,png,jpg|max:2048',
          ]);
        
        $ed->update($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move(public_path('image'), $request->file('foto')->getClientOriginalName());
            $ed->foto = $request->file('foto')->getClientOriginalName();
            $ed->save();
          }
          return redirect('/home')->with('status','data berhasil di update');

    }

    public function view($id){

        $Food = Food::all();

        $dta = [];
        $val = [];

        foreach($Food as $f){

            $dta[] = $f->name_food;
            $val[] = $f->price;

        }

        return view("profile.view",['dta' => $dta, 'val' => $val]);

    }
}
