<?php

class Home extends MY_Controller {

	 	function __construct() {

	 		parent::__construct();
	 	}

	 	function index() {
	 		$data['title'] = 'Main Page';
	 		$data['header'] = 'home/partials/header';
	 		$data['content'] = 'home/homepage'; //home here to \modules\home\views\homepage
	 		$this->template->home_template($data);
	 	}

	 	function about() {
	 		$data['title'] = 'About Us';
	 		$data['header'] = 'home/partials/header';
	 		$data['content'] = 'home/about'; //home here to \modules\home\views\about
	 		$this->template->home_template($data);
	 	}

	 	function services() {
	 		$data['title'] = 'Services';
	 		$data['header'] = 'home/partials/header';
	 		$data['content'] = 'home/services'; //home here to \modules\home\views\services
	 		$this->template->home_template($data);
	 	}


}