<?php namespace App\Controllers;
 use App\Models\QuizModel as QuizModel;
 $validation =  \Config\Services::validation();
 

class QuizController extends BaseController
{
	public function createquiz()
	{
		return view('Quiz/createQuiz');
    }
    
    public function storequiz()
	{
		helper('form');
		$quizs = new QuizModel();

		helper(['form', 'url']);

			if (! $this->validate([
				'title' => 'required|min_length[3]|max_length[255]',
				'type' => 'required',
				'time' => 'required',
				'timetype' => 'required',
				'email' => 'required|min_length[3]|max_length[255]',
				'description' => 'required|min_length[3]|max_length[255]',
			]))
			{
				
				return view('/Quiz/createQuiz',[
						'validation' => $this->validator,
					]);
				// echo 'fail';
			}
			else
			{
				$quizs->save([
					'title' => $this->request->getVar('title'),
					'type' => $this->request->getVar('type'),
					'time' => $this->request->getVar('time'),
					'timetype' => $this->request->getVar('timetype'),
					'email' => $this->request->getVar('email'),
					'description' => $this->request->getVar('description'),
				]);
				return redirect()->to(base_url('/create/question'));

			}
	}

	public function createquestion()
	{
		return view('Quiz/addQuestion');
	}
	
	public function showquiz()
	{

		$QuizModel = new \App\Models\QuizModel();
		// $Quiz = $QuizModel->findAll();
		$data = [
            'quizes' => $QuizModel->paginate(5),
            'pager' => $QuizModel->pager
        ];
        
        return view('Quiz/showQuiz', $data);
		// $data = array(
		// 	// 'id' => $Quiz->'id';
		// )
		// dd($Quiz);
		// return view('Quiz/showQuiz', $data);
    }

	

}