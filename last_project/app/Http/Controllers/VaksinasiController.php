<?php

namespace App\Http\Controllers;

use App\Warga;
use App\Vaksinasi;
use Illuminate\Http\Request;

class VaksinasiController extends Controller
{
    public function create()
    {
        if(session('check')=='yes'){
            return view('vaksin.create');
        }
        else{
            return redirect('/warga/beranda')->withInput()->with('pesan',"Tolong isi kata sandi sebelum melakukan pengisian data vaksinasi");
        }
    }
    public function store(Request $request)
    {
        if(session('check')=='yes'){
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
                $request->session()->flash('pesan','Penambahan data vaksinasi berhasil');
                return redirect()->route('vaksin.index');
        }
        else{
            return redirect('/warga/beranda')->withInput()->with('pesan',"Tolong isi kata sandi sebelum melakukan pengisian data vaksinasi");
        }
       
    }
    public function index()
    {
        if(session('check')=='yes'){
            $vaksin = Vaksinasi::where('nik','=',session('nik'))->get();
            return view('vaksin.index',['vaksin' => $vaksin]);
        }
        else{
            return redirect('/warga/beranda')->withInput()->with('pesan',"Tolong isi kata sandi sebelum melakukan pengisian data vaksinasi"); 
        }
        
    }
    public function show($vaksinasi_id)
    {
        if(session('check')=='yes'){
            $result = Vaksinasi::findOrFail($vaksinasi_id);
            return view('vaksin.show',['vaksinasi' => $result]);
        }
        else{
            return redirect('/warga/beranda')->withInput()->with('pesan',"Tolong isi kata sandi sebelum melakukan pengisian data vaksinasi");
        }
       
    }
    public function edit($vaksinasi_id)
    {
        if(session('check')=='yes'){
            $result = Vaksinasi::findOrFail($vaksinasi_id);
            return view('vaksin.edit',['vaksinasi' => $result]);
        }
        else{
            return redirect('/warga/beranda')->withInput()->with('pesan',"Tolong isi kata sandi sebelum melakukan pengisian data vaksinasi");
        }
        
    }

    public function update(Request $request, Vaksinasi $vaksinasi)
    {
        if(session('check')=='yes'){
            $validateData = $request->validate([
                'nik' => 'required',
                'vaksin' => 'required',
                'tanggal_vaksinasi' => 'required',
                'vaksinasi_ke' => 'required',
                'keluhan_vaksinasi' => '',
                ]);
                $vaksinasi->nik = $validateData['nik'];
                $vaksinasi->vaksin = $validateData['vaksin'];
                $vaksinasi->tanggal_vaksinasi = $validateData['tanggal_vaksinasi'];
                $vaksinasi->vaksinasi_ke = $validateData['vaksinasi_ke'];
                $vaksinasi->keluhan_vaksinasi = $validateData['keluhan_vaksinasi'];
                $vaksinasi->save();
                $request->session()->flash('pesan','Perubahan data vaksinasi berhasil');
                return redirect()->route('vaksin.index');
        }
        else{
            return redirect('/warga/beranda')->withInput()->with('pesan',"Tolong isi kata sandi sebelum melakukan pengisian data vaksinasi");
        }
       
    }
    public function destroy(Request $request, Vaksinasi $vaksinasi)
    {
        if(session('check')=='yes'){
            $vaksinasi->delete();
            $request->session()->flash('pesan','Pernghapusan data vaksinasi berhasil');
            return redirect()->route('vaksin.index');
        }
        else{
            return redirect('/warga/beranda')->withInput()->with('pesan',"Tolong isi kata sandi sebelum melakukan pengisian data vaksinasi");
        }
    }
   
}
