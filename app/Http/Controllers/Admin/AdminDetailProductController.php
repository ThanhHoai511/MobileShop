<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DetailProduct;
use App\Models\ProductGroup;
use App\Http\Requests\AdminEditDetailProductRequest;

class AdminDetailProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dp = DetailProduct::all();

        return view('admin.detail-product.index', ['dp' => $dp]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $detailProduct = DetailProduct::findOrFail($id);
        $productGroup = ProductGroup::all();

        return view('admin.detail-product.edit', ['dp' => $detailProduct, 'pg' => $productGroup]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminEditDetailProductRequest $request, $id)
    {
        $dp = DetailProduct::findOrFail($id);
        $dp->id_product_group = $request->id_product_group;
        $dp->imei = $request->imei;
        $dp->sale = $request->sale;
        $dp->camera_before = $request->camera_before;
        $dp->camera_after = $request->camera_after;
        $dp->pin = $request->pin;
        $dp->screen = $request->screen;
        $dp->weight = $request->weight;
        if($request->photos != null)
            $dp->photos = $request->photos;
        $dp->description = $request->description;
        $dp->save();

        return redirect()->route('listDetailProduct')->with('success', 'Edit successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
