<?php

namespace App\Http\Controllers;

use App\Models\Electrical;
use App\Models\Type;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Model_no;
use Illuminate\Http\Request;

class ElectricalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $electrical = Electrical::all();
        return view('admin.pages.electrical.index', compact('electrical'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type = Type::whereStatus('on')->get();
        $brand = Brand::whereStatus('on')->get();
        $category = Category::whereStatus('on')->get();
        $model_no = Model_no::whereStatus('on')->get();
        return view('admin.pages.electrical.create', compact('type', 'category', 'brand', 'model_no'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'type_id' => ['required'],
            'brand_id' => ['required'],
            'category_id' => ['required'],
            'front_image' => ['required'],
            'left_image' => ['required'],
            'right_image' => ['required'],
            'back_image' => ['required'],
            'name' => ['required'],
            'model_no' => ['required'],
            'warranty' => ['required'],
            'size' => ['required'],
            'price' => ['required'],
            'description' => ['required'],
            'time' => ['required'],
        ]);

        $electrical = new Electrical();
        $electrical->type_id = $request->get('type_id');
        $electrical->brand_id = $request->get('brand_id');
        $electrical->category_id = $request->get('category_id');
        $electrical->model_no = $request->get('model_no');
        $electrical->name = $request->get('name');
        $electrical->warranty = $request->get('warranty');
        $electrical->size = $request->get('size');
        $electrical->price = $request->get('price');
        $electrical->description = $request->get('description');
        $electrical->time = $request->get('time');
        $electrical->status = $request->get('status');

        if ($request->hasFile('front_image')) {
            $image = time() . '.' . $request->file('front_image')->getClientOriginalExtension();
            move_uploaded_file($request->front_image, 'public/image/electrical/' . $image);
            $electrical->front_image = $image;
        }

        if ($request->hasFile('back_image')) {
            $image = time() . '.' . $request->file('back_image')->getClientOriginalExtension();
            move_uploaded_file($request->back_image, 'public/image/electrical/' . $image);
            $electrical->back_image = $image;
        }

        if ($request->hasFile('left_image')) {
            $image = time() . '.' . $request->file('left_image')->getClientOriginalExtension();
            move_uploaded_file($request->left_image, 'public/image/electrical/' . $image);
            $electrical->left_image = $image;
        }

        if ($request->hasFile('right_image')) {
            $image = time() . '.' . $request->file('right_image')->getClientOriginalExtension();
            move_uploaded_file($request->right_image, 'public/image/electrical/' . $image);
            $electrical->right_image = $image;
        }

        $electrical->save();
        return redirect()->route('electrical.index')
            ->with('success', 'Electrical created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Electrical  $electrical
     * @return \Illuminate\Http\Response
     */
    public function show(Electrical $electrical)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Electrical  $electrical
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $electrical = Electrical::find($id);
        $type = Type::whereStatus('on')->get();
        $brand = Brand::whereStatus('on')->get();
        $category = Category::whereStatus('on')->get();
        return view('admin.pages.electrical.edit', compact('type', 'category', 'brand', 'electrical'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Electrical  $electrical
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Electrical $electrical)
    {
        $validate = $request->validate([
            'type_id' => ['required'],
            'brand_id' => ['required'],
            'category_id' => ['required'],
            'name' => ['required'],
            'model_no' => ['required'],
            'warranty' => ['required'],
            'size' => ['required'],
            'price' => ['required'],
            'description' => ['required'],
            'time' => ['required'],
        ]);

        $electrical->type_id = $request->get('type_id');
        $electrical->brand_id = $request->get('brand_id');
        $electrical->category_id = $request->get('category_id');
        $electrical->model_no= $request->get('model_no');
        $electrical->name = $request->get('name');
        $electrical->warranty = $request->get('warranty');
        $electrical->size = $request->get('size');
        $electrical->price = $request->get('price');
        $electrical->description = $request->get('description');
        $electrical->time = $request->get('time');


        if ($request->hasFile('front_image')) {
            $imageName = time() . '.' . $request->file('front_image')->getClientOriginalExtension();
            if ($electrical->front_image != "") {
                if (file_exists('public/image/electrical/' . $electrical->front_image)) {
                    unlink('public/image/electrical/' . $electrical->front_image);
                }
            }
            move_uploaded_file($request->front_image, 'public/image/electrical/' . $imageName);

            $electrical->front_image = $imageName;
        }

        if ($request->hasFile('back_image')) {
            $imageName = time() . '.' . $request->file('back_image')->getClientOriginalExtension();
            if ($electrical->back_image != "") {
                if (file_exists('public/image/electrical/' . $electrical->back_image)) {
                    unlink('public/image/electrical/' . $electrical->back_image);
                }
            }
            move_uploaded_file($request->back_image, 'public/image/electrical/' . $imageName);

            $electrical->back_image = $imageName;
        }

        if ($request->hasFile('left_image')) {
            $imageName = time() . '.' . $request->file('left_image')->getClientOriginalExtension();
            if ($electrical->left_image != "") {
                if (file_exists('public/image/electrical/' . $electrical->left_image)) {
                    unlink('public/image/electrical/' . $electrical->left_image);
                }
            }
            move_uploaded_file($request->left_image, 'public/image/electrical/' . $imageName);

            $electrical->left_image = $imageName;
        }

        if ($request->hasFile('right_image')) {
            $imageName = time() . '.' . $request->file('right_image')->getClientOriginalExtension();
            if ($electrical->right_image != "") {
                if (file_exists('public/image/electrical/' . $electrical->right_image)) {
                    unlink('public/image/electrical/' . $electrical->right_image);
                }
            }
            move_uploaded_file($request->right_image, 'public/image/electrical/' . $imageName);

            $electrical->right_image = $imageName;
        }

        $electrical->save();
        return redirect()->route('electrical.index')
            ->with('success', 'Electrical created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Electrical  $electrical
     * @return \Illuminate\Http\Response
     */
    public function destroy(Electrical $electrical)
    {
        $electrical->delete();
        return redirect()->route('electrical.index')
            ->with('success', 'Electrical deleted successfully');
    }

    // ========================= Status Update Controller =================

    public function onStatus(Request $request, $id)
    {
        $status = Electrical::find($id);
        $status->status = 'on';
        $status->save();
        return redirect()->route('electrical.index')
            ->with('success', 'Status Active successfully.');
    }

    public function offStatus(Request $request, $id)
    {
        $status = Electrical::find($id);
        $status->status = 'off';
        $status->save();
        return redirect()->route('electrical.index')
            ->with('success', 'Status DeActive successfully.');
    }
}
