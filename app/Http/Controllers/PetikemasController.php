<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Responden;
use DB;

class PetikemasController extends Controller
{
    public function loginPetikemas()
    {
        return view('petikemas');
    }

    public function sourcePetikemas(Request $request)
    {
        $responden = Responden::where(['code' => $request->code])->firstOrFail();

        if($responden != null){
            session(['respondenId'=>$responden->id]);
            return view('/responden/petikemas/welcome_survey');
        } 
        return redirect('/');
    }

    public function startSurvey()
    {

        if(session()->get('respondenId') == null){
            return redirect('/');
        };

        return view ('/responden/petikemas/survey');
    }

    public function submitSurveyPetikemas()
    {
        if(session()->get('respondenId') == null){
            return redirect('/');
        };
        $respondenId = session()->get('respondenId');
        $responden = Responden::where(['id' => $respondenId])->firstOrFail();

        DB::table('report')->insert([
            'cabang_id' => $responden->cabang_id,
            'jenis_id' => 1,
            'responden_id' => $responden->id
        ]);
        
        return view('/responden/petikemas/end_survey');
    }

    public function logout()
    {
        session()->flush();
        return redirect('/');
    }
}
