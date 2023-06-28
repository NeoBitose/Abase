<?php

namespace App\Http\Controllers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DetailsppModel;
use App\Models\DetailtanggunganModel;
use App\Models\SiswaModel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', [
            'istable' => false,
            'totalspp' => DetailsppModel::get()->sum('selisih_spp'),
            'totsiswa' => SiswaModel::get()->count('id_siswa'),
            'totaltanggungan' => DetailtanggunganModel::get()->sum('selisih_tanggungan'),
        ]);
    }

    public function search()
    {
        Request()->validate([
            'nisn'=>'required',
        ], [
            'nisn.required' => 'wajib diisi',
            'nisn.min' => 'nisn minimal 10 karakter'
        ]);

        $nisn_siswa = DB::table('siswa')->select('nisn')->where('nisn', '=', request()->nisn)->get();

        // dd(request()->nisn);
        // dd($nisn_siswa);


        if(count($nisn_siswa) == 1){

            $getid = DB::table('siswa')
                        -> where('nisn', '=', Request()->nisn)
                        ->get('id_siswa');

            $nama = DB::table('siswa')
                        ->where('id_siswa', '=', $getid[0]->id_siswa)
                        ->get('nama');

            $tingkat = DB::table('siswa')
                            ->join('kelas','siswa.kelas','=','kelas.id_kelas')
                            ->where('id_siswa', '=', $getid[0]->id_siswa)
                            ->get('tingkatan_kelas');

            $jurusan = DB::table('siswa')
                            ->join('jurusan','siswa.jurusan','=','jurusan.id_jurusan')
                            ->where('id_siswa', '=', $getid[0]->id_siswa)
                            ->get('nama_jurusan');

            $no_kelas = DB::table('siswa')
                            ->join('kelas','siswa.kelas','=','kelas.id_kelas')
                            ->where('id_siswa', '=', $getid[0]->id_siswa)
                            ->get('nomor_kelas');

            $spp = DB::table('detail_spp')
                        ->where('siswa', '=', $getid[0]->id_siswa)
                        ->where('status_bayar', '=', 3)
                        ->get('bulan')
                        ->count();

            $tanggungan = DB::table('detail_tanggungan')
                            ->where('siswa', '=', $getid[0]->id_siswa)
                            ->where('status_bayar', '=', 3)
                            ->get()
                            ->sum('selisih_tanggungan');

            $status = DB::table('siswa')
                            ->join('tipe_siswa','siswa.tipe_siswa','=','tipe_siswa.id_tipe_siswa')
                            ->where('id_siswa', '=', $getid[0]->id_siswa)
                            ->get('tipe');

            return view('home',[

                'id' => $getid[0]->id_siswa,
                'nisn' => Request()->nisn,
                'nm' => $nama[0]->nama,
                'tk' => $tingkat[0]->tingkatan_kelas,
                'jr' => $jurusan[0]->nama_jurusan,
                'nk' => $no_kelas[0]->nomor_kelas,
                'tg' => $tanggungan,
                'ss' => $spp,
                'st' => $status[0]->tipe,
                'totalspp' => DetailsppModel::get()->sum('selisih_spp'),
                'totsiswa' => SiswaModel::get()->count('id_siswa'),
                'totaltanggungan' => DetailtanggunganModel::get()->sum('selisih_tanggungan'),

                'istable' => true
                ]);
        }

        else {
        alert()->error('Siswa tidak dapat ditemukan', 'Gagal!');
        return redirect('/home');
        }
    }

}
