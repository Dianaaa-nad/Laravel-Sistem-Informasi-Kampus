<?php

namespace App\Http\Controllers;

use App\Kependidikan;
use Illuminate\Http\Request;

class KependidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        if($request->has('cari')){
            $dtKepen = Kependidikan::where('nama','LIKE', '%' .$request->cari. '%')->paginate(2);
        }else{
            $dtKepen = Kependidikan::paginate(2);
        }  
        return view('KependidikanView.kependidikan-index', compact('dtKepen'));
    }
    public function cetak()
    {
        $dtCetak = Kependidikan::all();
        return view('KependidikanView.kependidikan-cetak', compact('dtCetak'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('KependidikanView.kependidikan-create');
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
        $dtUp = new Kependidikan;
        $dtUp->nip = $request->nip;
        $dtUp->nama = $request->nama;
        $dtUp->foto = $nmFile;
        $nm->move(public_path().'/img', $nmFile);
        $dtUp->save();
        return redirect('/kependidikan') -> with('status','Success');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(kependidikan $kependidikan)
    {
        return view('KependidikanView.kependidikan-detail',compact('kependidikan'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(kependidikan $kependidikan)
    {
        return view('KependidikanView.kependidikan-edit',compact('kependidikan'));
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
        $ubah = Kependidikan::findorfail($id);
        $awal = $ubah->foto;

        $dt = [
            'nip' =>  $request['nip'],
            'nama' =>  $request['nama'],
            'foto' =>  $awal,
        ];
        $request->foto->move(public_path().'/img', $awal);
        $ubah->update($dt);
        return redirect('/kependidikan') -> with('status','Change Saved');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(kependidikan $kependidikan)
    {
        Kependidikan::destroy($kependidikan->id);
        return redirect('/kependidikan') -> with('status','Deleted');
    }
}
