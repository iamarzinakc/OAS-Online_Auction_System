<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Type;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        return view('admin.pages.product.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brand = Brand::whereStatus('on')->get();
        $type = Type::whereStatus('on')->get();
        return view('admin.pages.product.category.create', compact('type','brand'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category();
        $category->type_id = $request->get('type_id');
        $category->brand_id = $request->get('brand_id');
        $category->name = $request->get('name');
        $category->status = $request->get('status');
        $category->save();

        return redirect()->route('category.index')
        ->with([
            'icon' => 'success',
            'message' => 'Sucessfully Added'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        $type = Type::whereStatus('on')->get();
        $brand = Brand::whereStatus('on')->get();
        return view('admin.pages.product.category.edit', compact('type', 'category','brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category->type_id = $request->get('type_id');
        $category->brand_id = $request->get('brand_id');
        $category->name = $request->get('name');
        $category->save();

        return redirect()->route('category.index')
        ->with([
            'icon' => 'success',
            'message' => 'Sucessfully updated'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index')
        ->with([
            'icon' => 'error',
            'message' => 'Sucessfully Deleted'
        ]);
    }

     // ========================= Status Update Controller =================

     public function onStatus(Request $request, $id)
     {
         $status = Category::find($id);
         $status-> status = 'on';
         $status->save();
         return redirect()->route('category.index')
             ->with('success','Status Active successfully.');
     }
 
     public function offStatus(Request $request, $id)
     {
         $status = Category::find($id);
         $status-> status = 'off';
         $status->save();
         return redirect()->route('category.index')
             ->with('success','Status DeActive successfully.');
     }
}
