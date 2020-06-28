<?php

namespace App\Http\Controllers;

use App\Pendidikan;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendidikans = Pendidikan::all();
        return view('content.pendidikan.index', compact('pendidikans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.pendidikan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_pendidikan' => 'required|unique:pendidikans'
        ]);
        Pendidikan::create($validatedData);
        return redirect()->route('pendidikans.index')->with('pesan', "Bagian $request->nama_pendidikan Berhasil ditambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pendidikan  $pendidikan
     * @return \Illuminate\Http\Response
     */
    public function show(Pendidikan $pendidikan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pendidikan  $pendidikan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pendidikan $pendidikan)
    {
        return view('content.pendidikan.edit', compact('pendidikan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pendidikan  $pendidikan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pendidikan $pendidikan)
    {
        $validatedData = $request->validate([
            'nama_pendidikan' => 'required|unique:pendidikans,nama_pendidikan'
        ]);
        
        $pendidikan->update($validatedData);
        return redirect()->route('pendidikans.index')->with('pesan',"Pendidikan $pendidikan->nama_pendidikan berhasil diubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pendidikan  $pendidikan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pendidikan $pendidikan)
    {
        $pendidikan->delete();
        return redirect()->route('pendidikans.index')->with('pesan', "Pendidikan $pendidikan->nama_pendidikan berhasil dihapus");
    }
}
