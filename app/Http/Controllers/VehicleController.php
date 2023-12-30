<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\Type;
use App\Models\Brand;
use App\Models\Model_no;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicle = Vehicle::all();
        return view('admin.pages.vehicle.index', compact('vehicle'));
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
        return view('admin.pages.vehicle.create', compact('type', 'model_no', 'brand'));
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
            'buy_year' => ['required'],
            'color' => ['required'],
            'mileage' => ['required'],
            'fuel_type' => ['required'],
            'engine' => ['required'],
            'doors' => ['required'],
            'price' => ['required'],
            'description' => ['required'],
            'time' => ['required'],
        ]);

        $vehicle = new Vehicle();

        $vehicle->type_id = $request->get('type_id');
        $vehicle->brand_id = $request->get('brand_id');
        $vehicle->model_no = $request->get('model_no');
        $vehicle->name = $request->get('name');
        $vehicle->condition = $request->get('condition');
        $vehicle->buy_year = $request->get('buy_year');
        $vehicle->color = $request->get('color');
        $vehicle->mileage = $request->get('mileage');
        $vehicle->fuel_type = $request->get('fuel_type');
        $vehicle->engine = $request->get('engine');
        $vehicle->doors = $request->get('doors');
        $vehicle->price = $request->get('price');
        $vehicle->description = $request->get('description');
        $vehicle->time = $request->get('time');
        $vehicle->status = $request->get('status');


        if ($request->hasFile('front_image')) {
            $image = time() . '.' . $request->file('front_image')->getClientOriginalExtension();
            move_uploaded_file($request->front_image, 'public/image/vehicle/' . $image);
            $vehicle->front_image = $image;
        }

        if ($request->hasFile('back_image')) {
            $image = time() . '.' . $request->file('back_image')->getClientOriginalExtension();
            move_uploaded_file($request->back_image, 'public/image/vehicle/' . $image);
            $vehicle->back_image = $image;
        }

        if ($request->hasFile('left_image')) {
            $image = time() . '.' . $request->file('left_image')->getClientOriginalExtension();
            move_uploaded_file($request->left_image, 'public/image/vehicle/' . $image);
            $vehicle->left_image = $image;
        }

        if ($request->hasFile('right_image')) {
            $image = time() . '.' . $request->file('right_image')->getClientOriginalExtension();
            move_uploaded_file($request->right_image, 'public/image/vehicle/' . $image);
            $vehicle->right_image = $image;
        }

        $vehicle->save();
        return redirect()->route('vehicle.index')
            ->with('success', 'Vehicle created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicle = Vehicle::find($id);
        $type = Type::whereStatus('on')->get();
        $brand = Brand::whereStatus('on')->get();
        $model_no = Model_no::whereStatus('on')->get();
        return view('admin.pages.vehicle.edit', compact('type', 'model_no', 'brand', 'vehicle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        $validate = $request->validate([
            'type_id' => ['required'],
            'brand_id' => ['required'],
            'model_no' => ['required'],
            'name' => ['required'],
            'condition' => ['required'],
            'buy_year' => ['required'],
            'color' => ['required'],
            'mileage' => ['required'],
            'fuel_type' => ['required'],
            'engine' => ['required'],
            'doors' => ['required'],
            'price' => ['required'],
            'description' => ['required'],
            'time' => ['required'],
        ]);

        $vehicle->type_id = $request->get('type_id');
        $vehicle->brand_id = $request->get('brand_id');
        $vehicle->model_no = $request->get('model_no');
        $vehicle->name = $request->get('name');
        $vehicle->condition = $request->get('condition');
        $vehicle->buy_year = $request->get('buy_year');
        $vehicle->color = $request->get('color');
        $vehicle->mileage = $request->get('mileage');
        $vehicle->fuel_type = $request->get('fuel_type');
        $vehicle->engine = $request->get('engine');
        $vehicle->doors = $request->get('doors');
        $vehicle->price = $request->get('price');
        $vehicle->description = $request->get('description');
        $vehicle->time = $request->get('time');

        if ($request->hasFile('front_image')) {
            $imageName = time() . '.' . $request->file('front_image')->getClientOriginalExtension();
            if ($vehicle->front_image != "") {
                if (file_exists('public/image/vehicle/' . $vehicle->front_image)) {
                    unlink('public/image/vehicle/' . $vehicle->front_image);
                }
            }
            move_uploaded_file($request->front_image, 'public/image/vehicle/' . $imageName);

            $vehicle->front_image = $imageName;
        }

        if ($request->hasFile('back_image')) {
            $imageName = time() . '.' . $request->file('back_image')->getClientOriginalExtension();
            if ($vehicle->back_image != "") {
                if (file_exists('public/image/vehicle/' . $vehicle->back_image)) {
                    unlink('public/image/vehicle/' . $vehicle->back_image);
                }
            }
            move_uploaded_file($request->back_image, 'public/image/vehicle/' . $imageName);

            $vehicle->back_image = $imageName;
        }

        if ($request->hasFile('left_image')) {
            $imageName = time() . '.' . $request->file('left_image')->getClientOriginalExtension();
            if ($vehicle->left_image != "") {
                if (file_exists('public/image/vehicle/' . $vehicle->left_image)) {
                    unlink('public/image/vehicle/' . $vehicle->left_image);
                }
            }
            move_uploaded_file($request->left_image, 'public/image/vehicle/' . $imageName);

            $vehicle->left_image = $imageName;
        }

        if ($request->hasFile('right_image')) {
            $imageName = time() . '.' . $request->file('right_image')->getClientOriginalExtension();
            if ($vehicle->right_image != "") {
                if (file_exists('public/image/vehicle/' . $vehicle->right_image)) {
                    unlink('public/image/vehicle/' . $vehicle->right_image);
                }
            }
            move_uploaded_file($request->right_image, 'public/image/vehicle/' . $imageName);

            $vehicle->right_image = $imageName;
        }

        $vehicle->save();
        return redirect()->route('vehicle.index')
            ->with('success', 'Vehicle created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehicle = Vehicle::find($id);
        $vehicle->delete();
        return redirect()->route('vehicle.index')
            ->with('success', 'Vehicle created successfully.');
    }

    // ========================= Status Update Controller =================

    public function onStatus(Request $request, $id)
    {
        $status = Vehicle::find($id);
        $status->status = 'on';
        $status->save();
        return redirect()->route('vehicle.index')
            ->with('success', 'Status Active successfully.');
    }

    public function offStatus(Request $request, $id)
    {
        $status = Vehicle::find($id);
        $status->status = 'off';
        $status->save();
        return redirect()->route('vehicle.index')
            ->with('success', 'Status DeActive successfully.');
    }
}
