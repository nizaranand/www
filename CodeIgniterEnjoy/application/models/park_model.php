<?php

class Park_model extends CI_Model {

	function __construct() {
		parent::__construct();

	}

	function get_parks() {
		$query = $this->db->get('parks');
		return $query->result();
	}

	function get_park_by_id($id) {
		$query = $this->db->get('parks', array('ParkID' => $id));
		return $query->result();
	}

	function get_park_by_name($name) {
		$query = $this->db->get('prks', array('Name' => $name));
		return $query->result();
	}
}

?>