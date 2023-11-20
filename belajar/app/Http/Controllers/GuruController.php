<?php

namespace App\Http\Controllers;

use App\Models\guru;
use Illuminate\Http\Request;


class guruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gurus = guru::all();
        // return view('guru.index',compact('guru'));
        return response()->json($gurus);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guru.crate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate ([
            'nip'=> 'required|unique:guru,nis',
            'nama' =>'required',
            'jk' =>'required',


        ]);
        $guru = guru::create($request->all());
        // return redirect() -> route('guru.index')->with('success','guru berhasil ditambahkan');
        return response()->json($guru);
    }
    /**
     * Display the specified resource.
     */
    public function show(guru $id)
    {
        
        $guru = guru::find($id);
        // return view('guru.show',compact('guru'));
        return response()->json($guru);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(guru $guru)
    {
        return view('guru.edit',compact('guru'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'jk' => 'required',
        ]);
        $guru = guru::find($id);
        $guru->update($request->all());
        // return redirect()->route('guru.index')->with('success', 'guru updated successfully');
        return response()->json($guru);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $guru = guru::destroy($id);
        // return redirect()->route('guru.index')->with('success', 'guru deleted successfully');
        return response()->json($guru);
    }
}
