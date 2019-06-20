<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_up extends CI_Controller {
	
		
	public function index()
	{
		$this->load->helper('url');
		$this->load->model('Signup');

		$this->load->view('common');
		
		$this->load->helper('form');

		$this->load->view('signup');

		$this->load->view('commonfooter');

	}

	public function get_data(){
		$this->load->helper('url');
		$this->load->model('Signup');

		if(isset($_POST['username'])){
			$username = $_POST['username'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$tele_number = $_POST['tele_number'];
			$address = $_POST['address'];
			if (
				$username != null && $email != null && $password != null 
				&& $username != " "  && $email != " " && $password != " " 
				&& $tele_number != " " && $address != " ") {

					$this->Signup->add($username, $email, $password, $tele_number, $address);
					redirect('Home');
			} else {
				echo " Thia is a required field. ";
				
			}
		}
	}
	
}
 
        
       