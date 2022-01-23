<?php

namespace App\Http\Controllers;

use App\Models\questionBank;
use App\Models\userAttempt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAttemptController extends Controller
{
    public function index(){
        $user = Auth::user();
        $userInfo = userAttempt::find($user->id);
        if(!$userInfo){
            userAttempt::create(["user_id"=>$user->id]);
            $userInfo = userAttempt::find($user->id);
        }
        return view('dashboard',['userInfo'=>$userInfo]);
    }

    public function startTest(){
        $user = Auth::user();
        $userInfo = userAttempt::find($user->id);
        $attempt = $userInfo->attempt + 1;
        $userInfo->attempt = (string)$attempt;
        $userInfo->save();
        $question = questionBank::where(['level'=>$userInfo->level])->get();
        return view('questionBank',['question'=>$question]);
    }
}
