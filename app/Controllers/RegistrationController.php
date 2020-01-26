<?php namespace App\Controllers;
use App\Models\UserModel as UserModel;

class RegistrationController extends BaseController
{
	public function index()
	{
		return view('Auth/Registration');
	}

	public function RegisterUser()
	{
		helper('form');
		$register = new UserModel();

		helper(['form', 'url']);

			if (! $this->validate([
                'name' => 'required',
				'email' => 'required|min_length[3]|max_length[255]',
				'password' => 'required',			
			]))
			{
				
				return view('/Auth/Registration',[
						'validation' => $this->validator,
					]);
				// echo 'fail';
			}
			else
			{
				$register->save([
                    'name' => $this->request->getVar('name'),
					'email' => $this->request->getVar('email'),
					'question' => $this->request->getVar('question'),
					'password' => $this->request->getVar('password'),
				]);
				return redirect()->to(base_url('/Login'));

			}
	}

	

}