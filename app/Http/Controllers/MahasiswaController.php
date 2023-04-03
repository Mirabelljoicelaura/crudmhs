<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mahasiswa.index')->with([
            'mahasiswa' => Mahasiswa::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim' =>'required',
            'nama' => 'required',
            'jurusan' => 'required',
        ]);
        $mahasiswa = new Mahasiswa;
        $mahasiswa-> nim = $request->nim;
        $mahasiswa-> nama = $request->nama;
        $mahasiswa-> jurusan = $request->jurusan;
        $mahasiswa-> save();

        return to_route('mahasiswa.index')->with('success','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('mahasiswa.edit')->with([
            'mahasiswa'=>Mahasiswa::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nim' =>'required',
            'nama' => 'required',
            'jurusan' => 'required',
        ]);
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa-> nim = $request->nim;
        $mahasiswa-> nama = $request->nama;
        $mahasiswa-> jurusan = $request->jurusan;
        $mahasiswa-> save();

        return to_route('mahasiswa.index')->with('success','Data berhasil diupdate');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();

        return back()->with('success','Data berhasil dihapus');

    }
}
