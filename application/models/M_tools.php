<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tools extends CI_Model {

	public function getAdminInfo()
	{
		$this->db->select('email')->where('admin_id', $this->session->userdata("admin_id"));
		return $this->db->get('admin')->row_array();
	}

}
