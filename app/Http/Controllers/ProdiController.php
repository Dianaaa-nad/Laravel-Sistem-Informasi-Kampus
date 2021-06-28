<?php

namespace App\Http\Controllers;

use App\Prodi;
use App\Fakultas;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        if($request->has('cari')){
            $dtProdi = Prodi::where('prodi','LIKE', '%' .$request->cari. '%')->paginate(2); //pencarian
        }else{
        $dtProdi = Prodi::with('fakultas')->paginate(2); //relasi dengan fakultas
        }
        return view('JurusanView.jurusan-index', compact('dtProdi'));
    }

    public function cetak()
    {
        $dtCetak = Prodi::with('fakultas')->get();
        return view('JurusanView.jurusan-cetak', compact('dtCetak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $fk = Fakultas::all();
        return view('JurusanView.jurusan-create', compact('fk'));
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
        $request->validate([
            'prodi' => 'required',
            'fakultas_id' => 'required',
            'kepala_prod' => 'required'
        ]);
        Prodi::create([
            'prodi' =>  $request->prodi,
            'fakultas_id' =>  $request->fakultas_id,
            'kepala_prod' =>  $request->kepala_prod,
        ]);

        return redirect('/prodi') -> with('status','Success');
    

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function show(prodi $prodi)
    {
        //
        $prodi::with('fakultas')->get();
        return view('JurusanView.jurusan-detail', compact('prodi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function edit(prodi $prodi)
    {
        //
        $fk = Fakultas::all();
        return view('JurusanView.jurusan-edit', compact('fk','prodi'));     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, prodi $prodi)
    {
        //
        $request->validate([
            'prodi' => 'required',
            'fakultas_id' => 'required',
            'kepala_prod' => 'required'
        ]);
        Prodi::where('id',$prodi->id)
        -> update ([
            'prodi' =>  $request->prodi,
            'fakultas_id' =>  $request->fakultas_id,
            'kepala_prod' =>  $request->kepala_prod,
        ]);

        return redirect('/prodi') -> with('status','Success');
    
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function destroy(prodi $prodi)
    {
        //
        Prodi::destroy($prodi->id);
        return redirect('/prodi') -> with('status','Deleted');
    }
}
