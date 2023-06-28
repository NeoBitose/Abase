<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\SiswaModel;
use App\Models\JurusanModel;
use App\Models\KelasModel;
use App\Models\SppModel;
use App\Models\DetailsppModel;
use App\Models\PembayaransppModel;
use App\Models\PembayarantanggunganModel;
use App\Models\JenistanggunganModel;
use App\Models\DetailtanggunganModel;
use Illuminate\Support\Str;
use App\Imports\SiswaImport;

use Maatwebsite\Excel\Facades\Excel;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return view('siswa/data_siswa/index',[
            'getdatasiswa' => SiswaModel::join('jurusan','siswa.jurusan','=','jurusan.id_jurusan')
                                        ->join('kelas','siswa.kelas','=','kelas.id_kelas')
                                        ->join('tipe_siswa','siswa.tipe_siswa','=','tipe_siswa.id_tipe_siswa')
                                        ->where('tipe_siswa',1)
                                        ->get(),
            'getdatasiswanon' => SiswaModel::join('jurusan','siswa.jurusan','=','jurusan.id_jurusan')
                                        ->join('kelas','siswa.kelas','=','kelas.id_kelas')
                                        ->join('tipe_siswa','siswa.tipe_siswa','=','tipe_siswa.id_tipe_siswa')
                                        ->where('tipe_siswa',3)
                                        ->get(),
        ]);
    }
    public function alumni()
    {


        return view('siswa/data_siswa/alumni',[
            'getdatasiswa' => SiswaModel::join('jurusan','siswa.jurusan','=','jurusan.id_jurusan')
                                        ->join('kelas','siswa.kelas','=','kelas.id_kelas')
                                        ->join('tipe_siswa','siswa.tipe_siswa','=','tipe_siswa.id_tipe_siswa')
                                        ->where('tipe_siswa',2)
                                        ->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.data_siswa.add_siswa',[
            'getdatasiswa' => JurusanModel::get(),
            'import' => false,
        ]);
    }

    public function exceltemp() {

        return view('siswa.data_siswa.add_siswa',[
            'getdatasiswa' => JurusanModel::get(),
            'import' => true,
            'tk' => request()->tingkatan_kelas,
            'jr' => request()->jurusan,
            'nk' => request()->nomor_kelas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $kelas = KelasModel:: select('id_kelas')
                            ->where('tingkatan_kelas','=',$request->tingkatan)
                            ->where('nomor_kelas','=',$request->nomor)
                            ->get();

        foreach ($kelas as $item) {
            $id_kelas = $item['id_kelas'];
        }




        $data = ([
            'nis' =>$request->nis,
            'nama' => $request->nama,
            'nisn' => $request->nisn,
            'kelas' => $id_kelas,
            'jurusan' => $request->jurusan,
            'foto' => 'default.jpg',
            'nohp' => $request->nohp,
            'jk' => $request->jk,
            'tipe_siswa' => 1,
            'tahun_masuk' => $request->tahun_masuk,
            'tanggal_lahir' => $request->tanggal_lahir,
        ]);


        SiswaModel::create($data);


        if($data){
            alert()->success('Berhasil menambahkan siswa', 'Berhasil!');
            return redirect('siswa')->with('pesan','Berhasil menambahkan siswa');
        }
        else{
            return redirect('siswa')->with('gagal','Gagal menambahkan siswa');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nisn)
    {



        return view('siswa/data_siswa/detail',[
            'getdatasiswa' => SiswaModel::join('jurusan','siswa.jurusan','=','jurusan.id_jurusan')
                                        ->join('kelas','siswa.kelas','=','kelas.id_kelas')
                                        ->join('tipe_siswa','siswa.tipe_siswa','=','tipe_siswa.id_tipe_siswa')
                                        ->where('nisn',$nisn)
                                        ->get(),




            'getdataspp' => DetailsppModel::join('siswa','detail_spp.siswa','=','siswa.id_siswa')
                                            ->join('data_spp','detail_spp.data_spp','=','data_spp.id_data_spp')
                                            ->join('kelas','data_spp.kelas','=','kelas.id_kelas')
                                            ->join('jurusan','data_spp.jurusan','=','jurusan.id_jurusan')
                                            ->where('nisn',$nisn)
                                            ->get(),





            'getdatatanggungan' => DetailtanggunganModel::join('siswa','detail_tanggungan.siswa','=','siswa.id_siswa')
                                            ->join('tanggungan','detail_tanggungan.tanggungan','=','tanggungan.id_tanggungan')
                                            ->join('jenis_tanggungan','tanggungan.jenis_tanggungan','=','jenis_tanggungan.id_jenis_tanggungan')
                                            ->join('kelas','tanggungan.kelas','=','kelas.id_kelas')
                                            ->join('jurusan','tanggungan.jurusan','=','jurusan.id_jurusan')
                                            ->where('nisn',$nisn)
                                            ->get(),

            'totalbulanspp' => SiswaModel::join('jurusan','siswa.jurusan','=','jurusan.id_jurusan')
                                        ->join('detail_spp','siswa.id_siswa','=','detail_spp.siswa')
                                        ->where('nisn',$nisn)
                                        ->get()
                                        ->count('bulan'),

            'totaltanggungan' => DetailtanggunganModel::join('siswa','detail_tanggungan.siswa','=','siswa.id_siswa')
                                            ->join('tanggungan','detail_tanggungan.tanggungan','=','tanggungan.id_tanggungan')
                                            ->join('jenis_tanggungan','tanggungan.jenis_tanggungan','=','jenis_tanggungan.id_jenis_tanggungan')
                                            ->where('nisn',$nisn)
                                            ->get()
                                            ->sum('selisih_tanggungan'),

            ]);




    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function kenaikan(Request $request)


    {

        return view('siswa/kenaikan',[
        'getdatasiswa' => SiswaModel::join('jurusan','siswa.jurusan','=','jurusan.id_jurusan')
                                        ->join('kelas','siswa.kelas','=','kelas.id_kelas')
                                        ->join('tipe_siswa','siswa.tipe_siswa','=','tipe_siswa.id_tipe_siswa')
                                        ->where('jurusan','LIKE',$request->jurusan,  )
                                        ->where('kelas','LIKE',$request->kelas)
                                        ->where('tipe_siswa','=',1)
                                        ->where('kelas','<',3)
                                        ->get(),
        ]);
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

    public function nonaktif($nisn){
        $data = [
            'tipe_siswa' => 3,
        ];

        SiswaModel::where('nisn',$nisn)->update($data);
        alert()->success('Berhasil mengubah status siswa', 'Berhasil!');
        return redirect('siswa')->with('pesan','Berhasil mengubah status siswa');
    }
    
    public function aktif($nisn){
        $data = [
            'tipe_siswa' => 1,
        ];

        SiswaModel::where('nisn',$nisn)->update($data);
        alert()->success('Berhasil mengubah status siswa', 'Berhasil!');
        return redirect('siswa')->with('pesan','Berhasil mengubah status siswa');
    }

    public function pembayaranspp(Request $request, $id_detail_spp){
        $data = ([
            'detail_spp' => $request->id_detail_spp,
            'no_kwitansi' => random_int(111111, 999999),
            'user' => $request->id_user,
            'nominal_pembayaran' => $request->nominal_pembayaran,
            'waktu_pembayaran' => date('Y-m-d H:i:s'),
        ]);
        PembayaransppModel::create($data);

        alert()->success('Berhasil membayar SPP', 'Berhasil!');
        return back()->with('pesan','Berhasil membayar spp');

    }

    // public function pembayaranspp(Request $request, $id_detail_spp){
    //     $data = ([
    //         'detail_spp' => $request->id_detail_spp,
    //         'no_kwitansi' => random_int(111111, 999999),
    //         'user' => $request->id_user,
    //         'nominal_pembayaran' => $request->nominal_pembayaran,
    //         'waktu_pembayaran' => date('Y-m-d H:i:s'),
    //     ]);
    //     PembayaransppModel::create($data);
    //     return back()->with('pesan','Berhasil membayar spp');

    // }
    public function pembayarantanggungan(Request $request){

        $data = ([
            'waktu_bayar' => date('Y-m-d H:i:s'),
            'detail_tanggungan' => $request->id_detail_tanggungan,
            'no_kwitansi' => random_int(111111, 999999),
            'user' => $request->id_user,
            'nominal_pembayaran' => $request->nominal_pembayaran,
        ]);

        PembayarantanggunganModel::create($data);
        alert()->success('Berhasil membayar tanggungan', 'Berhasil!');
        return redirect('riwayatpembayarantanggungan')->with('pesan','Berhasil membayar tanggungan');

    }
    public function kwitansi($id_detail_spp){

        return view('siswa/data_siswa/kwitansi',[
            'getdatapembayaran' => PembayaransppModel::join('users','pembayaran_spp.user','=','users.id')
                                                        ->join('detail_spp','pembayaran_spp.detail_spp','=','detail_spp.id_detail_spp')
                                                        ->where('detail_spp',$id_detail_spp)
                                                        ->get(),
        ]);

    }
    public function kwitansitanggungan($id_detail_tanggungan){

        return view('siswa/data_siswa/kwitansitanggungan',[
            'getdatapembayaran' => PembayarantanggunganModel::join('users','pembayaran_tanggungan.user','=','users.id')
                                                        ->join('detail_tanggungan','pembayaran_tanggungan.detail_tanggungan','=','detail_tanggungan.id_detail_tanggungan')
                                                        ->join('tanggungan','detail_tanggungan.tanggungan','=','tanggungan.id_tanggungan')
                                                        ->join('jenis_tanggungan','tanggungan.jenis_tanggungan','=','jenis_tanggungan.id_jenis_tanggungan')
                                                        ->where('detail_tanggungan',$id_detail_tanggungan)
                                                        ->get(),
        ]);

    }
    public function riwayatpembayarantanggungan(){

        $id = Auth::user()->id;
        $sum = DB::select('select sum(nominal_pembayaran) as total from pembayaran_tanggungan where user = ? and date(waktu_bayar) = date(?)', [$id, now()]);
        $dataAdmin = DB::select('select * from pembayaran_tanggungan pt inner join users u on pt.user = u.id 
        inner join detail_tanggungan dt on pt.detail_tanggungan = dt.id_detail_tanggungan 
        inner join siswa s on dt.siswa = s.id_siswa
        inner join jurusan j on s.jurusan = j.id_jurusan
        inner join kelas k on s.kelas = k.id_kelas
        inner join tanggungan t on dt.tanggungan = t.id_tanggungan
        inner join jenis_tanggungan jt on t.jenis_tanggungan = jt.id_jenis_tanggungan
        where pt.user = ? and date(pt.waktu_bayar) = date(?)', [$id,  now()]);


        return view('tanggungan/history_tanggungan/index',[
            'getdatapembayaran' => PembayarantanggunganModel::join('users','pembayaran_tanggungan.user','=','users.id')
                                                        ->join('detail_tanggungan','pembayaran_tanggungan.detail_tanggungan','=','detail_tanggungan.id_detail_tanggungan')
                                                        ->join('siswa','detail_tanggungan.siswa','=','siswa.id_siswa')
                                                        ->join('jurusan','siswa.jurusan','=','jurusan.id_jurusan')
                                                        ->join('kelas','siswa.kelas','=','kelas.id_kelas')
                                                        ->join('tanggungan','detail_tanggungan.tanggungan','=','tanggungan.id_tanggungan')
                                                        ->join('jenis_tanggungan','tanggungan.jenis_tanggungan','=','jenis_tanggungan.id_jenis_tanggungan')
                                                        ->orderBy('waktu_bayar', 'desc')
                                                        ->get(),
            'dataadmin' => $dataAdmin,
            'total' => PembayarantanggunganModel::sum('nominal_pembayaran'),
            'totaladmin' => $sum[0]->total
        ]);

    }

    public function filriwayatpembayarantanggungan()
    {
        $id = Auth::user()->id;
        $sum = DB::select('select sum(nominal_pembayaran) as total from pembayaran_tanggungan where user = ? and date(waktu_bayar) = date(?)', [$id, request()->waktu_pembayaran]);
        $dataAdmin = DB::select('select * from pembayaran_tanggungan pt inner join users u on pt.user = u.id 
        inner join detail_tanggungan dt on pt.detail_tanggungan = dt.id_detail_tanggungan 
        inner join siswa s on dt.siswa = s.id_siswa
        inner join jurusan j on s.jurusan = j.id_jurusan
        inner join kelas k on s.kelas = k.id_kelas
        inner join tanggungan t on dt.tanggungan = t.id_tanggungan
        inner join jenis_tanggungan jt on t.jenis_tanggungan = jt.id_jenis_tanggungan
        where pt.user = ? and date(pt.waktu_bayar) = date(?)', [$id,  request()->waktu_pembayaran]);


        return view('tanggungan/history_tanggungan/index',[
            'getdatapembayaran' => PembayarantanggunganModel::join('users','pembayaran_tanggungan.user','=','users.id')
                                                        ->join('detail_tanggungan','pembayaran_tanggungan.detail_tanggungan','=','detail_tanggungan.id_detail_tanggungan')
                                                        ->join('siswa','detail_tanggungan.siswa','=','siswa.id_siswa')
                                                        ->join('jurusan','siswa.jurusan','=','jurusan.id_jurusan')
                                                        ->join('kelas','siswa.kelas','=','kelas.id_kelas')
                                                        ->join('tanggungan','detail_tanggungan.tanggungan','=','tanggungan.id_tanggungan')
                                                        ->join('jenis_tanggungan','tanggungan.jenis_tanggungan','=','jenis_tanggungan.id_jenis_tanggungan')
                                                        ->orderBy('waktu_bayar', 'desc')
                                                        ->get(),
            'dataadmin' => $dataAdmin,
            'total' => PembayarantanggunganModel::sum('nominal_pembayaran'),
            'totaladmin' => $sum[0]->total
        ]);
    }
    
    public function riwayatpembayaranspp(){
        // $totaladmin = DB::select('select * from pembayaran_spp where user = ? and date(waktu_pembayaran) = date(?)', [5, now()]);
        $id = Auth::user()->id;
        $sum = DB::select('select sum(nominal_pembayaran) as total from pembayaran_spp where user = ? and date(waktu_pembayaran) = date(?)', [$id, now()]);
        $dataAdmin = DB::select('select * from pembayaran_spp ps inner join users u on ps.user = u.id inner join
        detail_spp ds on ps.detail_spp = ds.id_detail_spp inner join siswa s on ds.siswa = s.id_siswa inner join jurusan j on s.jurusan = j.id_jurusan inner join kelas k on s.kelas = k.id_kelas where ps.user = ? and date(ps.waktu_pembayaran) = date(?)', [$id, now()]);
        // $users = DB::select('select * from users where active = ?', [1]);
        // dd($dataAdmin);        
        return view('spp/history_spp/index',[
            'getdatapembayaran' => PembayaransppModel::join('users','pembayaran_spp.user','=','users.id')
                                                        ->join('detail_spp','pembayaran_spp.detail_spp','=','detail_spp.id_detail_spp')
                                                        ->join('siswa','detail_spp.siswa','=','siswa.id_siswa')
                                                        ->join('jurusan','siswa.jurusan','=','jurusan.id_jurusan')
                                                        ->join('kelas','siswa.kelas','=','kelas.id_kelas')
                                                        ->orderBy('waktu_pembayaran','desc')
                                                        ->get(),

            'dataadmin' => $dataAdmin,

            'total' => PembayaransppModel::sum('nominal_pembayaran'),             
            'totaladmin' => $sum[0]->total
        ]);

    }

    public function filriwayatpembayaranspp(){
        // $totaladmin = DB::select('select * from pembayaran_spp where user = ? and date(waktu_pembayaran) = date(?)', [5, now()]);
        $id = Auth::user()->id;
        $sum = DB::select('select sum(nominal_pembayaran) as total from pembayaran_spp where user = ? and date(waktu_pembayaran) = date(?)', [$id,  request()->waktu_pembayaran]);
        $dataAdmin = DB::select('select * from pembayaran_spp ps inner join users u on ps.user = u.id inner join
        detail_spp ds on ps.detail_spp = ds.id_detail_spp inner join siswa s on ds.siswa = s.id_siswa inner join jurusan j on s.jurusan = j.id_jurusan inner join kelas k on s.kelas = k.id_kelas where ps.user = ? and date(ps.waktu_pembayaran) = date(?)', [$id, request()->waktu_pembayaran]);
        // $users = DB::select('select * from users where active = ?', [1]);
        // dd($dataAdmin);        
        return view('spp/history_spp/index',[
            'getdatapembayaran' => PembayaransppModel::join('users','pembayaran_spp.user','=','users.id')
                                                        ->join('detail_spp','pembayaran_spp.detail_spp','=','detail_spp.id_detail_spp')
                                                        ->join('siswa','detail_spp.siswa','=','siswa.id_siswa')
                                                        ->join('jurusan','siswa.jurusan','=','jurusan.id_jurusan')
                                                        ->join('kelas','siswa.kelas','=','kelas.id_kelas')
                                                        ->orderBy('waktu_pembayaran','desc')
                                                        ->get(),

            'dataadmin' => $dataAdmin,

            'total' => PembayaransppModel::sum('nominal_pembayaran'),             
            'totaladmin' => $sum[0]->total
        ]);

    }

    public function import(Request $request)
    {
        $validatedData = $request->validate([

            'file' => 'required',

        ]);

        Excel::import(new SiswaImport,$request->file('file'));
        alert()->success('Bberhasil import siswa ', 'Berhasil!');
        return redirect('siswa')->with('pesan', 'Berhasil Import Siswa');
    }
    public function cek(){
    
        return view('siswa/data_siswa/cek',[
            
            'getdatasiswa' => DetailsppModel:: join ('siswa','siswa.id_siswa','=','detail_spp.siswa')
                            ->select('nama', DB::raw('COUNT(id_detail_spp) as totalspp'), DB::raw('SUM(selisih_spp) as jumlah'),'nis','tingkatan_kelas','nomor_kelas','nama_jurusan')
                            ->groupBy('nama','nis','tingkatan_kelas','nomor_kelas','nama_jurusan')
                            ->join('jurusan','siswa.jurusan','=','jurusan.id_jurusan')
                            ->join('kelas','siswa.kelas','=','kelas.id_kelas')
                            ->join('tipe_siswa','siswa.tipe_siswa','=','tipe_siswa.id_tipe_siswa')
                            ->where('jurusan','=',request()->jurusan )
                            ->where('tingkatan_kelas','=', Request()->tingkatan_kelas)
                            ->where('nomor_kelas','=',Request()->nomor_kelas)
                            ->where('tipe_siswa','=',1)
                            ->get(),
            
            'total' => DetailsppModel:: join ('siswa','siswa.id_siswa','=','detail_spp.siswa')
                            ->join('jurusan','siswa.jurusan','=','jurusan.id_jurusan')
                            ->join('kelas','siswa.kelas','=','kelas.id_kelas')
                            ->join('tipe_siswa','siswa.tipe_siswa','=','tipe_siswa.id_tipe_siswa')
                            ->where('jurusan','=',request()->jurusan )
                            ->where('tingkatan_kelas','=', Request()->tingkatan_kelas)
                            ->where('nomor_kelas','=',Request()->nomor_kelas)
                            ->where('tipe_siswa','=',1)
                            ->sum('selisih_spp'),
            
        ]);
    }
    
    public function cektanggungan(){
    
        return view('siswa/data_siswa/cek_tanggungan',[
            
            'getdatasiswa' => DetailtanggunganModel:: join ('siswa','siswa.id_siswa','=','detail_tanggungan.siswa')
                        
                            ->select('nama',  DB::raw('SUM(selisih_tanggungan) as jumlah'),'nis','tingkatan_kelas','nomor_kelas','nama_jurusan')
                            ->groupBy('nama','nis','tingkatan_kelas','nomor_kelas','nama_jurusan')
                            ->join('jurusan','siswa.jurusan','=','jurusan.id_jurusan')
                            ->join('kelas','siswa.kelas','=','kelas.id_kelas')
                            ->join('tipe_siswa','siswa.tipe_siswa','=','tipe_siswa.id_tipe_siswa')
                            ->where('jurusan','=',request()->jurusan )
                            ->where('tingkatan_kelas','=', Request()->tingkatan_kelas)
                            ->where('nomor_kelas','=',Request()->nomor_kelas)
                            ->where('tipe_siswa','=',1)
                            ->get(),
            
            'total' => DetailtanggunganModel:: join ('siswa','siswa.id_siswa','=','detail_tanggungan.siswa')
                            ->join('jurusan','siswa.jurusan','=','jurusan.id_jurusan')
                            ->join('kelas','siswa.kelas','=','kelas.id_kelas')
                            ->join('tipe_siswa','siswa.tipe_siswa','=','tipe_siswa.id_tipe_siswa')
                            ->where('jurusan','=',request()->jurusan )
                            ->where('tingkatan_kelas','=', Request()->tingkatan_kelas)
                            ->where('nomor_kelas','=',Request()->nomor_kelas)
                            ->where('tipe_siswa','=',1)
                            ->sum('selisih_tanggungan'),
            
        ]);
    }

    
}
