<?php

class About {
	public function index($name = 'Alin', $as = 'Student', $age = 22)
	{
		echo "Hello, nama saya $name, saya adalah seorang $as. Saya berumur $age tahun." ;
	}
	public function page()
	{
		echo 'About/page';
	}
}