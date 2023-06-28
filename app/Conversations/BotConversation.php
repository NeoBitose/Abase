<?php

namespace App\Conversations;

use App\Models\SiswaModel;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use Illuminate\Support\Facades\DB;
use mysqli;

class BotConversation extends Conversation{
    
    public function askNisn(){
        $this->ask('Silahkan Masukkan NISN Siswa', function(Answer $answer){
            $nisn = $answer->getText();
            $this->jawaban($nisn);
        });
    }

    public function jawaban($nisn)
    {
        $hasil = $this->getData($nisn);
        $this->say($hasil);
    }

    public function getData($nisn)
    {
        $id = DB::table('siswa')
            ->where('nisn', '=', $nisn)
            ->select('id_siswa')
            ->get();
            
        if(count($id) > 0){
            $ids = $id[0]->id_siswa;

            $jawab = DB::table('siswa')
                ->where('id_siswa', $ids)
                ->get();
            $jawab->spp_satu = DB::table('detail_spp')
                ->where('siswa', $ids)
                ->where('status_bayar', 1)
                ->get();
            $jawab->spp_tiga = DB::table('detail_spp')
                ->where('siswa', $ids)
                ->where('status_bayar', 3)
                ->get();
            $jawab->spp_dua = DB::table('detail_spp')
                ->where('siswa', $ids)
                ->where('status_bayar', 2)
                ->get();
            $jawab->tanggungan = DB::table('tanggungan')
                ->join('detail_tanggungan', 'tanggungan.id_tanggungan', '=', 'detail_tanggungan.tanggungan')
                ->where('detail_tanggungan.siswa', $ids)
                ->whereIn('detail_tanggungan.status_bayar', [2,3])
                ->join('jenis_tanggungan', 'tanggungan.jenis_tanggungan', '=', 'jenis_tanggungan.id_jenis_tanggungan')
                ->select(
                    'jenis_tanggungan.nama_jenis_tanggungan',
                    'detail_tanggungan.selisih_tanggungan',
                    'jenis_tanggungan.nominal_kls_10',
                    'jenis_tanggungan.nominal_kls_11',
                    'jenis_tanggungan.nominal_kls_12',
                )
                ->get();
            $jawab->data_spp = DB::table('detail_spp')
                ->where('siswa', $ids)
                ->join('data_spp', 'detail_spp.data_spp', '=', 'data_spp.id_data_spp')
                ->join('spp', 'data_spp.spp', '=', 'spp.id_spp')
                ->select(
                    'spp.nominal_spp'
                )
                ->get();
            $jawab->total_bayar = DB::table('pembayaran_tanggungan')
                ->join('detail_tanggungan', 'pembayaran_tanggungan.detail_tanggungan', '=', 'detail_tanggungan.id_detail_tanggungan')
                ->where('detail_tanggungan.siswa', $ids)
                ->select(
                    'pembayaran_tanggungan.nominal_pembayaran'
                )
                ->sum('pembayaran_tanggungan.nominal_pembayaran');
            $jawab->jumlah = DB::table('tanggungan')
                ->join('detail_tanggungan', 'tanggungan.id_tanggungan', '=', 'detail_tanggungan.tanggungan')
                ->where('detail_tanggungan.siswa', $ids)
                ->join('jenis_tanggungan', 'tanggungan.jenis_tanggungan', '=', 'jenis_tanggungan.id_jenis_tanggungan')
                ->select(
                    'jenis_tanggungan.nominal_kls_10',
                    'jenis_tanggungan.nominal_kls_11',
                    'jenis_tanggungan.nominal_kls_12',
                )
                ->sum(
                    'jenis_tanggungan.nominal_kls_10',
                    'jenis_tanggungan.nominal_kls_11',
                    'jenis_tanggungan.nominal_kls_12',
                );
            $jawab->dpp = DB::table('tanggungan')
                ->join('detail_tanggungan', 'tanggungan.id_tanggungan', '=', 'detail_tanggungan.tanggungan')
                ->where('detail_tanggungan.siswa', $ids)
                ->where('jangka_waktu', 1)
                ->whereIn('detail_tanggungan.status_bayar', [2,3])
                ->join('jenis_tanggungan', 'tanggungan.jenis_tanggungan', '=', 'jenis_tanggungan.id_jenis_tanggungan')
                ->select(
                    'jenis_tanggungan.nama_jenis_tanggungan',
                    'jenis_tanggungan.nominal_kls_10',
                    'jenis_tanggungan.nominal_kls_11',
                    'jenis_tanggungan.nominal_kls_12',
                    'detail_tanggungan.selisih_tanggungan'
                )
                ->get();
            $jawab->st = DB::table('tanggungan')
                ->join('detail_tanggungan', 'tanggungan.id_tanggungan', '=', 'detail_tanggungan.tanggungan')
                ->where('detail_tanggungan.siswa', $ids)
                ->where('jangka_waktu', 3)
                ->whereIn('detail_tanggungan.status_bayar', [2,3])
                ->join('jenis_tanggungan', 'tanggungan.jenis_tanggungan', '=', 'jenis_tanggungan.id_jenis_tanggungan')
                ->select(
                    'jenis_tanggungan.nama_jenis_tanggungan',
                    'jenis_tanggungan.nominal_kls_10',
                    'detail_tanggungan.selisih_tanggungan'
                )
                ->get();
            $jawab->ins = DB::table('tanggungan')
                ->join('detail_tanggungan', 'tanggungan.id_tanggungan', '=', 'detail_tanggungan.tanggungan')
                ->where('detail_tanggungan.siswa', $ids)
                ->where('jangka_waktu', 2)
                ->whereIn('detail_tanggungan.status_bayar', [2,3])
                ->join('jenis_tanggungan', 'tanggungan.jenis_tanggungan', '=', 'jenis_tanggungan.id_jenis_tanggungan')
                ->select(
                    'jenis_tanggungan.nama_jenis_tanggungan',
                    'jenis_tanggungan.nominal_kls_10',
                    'detail_tanggungan.selisih_tanggungan'
                )
                ->get();
            dd($jawab->dpp, $jawab->st, $jawab->ins);

            if(count($jawab->spp_satu) > 0){
                $spp1 = " sebanyak ". count($jawab->spp_satu) ." bulan";
            }
            else{
                $spp1 = ' 0 bulan';
            }

            if(count($jawab->dpp) > 0){
                for($i=0;$i<count($jawab->dpp);$i++){
                    $kls10 = "DPP untuk kelas 10 sejumlah Rp.".$jawab->dpp[$i]->nominal_kls_10.".";
                    if($jawab->dpp[$i]->nominal_kls_11 !== 0){
                        $kls11 = "\nDPP untuk kelas 11 sejumlah Rp.".$jawab->dpp[$i]->nominal_kls_11.".";
                    }
                    else{
                        $kls11 = "";
                    }

                    if($jawab->dpp[$i]->nominal_kls_12 !== 0){
                        $kls12 = "\nDPP untuk kelas 12 sejumlah Rp.".$jawab->dpp[$i]->nominal_kls_12.".";
                    }
                    else{
                        $kls12 = "";
                    }
                    $keluar[$i] = $kls10.$kls11.$kls12;
                }
            }
                
            if(count($jawab->st) > 0){
                for($i=0;$i<count($jawab->st);$i++){
                    $st = "Tanggungan Study Tour sebesar Rp.".$jawab->st[$i]->nominal_kls_10.".\n";
                }
            }
            else{
                $st = "";
            }

            if(count($jawab->ins) > 0){
                for($i=0;$i<count($jawab->ins);$i++){
                    $ins = "Tanggungan Insidental sebesar Rp.".$jawab->ins[$i]->nominal_kls_10.".\n\n";
                }
            }
            else{
                $ins = "";
            }

            $kalimat = "Siswa bernama ".ucwords($jawab[0]->nama).", telah membayar tanggungan sebesar Rp.".$jawab->total_bayar." dari total keseluruhan Rp.".$jawab->jumlah."\nDengan rincian:\n".implode("\n", $keluar)."\n".$st.$ins."Dan Siswa atas nama ".ucwords($jawab[0]->nama)." sudah membayar PSM".$spp1." dari ".count($jawab->spp_tiga)." bulan, dengan biaya PSM yang harus dibayarkan sejumlah Rp.".$jawab->data_spp[0]->nominal_spp."/bulan.";
            
            return $kalimat;
        }
        else{
            $kalimat = 'Siswa Tidak Dapat Ditemukan!';

            return $kalimat;
        }
    }
    
    public function run()
    {
        $this->askNisn();
    }
}