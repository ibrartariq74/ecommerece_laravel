<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';



    public function Product()
    {
    	return $this->belongsTo('App\Models\Product');
    }

    public function User()
    {
    	return $this->belongsTo('App\Models\User');
    }

}
