<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('debug');
    }

    public function test()
    {
        return true;
    }

    public function checkMemberSession()
    {
    }

}
