<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Menu;
use App\User;
use App\Food;

class Dashboard extends Controller
{

  public function buat(Request $req){

    $req->validate([
      'nama' => 'required',
      'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
      'no_pelajar' => 'required|max:10',
      'imail' => 'required',
      'alamat' => 'required'
    ]);

    $namefoto = $req->foto->getClientOriginalName() . '.' . $req->foto->extension();
    $req->foto->move(public_path('image'), $namefoto);

    Menu::create([
      'nama' => $req->nama,
      'user_id' => 0,
      'no_pelajar' => $req->no_pelajar,
      'email' => $req->imail,
      'alamat' => $req->alamat,
      'password' => bcrypt('BdewiErmawti'),
      'foto' => $namefoto
    ]);
    return redirect('/home')->with('status','data berhasil di tambahkan');

  //  $create = new \App\Menu;
  //  $req->nama = $create->nama;
//    $req->no_pelajar  = $create->no_pelajar;
  //  $req->imail = $create->email;
  //  $req->alamat = $create->alamat;
  //  $namefoto  = $create->foto;
  //  $usr->save();

  }

  public function pagination(Request $request){

      $pag = Menu::orderBy('updated_at', 'desc')->paginate(5);

      if(isset($_GET['cari'])){
        $foods = Food::where(
        'name_food','LIKE','%'.$request->cari.'%')->orWhere(
        'category','LIKE','%'.$request->cari.'%')->orWhere(
        'price','LIKE','%'.$request->cari.'%')->orWhere(
        'description','LIKE','%'.$request->cari.'%'
          )->get();

    }else {
         $foods = Food::all();

    }
      
      return view("home",['pag' => $pag, 'foods' => $foods]);
      
    }

    public function delete($del){

      $hps = Menu::find($del);
      $hps->delete($hps);
      return redirect('/home')->with('status','data berhasil di hapus');
    }

    public function update(Request $request, $user_detail_id){

        $edite = Menu::find($user_detail_id);
       // $edite = Menu::table('user_detail')->where('user_detail_id', $user_detail_id)->first();

        $request->validate([
          'foto' => 'file|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $edite->update($request->all());

        if($request->hasFile('foto')){
          $request->file('foto')->move(public_path('image'), $request->file('foto')->getClientOriginalName());
          $edite->foto = $request->file('foto')->getClientOriginalName();
          $edite->save();
        }

        return redirect('/home')->with('status','data berhasil di update');

    }



}
