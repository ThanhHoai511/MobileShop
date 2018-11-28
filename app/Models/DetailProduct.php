<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailProduct extends Model
{
	protected $fillable = [
        'id_detail_bill_import', 'id_product_group', 'imei', 'camera_before', 'camera_after', 'pin', 'screen', 'weight', 'photos',
    ];

    public function product_group(){
	  	return $this->belongsTo('App\Models\ProductGroup', 'id_product_group');
	}

	public function detail_bill_import(){
	  	return $this->belongsTo('App\Models\DetailBillImport', 'id_detail_bill_import');
	}

    public function getImage($id)
	{
		$dp = DetailProduct::find($id);
		$images = $dp->photos;
		$imgs = json_decode($images,true);
		
		return $imgs;
	}
}
