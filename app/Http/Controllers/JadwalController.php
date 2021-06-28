<?php
 namespace App\Http\Controllers;
use DB; use App\jadwal; use App\Kelas; use App\Pendidik; use App\Matkul;
use Illuminate\Http\Request;
class JadwalController extends Controller
{
    public function index(request $request)
    {
        //join dengan tabel pendidik, mata kuliah, kelas, dan kelas berelasi ke prodi, prodi berelasi ke fakultas
        if($request->has('cari')){
            $dt = DB::table('jadwals')
        ->join('pendidiks', 'jadwals.pendidiks_id', '=', 'pendidiks.id')
        ->join('mata_pelajarans', 'jadwals.mata_pelajarans_id', '=', 'mata_pelajarans.id')
        ->join('kelas', 'jadwals.kelas_id', '=', 'kelas.id')
        ->join('prodis', 'Kelas.prodis_id', '=', 'prodis.id')
        ->join('fakultas', 'prodis.fakultas_id', '=', 'fakultas.id')
        ->select('jadwals.id','mata_pelajarans.nama_matkul', 'pendidiks.nama',
        'kelas.nama_kls', 'jadwals.ruang','jadwals.jadwal', 'prodis.prodi')
        ->where('mata_pelajarans.nama_matkul','LIKE', '%' .$request->cari. '%')->paginate(2);
        }else{
        $dt = DB::table('jadwals')
        ->join('pendidiks', 'jadwals.pendidiks_id', '=', 'pendidiks.id')
        ->join('mata_pelajarans', 'jadwals.mata_pelajarans_id', '=', 'mata_pelajarans.id')
        ->join('kelas', 'jadwals.kelas_id', '=', 'kelas.id')
        ->join('prodis', 'Kelas.prodis_id', '=', 'prodis.id')
        ->join('fakultas', 'prodis.fakultas_id', '=', 'fakultas.id')
        ->select('jadwals.id','mata_pelajarans.nama_matkul','pendidiks.nama',
        'kelas.nama_kls',  'jadwals.ruang','jadwals.jadwal', 'prodis.prodi')->paginate(2);
        }
        return view('JadwalView.jadwal-index', compact('dt'));
    }
    public function cetak()
    {
       $dtCetak =DB::table('jadwals')
       ->join('pendidiks', 'jadwals.pendidiks_id', '=', 'pendidiks.id')
       ->join('mata_pelajarans', 'jadwals.mata_pelajarans_id', '=', 'mata_pelajarans.id')
       ->join('kelas', 'jadwals.kelas_id', '=', 'kelas.id')
       ->join('prodis', 'Kelas.prodis_id', '=', 'prodis.id')
       ->join('fakultas', 'prodis.fakultas_id', '=', 'fakultas.id')
       ->select('jadwals.id','mata_pelajarans.id','mata_pelajarans.nama_matkul','pendidiks.id','pendidiks.nama',
       'kelas.nama_kls', 'kelas.id', 'jadwals.ruang','jadwals.jadwal', 'prodis.prodi')
       ->get();
        return view('JadwalView.jadwal-cetak', compact('dtCetak'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $k = Kelas::all();
        $pd = Pendidik::all();
        $m = Matkul::all();
        return view('JadwalView.jadwal-create', compact('pd','k','m'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        jadwal::create([
            'mata_pelajarans_id' =>  $request->mata_pelajarans_id,
            'kelas_id' =>  $request->kelas_id,
            'pendidiks_id' =>  $request->pendidiks_id,
            'jadwal' =>  $request->jadwal,
            'ruang' =>  $request->ruang,
        ]);
        return redirect('/jadwal') -> with('status','Success');   
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
    public function edit(jadwal $jadwal)
    {
        $k = Kelas::all();
        $pd = Pendidik::all();
        $m = Matkul::all();
        return view('JadwalView.jadwal-edit', compact('pd','k','m','jadwal'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jadwal $jadwal)
    {
        jadwal::where('id',$jadwal->id)
        -> update ([
            'mata_pelajarans_id' =>  $request->mata_pelajarans_id,
            'kelas_id' =>  $request->kelas_id,
            'pendidiks_id' =>  $request->pendidiks_id,
            'jadwal' =>  $request->jadwal,
            'ruang' =>  $request->ruang,
        ]);
        return redirect('/jadwal') -> with('status','Success');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(jadwal $jadwal)
    {
        jadwal::destroy($jadwal->id);
        return redirect('/jadwal') -> with('status','Deleted');
    }
}
