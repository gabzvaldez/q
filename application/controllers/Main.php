<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
    {
            parent::__construct();
            $this->load->model('main_model');
            // Your own constructor code
    }


	public function index()
	{
		$this->login();
	}

	public function login()
	{
		if($this->session->userdata('is_logged_in') != 1){
			$data['title'] = "DOH Queueing System";
			$this->load->view('login', $data);
		}else{
			redirect(base_url()."dashboard/panel/".$this->session->userdata('abbrv'));
		}
	}

	public function verify_login()
	{
		
		$username =  $this->input->post('username');
		$password =  $this->input->post('password');

		$result = $this->main_model->verify_login($username);
		if($result != NULL){
			if (password_verify($this->input->post('password'), $result->password)) {
				$sess_data = array(
					'is_logged_in' => 1,
					'username' => $result->username,
					'id' => $result->id,
					'office' => $result->office,
					'abbrv' => $result->abbrv,
					'division' => $result->division
				);
				$this->session->set_userdata($sess_data);
				// var_dump($sess_data);
				echo "<script>
				alert('Successful Login!');
				window.location.href='".base_url()."dashboard/panel/".$result->abbrv
				."'</script>";
			}else{
				echo "<script>
				alert('Invalid Username/Password!');
				window.location.href='".base_url()."main/login';
				</script>";
			}
		}else{
			echo "<script>
			alert('Invalid Username/Password!');
			window.location.href='".base_url()."main/login';
			</script>";
		}

	}

	public function logout()
	{
		session_destroy();
			echo "<script>
				window.location.href='".base_url()."main/login';
				</script>";
		// $this->load->view('templates/header');
		// $this->load->view('main/index');
		// $this->load->view('templates/footer');
	}
}
