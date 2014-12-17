<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        var_dump('aa');
        var_dump('bg');

		$this->load->view('index');
	}
	public function foo()
	{
        var_dump('aa');
        var_dump('bg');

		$this->load->view('index');
	}
}
