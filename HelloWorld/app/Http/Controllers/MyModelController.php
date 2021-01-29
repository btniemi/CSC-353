<?php

namespace App\Http\Controllers;

use App\Models\MyModel;
use Illuminate\Http\Request;

class MyModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "my model index page";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "this is create method";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MyModel  $myModel
     * @return \Illuminate\Http\Response
     */
    public function show(MyModel $myModel)
    {
        return "this is the show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MyModel  $myModel
     * @return \Illuminate\Http\Response
     */
    public function edit(MyModel $myModel)
    {
        return "this is edit";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MyModel  $myModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MyModel $myModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MyModel  $myModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(MyModel $myModel)
    {
        //
    }
}
