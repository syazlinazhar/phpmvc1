<?php

class About extends Controller {

	public function index($name = 'Alin', $as = 'Student', $age = 22)
	{
		$this->view('about/index');
	}
	
	public function page()
	{
		$this->view('about/page');
	}
}