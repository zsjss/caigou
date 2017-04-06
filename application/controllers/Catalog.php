<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog extends CI_Controller {

	public function index()
	{
		$this->load->view('test');
	}

	public function product_lookup($page =1)
	{
		$this->load->view('catalog');
	}
}
