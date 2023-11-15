<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Alert;

class RequestController extends Controller
{
    public function index(){
        $request = DB::table('permohonans')->orderBy('tanggal', 'desc')->get();
        
        return view('menu.permintaan.laporanpermohonan', ['permohonan' => $request]);
    }

    public function store(Request $request){
        DB::table('permohonans')->insert([
            'tanggal' => Carbon::createFromFormat('d-m-Y', $request->tanggal),
            'pukul' => $request->pukul,
            'namapemohon' => $request->userselect,
            'unitkerja' => $request->unitkerja,
            'staffdimohon' => $request->staffselect,
            'masalahdihadapi' => $request->masalah,
            'status' => $request->status,
            'created_at' => Carbon::now('GMT+7')->toDateTimeString(),
            'updated_at' => Carbon::now('GMT+7')->toDateTimeString(),
        ]);
        
        Alert::success('Laporan Terkirim', 'Laporan Telah dikirim dan siap ditindak lanjut');

        return redirect('/support');
    }
}