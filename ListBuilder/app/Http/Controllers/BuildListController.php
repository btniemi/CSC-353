<?php

namespace App\Http\Controllers;

use App\Models\BuildList;
use Illuminate\Http\Request;

class BuildListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buildLists = BuildList::all();
        return view('build_list.index', compact('buildLists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('build_list.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        BuildList::create($request->all());
        return redierct();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BuildList  $buildList
     * @return \Illuminate\Http\Response
     */
    public function show(BuildList $buildList)
    {
        return view('build_list.show', compact('buildList'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BuildList  $buildList
     * @return \Illuminate\Http\Response
     */
    public function edit(BuildList $buildList)
    {
        return view('build_list.edit', compact('buildList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BuildList  $buildList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BuildList $buildList)
    {
        $buildList->update($request->all());
        return redirect('/list/'.$buildList->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BuildList  $buildList
     * @return \Illuminate\Http\Response
     */
    public function destroy(BuildList $buildList)
    {
        $buildList->delete();
        return redirect('/list/');
    }
}
