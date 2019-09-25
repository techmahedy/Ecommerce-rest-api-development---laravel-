<?php

namespace App;

use App\Review;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{   
	protected $fillable = [
        'name', 'detail', 'stock','price','discount'
    ];

    public function reviews()
    {
    	return $this->hasMany(Review::class);
    }
}
