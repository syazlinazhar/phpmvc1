<?php

class About extends Controller {

	public function index($name = 'Alin', $as = 'Student', $age = 22)
	{
		$data['name'] = $name;
		$data['as'] = $as;
		$data['age'] = $age;
		$this->view('about/index', $data);
	}

	public function page()
	{
		$this->view('about/page');
	}
}