<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jenis;
use App\Cabang;
use App\Report;
use DB;

class ReportController extends Controller
{
    public function index()
    {
        $report = Jenis::all();
        return view('report', ['report' => $report]);
    }

    public function dataPetikemas()
    {   
        $data = Report::with('jenis','cabang')->where('jenis_id',1)->select('*', DB::raw('count(id) as total'))->groupBy('cabang_id')->get();

        return response()->json($data);
    }

    public function dataNonPetikemas()
    {   
        $data = Report::with('jenis','cabang')->where('jenis_id',2)->select('*', DB::raw('count(id) as total'))->groupBy('cabang_id')->get();

        return response()->json($data);
    }

    public function dataKapal()
    {   
        $data = Report::with('jenis','cabang')->where('jenis_id',3)->select('*', DB::raw('count(id) as total'))->groupBy('cabang_id')->get();

        return response()->json($data);
    }

    public function dataPenumpang()
    {   
        $data = Report::with('jenis','cabang')->where('jenis_id',4)->select('*', DB::raw('count(id) as total'))->groupBy('cabang_id')->get();

        return response()->json($data);
    }
}
