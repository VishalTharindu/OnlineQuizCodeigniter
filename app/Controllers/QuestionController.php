<?php namespace App\Controllers;
 use App\Models\QuestionModel as QuestionModel;
 use App\Models\UserScore as UserScore;
 $validation =  \Config\Services::validation();

class QuestionController extends BaseController
{
	
	public function storequestion()
	{
		helper('alerts');
		helper('form');
		$question = new QuestionModel();

		helper(['form', 'url']);

			if (! $this->validate([
                'questionNo' => 'required',
				'question' => 'required|min_length[3]|max_length[255]',
				'fstanswer' => 'required',
				'secanswer' => 'required',
                'thranswer' => 'required',
                'frtanswer' => 'required',
                'correctAnswer' => 'required',
			]))
			{
				
				return view('/Quiz/addQuestion',[
						'validation' => $this->validator,
					]);
				// echo 'fail';
			}
			else
			{
				$question->save([
                    'quizNo' => $this->request->getVar('quizNo'),
					'questionNo' => $this->request->getVar('questionNo'),
					'question' => $this->request->getVar('question'),
					'fstanswer' => $this->request->getVar('fstanswer'),
					'secanswer' => $this->request->getVar('secanswer'),
                    'thranswer' => $this->request->getVar('thranswer'),
                    'frtanswer' => $this->request->getVar('frtanswer'),
					'correctAnswer' => $this->request->getVar('correctAnswer'),
				]);
				alert('success', "You did it!");
				return redirect()->to(base_url('/create/question'));


			}
	}
	
	public function showQuestion($id){


		// $db  = \Config\Database::connect();
        // $dansel = $db->table('dansels')->where('id', $id)->get();
        // $dansel=$dansel->getResult();
        // return view('Dansel/view',['data'=>$dansel]);
        
        $QuizModel = new \App\Models\QuestionModel();
		$question = $QuizModel->where('quizNo', $id)->findAll();
		
        return view('Quiz/showQuestion',['data'=>$question]);
		
	}

	public function checkresult()
	{

		helper('form');
		$scores = new UserScore();

		helper(['form', 'url']);

		$questionNO= $this->request->getPost('questionno');
		$quizID = $this->request->getPost('quizId');
		$userID;

		$QuizModel = new \App\Models\QuestionModel();
		$question = $QuizModel->where('quizNo', $quizID)->findAll();
		$count = count($question);
		
		$score = 0;
		for ($i=0; $i < $count ; $i++) {			
			$usanswer = $this->request->getPost($i+1);
			$QueNo = $questionNO[$i];
			$QuizModel = new \App\Models\QuestionModel();
			$where = array(
				'quizNo' => $quizID,
				'questionNo' => $QueNo
			);
			$question = $QuizModel->where($where)->findColumn('correctAnswer');
			for ($x=0; $x < 1; $x++) {
				if($question[$x] === $usanswer){
					$score++;		
				}		
			}							
		}
		$scores->save([
			'user_id' => $userID,
			'Quiz_id' => $quizID,
			'score' => $score,
		]);

		return view('UserScore/showScore',['data'=>$score]);

	}

	

}