<?php

class Front_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_article($limit = 10, $offset = 0) {
		$this->db->where('post_parent', 0);
		$this->db->where('post_status', 1);
		$query = $this->db->get('_posts', $limit, $offset);
		return $query->result_array();
	}

	public function get_article_id($id = 0) {
		$this->db->where('post_parent', 0);
		$this->db->where('post_status', 1);
		$this->db->where('ID', $id);
		$query = $this->db->get('_posts');
		return $query->row_array();
	}


}