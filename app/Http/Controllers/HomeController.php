<?php

namespace App\Http\Controllers;

use App\Models\Infotanah;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('filterMap');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $infotanah = \App\Models\Infotanah::all();
        $pemiliklahan = \App\Models\Pemiliklahan::all();
        $desa = \App\Models\Desa::all();
        $potensi = \App\Models\Potensi::all();
        return view('home', compact('infotanah', 'pemiliklahan', 'desa', 'potensi'));
    }

    public function filterMap($jenis){
        $infoTanah = DB::table('infotanahs as i')
        ->select('p.batas_lahan','i.produksi',
        'i.jenis_tnm','i.id',
        'i.produktivitas','d.nama_desa','pl.nama_pemiliklahan')
        ->join('potensis as p', 'p.infotanah_id', 'i.id')
        ->join('pemiliklahans as pl', 'p.pemiliklahan_id', 'pl.id')
        ->join('desas as d', 'd.id', 'p.desa_id');
        if ($jenis != 'semua') {
            $infoTanah = $infoTanah->where('i.jenis_tnm', $jenis);
        }
        $infoTanah = $infoTanah->get();

       return response()->json([
            'status'=>'success',
            'data'=>$infoTanah,
       ]);
    }
}
