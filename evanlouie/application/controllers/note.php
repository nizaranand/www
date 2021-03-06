<?php

class Note extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}

	function index() {

		$data = array();
		$data['notes'] = array();
		$data['title'] = "Notes";
		if ($handle = opendir("notes")) {
		    while (false !== ($entry = readdir($handle))) {
		    	if ($entry != ".." && $entry != '.') {
			        array_push($data['notes'], $entry);
		    	}
		    }
		    closedir($handle);
		}
		$this->load->view('header', $data);
		$this->load->view('note_view', $data);
		$this->load->view('footer', $data);
	}


	function view($filename) {
		$data = array();
		$data['title'] = $filename;
		$data['filename'] = $filename;
		if (file_exists("notes/$filename")) {
			$handle= fopen("notes/$filename", 'rb');
			$data['note_body'] = '';
			@$data['note_body'] = fread($handle, filesize("notes/$filename"));
		}
		$this->load->view('header', $data);
		$this->load->view('note_view', $data);
		$this->load->view('footer', $data);
	}


}

?>