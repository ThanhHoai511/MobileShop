<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DetailBillImport;
use App\Models\BillImport;
use App\Models\ProductGroup;
use App\Models\DetailProduct;

class AdminDetailBillImportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dbi = DetailBillImport::all();

        return view('admin.detail-bill-import.index', ['dbi' => $dbi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$bill_import = BillImport::all();
    	$product_group = ProductGroup::all();

        return view('admin.detail-bill-import.add', ['bi' => $bill_import, 'pg' => $product_group]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dbi = new DetailBillImport();
        $photos = $request->photos;
        $dbi->photos = $dbi->encodeImage($photos);
        $dbi->id_bill_import = $request->id_bill_import;
        $dbi->id_product_group = $request->id_product_group;
        $dbi->imei = $request->imei;
        $dbi->price = $request->price;
        $dbi->camera_before = $request->camera_before;
        $dbi->camera_after = $request->camera_after;
        $dbi->pin = $request->pin;
        $dbi->screen = $request->screen;
        $dbi->weight = $request->weight;
        $dbi->save();

        $dp = new DetailProduct();
        $dp->id_product_group = $dbi->id_product_group;
        $dp->id_detail_bill_import = $dbi->id;
        $dp->imei = $dbi->imei;
        $dp->price = 1.2*$dbi->price;
        $dp->camera_before = $dbi->camera_before;
        $dp->camera_after = $dbi->camera_after;
        $dp->pin = $dbi->pin;
        $dp->screen = $dbi->screen;
        $dp->weight = $dbi->weight;
        $dp->photos = $dbi->photos;
        $dp->save();

        return redirect()->route('listDetailBillImport')->with('success', 'Add successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
