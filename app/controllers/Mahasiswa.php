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
		if( $this->model('Mahasiswa_model')->addDataMahasiswa($_POST) > 0 ) {
			Flasher::setFlash('successfully', 'added', 'success');
			header('Location: ' . BASEURL . '/mahasiswa');
			exit;
		} else {
			Flasher::setFlash('failed', 'added', 'danger');
			header('Location: ' . BASEURL . '/mahasiswa');
			exit;
		}
	}

	public function delete($id)
	{
		if( $this->model('Mahasiswa_model')->deleteDataMahasiswa($id) > 0 ) {
			Flasher::setFlash('successfully', 'deleted', 'success');
			header('Location: ' . BASEURL . '/mahasiswa');
			exit;
		} else {
			Flasher::setFlash('failed', 'deleting', 'danger');
			header('Location: ' . BASEURL . '/mahasiswa');
			exit;
		}
	}

	public function getEdit()
	{
		echo json_encode($this->model('Mahasiswa_model')->getMahasiswaById($_POST['id']));
	}

	public function edit()
	{
		if( $this->model('Mahasiswa_model')->editDataMahasiswa($_POST) > 0 ) {
			Flasher::setFlash('successfully', 'edited', 'success');
			header('Location: ' . BASEURL . '/mahasiswa');
			exit;
		} else {
			Flasher::setFlash('failed', 'edited', 'danger');
			header('Location: ' . BASEURL . '/mahasiswa');
			exit;
		}	
	}

	public function find()
	{
		$data['title'] = 'Register Mahasiswa'; 
		$data['mhs'] = $this->model('Mahasiswa_model')->findDataMahasiswa();
		$this->view('templates/header', $data); 
		$this->view('mahasiswa/index', $data);
		$this->view('templates/footer');
	}

}

