<?php
namespace App\Http\Controllers;
use DB; use App\Fakultas; use App\Kelas; use App\Prodi;
use Illuminate\Http\Request;
class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        // join dengan tabel prodi, prodi berelasi dgn fakultas
        if($request->has('cari')){
            $dtKelas = DB::table('kelas')
            ->join('prodis', 'Kelas.prodis_id', '=', 'prodis.id')
            ->join('fakultas', 'prodis.fakultas_id', '=', 'fakultas.id')
            ->select('kelas.nama_kls', 'kelas.id', 'kelas.ruang_kelas',  'prodis.prodi')
            ->where('kelas.nama_kls','LIKE', '%' .$request->cari. '%')->paginate(2);
        }else{
            $dtKelas = DB::table('kelas')
            ->join('prodis', 'Kelas.prodis_id', '=', 'prodis.id')
            ->join('fakultas', 'prodis.fakultas_id', '=', 'fakultas.id')
            ->select('kelas.nama_kls', 'kelas.id', 'kelas.ruang_kelas', 'prodis.prodi')->paginate(2);
        } 
        return view('KelasView.kelas-index', compact('dtKelas'));
    }
    public function cetak()
    {
       $dtCetak = DB::table('kelas')
            ->join('prodis', 'Kelas.prodis_id', '=', 'prodis.id')
            ->join('fakultas', 'prodis.fakultas_id', '=', 'fakultas.id')
            ->select('kelas.nama_kls', 'kelas.id', 'kelas.ruang_kelas', 'prodis.prodi')
            ->get();
        return view('KelasView.kelas-cetak', compact('dtCetak'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pd = Prodi::all();
        return view('KelasView.Kelas-create', compact('pd'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kelas::create([
            'nama_kls' =>  $request->nama_kls,
            'prodis_id' =>  $request->prodis_id,
            'ruang_kelas' =>  $request->ruang_kelas,
        ]);
        return redirect('/kelas') -> with('status','Success');    
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(kelas $kelas)
    {
        $Kelas = DB::table('kelas')
        ->join('prodis', 'Kelas.prodis_id', '=', 'prodis.id')
        ->join('fakultas', 'prodis.fakultas_id', '=', 'fakultas.id')
        ->where('kelas.id', '=', $kelas)
        ->select('kelas.nama_kls', 'kelas.id', 'kelas.ruang_kelas', 'prodis.prodi')
        ->get();
        return view('KelasView.kelas-detail', compact('Kelas'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(kelas $kelas)
    {
        $pd = Prodi::all();
        return view('KelasView.Kelas-edit', compact('pd', 'kelas'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kelas $kelas)
    {
        Kelas::where('id',$kelas->id)
        -> update ([
            'nama_kls' =>  $request->nama_kls,
            'prodis_id' =>  $request->prodis_id,
            'ruang_kelas' =>  $request->ruang_kelas,
        ]);

        return redirect('/kelas') -> with('status','Success');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(kelas $kelas)
    {
        Kelas::destroy($kelas->id);
        return redirect('/kelas') -> with('status','Deleted');
    }
}
