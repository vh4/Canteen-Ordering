<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    //
    protected $table = 'food';
    protected $primaryKey = 'food_id';
    protected $fillable = ['name_food', 'price', 'description', 'category', 'foto_food'];

    public function fotofood(){

        if(!$this->foto_food){
          return asset('image/black.jpeg');
        }
        return asset('image/'.$this->foto_food);

      }
      

    
}
