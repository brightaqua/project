<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_in extends CI_Controller {
	public function index()
	{
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->view('common');
		
		$this->load->view('signin');
		$this->load->view('commonfooter');
	}
	
}
