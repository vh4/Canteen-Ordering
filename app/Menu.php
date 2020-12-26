<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
  protected $table = 'user_detail';
  protected $primaryKey = 'user_detail_id';
  protected $fillable = ['user_id', 'nama', 'no_pelajar', 'email', 'alamat', 'password', 'foto'];


  public function fotolain(){
    if(!$this->foto){
      
      return asset('image/black.jpeg');

    }
    return asset('image/'.$this->foto);
  }

  public function pengguna(){

    return $this->belongsTo(User::class);
    
  }
  
}

