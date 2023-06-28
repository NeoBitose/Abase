<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KenaikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('siswa.kenaikan.index',[
            'sortsiswa' => DB::table('siswa')
                                ->join('jurusan','siswa.jurusan','=','jurusan.id_jurusan')
                                ->join('kelas','siswa.kelas','=','kelas.id_kelas')
                                ->get(),
            'datasiswa' => DB::table('siswa')
                                ->join('jurusan','siswa.jurusan','=','jurusan.id_jurusan')
                                ->join('kelas','siswa.kelas','=','kelas.id_kelas')
                                ->join('tipe_siswa','siswa.tipe_siswa','=','tipe_siswa.id_tipe_siswa')
                                ->where('jurusan','=',request()->jurusan )
                                ->where('tingkatan_kelas','=', Request()->tingkatan_kelas)
                                ->where('nomor_kelas','=',Request()->nomor_kelas)
                                ->where('tipe_siswa','=',1)
                                ->where('tipe_siswa','=',1)
                                ->get(),
            'istable' => false,
            'error' => false,
            'success' => false

        ]);
    }

    public function kenaikan()
    {
        return view('siswa.kenaikan.index',[

        'datasiswa' => DB::table('siswa')
                            ->join('jurusan','siswa.jurusan','=','jurusan.id_jurusan')
                            ->join('kelas','siswa.kelas','=','kelas.id_kelas')
                            ->join('tipe_siswa','siswa.tipe_siswa','=','tipe_siswa.id_tipe_siswa')
                            ->where('jurusan','=',request()->jurusan )
                            ->where('tingkatan_kelas','=', Request()->tingkatan_kelas)
                            ->where('nomor_kelas','=',Request()->nomor_kelas)
                            ->where('tipe_siswa','=',1)
                            ->where('tipe_siswa','=',1)
                            ->get(),
        'istable' => true,
        'no' => 0,
        'error' => false,
        'success' => false

        ]);
    }

    public function actkenaikan()
    {
        $id_siswa = Request()->id_siswa;
        $tingkatan_kelas = Request()->tingkat;
        $no_kelas = Request()->nomor;
        $id_update = 0;

        // dd(Request()->id_siswa, Request()->id_jurusan, Request()->tingkat) ;

        if(is_null($id_siswa))
        {
            alert()->error('Siswa Belum Dicentang', 'Gagal!');

            return view('siswa.kenaikan.index',[
                'error' => true,
                'success' => false,
                'msg' => "siswa belum dicentang",
                'istable' => false,
            ]);
        }
        else{

            for($a=0; $a<count($id_siswa); $a++)
            {
                $no_kelas = DB::table('siswa')
                        ->join('kelas','siswa.kelas','=','kelas.id_kelas')
                        ->where('id_siswa', '=', Request()->id_siswa[$a])
                        ->get('nomor_kelas');

                $tingkatan_kelas = DB::table('siswa')
                                        ->join('kelas','siswa.kelas','=','kelas.id_kelas')
                                        ->where('id_siswa', '=', Request()->id_siswa[$a])
                                        ->get('tingkatan_kelas');

                // $id = (int)$id_siswa;
                // $no = $no_kelas->nomor_kelas;
                // $tk = $tingkatan_kelas->tingkatan_kelas;

                // dd($id_siswa[$a], $no_kelas[0]->nomor_kelas, $tingkatan_kelas[0]->tingkatan_kelas);

                if( $tingkatan_kelas[0]->tingkatan_kelas==10){

                    $insert = 11;
                    $id_update = DB::table('kelas')
                                        ->where('tingkatan_kelas', '=', $insert)
                                        ->where('nomor_kelas', '=', $no_kelas[0]->nomor_kelas)
                                        ->get('id_kelas');

                                        // dd( $id_update[$a]->id_kelas);

                    DB::table('siswa')
                        ->where('id_siswa','=', Request()->id_siswa[$a])
                        ->update(['kelas' => $id_update[0]->id_kelas]);
                }

                elseif( $tingkatan_kelas[0]->tingkatan_kelas==11){

                    $insert = 12;
                    $id_update = DB::table('kelas')
                                        ->where('tingkatan_kelas', '=', $insert)
                                        ->where('nomor_kelas', '=', $no_kelas[0]->nomor_kelas)
                                        ->get('id_kelas');

                                        // dd( $id_update[$a]->id_kelas);
                    DB::table('siswa')
                        ->where('id_siswa','=', Request()->id_siswa[$a])
                        ->update(['kelas' => $id_update[0]->id_kelas]);
                }
            }

            alert()->success('Proses Berhasil', 'Berhasil!');

            return view('siswa.kenaikan.index',[

                        'error' => false,
                        'success' => true,
                        'msg' => "data berhasil",
                        'istable' => false,
                    ]);
        }
    }

    public function nonekenaikan()
    {
        $id_siswa = Request()->idsiswa;

        if(is_null($id_siswa))
        {
            alert()->error('Siswa Belum Dicentang', 'Gagal!');

            return view('siswa.kenaikan.index',[
                'error' => true,
                'success' => false,
                'msg' => "siswa belum dicentang",
                'istable' => false,
            ]);
        }

        else
        {
            for($a=0; $a<count($id_siswa); $a++)
            {
                // $id = (int)$id_siswa[$a];
                $id = $id_siswa[$a];

                DB::select('CALL sp_tidak_naik(?)',  array($id));
            }

            alert()->success('Proses Berhasil', 'Berhasil!');
            
            return view('siswa.kenaikan.index',[
                'error' => false,
                'success' => true,
                'msg' => "data berhasil",
                'istable' => false,
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
