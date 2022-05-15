<?php

namespace App\Http\Controllers;

use App\Ketua;
use App\Warga;
use App\Info;
use Illuminate\Http\Request;

class KetuaController extends Controller
{
    public function create()
    {
        return view('ketua.create');
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
        'nik' => 'required|size:16,unique:ketuas',
        'nama' => 'required|min:3|max:50',
        'usernameket' => 'required',
        'passwordket' => 'required',
        'rt' => 'required',
        'rw' => 'required',
        'nomor' => '',
        ]);
        $ketua = new Ketua();
        $ketua->nik = $validateData['nik'];
        $ketua->nama = $validateData['nama'];
        $ketua->usernameket = $validateData['usernameket'];
        $ketua->passwordket = $validateData['passwordket'];
        $ketua->rt = $validateData['rt'];
        $ketua->rw = $validateData['rw'];
        $ketua->nomorhp = $validateData['nomor'];
        $ketua->save();
        $request->session()->flash('pesan','Penambahan akun berhasil');
        return redirect()->route('ketua.index');
    }
    public function index()
    {
        $ketua = Ketua::all();
        return view('ketua.index',['ketuas' => $ketua]);
    }
    public function show($ketua_id)
    {
        $result = Ketua::findOrFail($ketua_id);
        return view('ketua.show',['ketua' => $result]);
    }
    public function edit($ketua_id)
    {
        $result = Ketua::findOrFail($ketua_id);
        return view('ketua.edit',['ketua' => $result]);
    }
    public function update(Request $request, Ketua $ketua)
    {
        $validateData = $request->validate([
            'nik' => 'required|size:16,unique:ketuas',
            'nama' => 'required|min:3|max:50',
            'usernameket' => 'required',
            'passwordket' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'nomor' => '',
        ]);
        $ketua->nik = $validateData['nik'];
        $ketua->nama = $validateData['nama'];
        $ketua->usernameket = $validateData['usernameket'];
        $ketua->passwordket = $validateData['passwordket'];
        $ketua->rt = $validateData['rt'];
        $ketua->rw = $validateData['rw'];
        $ketua->nomorhp = $validateData['nomor'];
        $ketua->save();
        $request->session()->flash('pesan','Perubahan data berhasil');
        return redirect()->route('ketua.show',['ketua' => $ketua->id]);
    }
    public function destroy(Request $request, Ketua $ketua)
    {
        $ketua->delete();
        $request->session()->flash('pesan','Hapus akun berhasil');
        return redirect()->route('ketua.index');
    }

    public function index2()
    {
        return view('loginketua.login');
    }
    public function process(Request $request){
        $validateData = $request->validate([
        'usernameket' => 'required',
        'passwordket' => 'required',
        ]);
        $result = Ketua::where('usernameket', '=', $validateData['usernameket'])->first();
        if($result){
            if (($request->passwordket == $result->passwordket))
            {
                session(['usernameket' => $request->usernameket,'rt' =>$result->rt,'rw' =>$result->rw,'nik' =>$result->nik]);
                return redirect('/ketua/warga');
            }
            else {
                return back()->withInput()->with('pesan',"Login Gagal");
            }
        }
        else{
            return back()->withInput()->with('pesan',"Login Gagal");
        }
    }
    public function logout(){
        session()->forget('usernameket');
        return redirect('/ketua/login')->with('pesan','Logout berhasil');
    }
    

    public function profil($ketua_nik){
        $ketua = Ketua::where('nik','=',$ketua_nik)->first();    
        return view('pageketua.profilketua',['ketuas' => $ketua]);
    }
    public function editketua($ketua_id){
        $ketua = Ketua::where('id','=',$ketua_id)->first();
        return view('pageketua.editketua',['ketuas'=>$ketua]);
    }
    public function updateketua(Request $request, Ketua $ketua)
    {
        $validateData = $request->validate([
        'usernameket' => 'required',
        'passwordket' => 'required',
        'rt' => 'required',
        'rw' => 'required',
        'nomorhp' => '',
        ]);
        $ketua->usernameket = $validateData['usernameket'];
        $ketua->passwordket = $validateData['passwordket'];
        $ketua->rt = $validateData['rt'];
        $ketua->rw = $validateData['rw'];
        $ketua->nomorhp = $validateData['nomorhp'];
        $ketua->save();
        $request->session()->flash('pesan','Perubahan biodata ketua berhasil');
        return redirect()->route('pageketua.profilketua',['ketua' => $ketua->nik]);
    }

    public function search(Request $request)
	{
        $tipe = $request->tipe;
		$cari = $request->cari;
 
		$word = Warga::where($tipe,'LIKE',"%".$cari."%")
        ->paginate(3);
		return view('warga.search',['cari' => $word,'word'=>$cari,'tipe'=>$tipe]);
 
	}
    public function about()
    {
        $info = Info::where ('tipe','=','ab')
        ->where('status','=','ON')
        ->first();
        return view('pageketua.tentangkami',['info' => $info]);
    }
}
