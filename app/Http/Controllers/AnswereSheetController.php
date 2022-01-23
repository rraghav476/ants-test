<?php

namespace App\Http\Controllers;

use App\Models\answereSheet;
use App\Models\questionBank;
use App\Models\userAttempt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AnswereSheetController extends Controller
{
    public function submit(Request $request){
        $answer = $request->except('_token');
        $totalNo = 0;
        foreach($answer as $key => $val){
            $tempRes = explode('_',$key);
            $queAndUser = ["question_id" => $tempRes[1],
            "user_id"=>Auth::user()->id];
            $answer = ["answer" => $val];
            $question = questionBank::find($tempRes[1]);
            if($question->answer == $val){
                $totalNo+=1;
            }
            answereSheet::updateOrcreate($queAndUser,$answer);

        }
        $userAttempt = userAttempt::where(["user_id"=>Auth::user()->id])->get()[0];
        if($totalNo >1){
            $level = $userAttempt->level+1;
            $userAttempt->level = (string) $level;
            $userAttempt->attempt = '0';
            $userAttempt->save();
            return view('dashboard',['userInfo'=>$userAttempt])->with("passmsg","congrats you are promoted to level ".$level);
        }
        return view('dashboard',['userInfo'=>$userAttempt])->with("failmsg","please try again");

    }
}
