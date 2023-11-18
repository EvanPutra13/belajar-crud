<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;


class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswas = Siswa::all();
        // return view('siswa.index',compact('siswa'));
        return response()->json($siswas);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.crate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate ([
            'nis'=> 'required|unique:siswa,nis',
            'nama' =>'required',
            'kelas' =>'required',
            'id_jurusan'=>'required',
            'jk' =>'required',


        ]);
        $siswa = Siswa::create($request->all());
        // return redirect() -> route('siswa.index')->with('success','siswa berhasil ditambahkan');
        return response()->json($siswa);
    }
    /**
     * Display the specified resource.
     */
    public function show(Siswa $id)
    {
        
        $siswa = Siswa::findOrfail($id);
        // return view('siswa.show',compact('siswa'));
        return response()->json($siswa);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(siswa $siswa)
    {
        return view('siswa.edit',compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nama_siswa' => 'required',
            'kelas' => 'required',
            'jk' => 'required',
            'angkatan' => 'required|numeric',
        ]);
        $siswa->update($request->all());
        // return redirect()->route('siswa.index')->with('success', 'Siswa updated successfully');
        return response()->json($siswa);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $id)
    {
        $siswa = Siswa::destroy($id);
        // return redirect()->route('siswa.index')->with('success', 'Siswa deleted successfully');
        return response()->json($siswa);
    }
}
