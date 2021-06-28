<?php
namespace App\Http\Controllers;
use App\Matkul;
use Illuminate\Http\Request;
class MapelController extends Controller
{
    public function index(request $request)
    {
        if($request->has('cari')){
            $Matkul = Matkul::where('nama_matkul','LIKE', '%' .$request->cari. '%')->paginate(2);
        }else{
        $Matkul = Matkul::paginate(2);
        }  
        return view('MapelView.mapel-index', compact('Matkul'));
    }
    public function cetak()
    {
        $dtCetak = Matkul::all();
        return view('MapelView.mapel-cetak', compact('dtCetak'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    
        return view('MapelView.mapel-create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Matkul ::create([
            'nama_matkul' =>  $request->nama_matkul,
            'jumlah_sks' =>  $request->jumlah_sks,
            'semester' =>  $request->semester,
        ]);
        return redirect('/matkul') -> with('status','Success');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(matkul $matkul)
    {
        return view('MapelView.mapel-edit', compact('matkul'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, matkul $matkul)
    {
        Matkul ::where('id',$matkul->id)
        -> update ([
            'nama_matkul' =>  $request->nama_matkul,
            'jumlah_sks' =>  $request->jumlah_sks,
            'semester' =>  $request->semester,
        ]);
        return redirect('/matkul') -> with('status','Success'); 
        return $request;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(matkul $matkul)
    {
        Matkul ::destroy($matkul->id);
        return redirect('/matkul') -> with('status','Deleted');
    }
}