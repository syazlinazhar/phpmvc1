<?php

class About extends Controller {

	public function index($name = 'Alin', $as = 'Student', $age = 22)
	{
		$data['name'] = $name;
		$data['as'] = $as;
		$data['age'] = $age;
		$data['title'] = 'About';
		$this->view('templates/header', $data);
		$this->view('about/index', $data);
		$this->view('templates/footer');
		
	}

	public function page()
	{
		$data['title'] = '';
		$this->view('templates/header', $data);
		$this->view('about/page');
		$this->view('templates/footer');
	}
}