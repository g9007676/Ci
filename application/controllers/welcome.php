<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
        var_dump(BASEPATH);
		$this->load->view('welcome_message');
	}

	public function foo()
	{
		$this->load->view('welcome_list');
	}

}
