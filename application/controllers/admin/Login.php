<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user');
    $this->user->check_session(1);
	}
	public function index()
	{
		//echo "test"; die;
		$data = [];
		if (isset($_POST['submit'])) {
            unset($_POST['submit']);

            $login = $this->user->login($_POST);
            if ($login) {
                //session
                redirect(base_url('admin/home'));
            } else {
                $data['msg'] = 'Check Your Credential';
            }
        }
		$this->load->view('admin/login', $data, FALSE);
	}

}
