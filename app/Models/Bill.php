<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\DetailBill;
use App\Models\User;

class Bill extends Model
{
    protected $fillable = [
        'id_user', 'name', 'email', 'address', 'phone', 'total', 'date'
    ];

	public function detail_bill(){
	  	return $this->hasMany('DetailBill', 'id_bill', 'id');
	}

	public function user(){
	  	return $this->belongsTo('User', 'id_user');
	}
}
