<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    protected $fillable = [
        'name', 'description',
    ];

	public function product(){
	  	return $this->hasMany('Product', 'id_cate', 'id');
	}
}
