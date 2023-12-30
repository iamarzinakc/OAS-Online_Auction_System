<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Type;
use App\Models\Bid;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Jewelry;
use App\Models\Vehicle;
use App\Models\Electrical;
use App\Models\Watch;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class UserViewController extends Controller
{
    public function dashboard()
    {
        $product =  DB::table('products')->paginate(10);
        foreach ($product as $key => $products) {
            if (count(Bid::where('product_id', $products->id)->get())) {
                $products->bid = Bid::where('product_id', $products->id)->orderBy('id', 'DESC')->first('price')->price;
            } else {
                $products->bid = $products->price;
            }
        }
        $type = Type::all();
        $brand = Brand::all();
        $category = Category::all();
        return view('client.dashboard', compact('product', 'category', 'type', 'brand'));
    }


    public function blog()
    {
        return view('client.pages.blog');
    }
    public function about()
    {
        return view('client.pages.about');
    }
    public function product()
    {

        $products = DB::table('products')->paginate(10);
        foreach ($products as $key => $product) {
            if (count(Bid::where('product_id', $product->id)->get())) {
                $product->bid = Bid::where('product_id', $product->id)->orderBy('id', 'DESC')->first('price')->price;
            } else {
                $product->bid = $product->price;
            }
        }
        return view('client.pages.products', compact('products'));
    }

    public function productdetail($id)
    {
        $bid = Bid::first();
        $product = Product::find($id);
        $user = User::all();
        return view('client.pages.product_detail', compact('product', 'user', 'bid'));
    }
}
