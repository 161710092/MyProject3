<?php

namespace App\Http\Controllers;

use App\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobils = mobil::all();
        return view('mobil.index', compact('mobils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mobil.create');
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
            'gambar'=>'required|max:255',
            'name'=>'required|max:255',
            'warna'=>'required|max:255',
            'transmisi'=>'required|max:255',
            'tahun_keluar'=>'required|max:255',
            'harga'=>'required|max:255'
        ]);

        $mobils = new mobil;
        $mobils->gambar = $request->gambar;
        $mobils->name = $request->name;
        $mobils->warna = $request->warna;
        $mobils->transmisi = $request->transmisi;
        $mobils->tahun_keluar = $request->tahun_keluar;
        $mobils->harga = $request->harga;
        $mobils->save();
        return redirect()->route('mobil.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mobils = mobil::findOrFail($id);
        return view('mobil.show', compact('mobils'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mobils = mobil::findOrFail($id);
        return view('mobil.edit', compact('mobils'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'gambar'=>'required|max:255',
            'name'=>'required|max:255',
            'warna'=>'required|max:255',
            'transmisi'=>'required|max:255',
            'tahun_keluar'=>'required|max:255',
            'harga'=>'required|max:255'
        ]);

        $mobils = mobil::findOrFail($id);
        $mobils->gambar = $request->gambar;
        $mobils->name = $request->name;
        $mobils->warna = $request->warna;
        $mobils->transmisi = $request->transmisi;
        $mobils->tahun_keluar = $request->tahun_keluar;
        $mobils->harga = $request->harga;
        
        $mobils->save();
        return redirect()->route('mobil.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mobils = mobil::findOrFail($id);
        $mobils->delete();
        return redirect()->route('mobil.index');
    }
}
