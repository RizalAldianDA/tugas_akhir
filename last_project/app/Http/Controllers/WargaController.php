<?php

namespace App\Http\Controllers;

use App\Warga;
use App\Vaksinasi;
use App\Info;
use App\Document;

use App\Imports\WargaImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class WargaController extends Controller
{
    public function showwarga($profil_nik)
    {
        $result = Vaksinasi::where('nik', '=', $profil_nik)->get();
        $result2 = Warga::where('nik', '=', $profil_nik)->first();
        return view('warga.detail',['warga' => $result,'nomor'=> $result2]);
    }
    public function loginpage()
    {
        return view('loginpage.loginpage');
    }
    public function create()
    {
        return view('warga.create');
    }
    public function addwarga()
    {
        return view('warga.addwarga');
    }
    public function createexcel()
    {
        $document = Document::where('publisher_file','=','Admin')
        ->first();
        return view('warga.autocreate',['doc'=>$document]);
    }
    public function wargaimport(Request $request){
        Excel::import(new WargaImport, request()->file('file'));
        return redirect('/ketua/warga');
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
        'nik' => 'required|size:16,unique:wargas',
        'nokk' => 'required',
        'nama' => 'required|min:3|max:50',
        'gender' => 'required|in:p,l',
        'tanggal_lahir' => 'required',
        'rt' => 'required',
        'rw' => 'required',
        ]);
        $warga = new Warga();
        $warga->nik = $validateData['nik'];
        $warga->nokk = $validateData['nokk'];
        $warga->nama = $validateData['nama'];
        $warga->gender = $validateData['gender'];
        $warga->tanggal_lahir = $validateData['tanggal_lahir'];
        $warga->rt = $validateData['rt'];
        $warga->rw = $validateData['rw'];
        $warga->save();
        $request->session()->flash('pesan','Penambahan warga berhasil');
        return redirect()->route('warga.index');
    }
    public function index()
    {
        $warga = Warga::where('rt','=',session('rt'))
        ->where('rw','=',session('rw'))
        ->get();
        return view('warga.index',['wargas' => $warga]);
    }
    public function indexall()
    {
        $warga = Warga::all();
        return view('wargaall.indexall',['wargas' => $warga]);
    }
    public function detailall($warga_nik){
        $warga = Warga::where('nik','=',$warga_nik)->first();    
        return view('wargaall.detailall',['wargas' => $warga]);
    } 
    public function searchall(Request $request)
	{
        $tipe = $request->tipe;
		$cari = $request->cari;
 
		$word = Warga::where($tipe,'LIKE',"%".$cari."%")
        ->paginate(3);
		return view('wargaall.searchall',['cari' => $word,'word'=>$cari,'tipe'=>$tipe]);
	}
    public function editall($warga_id){
        $warga = Warga::where('id','=', $warga_id)->first();
        return view('wargaall.editall',['wargas'=>$warga]);
    }
    public function updateall(Request $request, Warga $warga)
    {
        $validateData = $request->validate([
        'nik' => 'required|size:16,unique:wargas',
        'nokk' => 'required',
        'gender' => 'required|in:p,l',
        'tanggal_lahir' => 'required',
        'rt' => 'required',
        'rw' => 'required',
        'passwordwarga' => '',
        'nomorhp' => '',
        'alamat' => '',
        ]);
        $warga->nik = $validateData['nik'];
        $warga->nokk = $validateData['nokk'];
        $warga->gender = $validateData['gender'];
        $warga->tanggal_lahir = $validateData['tanggal_lahir'];
        $warga->rt = $validateData['rt'];
        $warga->rw = $validateData['rw'];

        $password = bcrypt($validateData['passwordwarga']);
        $warga->passwordwarga = $password;

        $warga->nomorhp = $validateData['nomorhp'];
        $warga->alamat = $validateData['alamat'];
        $warga->save();
        $request->session()->flash('pesan','Perubahan biodata warga berhasil');
        if($warga->passwordwarga != null){
            session(['check' => 'yes']);
            return redirect()->route('wargaall.detailall',['warga' => $warga->nik]);
        }
        else{
            session(['check' => 'no']);
            return redirect()->route('wargaall.detailall',['warga' => $warga->nik]);
        }
        
    }
    public function destroy(Request $request, Warga $warga)
    {
        $warga->delete();
        $request->session()->flash('pesan','Hapus warga berhasil');
        return redirect()->route('wargaall.indexall');
    }
    


    public function index3()
    {
        $info = Info::where ('tipe','=','log')
        ->where('status','=','ON')
        ->first();
        return view('loginwarga.login',['info' => $info]);
    }
    public function process(Request $request){
        $validateData = $request->validate([
        'nik' => 'required',
        'passwordwarga' => 'required',
        ]);
        $result = Warga::where('nik', '=', $validateData['nik'])->first();
        if($result){
            if (($result->passwordwarga == null)){
                if(($request->passwordwarga == $result->tanggal_lahir)){
                    session(['nik' => $request->nik,'nama' => $result->nama,'check' => 'no']);
                    return redirect('/warga/beranda')->withInput()->with('pesan',"Tolong isi kata sandi sebelum melakukan pengisian data vaksinasi");
                }
                else{
                    return back()->withInput()->with('pesan',"Tanggal lahir salah");
                }
            }
            elseif(($result->passwordwarga != null)){
                if (Hash::check($request->passwordwarga, $result->passwordwarga))
                {
                    session(['nik' => $request->nik,'nama' => $result->nama,'check' => 'yes']);
                    return redirect('/warga/beranda');
                }
                else{
                    return back()->withInput()->with('pesan',"Password salah");
                }
            }
            else{
                return back()->withInput()->with('pesan',"Login Gagal");
            }
        }
        else{
            return back()->withInput()->with('pesan',"Login Gagal");
        }
    }
    public function logout(){
        session()->forget('nik');
        return redirect('/warga/login')->with('pesan','Logout berhasil');
    }

    public function beranda()
    {
        if(session('check')=='no'){
            $info = Info::where('tipe','=','bnp')
            ->where('status','=','ON')
            ->first();
        }
        elseif(session('check')=='yes'){
            $info = Info::where('tipe','=','bp')
            ->where('status','=','ON')
            ->first();
        }
        return view('pagewarga.berandawarga',['info' => $info]);
    }

    public function about()
    {
        $info = Info::where ('tipe','=','ab')
        ->where('status','=','ON')
        ->first();
        return view('pagewarga.tentangkami',['info' => $info]);
    }

    public function profil($warga_nik){
        $warga = Warga::where('nik','=',$warga_nik)->first();    
        return view('pagewarga.profilwarga',['wargas' => $warga]);
    }
    public function editwarga($warga_id){
        $warga = Warga::where('id','=', $warga_id)->first();
        return view('pagewarga.editwarga',['wargas'=>$warga]);
    }
    public function updatewarga(Request $request, Warga $warga)
    {
        $validateData = $request->validate([
        'nik' => 'required|size:16,unique:wargas',
        'nokk' => 'required',
        'gender' => 'required|in:p,l',
        'tanggal_lahir' => 'required',
        'rt' => 'required',
        'rw' => 'required',
        'passwordwarga' => '',
        'nomorhp' => '',
        'alamat' => '',
        'status' => '',
        ]);
        $warga->nik = $validateData['nik'];
        $warga->nokk = $validateData['nokk'];
        $warga->gender = $validateData['gender'];
        $warga->tanggal_lahir = $validateData['tanggal_lahir'];
        $warga->rt = $validateData['rt'];
        $warga->rw = $validateData['rw'];
        
        $password = bcrypt($validateData['passwordwarga']);
        $warga->passwordwarga = $password;

        $warga->nomorhp = $validateData['nomorhp'];
        $warga->alamat = $validateData['alamat'];
        $warga->status = $validateData['status'];
        $warga->save();
        $request->session()->flash('pesan','Perubahan biodata warga berhasil');
        if($warga->passwordwarga != null){
            session(['check' => 'yes']);
            return redirect()->route('pagewarga.profilwarga',['warga' => $warga->nik]);
        }
        else{
            session(['check' => 'no']);
            return redirect()->route('pagewarga.profilwarga',['warga' => $warga->nik]);
        }
        
    }

}
