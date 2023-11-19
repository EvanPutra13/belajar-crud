<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;


class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = barang::all();
        // return view('barang.index',compact('barang'));
        return response()->json($barang);

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
            'Kode_barang'=> 'required|unique:Kode_barang,Nama_barang',
            'Nama_barang' =>'required',
            'Harga' =>'required',
            'jumlah'=>'required',
            'merek' =>'required',


        ]);
        $barang = barang::create($request->all());
        // return redirect() -> route('siswa.index')->with('success','siswa berhasil ditambahkan');
        return response()->json($barang);
    }
    /**
     * Display the specified resource.
     */
    public function show(barang $id)
    {
        
        $barang = barang::find($id);
        // return view('siswa.show',compact('siswa'));
        return response()->json($barang);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(barang $barang)
    {
        return view('barang.edit',compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Kode_barang' => 'required',
            'Nama_barang' => 'required',
            'harga' => 'required',
            'jumlah' => 'required',
            'merek' => 'required',
        ]);
        $barang = barang::find($id);
        $barang->update($request->all());
        // return redirect()->route('$barang.index')->with('success', 'Siswa updated successfully');
        return response()->json($barang);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $barang = barang::destroy($id);
        // return redirect()->route('$barang.index')->with('success', 'Siswa deleted successfully');
        return response()->json($barang);
    }
}
