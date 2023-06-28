<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelulusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('siswa.kelulusan.index',[
            'sortsiswa' => DB::table('siswa')
                                ->join('jurusan','siswa.jurusan','=','jurusan.id_jurusan')
                                ->join('kelas','siswa.kelas','=','kelas.id_kelas')
                                ->join('tipe_siswa','siswa.tipe_siswa','=','tipe_siswa.id_tipe_siswa')
                                ->get(),
            'istable' => false,
            'error' => false,
            'success' => false
        ]);
    }

    public function kelulusan()
    {
        return view('siswa.kelulusan.index',[
            'datasiswa' => DB::table('siswa')
                                ->join('jurusan','siswa.jurusan','=','jurusan.id_jurusan')
                                ->join('kelas','siswa.kelas','=','kelas.id_kelas')
                                ->join('tipe_siswa','siswa.tipe_siswa','=','tipe_siswa.id_tipe_siswa')
                                ->where('jurusan','=',request()->jurusan )
                                ->where('tingkatan_kelas','=', Request()->tingkatan_kelas)
                                ->where('nomor_kelas','=',Request()->nomor_kelas)
                                ->where('tipe_siswa','=',1)
                                ->get(),
            'istable' => true,
            
        ]);
    }

    public function actkelulusan()
    {
        $id_siswa = Request()->id_siswa;

        if(is_null($id_siswa))
        {
            alert()->error('Siswa Belum Dicentang', 'Gagal!');
            return view('siswa.kelulusan.index',[                
                'istable' => false,
            ]);
        }
        else
        {

            for($a=0; $a<count($id_siswa); $a++)
            {
                $id = (int)$id_siswa[$a];

                DB::table('siswa')
                    ->join('tipe_siswa','siswa.tipe_siswa','=','tipe_siswa.id_tipe_siswa')
                    ->where('id_siswa','=', $id)
                    ->update(['tipe_siswa' => 2]);


            }

            alert()->success('Proses Berhasil', 'Berhasil!');

            return view('siswa.kelulusan.index',[

                        'error' => false,
                        'success' => true,
                        'msg' => "data berhasil",
                        'istable' => false,
                    ]);
        }
    }

    public function nonekelulusan()
    {
        $id_siswa = Request()->idsiswa;

        if(is_null($id_siswa))
        {
            alert()->error('Siswa Belum Dicentang', 'Gagal!');

            return view('siswa.kelulusan.index',[
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
            
            return view('siswa.kelulusan.index',[
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
