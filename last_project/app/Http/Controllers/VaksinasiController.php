<?php

namespace App\Http\Controllers;

use App\Warga;
use App\Vaksinasi;
use Illuminate\Http\Request;

class VaksinasiController extends Controller
{
    public function create()
    {
        return view('vaksin.create');
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
        'nik' => 'required',
        'vaksin' => 'required',
        'tanggal_vaksinasi' => 'required',
        'vaksinasi_ke' => 'required',
        'keluhan_vaksinasi' => '',
        ]);
        $vaksin = new Vaksinasi();
        $vaksin->nik = $validateData['nik'];
        $vaksin->vaksin = $validateData['vaksin'];
        $vaksin->tanggal_vaksinasi = $validateData['tanggal_vaksinasi'];
        $vaksin->vaksinasi_ke = $validateData['vaksinasi_ke'];
        $vaksin->keluhan_vaksinasi = $validateData['keluhan_vaksinasi'];
        $vaksin->save();
        $request->session()->flash('pesan','Penambahan data berhasil');
        return redirect()->route('vaksin.index');
    }
    public function index()
    {
        $vaksin = Vaksinasi::where('nik','=',session('nik'))->get();
        return view('vaksin.index',['vaksin' => $vaksin]);
    }
    public function show($vaksinasi_id)
    {
        $result = Vaksinasi::findOrFail($vaksinasi_id);
        return view('vaksin.show',['vaksinasi' => $result]);
    }
   
}
