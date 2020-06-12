<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    // $this->load->helper('url');
    $this->load->model('dats');
    $this->load->helper('url');


  }


  public function index()
  {
    $data['slider']=$this->dats->slider();
    $data['about_us']=$this->dats->about_us();
    $data['service']=$this->dats->service();
    $data['testimonial']=$this->dats->testimonial();

    $this->load->view('layout/header',$data);
    $this->load->view('index',$data);
    $this->load->view('layout/footer',$data);
  }
  public function about_us(){
    $data['about_us']=$this->dats->about_us();
    $data['testimonial']=$this->dats->testimonial();

    $this->load->view('layout/header',$data);
    $this->load->view('about_us',$data);
    $this->load->view('layout/footer',$data);
  }
  public function services($slug=""){
        if($slug!==""){
          // print_r($slug);
          $data['service']=$this->dats->service_detail($slug);

          $this->load->view('layout/header',$data);
          $this->load->view('service_details',$data);
          $this->load->view('layout/footer',$data);
        }else{
        $data['service']=$this->dats->service();

        $this->load->view('layout/header',$data);
        $this->load->view('service',$data);
        $this->load->view('layout/footer',$data);
      }
  }

  public function careers(){
    // $data['about_us']=$this->dats->about_us();
    // $data['testimonial']=$this->dats->testimonial();
    $data['career']=$this->dats->careers();
    $this->load->view('layout/header',$data);
    $this->load->view('career',$data);
    $this->load->view('layout/footer',$data);


  }
  public function career_appy($name=""){
    if($name==""){
      redirect(base_url("home/careers"));
    }
    // print_r(urldecode($name));
    $data['name']=urldecode($name);
    $this->load->view('layout/header',$data);
    $this->load->view('apply_job',$data);
    $this->load->view('layout/footer',$data);



  }

  public function career_post(){

    $config['upload_path']   = 'assets/uploads/';
		$config['allowed_types'] = 'pdf|doc|docx|ppt|pptx|odt';
		$config['overwrite'] = FALSE;
		$config['remove_spaces'] = TRUE;

		$this->upload->initialize($config);
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('cv')) {
		   $error = array('error' => $this->upload->display_errors());
		   print_r($error);
		//    $this->load->view('upload_form', $error);
		}

		else {
		  $data = array('upload_data' => $this->upload->data());
			$name=$data['upload_data']['file_name'];
			$ur=base_url()."assets/uploads/";
			$path=$ur.$name;
      // print($path);
      // print_r($_POST);

			$data=array(
				"name"=>$this->input->post("name"),
				"email"=>$this->input->post("email"),
				"phone"=>$this->input->post("phone"),
				"location"=>$this->input->post("location"),
        "job_type"=>$this->input->post("job_type"),
        "current_job"=>$this->input->post("c_job"),
        "current_salary"=>$this->input->post("csalary"),
        "cv"=>$path,
        "message"=>$this->input->post("message"),
        "apply_for"=>$this->input->post("apply_for"),



			);
      $s=$this->dats->career_insert($data);
      if($s){
        redirect("home/career_appy");
      }

			}

  }

  public function faq(){

    $data['faq']=$this->dats->faq();
    $this->load->view('layout/header',$data);
    $this->load->view('faq',$data);
    $this->load->view('layout/footer',$data);

  }

  public function contact(){
    $data['faq']=$this->dats->faq();
    $this->load->view('layout/header',$data);
    $this->load->view('contact',$data);
    $this->load->view('layout/footer',$data);

  }

  public function contact_post(){
    $data=array(
        "name"=>$this->input->post("name"),
        "email"=>$this->input->post("email"),
        "message"=>$this->input->post("message"),

    );
    $s=$this->dats->contact_insert($data);
    if($s){
      redirect(base_url("home/contact"));
    }


  }

  public function inqury_insert(){
    $data=array(
        "name"=>$this->input->post("name"),
        "phone"=>$this->input->post("number"),
        "email"=>$this->input->post("email"),
        "address"=>$this->input->post("address"),
        "product"=>$this->input->post("message"),
        "details_of_enquiry"=>$this->input->post("service")

    );
    // enqury_inser
    $s=$this->dats->enqury_inser($data);
    if($s){
      redirect(base_url("home/"));
    }
    
  }


}

?>
