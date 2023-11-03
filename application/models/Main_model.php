<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {

	public function verify_login($username){
		$this->db->where('username' ,$username);
		$query = $this->db->get('office'); 
		$res = $query->row();
		return $res;
	}

	public function get_division($abbrv){
		$this->db->where('abbrv', $abbrv);
		$q = $this->db->get('office');
		$res = $q->row();
		return $res;
	}

	public function get_stock_card($id){
		$this->db->where('item_id', $id);
		$q = $this->db->get('tbl_ris');
		$res = $q->result();
		return $res;
	}

	public function get_item_info($id){
		$this->db->where('id', $id);
		$q = $this->db->get('tbl_inventory');
		$res = $q->row();
		return $res;
	}

	public function add_count($data, $abbrv){
		$this->db->set('count', $data);
		$this->db->where('abbrv', $abbrv);
		$this->db->update('office');
		$res = $this->db->affected_rows();
		return $res;
	}


}

