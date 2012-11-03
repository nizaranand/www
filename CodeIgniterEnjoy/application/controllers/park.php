<?php

class Park extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Park_model');

		$this->load->library('xmlrpc');
		$this->load->library('xmlrpcs');
	}

	function index() {
		var_dump($this->Park_model->get_parks());
	}
}

?>