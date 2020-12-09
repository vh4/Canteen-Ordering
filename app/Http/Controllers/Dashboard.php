<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Menu;

class Dashboard extends Controller
{

  public function buat(Request $req){

    $req->validate([
      'nama' => 'required',
      'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
      'nim' => 'required|max:10',
      'imail' => 'required',
      'alamat' => 'required'
    ]);

    $namefoto = $req->foto->getClientOriginalName() . '.' . $req->foto->extension();
    $req->foto->move(public_path('image'), $namefoto);

    Menu::create([
      'nama' => $req->nama,
      'nim' => $req->nim,
      'email' => $req->imail,
      'alamat' => $req->alamat,
      'foto' => $namefoto
    ]);
    return redirect('/home')->with('status','data berhasil di tambahkan');

  //  $create = new \App\Menu;
  //  $req->nama = $create->nama;
//    $req->nim  = $create->nim;
  //  $req->imail = $create->email;
  //  $req->alamat = $create->alamat;
  //  $namefoto  = $create->foto;
  //  $usr->save();

  }

  public function pagination(){

      $pag = Menu::orderBy('created_at', 'asc')->paginate(5);
      return view("home",['pag' => $pag]);
    }

    public function delete($del){

      $hps = Menu::find($del);
      $hps->delete($hps);
      return redirect('/home')->with('status','data berhasil di hapus');
    }

    public function update(Request $request, $id){

        $edite = Menu::find($id);
        $edite->update($request->all());

        if($request->hasFile('foto')){
          $request->file('foto')->move(public_path('image'), $request->file('foto')->getClientOriginalName());
          $edite->foto = $request->file('foto')->getClientOriginalName();
          $edite->save();
        }

        return redirect('/home')->with('status','data berhasil di update');

    }

}
