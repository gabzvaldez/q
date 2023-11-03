<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Division extends CI_Controller {

	public function __construct()
    {
            parent::__construct();
            $this->load->model('main_model');
            // Your own constructor code
    }

	// public function index($division)
	// {
	// 	$data['is_logged_in'] = $this->session->userdata('is_logged_in');
	// 	$this->load->view('templates/header',$data);
	// 	$this->load->view('dashboard/division');
	// 	$this->load->view('templates/footer');
	// }

	public function msd()
	{
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['section2'] = $this->session->userdata('abbrv');
		$data['division'] = 'msd';
		$this->load->view('templates/header',$data);
		$this->load->view('dashboard/division', $data);
		$this->load->view('templates/footer');
	}

	public function lhsd()
	{
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['section2'] = $this->session->userdata('abbrv');
		$data['division'] = 'lhsd';
		$this->load->view('templates/header',$data);
		$this->load->view('dashboard/division', $data);
		$this->load->view('templates/footer');
	}

	public function rled()
	{
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['section2'] = $this->session->userdata('abbrv');
		$data['division'] = 'rled';
		$this->load->view('templates/header',$data);
		$this->load->view('dashboard/division', $data);
		$this->load->view('templates/footer');
	}

}
