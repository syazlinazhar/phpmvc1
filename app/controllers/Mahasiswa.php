<?php 

class Mahasiswa extends Controller{
	public function index()
	{
		$data['title'] = 'Register Mahasiswa'; 
		$data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
		$this->view('templates/header', $data); 
		$this->view('mahasiswa/index', $data);
		$this->view('templates/footer');
	} 
}

