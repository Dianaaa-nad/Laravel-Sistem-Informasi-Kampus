<?php

namespace App\Http\Controllers\Otentikasi;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class OtentikasiController extends Controller
{
    public function index(){
        return view('Otentikasi.login');
    }
    public function list(){
        $da = User::all();
        return view('Otentikasi.daftar', compact('da'));
    }
    
    public function login(request $request){
        // dd($request->all());
        $dt = User::where('email',$request->email)->firstorfail();
        if($dt){
        if (Hash::check($request->password,$dt->password)) {
            return redirect('/dashboard');
        }
    }
        return redirect('/')->with('message','Email atau Password salah');
    }
    public function logout(request $request){
        $request->session()->flush();
        return redirect('/');
    }
    public function create()
    {
        return view('otentikasi.tambah');
    }
    public function store(Request $request)
    {
        //
        
        User::create([
            'name' =>  $request->name,
            'email' =>  $request->email,
            'password' =>  $request->password,
            
        ]);
        return redirect('/adm');
        }
}
