<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NonPetikemasController extends Controller
{
    public function loginNonPetikemas()
    {
        return view('petikemas');
    }

    public function sourceNonPetikemas(Request $request)
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

        return view ('/responden/non-petikemas/survey');
    }

    public function submitSurveyNonPetikemas()
    {
        if(session()->get('respondenId') == null){
            return redirect('/');
        };
        $respondenId = session()->get('respondenId');
        $responden = Responden::where(['id' => $respondenId])->firstOrFail();

        DB::table('report')->insert([
            'cabang_id' => $responden->cabang_id,
            'jenis_id' => 2,
            'responden_id' => $responden->id
        ]);
        
        return view('/responden/non-petikemas/end_survey');
    }

    public function logout()
    {
        session()->flush();
        return redirect('/');
    }
}
