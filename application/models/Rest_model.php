<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rest_model extends CI_Model {

	public function add_inventory($data){
		$this->db->insert('tbl_inventory', $data);
		$res = $this->db->affected_rows();
		return $res;
	}

	public function get_inventory(){
		$this->db->order_by('id', 'desc');
		$q = $this->db->get('tbl_inventory');
		$res = $q->result();
		return $res;
	}

	public function issue_ris($data){
		$this->db->insert('tbl_ris', $data);
		$res = $this->db->affected_rows();
		return $res;
	}

	public function release_item($qty, $id){
		$this->db->query("CALL release_item(".$qty.", ".$id.")");
		// return $q->result();
	}

	public function get(){
		// $this->db->order_by('id', 'desc');
		$q = $this->db->get('office');
		$res = $q->result();
		return $res;
	}

	public function get_division($division){
		// $this->db->order_by('id', 'desc');
		$this->db->where('division', $division);
		$q = $this->db->get('office');
		$res = $q->result();
		return $res;
	}

	public function get_division_id($division_id){
		// $this->db->order_by('id', 'desc');
		$this->db->where('id', $division_id);
		$q = $this->db->get('office');
		$res = $q->result();
		return $res;
	}

	public function get_logs($id){
		// $this->db->order_by('id', 'desc');
		$this->db->count_all_results('logs');  // Produces an integer, like 25
		$this->db->from('logs');
		$this->db->where('oid',$id);
		$this->db->where('status','N');
		return $this->db->count_all_results();
	}

	public function get_logs_limit($id){
		// $this->db->order_by('id', 'desc');
		$this->db->where('oid', $id);
		$this->db->where('status','N');
		$this->db->limit(1);
		$q = $this->db->get('logs');
		$res = $q->row();
		return $res;
	}

	public function add_cntr($data){
		$this->db->insert('logs', $data);
		$res = $this->db->affected_rows();
		return $res;
	}

	public function update_stat($lid){
		$this->db->set('status', 'D');
		$this->db->where('lid', $lid);
		$query = $this->db->update('logs');
		return $query;
	}

}


