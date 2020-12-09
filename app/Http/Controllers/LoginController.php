<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;


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

}
