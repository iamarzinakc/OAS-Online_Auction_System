<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Type;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brand = Brand::all();
        return view('admin.pages.product.brand.index', compact('brand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type = Type::whereStatus('on')->get();
        return view('admin.pages.product.brand.create', compact('type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brand = new Brand();
        $brand->type_id = $request->get('type_id');
        $brand->name = $request->get('name');
        $brand->status = $request->get('status');
        $brand->save();
        
        return redirect()->route('brand.index')->with([
            'icon' => 'success',
            'message' => 'Sucessfully Saved'
        ]);
           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = Brand::find($id);
        $type = Type::whereStatus('on')->get();
        return view('admin.pages.product.brand.edit', compact('type', 'brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $brand->type_id = $request->get('type_id');
        $brand->name = $request->get('name');
        $brand->save();

        return redirect()->route('brand.index')
        ->with([
            'icon' => 'success',
            'message' => 'Sucessfully updated'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect()->route('brand.index')
            ->with('success', 'Brand created successfully.');
    }
       // ========================= Status Update Controller =================

       public function onStatus(Request $request, $id)
       {
           $status = Brand::find($id);
           $status-> status = 'on';
           $status->save();
           return redirect()->route('brand.index')
               ->with('success','Status Active successfully.');
       }
   
       public function offStatus(Request $request, $id)
       {
           $status = Brand::find($id);
           $status-> status = 'off';
           $status->save();
           return redirect()->route('brand.index')
               ->with('success','Status DeActive successfully.');
       }
}
