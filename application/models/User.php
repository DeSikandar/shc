<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

  function get_service(){
      $data=$this->db->get("services");
      return $data->num_rows();
  }

  function login($post = array()) {
    // print_r($post);exit;
        $this->db->select('admin_id');
        $this->db->from('admin');
        $this->db->where('email', $post['email']);
        $this->db->where('password', sha1($post['password']));
        $this->db->where('status', 1);
        $this->db->limit(1);
        $query = $this->db->get();

        //echo $this->db->last_query(); die;

        if ($query->num_rows() == 1) {
            $userdata = $query->row_array();
            $this->session->set_userdata(array(
                'admin_id' => $userdata['admin_id'],
                'loged_in' => true
            ));

            return true;
        } else {
            return false;
        }
    }

    function check_session($is_index = '') {
        if (!$this->session->userdata("loged_in") && !$is_index) {
            redirect(base_url("admin/login"));
        } else if ($this->session->userdata("loged_in") && $is_index) {
            redirect(base_url('admin/home'));
        }
    }
}


?>
