<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\ProductGroup;

class AdminGroupController extends Controller
{
    public function index()
    {
        $group = Group::all();

        return view('admin.group.index', ['group' => $group]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.group.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $color = $request->color;
        $ram = $request->ram;
        $memory = $request->memory;

        $data = array(
            'color' => $color,
            'ram' => $ram,
            'memory' => $memory,
        );
        Group::create($data);

        return redirect()->route('listGroup')->with('success', 'Add category successful!');
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
        $group = Group::findOrFail($id);

        return view('admin.group.edit', ['group' => $group]);
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
        $color = $request->color;
        $ram = $request->ram;
        $memory = $request->memory;

        $data = array(
            'color' => $color,
            'ram' => $ram,
            'memory' => $memory,
        );
        $group = Group::find($id)->update($data);

        return redirect()->route('listGroup')->with('success', 'Edit successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pro_group = ProductGroup::where('id_group', $id)->get();
        if(count($pro_group) > 0)
        {
            return redirect()->back()->with('fail', 'Can not delete this group!');
        }
        else{
            Group::destroy($id);
            
            return redirect()->back()->with('success', 'Delete successful!');
        }
    }
}
