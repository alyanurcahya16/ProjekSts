<?php

namespace App\Http\Controllers;

use App\Models\dataBunga;
use Illuminate\Http\Request;

class DataBungaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('bunga.data_bunga');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('bunga.pesan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|max:100',
            'alamat' => 'required',
            'email' => 'required',
        ], [
            'name' => 'Nama Customer harus diisi',
            'alamat' => 'Alamat Customer harus diisi',
            'email' => 'Email harus diisi',
            'name' => 'Nama maksimal 100 karakter!',
        ]);

        dataBunga::create([
            'name' => $request->input('name'),
            'alamat' => $request->input('alamat'),
            'email' => $request->input('email'),
        ]);

        return redirect()->route('data.home')->with('success', 'Berhasil Menambah Data Customer!');
    }

    /**
     * Display the specified resource.
     */
    public function show(dataBunga $dataBunga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(dataBunga $dataBunga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, dataBunga $dataBunga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dataBunga $dataBunga)
    {
        //
    }
}
