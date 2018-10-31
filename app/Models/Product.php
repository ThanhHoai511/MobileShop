<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'id_cate', 'description',
    ];

	public function product_group(){
	  	return $this->hasMany('ProductGroup', 'id_product', 'id');
	}

	public function category(){
	  	return $this->belongsTo('Category', 'id_cate');
	}
}
