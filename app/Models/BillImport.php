<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\DetailBillImport;

class BillImport extends Model
{
    protected $fillable = [
        'supplier_name', 'total', 'date',
    ];

	public function detail_bill_import(){
	  	return $this->hasMany('DetailBillImport', 'id_bill_import', 'id');
	}
}
