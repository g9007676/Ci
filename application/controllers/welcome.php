<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
        $this->get_word();
	}

	public function foo()
	{
		$this->load->view('welcome_list');
	}

    public function get_word()
    {
        return 'this is get word';
    }

    public function get_datas()
    {
        return [1,2,3,4,5,6];
    }

}
