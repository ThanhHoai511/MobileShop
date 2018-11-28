<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductGroup;
use App\Models\DetailProduct;
use App\Models\BillImport;

class DetailBillImport extends Model
{
    protected $fillable = [
        'id_bill_import', 'id_product_group', 'imei', 'camera_before', 'camera_after', 'pin', 'screen', 'weight', 'photos',
    ];

	public function detail_product(){
	  	return $this->hasMany('App\Models\DetailProduct', 'id_detail_bill_import', 'id');
	}

	public function product_group(){
	  	return $this->belongsTo('App\Models\ProductGroup', 'id_product_group');
	}

	public function bill_import(){
	  	return $this->belongsTo('App\Models\BillImport', 'id_bill_import');
	}

	public function getImage($id)
	{
		$dbi = DetailBillImport::find($id);
		$images = $dbi->photos;
		$imgs = json_decode($images,true);
		
		return $imgs;
	}

	public function encodeImage($images)
	{
		$filename_arr = [];
        $i = 1;
        foreach ($images as $file){
            $filename = $i . time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('/uploads/mobile'), $filename);
            $filename_arr[] = $filename;
            $i++;
        }
        $image = json_encode($filename_arr);

        return $image;
	}
}
