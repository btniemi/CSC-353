<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BuildList;

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
        return redirect();
    }

    /**
     * Display the specified resource.
     *
     * @param BuildList $buildList
     * @return \Illuminate\Http\Response
     */
    public function show(BuildList $buildList)
    {
        return view('build_list.show', compact('buildList'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param BuildList $buildList
     * @return \Illuminate\Http\Response
     */
    public function edit(BuildList $buildList)
    {
        return view('build_list.edit', compact('buildList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param BuildList $buildList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BuildList $buildList)
    {
        $buildList->update($request->all());
        return redirect('/buildList/'.$buildList->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param BuildList $buildList
     * @return \Illuminate\Http\Response
     */
    public function destroy(BuildList $buildList)
    {
        $buildList->delete();
        return redirect('/buildList/');
    }
}
