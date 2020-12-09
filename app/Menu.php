<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Menu extends Model
{
  protected $table = 'students';
  protected $fillable = ['nama','nim','email','alamat','foto','created_at'];
}
