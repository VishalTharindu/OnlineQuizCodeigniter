<?php namespace App\Controllers;

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

	

}