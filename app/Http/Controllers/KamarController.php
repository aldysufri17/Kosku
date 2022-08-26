<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Models\Kamar;
use App\Models\Peraturan;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamar = Kamar::all();
        return view('backend.kamar.index', compact('kamar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.kamar.add');
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
            'nomer'          => 'required',
            'luas'              => 'required',
            'lebar'             => 'required',
            'foto'              => 'required',
            'deskripsi'         => 'required',
            'tampil'            => 'required',
            'harga'             => 'required',
            'status'             => 'required',
        ]);
        $ukuran = $request->luas . " X " . $request->lebar;

        // Kamar kamar
        if ($request->foto) {
            // $items = array();
            // foreach ($request->foto as $key => $value) {
            $foto = $request->foto . "." . $request->foto->getClientOriginalExtension();
            $destination = 'images/kamar/';
            $request->foto->move($destination, $foto);
            //     $items[] = $new_foto;
            // }
            // $foto = json_encode($items);
            Kamar::create([
                'nomer'          => $request->nomer,
                'ukuran'            => $ukuran,
                'foto'              => $foto,
                'deskripsi'         => $request->deskripsi,
                'tampil'            => $request->tampil,
                'harga'             => $request->harga,
                'status'            => 0
            ]);
        } else {
            Kamar::create([
                'nomer'          => $request->nomer,
                'ukuran'            => $ukuran,
                'deskripsi'         => $request->deskripsi,
                'tampil'            => $request->tampil,
                'harga'             => $request->harga,
                'status'            => 0
            ]);
        }
        return redirect()->route('kamar.index')->with('success', 'Kamar Berhasil ditambah!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function show(kamar $kamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kamar = Kamar::whereId($id)->first();
        $foto = json_decode($kamar->foto);
        return view('backend.kamar.edit', compact('kamar', 'foto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kamar $kamar)
    {
        dd($request);
        $a1 = $request->update;

        $a2 = $request->foto;
        array_merge($a1, $a2);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function destroy(kamar $kamar)
    {
        //
    }
}
