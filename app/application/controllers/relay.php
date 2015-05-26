<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Relay extends CI_Controller {

	private $data; 

	function __construct(){
		parent::__construct();

		$this->load->model('main_model');
	}
	public function _load_view(){
		$this->load->view('inc/tmp', $this->data);
	}

	public function index()
	{
		$this->data['main'] = 'home';
		$this->data['title']= '';

		$this->_load_view();
	}
}

/* End of file welcome.php */