<?php namespace App\Controllers;
 use App\Models\QuizModel as QuizModel;
 $validation =  \Config\Services::validation();
 

class UserScoreController extends BaseController
{
    public function showuserquizinfo()
    {
        return view('UserScore/userParticipating');
    }
}