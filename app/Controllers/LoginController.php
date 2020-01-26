<?php namespace App\Controllers;
use App\Models\UserModel as UserModel;

class LoginController extends BaseController
{
	public function index()
	{
		return view('Auth/Login');
    }
    
    public function testnav()
	{
		return view('incfile/innernavi');
	}

	public function login(){

		$session = \Config\Services::session($config);
		$userModel = new UserModel();

		if (! $this->validate([
			'email' => 'required|valid_email',
			'password'  => 'required'
		]))
		{
			return view('Auth/Login');
		}
		else
		{
			$data = [
				'email' => $_POST['email'],
				'password'    => $_POST['password']
			];

			$user = $userModel->where('email', $data['email'])
				->where('password', $data['password'])
				->first();
				
			if($user > 0){
				$newdata = [
					'id'        => $user['id'],
					'email'     => $data['email'],
					'logged_in' => TRUE
				];
				$session->set($newdata);
				return redirect()->to(base_url('/create/quiz'));
			}
			else{
				$_SESSION['error'] = 'Email and password do not match';
				$session->markAsFlashdata('error');
				return view('Auth/Login');
			}
		}
}
public function logout(){
	$session = \Config\Services::session($config);
		session_destroy();
		return redirect('login');
}

}