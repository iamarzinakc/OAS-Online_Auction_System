<?php

namespace App\Http\Controllers;

use App\Models\Model_no;
use App\Models\Type;
use Illuminate\Http\Request;

class ModelNoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response+
     */
    public function index()
    {
        $model_nos = Model_no::all();
        return view('admin.pages.product.model_no.index', compact('model_nos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type = Type::whereStatus('on')->get();
        return view('admin.pages.product.model_no.create', compact('type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model_no = new Model_no();
        $model_no->type_id = $request->get('type_id');
        $model_no->name = $request->get('name');
        $model_no->status = $request->get('status');
        $model_no->save();

        return redirect()->route('model_no.index')
            ->with('success', 'model_no created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Model_no  $model_no
     * @return \Illuminate\Http\Response
     */
    public function show(Model_no $model_no)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Model_no  $model_no
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model_no = Model_no::find($id);
        $type = Type::whereStatus('on')->get();
        return view('admin.pages.product.model_no.edit', compact('model_no', 'type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Model_no  $model_no
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Model_no $model_no)
    {
        $model_no->type_id = $request->get('type_id');
        $model_no->name = $request->get('name');
        $model_no->save();

        return redirect()->route('model_no.index')
            ->with('success', 'model_no created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Model_no  $model_no
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model_no $model_no)
    {
        $model_no->delete();
        return redirect()->route('model_no.index')
            ->with('success', 'Model_no deleted successfully');
    }
    // ========================= Status Update Controller =================

    public function onStatus(Request $request, $id)
    {
        $status = Model_no::find($id);
        $status->status = 'on';
        $status->save();
        return redirect()->route('model_no.index')
            ->with('success', 'Status Active successfully.');
    }

    public function offStatus(Request $request, $id)
    {
        $status = Model_no::find($id);
        $status->status = 'off';
        $status->save();
        return redirect()->route('model_no.index')
            ->with('success', 'Status DeActive successfully.');
    }
}
