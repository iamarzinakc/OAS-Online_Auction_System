<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Product;
use App\Models\Bid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function dashboard()
    {
        $user = User::all();
        $product = Product::all();
        return view('client.profile.dashboard', compact('user', 'product'));
    }
    public function profile()
    {
        $user = User::all();
        return view('client.profile.profile', compact('user'));
    }

    public function mybid()
    {        
        $user = Auth::user()->id;
        $bids= Bid::whereUserId($user)->distinct('product_id')->groupby('product_id')->get();
        return view('client.profile.my-bid', compact('bids'));
    }


    public function winbid()
    {
        $user = Auth::user()->id;
        $bids= Bid::whereUserId($user)->orderBy('price', 'DESC')->take(1)->get();
        return view('client.profile.win-bid', compact('bids'));
    }
}
