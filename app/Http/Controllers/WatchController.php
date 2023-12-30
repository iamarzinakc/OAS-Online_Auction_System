<?php

namespace App\Http\Controllers;

use App\Models\Watch;
use App\Models\Type;
use App\Models\Brand;
use App\Models\Model_no;
use Illuminate\Http\Request;

class WatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $watch = Watch::all();
        return view('admin.pages.watch.index', compact('watch'));
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
        $model_no = Model_no::whereStatus('on')->get();
        return view('admin.pages.watch.create', compact('type', 'model_no', 'brand'));
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
            'model_no' => ['required'],
            'front_image' => ['required'],
            'left_image' => ['required'],
            'right_image' => ['required'],
            'back_image' => ['required'],
            'name' => ['required'],
            'condition' => ['required'],
            'bettry_life' => ['required'],
            'color' => ['required'],
            'warranty' => ['required'],
            'adjusted_bracelet' => ['required'],
            'inlet_size' => ['required'],
            'case_thickness' => ['required'],
            'price' => ['required'],
            'description' => ['required'],
            'time' => ['required'],
        ]);

        $watch = new Watch();


        $watch->type_id = $request->get('type_id');
        $watch->brand_id = $request->get('brand_id');
        $watch->model_no = $request->get('model_no');
        $watch->name = $request->get('name');
        $watch->condition = $request->get('condition');
        $watch->bettry_life = $request->get('bettry_life');
        $watch->color = $request->get('color');
        $watch->warranty = $request->get('warranty');
        $watch->adjusted_bracelet = $request->get('adjusted_bracelet');
        $watch->inlet_size = $request->get('inlet_size');
        $watch->case_thickness = $request->get('case_thickness');
        $watch->price = $request->get('price');
        $watch->description = $request->get('description');
        $watch->time = $request->get('time');
        $watch->status = $request->get('status');


        if ($request->hasFile('front_image')) {
            $image = time() . '.' . $request->file('front_image')->getClientOriginalExtension();
            move_uploaded_file($request->front_image, 'public/image/watch/' . $image);
            $watch->front_image = $image;
        }

        if ($request->hasFile('back_image')) {
            $image = time() . '.' . $request->file('back_image')->getClientOriginalExtension();
            move_uploaded_file($request->back_image, 'public/image/watch/' . $image);
            $watch->back_image = $image;
        }

        if ($request->hasFile('left_image')) {
            $image = time() . '.' . $request->file('left_image')->getClientOriginalExtension();
            move_uploaded_file($request->left_image, 'public/image/watch/' . $image);
            $watch->left_image = $image;
        }

        if ($request->hasFile('right_image')) {
            $image = time() . '.' . $request->file('right_image')->getClientOriginalExtension();
            move_uploaded_file($request->right_image, 'public/image/watch/' . $image);
            $watch->right_image = $image;
        }

        $watch->save();
        return redirect()->route('watch.index')
            ->with('success', 'Watch created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Watch  $watch
     * @return \Illuminate\Http\Response
     */
    public function show(Watch $watch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Watch  $watch
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $watch = Watch::find($id);
        $type = Type::whereStatus('on')->get();
        $brand = Brand::whereStatus('on')->get();
        $model_no = Model_no::whereStatus('on')->get();
        return view('admin.pages.watch.edit', compact('type', 'model_no', 'brand', 'watch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Watch  $watch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Watch $watch)
    {
        $validate = $request->validate([
            'type_id' => ['required'],
            'brand_id' => ['required'],
            'model_no' => ['required'],
            'name' => ['required'],
            'condition' => ['required'],
            'bettry_life' => ['required'],
            'color' => ['required'],
            'warranty' => ['required'],
            'adjusted_bracelet' => ['required'],
            'inlet_size' => ['required'],
            'case_thickness' => ['required'],
            'price' => ['required'],
            'description' => ['required'],
            'time' => ['required'],
        ]);


        $watch->type_id = $request->get('type_id');
        $watch->brand_id = $request->get('brand_id');
        $watch->model_no = $request->get('model_no');
        $watch->name = $request->get('name');
        $watch->condition = $request->get('condition');
        $watch->bettry_life = $request->get('bettry_life');
        $watch->color = $request->get('color');
        $watch->warranty = $request->get('warranty');
        $watch->adjusted_bracelet = $request->get('adjusted_bracelet');
        $watch->inlet_size = $request->get('inlet_size');
        $watch->case_thickness = $request->get('case_thickness');
        $watch->price = $request->get('price');
        $watch->description = $request->get('description');
        $watch->time = $request->get('time');
        
        if ($request->hasFile('front_image')) {
            $imageName = time() . '.' . $request->file('front_image')->getClientOriginalExtension();
            if ($watch->front_image != "") {
                if (file_exists('public/image/watch/' . $watch->front_image)) {
                    unlink('public/image/watch/' . $watch->front_image);
                }
            }
            move_uploaded_file($request->front_image, 'public/image/watch/' . $imageName);

            $watch->front_image = $imageName;
        }

        if ($request->hasFile('back_image')) {
            $imageName = time() . '.' . $request->file('back_image')->getClientOriginalExtension();
            if ($watch->back_image != "") {
                if (file_exists('public/image/watch/' . $watch->back_image)) {
                    unlink('public/image/watch/' . $watch->back_image);
                }
            }
            move_uploaded_file($request->back_image, 'public/image/watch/' . $imageName);

            $watch->back_image = $imageName;
        }

        if ($request->hasFile('left_image')) {
            $imageName = time() . '.' . $request->file('left_image')->getClientOriginalExtension();
            if ($watch->left_image != "") {
                if (file_exists('public/image/watch/' . $watch->left_image)) {
                    unlink('public/image/watch/' . $watch->left_image);
                }
            }
            move_uploaded_file($request->left_image, 'public/image/watch/' . $imageName);

            $watch->left_image = $imageName;
        }

        if ($request->hasFile('right_image')) {
            $imageName = time() . '.' . $request->file('right_image')->getClientOriginalExtension();
            if ($watch->right_image != "") {
                if (file_exists('public/image/watch/' . $watch->right_image)) {
                    unlink('public/image/watch/' . $watch->right_image);
                }
            }
            move_uploaded_file($request->right_image, 'public/image/watch/' . $imageName);

            $watch->right_image = $imageName;
        }

        $watch->save();
        return redirect()->route('watch.index')
            ->with('success', 'Watch Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Watch  $watch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Watch $watch)
    {
        $watch->delete();
        return redirect()->route('watch.index')
            ->with('success', 'Watch Deleted successfully.');
    }


    // ========================= Status Update Controller =================

    public function onStatus(Request $request, $id)
    {
        $status = Watch::find($id);
        $status->status = 'on';
        $status->save();
        return redirect()->route('watch.index')
            ->with('success', 'Status Active successfully.');
    }

    public function offStatus(Request $request, $id)
    {
        $status = Watch::find($id);
        $status->status = 'off';
        $status->save();
        return redirect()->route('watch.index')
            ->with('success', 'Status DeActive successfully.');
    }
}
