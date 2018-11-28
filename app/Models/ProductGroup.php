<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Group;

class ProductGroup extends Model
{
    protected $fillable = [
        'id_product', 'id_group',
    ];

	public function product(){
	  	return $this->belongsTo('App\Models\Product', 'id_product');
	}
	public function group(){
	  	return $this->belongsTo('App\Models\Group', 'id_group');
	}
}
