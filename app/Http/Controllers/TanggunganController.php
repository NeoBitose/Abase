<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenistanggunganModel;
use App\Models\PembayarantanggunganModel;
use App\Models\DetailtanggunganModel;

class TanggunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tanggungan.index',[
            'getdatatanggungan' => JenistanggunganModel::join('jangka_waktu','jenis_tanggungan.jangka_waktu','=','jangka_waktu.id_jangka_waktu')
                                                        ->get(),
        ]);
    }


     public function filter(Request $request){
        $dari = $request->dari;
        $sampai = $request->sampai;
        return view('tanggungan/history_tanggungan/index',[
            'getdatapembayaran' => PembayarantanggunganModel::join('users','pembayaran_tanggungan.user','=','users.id')
                                                        ->join('detail_tanggungan','pembayaran_tanggungan.detail_tanggungan','=','detail_tanggungan.id_detail_tanggungan')
                                                        ->join('siswa','detail_tanggungan.siswa','=','siswa.id_siswa')
                                                        ->join('jurusan','siswa.jurusan','=','jurusan.id_jurusan')
                                                        ->join('kelas','siswa.kelas','=','kelas.id_kelas')
                                                        ->join('tanggungan','detail_tanggungan.tanggungan','=','tanggungan.id_tanggungan')
                                                        ->join('jenis_tanggungan','tanggungan.jenis_tanggungan','=','jenis_tanggungan.id_jenis_tanggungan')
                                                        ->orderBy('waktu_bayar','desc')
                                                        ->whereBetween('waktu_bayar',[$dari,$sampai])
                                                        ->get(),
            'total' => PembayarantanggunganModel:: whereBetween('waktu_bayar',[$dari,$sampai])
                                                    ->sum('nominal_pembayaran'),
        ]);
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pembayarantanggungan(Request $request)
    {



        $total = $request->selisih_tanggungan;
        $choice = array();
        $kelipatan = 100000;
        for ($i = 0; $i <= $total; $i += $kelipatan ) {
            $choice[] = $i;

            $sisa = $total - $i;

            if (($sisa / $kelipatan) < 1 && ($sisa / $kelipatan) > 0) {
                $choice[] = ($sisa + $i);
            }
        }

        if ($total <= 100000) {
            $choice = array();
            $kelipatan = 50000;
            for ($i = 0; $i <= $total; $i += $kelipatan ) {
                $choice[] = $i;

                $sisa = $total ;

                if (($sisa / $kelipatan) == 0) {
                    $choice[] = $sisa;
                }
            }

        }


        return view('tanggungan/pembayaran/index',[
            'getdatatanggungan' => DetailtanggunganModel::join('siswa','detail_tanggungan.siswa','=','siswa.id_siswa')
                                            ->join('tanggungan','detail_tanggungan.tanggungan','=','tanggungan.id_tanggungan')
                                            ->join('jenis_tanggungan','tanggungan.jenis_tanggungan','=','jenis_tanggungan.id_jenis_tanggungan')
                                            ->join('kelas','tanggungan.kelas','=','kelas.id_kelas')
                                            ->join('jurusan','tanggungan.jurusan','=','jurusan.id_jurusan')
                                            ->where('id_detail_tanggungan',$request->id_detail_tanggungan)
                                            ->get(),
            'kelipatan' => $choice,
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
        $data = $request->all();

        JenistanggunganModel::create($data);
        alert()->success('Berhasil menambahkan tanggungan', 'Berhasil!');
        return redirect('tanggungan')->with('pesan','Berhasil Menambahkan Tanggungan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
