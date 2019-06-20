<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Model {
	public function add($username ,$email, $password, $tele_number, $address)
	{
        $this->load->database('default');
        $data = array(
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'tele_number' => $tele_number,
            'address' => $address
        );
        
        $this->db->insert('register', $data);
        
        
	}
	
}
