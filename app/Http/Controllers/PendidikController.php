<?php

namespace App\Http\Controllers;

use App\Pendidik;
use Illuminate\Http\Request;

class PendidikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        if($request->has('cari')){
            $dtPendidik = Pendidik::where('nama','LIKE', '%' .$request->cari. '%')->paginate(2);
        }else{
            $dtPendidik = Pendidik::paginate(2);
        }
        return view('PendidikView.pendidik-index', compact('dtPendidik'));
    }
    public function cetak()
    {
        $dtCetak = Pendidik::all();
        return view('PendidikView.pendidik-cetak', compact('dtCetak'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('PendidikView.pendidik-create');
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

        $dtUp = new Pendidik;
        $dtUp->nip = $request->nip;
        $dtUp->nama = $request->nama;
        $dtUp->foto = $nmFile;

        $nm->move(public_path().'/img', $nmFile);
        $dtUp->save();
        return redirect('/pendidik') -> with('status','Success');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(pendidik $pendidik)
    {
        return view('PendidikView.pendidik-detail',compact('pendidik'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(pendidik $pendidik)
    {
        return view('PendidikView.pendidik-edit',compact('pendidik'));
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
        $ubah = Pendidik::findorfail($id);
        $awal = $ubah->foto;

        $dt = [
            'nip' =>  $request['nip'],
            'nama' =>  $request['nama'],
            'foto' =>  $awal,
        ];

        $request->foto->move(public_path().'/img', $awal);
        $ubah->update($dt);
        return redirect('/pendidik') -> with('status','Change Saved');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(pendidik $pendidik)
    {
        Pendidik::destroy($pendidik->id);
        return redirect('/pendidik') -> with('status','Deleted');
    }
}
