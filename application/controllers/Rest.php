<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rest extends CI_Controller {

	public function __construct()
    {
            parent::__construct();
            $this->load->model('rest_model');
            // Your own constructor code
    }
	
	// public function index()
	// {
	// 	$this->load->view('welcome_message');
	// }

	public function get()
	{
		$result = $this->rest_model->get();
		
		// echo "<pre>";
		echo json_encode($result);
		// echo "</pre>";

	}

	public function get_division($div)
	{
		$result = $this->rest_model->get_division($div);
		
		// echo "<pre>";
		echo json_encode($result);
		// echo "</pre>";

	}

	public function get_division_id($div_id)
	{
		$result = $this->rest_model->get_division_id($div_id);
		
		// echo "<pre>";
		echo json_encode($result);
		// echo "</pre>";

	}

	public function add_count()
	{
        $_POST = json_decode(file_get_contents('php://input'),true);
		$id = $_POST['id_no'];
		// $cntr = 0;

		$data = array(
			'oid' => $id
			// 'status' => $cntr
		);

		// $data = $num + 1;
		$result = $this->rest_model->add_cntr($data);
		// if($result == 1){
		// 	echo "<script>
		// 		window.location.href='".base_url()."dashboard/panel/".$this->session->userdata('abbrv')
		// 		."'</script>";
		// }else{
		// 	echo "<script>
		// 		alert('Something wrong with updating data. Try Again!');
		// 		window.location.href='".base_url()."dashboard/panel/".$this->session->userdata('abbrv')
		// 		."'</script>";
		// }
	}

}
