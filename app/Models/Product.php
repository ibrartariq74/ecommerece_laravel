<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'price', 
        'image',
    ];
    public function Category()
    {
    	return $this->belongsTo('App\Models\Category');
    }
    public function Stock()
    {
    	return $this->hasOne('App\Models\Stock');
    }

   
}
