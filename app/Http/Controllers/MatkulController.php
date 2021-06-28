<?php

namespace App\Http\Controllers;
use App\mata_pelajaran;
use App\Prodi;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $dtmapel = mata_pelajaran::paginate(2);
        $dtmapel = mata_pelajaran::with('prodi')->paginate(2);
        return view('MapelView.mapel-index', compact('dtmapel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pd = Prodi::all();
        return view('MapelView.mapel-create', compact('pd'));
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
            'nama_matkul' => 'required',
            'jumlah_sks' => 'required',
            'semester' => 'required',
            'prodis_id' => 'required'
        ]);
        mata_pelajaran::create([
            'nama_matkul' =>  $request->nama_matkul,
            'jumlah_sks' =>  $request->jumlah_sks,
            'semester' =>  $request->semester,
            'prodis_id' =>  $request->prodis_id,
        ]);

        return redirect('/mapel') -> with('status','Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(mata_pelajaran $mapel)
    {
        //
        $mapel::with('prodi')->get();
        return view('MapelView.mapel-detail', compact('mapel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
