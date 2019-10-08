<?php 

class Mahasiswa{
	public function index()
	{
		$data['title'] = 'Register Mahasiswa'; 
		$this->view('templates/header', $data); 
		$this->view('mahasiswa/index');
		$this->view('templates/footer');
	} 
}

