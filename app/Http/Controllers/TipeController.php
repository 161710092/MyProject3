<?php

namespace App\Http\Controllers;

use App\Tipe;
use Illuminate\Http\Request;

class TipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipes = tipe::all();
        return view('tipe.index', compact('tipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|max:255'
        ]);

        $tipes = new tipe;
        $tipes->name = $request->name;
        $tipes->save();
        return redirect()->route('tipe.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipes = tipe::findOrFail($id);
        return view('tipe.show', compact('tipes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipes = tipe::findOrFail($id);
        return view('tipe.edit', compact('tipes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'=>'required|max:255'
        ]);

        $tipes = tipe::findOrFail($id);
        $tipes->name = $request->name;
        
        $tipes->save();
        return redirect()->route('tipe.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipes = tipe::findOrFail($id);
        $tipes->delete();
        return redirect()->route('tipe.index');
    }
}
