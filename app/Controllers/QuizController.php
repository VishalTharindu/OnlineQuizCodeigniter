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
		// helper("tatter\alerts");
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
				// return redirect()->to(base_url('/create/question'));

				// $QuizModel = new \App\Models\QuizModel();
				// $quiz = $QuizModel->get(1);
				// print_r($quiz);
				return view('Quiz/addQuestion', ['data'=>$quiz]);

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
	
	public function editquiz($id)
	{
		$QuizModel = new \App\Models\QuizModel();
		$quiz = $QuizModel->where('id', $id)->findAll();

		
        return view('Quiz/editQuiz',['data'=>$quiz]);
	}

	public function updateQuiz()
	{
		helper('form');
		$QuizModel = new \App\Models\QuizModel();

		$quizID = $this->request->getPost('quizid');
		
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
				$data = [
					'title' => $this->request->getVar('title'),
					'type' => $this->request->getVar('type'),
					'time' => $this->request->getVar('time'),
					'timetype' => $this->request->getVar('timetype'),
					'email' => $this->request->getVar('email'),
					'description' => $this->request->getVar('description'),
				];

				$QuizModel->update($quizID,$data);

				return redirect()->to(base_url('/show/quiz'));

			}
	}

	public function deleteQuiz($id)
	{
		$QuizModel = new \App\Models\QuizModel();
		$QuizModel->delete($id);

		return redirect()->to(base_url('/show/quiz'));
	}

	

}