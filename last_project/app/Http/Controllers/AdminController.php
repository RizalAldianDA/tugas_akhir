<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('login.login');
    }
    public function process(Request $request){
        $validateData = $request->validate([
        'usernameadmin' => 'required',
        'passwordadmin' => 'required',
        ]);
        $result = Admin::where('usernameadmin', '=', $validateData['usernameadmin'])->first();
        if($result){
            $decrypt1 = md5($request->passwordadmin);
            $decrypt2 = md5($decrypt1);
            if (($decrypt2 == $result->passwordadmin))
            {
                session(['usernameadmin' => $request->usernameadmin]);
                return redirect('/admin/ketua');
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
        session()->flush();
        return redirect('/admin/login')->with('pesan','Logout berhasil');
    }
}
