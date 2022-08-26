<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::whereBetween('status', [1, 3])->get();
        return view('backend.transaksi.booking.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaksi = Transaksi::whereId($id)->first();
        return view('backend.transaksi.booking.detail', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }

    public function statusUpdate($id, $status)
    {
        $kamar_id = Transaksi::whereId($id)->value('kamar_id');
        if ($status == 2) {
            Transaksi::whereId($id)->update([
                'status' => 2
            ]);
            return redirect()->back()->with('success', 'Pengajuan Berhasil disetujui!.');
        } elseif ($status == 7) {
            Transaksi::whereId($id)->update([
                'status' => 7
            ]);
            return redirect()->back()->with('success', 'Pengajuan Berhasil ditolak!.');
        } elseif ($status == 4) {
            Transaksi::whereId($id)->update([
                'status' => 4
            ]);
            Kamar::whereId($kamar_id)->update([
                'status' => 1
            ]);
            return redirect()->back()->with('success', 'Konfirmasi Pembayaran Berhasil dilakukan!.');
        }
    }

    public function daftarPengguna()
    {
        $pengguna = Transaksi::where('status', 4)->get();
        return view('backend.transaksi.pengguna.index', compact('pengguna'));
    }
}
