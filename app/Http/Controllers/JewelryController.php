<?php

namespace App\Http\Controllers;

use App\Models\Jewelry;
use App\Models\Type;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class JewelryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jewelry = Jewelry::all();
        return view('admin.pages.jewelry.index', compact('jewelry'));
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
        return view('admin.pages.jewelry.create', compact('type', 'category', 'brand'));
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
            'name' => ['required'],
            'type_name' => ['required'],
            'quantity' => ['required'],
            'quality' => ['required'],
            'price' => ['required'],
            'description' => ['required'],
            'time' => ['required'],
        ]);
        $jewelry = new Jewelry();

        $jewelry->type_id = $request->get('type_id');
        $jewelry->category_id = $request->get('category_id');
        $jewelry->brand_id = $request->get('brand_id');
        $jewelry->name = $request->get('name');
        $jewelry->type_name = $request->get('type_name');
        $jewelry->quantity = $request->get('quantity');
        $jewelry->quality = $request->get('quality');
        $jewelry->description = $request->get('description');
        $jewelry->price = $request->get('price');
        $jewelry->time = $request->get('time');
        $jewelry->status = $request->get('status');

        if ($request->hasFile('front_image')) {
            $image = time() . '.' . $request->file('front_image')->getClientOriginalExtension();
            move_uploaded_file($request->front_image, 'public/image/jewelry/' . $image);
            $jewelry->front_image = $image;
        }

        if ($request->hasFile('back_image')) {
            $image1 = time() . '.' . $request->file('back_image')->getClientOriginalExtension();
            move_uploaded_file($request->back_image, 'public/image/jewelry/' . $image1);
            $jewelry->back_image = $image1;
        }

        if ($request->hasFile('left_image')) {
            $image2 = time() . '.' . $request->file('left_image')->getClientOriginalExtension();
            move_uploaded_file($request->left_image, 'public/image/jewelry/' . $image2);
            $jewelry->left_image = $image2;
        }

        if ($request->hasFile('right_image')) {
            $image3 = time() . '.' . $request->file('right_image')->getClientOriginalExtension();
            move_uploaded_file($request->right_image, 'public/image/jewelry/' . $image3);
            $jewelry->right_image = $image3;
        }

        $jewelry->save();
        return redirect()->route('jewelry.index')
            ->with('success', 'Jewelry created successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jewelry  $jewelry
     * @return \Illuminate\Http\Response
     */
    public function show(Jewelry $jewelry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jewelry  $jewelry
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jewellry = Jewelry::find($id);
        $type = Type::whereStatus('on')->get();
        $brand = Brand::whereStatus('on')->get();
        $category = Category::whereStatus('on')->get();
        return view('admin.pages.jewelry.edit', compact('type', 'category', 'brand', 'jewellry'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jewelry  $jewelry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jewelry $jewelry)
    {
        $validate = $request->validate([
            'type_id' => ['required'],
            'brand_id' => ['required'],
            'category_id' => ['required'],
            'name' => ['required'],
            'type_name' => ['required'],
            'quantity' => ['required'],
            'quality' => ['required'],
            'price' => ['required'],
            'description' => ['required'],
            'time' => ['required'],
        ]);

        $jewelry->type_id = $request->get('type_id');
        $jewelry->category_id = $request->get('category_id');
        $jewelry->brand_id = $request->get('brand_id');
        $jewelry->name = $request->get('name');
        $jewelry->type_name = $request->get('type_name');
        $jewelry->quantity = $request->get('quantity');
        $jewelry->quality = $request->get('quality');
        $jewelry->description = $request->get('description');
        $jewelry->price = $request->get('price');
        $jewelry->time = $request->get('time');

        if ($request->hasFile('front_image')) {
            $imageName = time() . '.' . $request->file('front_image')->getClientOriginalExtension();
            if ($jewelry->front_image != "") {
                if (file_exists('public/image/jewelry/' . $jewelry->front_image)) {
                    unlink('public/image/jewelry/' . $jewelry->front_image);
                }
            }
            move_uploaded_file($request->front_image, 'public/image/jewelry/' . $imageName);

            $jewelry->front_image = $imageName;
        }

        if ($request->hasFile('back_image')) {
            $imageName = time() . '.' . $request->file('back_image')->getClientOriginalExtension();
            if ($jewelry->back_image != "") {
                if (file_exists('public/image/jewelry/' . $jewelry->back_image)) {
                    unlink('public/image/jewelry/' . $jewelry->back_image);
                }
            }
            move_uploaded_file($request->back_image, 'public/image/jewelry/' . $imageName);

            $jewelry->back_image = $imageName;
        }

        if ($request->hasFile('left_image')) {
            $imageName = time() . '.' . $request->file('left_image')->getClientOriginalExtension();
            if ($jewelry->left_image != "") {
                if (file_exists('public/image/jewelry/' . $jewelry->left_image)) {
                    unlink('public/image/jewelry/' . $jewelry->left_image);
                }
            }
            move_uploaded_file($request->left_image, 'public/image/jewelry/' . $imageName);

            $jewelry->left_image = $imageName;
        }

        if ($request->hasFile('right_image')) {
            $imageName = time() . '.' . $request->file('right_image')->getClientOriginalExtension();
            if ($jewelry->right_image != "") {
                if (file_exists('public/image/jewelry/' . $jewelry->right_image)) {
                    unlink('public/image/jewelry/' . $jewelry->right_image);
                }
            }
            move_uploaded_file($request->right_image, 'public/image/jewelry/' . $imageName);

            $jewelry->right_image = $imageName;
        }

        $jewelry->save();
        return redirect()->route('jewelry.index')
            ->with('success', 'Jewelry Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jewelry  $jewelry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jewelry $jewelry)
    {
        $jewelry->delete();
        return redirect()->route('jewelry.index')
            ->with('success', 'Jewelry Deleted successfully.');
    }


    // ========================= Status Update Controller =================

    public function onStatus(Request $request, $id)
    {
        $status = Jewelry::find($id);
        $status->status = 'on';
        $status->save();
        return redirect()->route('jewelry.index')
            ->with('success', 'Status Active successfully.');
    }

    public function offStatus(Request $request, $id)
    {
        $status = Jewelry::find($id);
        $status->status = 'off';
        $status->save();
        return redirect()->route('jewelry.index')
            ->with('success', 'Status DeActive successfully.');
    }
}
