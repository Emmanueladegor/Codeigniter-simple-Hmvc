<?php

class Template extends MY_Controller {

	function __construct() {

		parent::__construct();
	}


	function home_template($data = NULL) {

		$this->load->view('template/template_view',$data );
	}

}