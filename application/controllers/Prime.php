<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prime extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('prime');
	}

	public function index()
	{
		$number = 4;

		if (isNumberPrime($number)) {
			echo "Bilangan $number adalah bilangan prima";
		} else {
			echo "Bilangan $number bukan bilangan prima";
		}
	}

	
}
