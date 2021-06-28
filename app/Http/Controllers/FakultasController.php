<?php

namespace App\Http\Controllers;

use App\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        if($request->has('cari')){
            $dtFK = Fakultas::where('fakultas','LIKE', '%' .$request->cari. '%')->paginate(2);
        }else{
            $dtFK = Fakultas::paginate(2);
        }
      

        return view('FakultasView.fakultas-index', compact('dtFK'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('FakultasView.fakultas-create');
    }
    public function cetak()
    {
        $dtCetak = Fakultas::all();
        return view('FakultasView.fakultas-cetak', compact('dtCetak'));
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
            'fakultas' => 'required',
            'dekan' => 'required'
           
        ]);
        Fakultas::create([
            'fakultas' =>  $request->fakultas,
            'dekan' =>  $request->dekan,
            
        ]);

        return redirect('/fakultas') -> with('status','Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(fakultas $fakultas)
    {
        //
        return view('FakultasView.fakultas-detail',compact('fakultas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(fakultas $fakultas)
    {
        //
        return view('FakultasView.fakultas-edit',compact('fakultas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fakultas $fakultas)
    {
        //
        $request->validate([
            'fakultas' => 'required',
            'dekan' => 'required'
        ]);
        Fakultas::where('id',$fakultas->id)
        -> update ([
            'fakultas' =>  $request->fakultas,
            'dekan' =>  $request->dekan,
            ]);
     return redirect('/fakultas') -> with('status','Change Saved');
     
        return $request;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(fakultas $fakultas)
    {
        //
        Fakultas::destroy($fakultas->id);
        return redirect('/fakultas') -> with('status','Deleted');
    }
}
