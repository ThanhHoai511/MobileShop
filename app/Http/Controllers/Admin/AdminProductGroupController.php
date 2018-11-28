<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProductGroup;
use App\Models\Product;
use App\Models\Group;

class AdminProductGroupController extends Controller
{
    public function index()
    {
        $pro_group = ProductGroup::all();

        return view('admin.product-group.index', ['pro_group' => $pro_group]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::all();
        $group = Group::all();

        return view('admin.product-group.add', ['product' => $product, 'group' => $group]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = $request->id_product;
        $group = $request->id_group;

        $data = array(
            'id_product' => $product,
            'id_group' => $group,
        );

        ProductGroup::create($data);

        return redirect()->route('listProductGroup')->with('success', 'Add product group successful!');
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
        $pg = ProductGroup::findOrFail($id);
        $product = Product::all();
        $group = Group::all();

        return view('admin.product-group.edit', ['product' => $product, 'group' => $group, 'pg' => $pg]);
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
        $product = $request->id_product;
        $group = $request->id_group;

        $data = array(
            'id_product' => $product,
            'id_group' => $group,
        );

        ProductGroup::find($id)->update($data);

        return redirect()->route('listProductGroup')->with('success', 'Edit product group successful!');
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
