<?php

namespace App\Http\Controllers;

use App\Models\NewModel;
use Illuminate\Http\Request;

class NewModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "homework index is cool";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "create homework method";
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
     * @param  \App\Models\NewModel  $newModel
     * @return \Illuminate\Http\Response
     */
    public function show(NewModel $newModel)
    {
        return "show homework method";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewModel  $newModel
     * @return \Illuminate\Http\Response
     */
    public function edit(NewModel $newModel)
    {
        return "this is the edit homework method";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewModel  $newModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewModel $newModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewModel  $newModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewModel $newModel)
    {
        //
    }
}
