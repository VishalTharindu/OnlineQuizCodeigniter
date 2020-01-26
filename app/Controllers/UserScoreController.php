<?php namespace App\Controllers;
 use App\Models\QuizModel as QuizModel;
 $validation =  \Config\Services::validation();
 

class UserScoreController extends BaseController
{
    public function showuserquizinfo()
    {
        return view('UserScore/userParticipating');
    }

    public function showquiz()
    {
        $session = \Config\Services::session($config);
        $UserId = $session->get('id');
        
        $QuizModel = new \App\Models\QuizModel();
        $quiz = $QuizModel->where('userid ', $UserId)->findAll();
        
        return view('UserScore/userQuiz',['data'=>$quiz]);
    }
}