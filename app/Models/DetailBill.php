<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Bill;
use App\Models\DetailProduct;

class DetailBill extends Model
{
    protected $fillable = [
        'id_bill', 'id_detail_product', 'price'
    ];

	public function bill(){
	  	return $this->belongsTo('Bill', 'id_bill');
	}

	public function detail_product(){
	  	return $this->belongsTo('DetailProduct', 'id_detail_product');
	}
}
