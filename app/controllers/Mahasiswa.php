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

	public function detail($id)
	{
		$data['title'] = 'Details Mahasiswa'; 
		$data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
		$this->view('templates/header', $data); 
		$this->view('mahasiswa/detail', $data);
		$this->view('templates/footer');
	} 

	public function add()
	{
		if( $this->model('Mahasiswa_model')->AddDataMahasiswa($_POST) > 0 ) {
			header('Location: ' . BASEURL . '/mahasiswa');
			exit;
		}
	}
}

