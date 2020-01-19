<?php namespace App\Controllers;
 use App\Models\QuestionModel as QuestionModel;
 $validation =  \Config\Services::validation();

class QuestionController extends BaseController
{
	
	public function storequestion()
	{
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
				return redirect()->to(base_url('/create/quiz'));

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

	

}