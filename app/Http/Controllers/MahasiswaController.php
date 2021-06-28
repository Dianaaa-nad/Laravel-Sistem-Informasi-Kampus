<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        //
        if($request->has('cari')){
            $dtMhs = Mahasiswa::where('nama','LIKE', '%' .$request->cari. '%')->paginate(2);
        }else{
            $dtMhs = Mahasiswa::paginate(2);
        }  
        return view('MahasiswaView.mahasiswa-index', compact('dtMhs'));
    }
    public function cetak()
    {
        $dtCetak = Mahasiswa::all();
        return view('MahasiswaView.mahasiswa-cetak', compact('dtCetak'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('MahasiswaView.mahasiswa-create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nm = $request->foto;
        $nmFile = $nm->getClientOriginalName();
        $dtUp = new Mahasiswa;
        $dtUp->nim = $request->nim;
        $dtUp->nama = $request->nama;
        $dtUp->foto = $nmFile;
        $nm->move(public_path().'/img', $nmFile);
        $dtUp->save();
        return redirect('/mahasiswa') -> with('status','Success');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(mahasiswa $mahasiswa)
    {
        return view('MahasiswaView.mahasiswa-detail',compact('mahasiswa'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(mahasiswa $mahasiswa)
    {
        return view('MahasiswaView.mahasiswa-edit',compact('mahasiswa'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ubah = Mahasiswa::findorfail($id);
        $awal = $ubah->foto;
        $dt = [
            'nim' =>  $request['nim'],
            'nama' =>  $request['nama'],
            'foto' =>  $awal,
        ];
        $request->foto->move(public_path().'/img', $awal);
        $ubah->update($dt);
        return redirect('/mahasiswa') -> with('status','Change Saved');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(mahasiswa $mahasiswa)
    {
        Mahasiswa::destroy($mahasiswa->id);
        return redirect('/mahasiswa') -> with('status','Deleted');
    }
}
