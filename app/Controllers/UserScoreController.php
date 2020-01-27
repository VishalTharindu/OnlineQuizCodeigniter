<?php namespace App\Controllers;
 use App\Models\QuizModel as QuizModel;
 $validation =  \Config\Services::validation();
 

class UserScoreController extends BaseController
{
    public function showuserquizinfo()
    {
        $session = \Config\Services::session($config);
        $UserId = $session->get('id');
        
        $UserScore = new \App\Models\UserScore();
        $userscores = $UserScore->where('user_id', $UserId)->findAll();
        
        // return view('UserScore/userQuiz',['data'=>$quiz]);
        return view('UserScore/userParticipating',['data'=>$userscores]);
    }

    public function showquiz()
    {
        $session = \Config\Services::session($config);
        $UserId = $session->get('id');
        
        $QuizModel = new \App\Models\QuizModel();
        $quiz = $QuizModel->where('userid ', $UserId)->findAll();
        
        return view('UserScore/userQuiz',['data'=>$quiz]);
    }

    public function showrank()
    {
        $UserModel = new \App\Models\UserModel();
        $userRank = $UserModel->orderBy('rank', 'DESC')->findAll();
        // dd($userRank);

        return view('UserScore/UserRank',['data'=>$userRank]);
    }

}