<?php 

class Mahasiswa_model {
	private $dbh; // database handler
	private $stmt; // private statement to keep query 

	public function __construct()
	{
		// data source name
		$dsn = 'mysql:host=localhost;dbname=phpmvc1';
		
		try {
			$this->dbh = new PDO($dsn, 'root', '');
		} catch(PDOException $e) {
			die($e->getMessahe());
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

	public function getAllMahasiswa()
	{
		$this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
		$this->stmt->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC); 
	}
}