<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\responden;

class KapalController extends Controller
{
    public function loginKapal()
    {
        return view('kapal');
    }

    public function sourceKapal(Request $request)
    {
        $user = Responden::where(['code' => $request->code])->first();

        if(!auth()->login($user)){
            return view('/responden/kapal/welcome_survey');
        } 
        return redirect('/');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
