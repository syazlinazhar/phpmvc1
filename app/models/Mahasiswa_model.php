<?php 

class Mahasiswa_model { 
	private $table = 'mahasiswa';
	private $db; 

	public function __construct()
	{
		$this->db = new Database; 
	}

	public function getAllMahasiswa()
	{
		$this->db->query(' SELECT * FROM ' . $this->table);
		return $this->db->resultSet(); 
	}

	public function getMahasiswaById($id)
	{
		$this->db->query(' SELECT * FROM ' . $this->table . ' WHERE id=:id ');
		$this->db->bind('id', $id);
		return $this->db->single();
	}

	public function addDataMahasiswa($data)
	{
		$query = "INSERT INTO mahasiswa
					VALUES
					('', :name, :matric, :email, :course)";
		$this->db->query($query);
		$this->db->bind('name', $data['name']);
		$this->db->bind('matric', $data['matric']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('course', $data['course']);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function deleteDataMahasiswa($id)
	{
		$query = "DELETE FROM mahasiswa WHERE id = :id";
		$this->db->query($query);
		$this->db->bind('id', $id);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function editDataMahasiswa($data)
	{
		$query = "UPDATE mahasiswa SET
					name = :name,
					matric = :matric,
					email = :email,
					course = :course
				  WHERE id = :id";
					
		$this->db->query($query);
		$this->db->bind('name', $data['name']);
		$this->db->bind('matric', $data['matric']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('course', $data['course']);
		$this->db->bind('id', $data['id']);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function findDataMahasiswa()
	{
		$keyword = $_POST['keyword'];
		$query = "SELECT * FROM mahasiswa WHERE name LIKE :keyword";
		$this->db->query($query);
		$this->db->bind('keyword', "%$keyword%");
		return $this->db->resultSet(); 
	}
}

	// data using array
	// private $mhs = [
	// 	[
	// 		"name" => "Amiera Syazlin Binti Md Azhar",
	// 		"matric no." => "193043920",
	// 		"email" => "amierasyazlin97@gmail.com",
	// 		"course" => "Information Technology"
	// 	],
	// 	[
	// 		"name" => "Nur Syaqinah Binti Safaruddin",
	// 		"matric no." => "193043405",
	// 		"email" => "syaqinahsafar97@gmail.com",
	// 		"course" => "Information Technology"
	// 	],
	// 	[
	// 		"name" => "Maizatul Fatihah Binti Mohd Salleh",
	// 		"matric no." => "193042605",
	// 		"email" => "maizatulfatihah@ymail.com",
	// 		"course" => "Information Technology"
	// 	]
	// ];

// 	public function getAllMahasiswa()
// 	{
// 		$this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
// 		$this->stmt->execute();
// 		return $this->stmt->fetchAll(PDO::FETCH_ASSOC); 
// 	}
// }