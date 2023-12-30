<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Type;
use App\Models\brand;
use App\Models\category;
use App\Models\Feature;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        $feature = Feature::whereStatus('on')->get();
        $brand = Brand::whereStatus('on')->get();
        $type = Type::whereStatus('on')->get();
        $category = Category::whereStatus('on')->get();
        return view('admin.pages.product.products.index', compact('type', 'feature', 'brand', 'category',  'product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $feature = Feature::all();
        $brand = Brand::whereStatus('on')->get();
        $category = Category::whereStatus('on')->get();
        $type = Type::whereStatus('on')->get();
        return view('admin.pages.product.products.create', compact('type', 'feature', 'brand', 'category'));
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
            'feature_id' => ['required'],
            'model_no' => ['required'],
            'buy_year' => ['required'],
            'price' => ['required'],
            'description' => ['required'],
            'time' => ['required'],
        ]);

        $product = new Product();

        if ($request->hasFile('front_image')) {
            $image = time() . '.' . $request->file('front_image')->getClientOriginalExtension();
            move_uploaded_file($request->front_image, 'public/image/product/' . $image);
            $product->front_image = $image;
        }

        if ($request->hasFile('back_image')) {
            $image1 = time() . '.' . $request->file('back_image')->getClientOriginalExtension();
            move_uploaded_file($request->back_image, 'public/image/product/' . $image1);
            $product->back_image = $image1;
        }

        if ($request->hasFile('left_image')) {
            $image2 = time() . '.' . $request->file('left_image')->getClientOriginalExtension();
            move_uploaded_file($request->left_image, 'public/image/product/' . $image2);
            $product->left_image = $image2;
        }

        if ($request->hasFile('right_image')) {
            $image3 = time() . '.' . $request->file('right_image')->getClientOriginalExtension();
            move_uploaded_file($request->right_image, 'public/image/product/' . $image3);
            $product->right_image = $image3;
        }
        $product->type_id = $request->get('type_id');
        $product->brand_id = $request->get('brand_id');
        $product->feature_id = $request->get('feature_id');
        $product->category_id = $request->get('category_id');
        $product->name = $request->get('name');
        $product->color = $request->get('color');
        $product->condition = $request->get('condition');
        $product->model_no = $request->get('model_no');
        $product->buy_year = $request->get('buy_year');
        $product->description = $request->get('description');
        $product->time = $request->get('time');
        $product->price = $request->get('price');
        $product->status = $request->get('status');
        $product->save();
        return redirect()->route('product.index')
        ->with([
            'icon' => 'success',
            'message' => 'Sucessfully Added'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $user = User::whereStatus('on')->get();
        $feature = Feature::whereStatus('on')->get();
        $brand = Brand::whereStatus('on')->get();
        $category = Category::whereStatus('on')->get();
        $type = Type::whereStatus('on')->get();
        return view('admin.pages.product.products.edit', compact( 'feature', 'type', 'user', 'brand', 'category', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        if ($request->hasFile('front_image')) {
            $imageName = time() . '.' . $request->file('front_image')->getClientOriginalExtension();
            if ($product->front_image != "") {
                if (file_exists('public/image/product/' . $product->front_image)) {
                    unlink('public/image/product/' . $product->front_image);
                }
            }
            move_uploaded_file($request->front_image, 'public/image/product/' . $imageName);

            $product->front_image = $imageName;
        }

        if ($request->hasFile('back_image')) {
            $imageName = time() . '.' . $request->file('back_image')->getClientOriginalExtension();
            if ($product->back_image != "") {
                if (file_exists('public/image/product/' . $product->back_image)) {
                    unlink('public/image/product/' . $product->back_image);
                }
            }
            move_uploaded_file($request->back_image, 'public/image/product/' . $imageName);

            $product->back_image = $imageName;
        }

        if ($request->hasFile('left_image')) {
            $imageName = time() . '.' . $request->file('left_image')->getClientOriginalExtension();
            if ($product->left_image != "") {
                if (file_exists('public/image/product/' . $product->left_image)) {
                    unlink('public/image/product/' . $product->left_image);
                }
            }
            move_uploaded_file($request->left_image, 'public/image/product/' . $imageName);

            $product->left_image = $imageName;
        }

        if ($request->hasFile('right_image')) {
            $imageName = time() . '.' . $request->file('right_image')->getClientOriginalExtension();
            if ($product->right_image != "") {
                if (file_exists('public/image/product/' . $product->right_image)) {
                    unlink('public/image/product/' . $product->right_image);
                }
            }
            move_uploaded_file($request->right_image, 'public/image/product/' . $imageName);

            $product->right_image = $imageName;
        }

        $product->type_id = $request->get('type_id');
        $product->brand_id = $request->get('brand_id');
        $product->feature_id = $request->get('feature_id');
        $product->category_id = $request->get('category_id');
        $product->name = $request->get('name');
        $product->color = $request->get('color');
        $product->condition = $request->get('condition');
        $product->model_no = $request->get('model_no');
        $product->buy_year = $request->get('buy_year');
        $product->description = $request->get('description');
        $product->time = $request->get('time');
        $product->price = $request->get('price');
        $product->save();
        return redirect()->route('product.index')
        ->with([
            'icon' => 'success',
            'message' => 'Sucessfully updated'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('product.index')
            ->with('success', 'Product deleted successfully');
    }
    // ========================= Status Update Controller =================

    public function onStatus(Request $request, $id)
    {
        $status = Product::find($id);
        $status->status = 'on';
        $status->save();
        return redirect()->route('product.index')
            ->with('success', 'Status Active successfully.');
    }

    public function offStatus(Request $request, $id)
    {
        $status = Product::find($id);
        $status->status = 'off';
        $status->save();
        return redirect()->route('product.index')
            ->with('success', 'Status DeActive successfully.');
    }
}
