<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Menu;
use Illuminate\Support\Str;


class LoginController extends Controller
{
  public function login(){ //harus sama dengan yang ada di middleware authentic
    return view('auth.login');
  }

  public function loginPost(Request $request){
    if(Auth::attempt($request->only('email','password'))){
      return redirect("/home");
    }
    return redirect("/");
}

public function logout(){
  Auth::logout();
  return redirect('/');
}

public function register(){
  return view('auth.register');
}
public function createRegister(Request $req){

  $req->validate([
    'nama'    => 'required',
    'no_pelajar'     => 'required',
    'email'      => 'required',
    'alamat'   => 'required',
    'password' => 'required|max:15'
  ]);


  $usr = new \App\User;
  $usr->name = $req->nama;
  $usr->email = $req->email;
  $usr->password = bcrypt($req->password);
  $usr->remember_token = Str::random(100) ;
  $usr->status = 'user';
  //$passwd = bcrypt($req->password);
  $usr->save();
  $req->request->add(['user_id' => $usr->id]);
  $req->request->add(['password' => $usr->password]);
  Menu::create($req->all());

  //$NamaFoto = $req->rfoto->getClientOriginalName() . '.' . $req->rfoto->extension();
  //$req->rfoto->move(public_path('image'), $NamaFoto);

/*
  Menu::create([
    'nama' => $req->rnama,
    'email' => $req->remail,
    'password_user' => bcrypt($req->rpassword),
    'no_pelajar' => $req->no_pelajar,
    'alamat' => $req->ralamat,
    'foto' => $NamaFoto,
    'user_id' => $id
    ]);
*/
  return redirect('/login')->with('status','registrasi berhasil');

  }

}
