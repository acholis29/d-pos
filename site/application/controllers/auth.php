<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Auth extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 


	function __construct(){
		parent::__construct();
		session_start();
	}
	
	public function index() {
		session_destroy();	
		$this->load->view('auth/bo');			
	}
	
	public function fo() {
		session_destroy();	
		$this->load->view('auth/fo');			
	}

	public function bo() {	
        session_destroy();		
		$this->load->view('auth/bo');			
	}

	
	public function login() {
 		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$username = $_POST['t_username'];
			$password = $_POST['t_password'];
			$grp = $_POST['grp'];

			$this->load->model('login_model');
			$res = $this->login_model->verify_userbo($username,$password,$grp);
			
            $_SESSION['grp']=$grp;

			if($res !== false ){				
					$_SESSION['id']=$username;					
					redirect($grp);
			}

		};

        			
        $this->load->view('auth/login');		

	}
	
	public function logout()
	{
		session_destroy();		
		redirect('auth/'.$_GET['q']); 
	}
	
}
