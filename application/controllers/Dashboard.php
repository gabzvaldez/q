<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
            parent::__construct();
            $this->load->model('main_model');
            $this->load->model('rest_model');
            // Your own constructor code
    }

	public function index()
	{
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['section2'] = $this->session->userdata('abbrv');
		$this->load->view('templates/header',$data);
		$this->load->view('dashboard/index');
		$this->load->view('templates/footer');
	}

	public function panel($section)
	{
		if($this->session->userdata('is_logged_in') == 1 && $this->session->userdata('abbrv') == $section){

			$data['section'] = $this->main_model->get_division($section);
			$data['section2'] = $this->session->userdata('abbrv');
			$data['log_cnt'] = $this->rest_model->get_logs($this->session->userdata('id'));
			$data['is_logged_in'] = $this->session->userdata('is_logged_in');
			// var_dump($data['division']);
			$this->load->view('templates/header', $data);
			$this->load->view('dashboard/panel', $data);
			$this->load->view('templates/footer');
		}else if($this->session->userdata('is_logged_in') == 1 && $this->session->userdata('abbrv') != $section){
			echo "<script>
				alert('Wrong section!!');
				window.location.href=window.location.origin+'/q/dashboard/panel/".$this->session->userdata('abbrv')."'</script>";

		}else{
			echo "<script>
				alert('You are not logged in!!');
				window.location.href='".base_url()."main/login'</script>";

		}
		
	}

	public function add_count($num,$abbrv,$id)
	{
		$data = $num + 1;
		$result = $this->main_model->add_count($data, $abbrv);
		$limit_id = $this->rest_model->get_logs_limit($id);
		$this->rest_model->update_stat($limit_id->lid);
		// echo $limit_id->lid;
		// echo
		// '<pre>';
		// print_r($limit_id);
		// '</pre>';
		if($result == 1){
			echo "<script>
				window.location.href='".base_url()."dashboard/panel/".$this->session->userdata('abbrv')
				."'</script>";
		}else{
			echo "<script>
				alert('Something wrong with updating data. Try Again!');
				window.location.href='".base_url()."dashboard/panel/".$this->session->userdata('abbrv')
				."'</script>";
		}
	}

	public function deduct_count($num,$abbrv)
	{
		$data = $num - 1;
		$result = $this->main_model->add_count($data, $abbrv);
		if($result == 1){
			echo "<script>
				window.location.href='".base_url()."dashboard/panel/".$this->session->userdata('abbrv')
				."'</script>";
		}else{
			echo "<script>
				alert('Something wrong with updating data. Try Again!');
				window.location.href='".base_url()."dashboard/panel/".$this->session->userdata('abbrv')
				."'</script>";
		}
	}

	public function reset_count($abbrv)
	{
		$data = 0;
		$result = $this->main_model->add_count($data, $abbrv);
		if($result == 1){
			echo "<script>
				window.location.href='".base_url()."dashboard/panel/".$this->session->userdata('abbrv')
				."'</script>";
		}else{
			echo "<script>
				alert('Something wrong with updating data. Try Again!');
				window.location.href='".base_url()."dashboard/panel/".$this->session->userdata('abbrv')
				."'</script>";
		}
	}

	public function generate_report()
	{
		$this->load->view('templates/header');
		$this->load->view('dashboard/generate_report');
		$this->load->view('templates/footer');
	}
}
