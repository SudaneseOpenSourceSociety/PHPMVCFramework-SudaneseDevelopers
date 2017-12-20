<?php 

/**
* This is a Controller named Home.
*/
class Home extends Controller
{
	
	public function index($text = '')
	{
		$this->view('home/index', ['name' => $text]); 
	}

	public function Create($username = '' ,$email = '')
	{
		//Some Create Code gos here.

	}
}