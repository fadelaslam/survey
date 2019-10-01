<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Responden;
use DB;

class KapalController extends Controller
{
    public function loginKapal()
    {
        return view('kapal');
    }

    public function sourceKapal(Request $request)
    {
        $responden = Responden::where(['code' => $request->code])->firstOrFail();

        if($responden != null){
            session(['respondenId'=>$responden->id]);
            return view('/responden/kapal/welcome_survey');
        };
        return redirect('/');
    }

    public function startSurvey()
    {

        if(session()->get('respondenId') == null){
            return redirect('/');
        };

        return view ('/responden/kapal/survey');
    }

    public function submitSurveyKapal()
    {
        if(session()->get('respondenId') == null){
            return redirect('/');
        };
        $respondenId = session()->get('respondenId');
        $responden = Responden::where(['id' => $respondenId])->firstOrFail();

        DB::table('report')->insert([
            'cabang_id' => $responden->cabang_id,
            'jenis_id' => 3,
            'responden_id' => $responden->id
        ]);
        
        return view('/responden/kapal/sukses');
    }

    public function logout()
    {
        if(session()->get('respondenId') == null){
            return redirect('/');
        };
        session()->flush();
        return redirect('/');
    }
}
