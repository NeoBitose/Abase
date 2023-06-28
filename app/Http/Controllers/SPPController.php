<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SppModel;
use App\Models\PembayaransppModel;

class SPPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('spp/index',[
            'getdataspp' => SppModel::all(),
        ]);
    }

    public function filter(Request $request){
        
        $dari = $request->dari;
        $sampai = $request->sampai;
        return view('spp/history_spp/index',[
            'getdatapembayaran' => PembayaransppModel::join('users','pembayaran_spp.user','=','users.id')
                                                        ->join('detail_spp','pembayaran_spp.detail_spp','=','detail_spp.id_detail_spp')
                                                        ->join('siswa','detail_spp.siswa','=','siswa.id_siswa')
                                                        ->join('jurusan','siswa.jurusan','=','jurusan.id_jurusan')
                                                        ->join('kelas','siswa.kelas','=','kelas.id_kelas')
                                                        ->orderBy('waktu_pembayaran','desc')
                                                        ->whereBetween('waktu_pembayaran',[$dari,$sampai])
                                                        ->get(),
            'total' => PembayaransppModel:: whereBetween('waktu_pembayaran',[$dari,$sampai])
                                                    ->sum('nominal_pembayaran'),
        ]);
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
        $data = [
            'nama_spp' => "SPP Tahun ". + $request->tahun,
            'nominal_spp' => $request->nominal_spp,
            'tahun' => $request->tahun,
        ];
        

        SppModel::create($data);

        alert()->success('Berhasil Menambahkan SPP', 'Berhasil!');
        return redirect('spp')->with('pesan','Berhasil Menambahkan SPP');
        
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
