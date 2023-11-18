<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::all();
        return view('barang.index',compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.crate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate ([
            'Kode_barang'=> 'required|unique:Nama_barang,Nama_barang',
            'Nama_barang' =>'required',
            'Harga' =>'required',
            'jumlah'=>'required',
            'merek' =>'required',


        ]);
        barang::create($request->all());
        return redirect() -> route('barang.index')->with('success','barang berhasil ditambahkan');
    }
    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        return view('barang.show',compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        return view('barang.edit',compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $Barang)
    {
        $request->validate([
            'nama_barang' => 'required',
            'kode_barang' => 'required',
            'harga' => 'required|numeric',
            'merek' => 'required',
            'jumlah' => 'required|numeric',
        ]);
        $siswa->update($request->all());

return redirect()->route('barang.index')
->with('success', 'Siswa updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $id)
    {
        $barang->delete();
        return redirect()->route('barang.index')
->with('success', 'Siswa deleted successfully');
    }
}
