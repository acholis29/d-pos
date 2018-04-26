<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	 
	public function index() {
		$this->load->view('register');			
	}

    public function simpan() {        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = array(
                    'title' => 'My title',
                    'name'  => 'My Name',
                    'date'  => 'My date'
                    );

                    echo 'aa';
        };
        	//	$this->load->view('register');			

	}
}
