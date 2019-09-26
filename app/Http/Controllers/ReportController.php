<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jenis;

class ReportController extends Controller
{
    public function index()
    {
        $report = Jenis::all();
        return view('report', ['report' => $report]);
    }
}
