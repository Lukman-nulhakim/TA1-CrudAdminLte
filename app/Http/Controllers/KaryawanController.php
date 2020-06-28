<?php

namespace App\Http\Controllers;

use App\Karyawan;
use Illuminate\Http\Request;
use App\Jabatan;
use App\Pendidikan;
use App\Status;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawans = Karyawan::all();
        return view('content.karyawan.index', compact('karyawans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatans = Jabatan::all();
        $pendidikans = Pendidikan::all();
        $statuses = Status::all();
        return view('content.karyawan.create', compact('jabatans','pendidikans','statuses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData =  $request->validate([
            'nama'=> 'required|min:3|max:20|unique:karyawans',
            'jenis_kelamin' => 'required',
            'umur' => 'required',
            'no_telepon' => 'required',
            'jabatan_id' => 'required',
            'pendidikan_id' => 'required',
            'status_id' => 'required'
        ]);

        $karyawan = Karyawan::create($validatedData);

        $request->session()->flash('pesan', "Data {$validatedData['nama']} Berhasil Disimpan");
        return redirect()->route('karyawans.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function show(Karyawan $karyawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit(Karyawan $karyawan)
    {
        $jabatans = Jabatan::all();
        $pendidikans = Pendidikan::all();
        $statuses = Status::all();
        return view('content.karyawan.edit', compact('karyawan','jabatans','pendidikans','statuses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Karyawan $karyawan)
    {
        $validatedData =  $request->validate([
            'nama'=> 'required|min:3|max:20|unique:karyawans,nama,'.$karyawan->id,
            'jenis_kelamin' => 'required',
            'umur' => 'required',
            'no_telepon' => 'required',
            'jabatan_id' => 'required',
            'pendidikan_id' => 'required',
            'status_id' => 'required'
        ]);

        $karyawan->update($validatedData);
        $karyawan->save();

        return redirect()->route('karyawans.index',  ['karyawan' => $karyawan->id])->with('pesan', "Update data {$validatedData['nama']} Berhasil");
        // return redirect()->route('Karyawans.show',['Karyawan' => $Karyawan->id])->with('pesan', "Update data {$validatedData['nama']} Berhasil");
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();
        return redirect()->route('karyawans.index')->with('pesan', "Hapus data $karyawan->nama Berhasil");
    }
}
