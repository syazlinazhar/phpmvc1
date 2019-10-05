<?php

class About {
	public function index($name = 'Alin', $as = 'Student')
	{
		echo "Hello, nama saya $name, saya adalah seorang $as" ;
	}
	public function page()
	{
		echo 'About/page';
	}
}