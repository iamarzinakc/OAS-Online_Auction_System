<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        if (Bid::where('product_id', $id)->first()) {
            $previous_lowest_bid = Bid::where('product_id', $id)->orderBy('id', 'DESC')->first('price')->price;
            if ($previous_lowest_bid) {
                if ($previous_lowest_bid >= $request->get('price')) {
                    return redirect()->back()->with([
                        'icon' => 'error',
                        'message' => 'Please Place Higher Bid Then Before'
                    ]);
                }
            }
        }
        $bid = new Bid();
        $bid->user_id = auth()->user()->id;
        $bid->product_id = $id;
        $bid->price = $request->get('price');

        $bid->save();
        return redirect()->back()->with([
            'icon' => 'success',
            'message' => 'Bid Submited Successfully'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function show(Bid $bid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function edit(Bid $bid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bid $bid)
    {
        //
    }
}
