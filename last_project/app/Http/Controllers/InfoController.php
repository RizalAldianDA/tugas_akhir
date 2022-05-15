<?php

namespace App\Http\Controllers;

use App\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function create()
    {
        return view('info.create');
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
        'tipe' => 'required',
        'title' => 'required',
        'description' => '',
        'status' => 'required',
        ]);
        $info = new Info();
        $info->tipe = $validateData['tipe'];
        $info->title = $validateData['title'];
        $info->description = $validateData['description'];
        $info->status = $validateData['status'];
        $info->save();
        $request->session()->flash('pesan','Penambahan informasi berhasil');
        return redirect()->route('info.index');
    }
    public function index()
    {
        $infos = Info::all();
        return view('info.index',['infos' => $infos]);
    }
    public function edit($info_id)
    {
        $result = Info::findOrFail($info_id);
        return view('info.edit',['info' => $result]);
    }
    public function update(Request $request, Info $info)
    {
        $validateData = $request->validate([
        'tipe' => 'required',
        'title' => 'required',
        'description' => '',
        'status' => 'required',
        ]);
        $info->tipe = $validateData['tipe'];
        $info->title = $validateData['title'];
        $info->description = $validateData['description'];
        $info->status = $validateData['status'];
        $info->save();
        $request->session()->flash('pesan','Perubahan informasi berhasil');
        return redirect()->route('info.index');
    }
    public function destroy(Request $request, Info $info)
    {
        $info->delete();
        $request->session()->flash('pesan','Penghapusan infomasi berhasil');
        return redirect()->route('info.index');
    }
}
