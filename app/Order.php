<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    
    protected $primaryKey = 'order_id';
    public $timestamps = false;
    protected $fillable = ['user_id', 'food_id', 'tracking', 'tanggal_order'];

}
