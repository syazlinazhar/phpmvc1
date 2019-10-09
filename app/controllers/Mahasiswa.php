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

	public function detail($matric)
	{
		$data['title'] = 'Details Mahasiswa'; 
		$data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaByMatric($matric);
		$this->view('templates/header', $data); 
		$this->view('mahasiswa/detail', $data);
		$this->view('templates/footer');
	} 
}

