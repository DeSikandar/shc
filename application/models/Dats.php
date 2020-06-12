<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dats extends CI_Model {
  function slider(){
    $data=$this->db->get("slider")->result_array();
    return $data;
  }
  function about_us(){
    $data=$this->db->get("about_us")->result_array();
    return $data;
  }
  function service(){
    $data=$this->db->get("services")->result_array();
    return $data;
  }

  function service_detail($slug){
    $data=$this->db->where("name",$slug)->get("services")->result_array();
    return $data;
  }


  function testimonial(){
    $data=$this->db->get("testimonial")->result_array();
    return $data;
  }

  function careers(){
    $data=$this->db->get("careers")->result_array();
    return $data;
  }

  function career_insert($data){
    $this->db->insert("apply_job",$data);
    return 1;
  }

  function faq(){
    $data=$this->db->get("faq")->result_array();
    return $data;
  }
  function contact_insert($data){
    $this->db->insert("contact_us",$data);
    return 1;

  }
  function enqury_inser($data){
    $this->db->insert("enquiry",$data);
    return 1;
  }

}

?>
