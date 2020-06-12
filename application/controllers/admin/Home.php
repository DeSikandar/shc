<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
    $this->load->model('user');
    $this->user->check_session();
		$this->load->library('grocery_CRUD');
	}
  public function index()
  {
		$data['service']=$this->user->get_service();

    $this->load->view("admin/h1",$data);
    $this->load->view("admin/index",$data);
    $this->load->view("admin/f1",$data);

  }
	function slider(){
		$crud = new grocery_CRUD();


		$crud->set_table('slider');
		// $crud->set_relation('officeCode','offices','city');
		// $crud->display_as('officeCode','Office City');
		// $crud->set_subject('Employee');

		// $crud->required_fields('lastName');

		$crud->set_field_upload('image','assets/uploads/');

		$output = $crud->render();
		// $output['ts']="Slider";

		// $output
    $this->load->view("admin/header",$output);
    $this->load->view("admin/banner",$output);
    $this->load->view("admin/footer",$output);

	}
	function about_us(){
		// about_us
		$crud = new grocery_CRUD();

		$crud->set_table('about_us');
		// $crud->set_relation('officeCode','offices','city');
		// $crud->display_as('officeCode','Office City');
		// $crud->set_subject('Employee');

		// $crud->required_fields('lastName');

		$crud->set_field_upload('image','assets/uploads/');

		$output = $crud->render();

		// $output
    $this->load->view("admin/header",$output);
    $this->load->view("admin/banner",$output);
    $this->load->view("admin/footer",$output);

	}
	function services(){
		$crud = new grocery_CRUD();


		$crud->set_table('services');
		// $crud->set_relation('officeCode','offices','city');
		// $crud->display_as('officeCode','Office City');
		// $crud->set_subject('Employee');

		// $crud->required_fields('lastName');

		$crud->set_field_upload('image','assets/uploads/');

		$output = $crud->render();

		// $output
    $this->load->view("admin/header",$output);
    $this->load->view("admin/banner",$output);
    $this->load->view("admin/footer",$output);

	}
	function testimonial(){

		// testimonial
		$crud = new grocery_CRUD();


		$crud->set_table('testimonial');
		// $crud->set_relation('officeCode','offices','city');
		// $crud->display_as('officeCode','Office City');
		// $crud->set_subject('Employee');

		// $crud->required_fields('lastName');

		$crud->set_field_upload('image','assets/uploads/');

		$output = $crud->render();

		// $output
    $this->load->view("admin/header",$output);
    $this->load->view("admin/banner",$output);
    $this->load->view("admin/footer",$output);

	}
	function careers(){
		// careers
		$crud = new grocery_CRUD();


		$crud->set_table('careers');
		// $crud->set_relation('officeCode','offices','city');
		// $crud->display_as('officeCode','Office City');
		// $crud->set_subject('Employee');

		// $crud->required_fields('lastName');

		// $crud->set_field_upload('image','assets/uploads/');

		$output = $crud->render();

		// $output
    $this->load->view("admin/header",$output);
    $this->load->view("admin/banner",$output);
    $this->load->view("admin/footer",$output);
	}
	function faq(){
		$crud = new grocery_CRUD();


		$crud->set_table('faq');
		// $crud->set_relation('officeCode','offices','city');
		// $crud->display_as('officeCode','Office City');
		// $crud->set_subject('Employee');

		// $crud->required_fields('lastName');

		// $crud->set_field_upload('image','assets/uploads/');

		$output = $crud->render();

		// $output
    $this->load->view("admin/header",$output);
    $this->load->view("admin/banner",$output);
    $this->load->view("admin/footer",$output);

	}
	function apply_job(){
		// apply_job
		$crud = new grocery_CRUD();


		$crud->set_table('apply_job');
		// $crud->set_relation('officeCode','offices','city');
		// $crud->display_as('officeCode','Office City');
		// $crud->set_subject('Employee');

		// $crud->required_fields('lastName');

		// $crud->set_field_upload('image','assets/uploads/');

		$output = $crud->render();

		// $output
    $this->load->view("admin/header",$output);
    $this->load->view("admin/banner",$output);
    $this->load->view("admin/footer",$output);

	}
	function contact_us(){
		// contact_us
		$crud = new grocery_CRUD();


		$crud->set_table('contact_us');
		// $crud->set_relation('officeCode','offices','city');
		// $crud->display_as('officeCode','Office City');
		// $crud->set_subject('Employee');

		// $crud->required_fields('lastName');

		// $crud->set_field_upload('image','assets/uploads/');

		$output = $crud->render();

		// $output
    $this->load->view("admin/header",$output);
    $this->load->view("admin/banner",$output);
    $this->load->view("admin/footer",$output);
	}

	function enquiry(){
		// enquiry
		$crud = new grocery_CRUD();


		$crud->set_table('enquiry');
		// $crud->set_relation('officeCode','offices','city');
		// $crud->display_as('officeCode','Office City');
		// $crud->set_subject('Employee');

		// $crud->required_fields('lastName');

		// $crud->set_field_upload('image','assets/uploads/');

		$output = $crud->render();

		// $output
    $this->load->view("admin/header",$output);
    $this->load->view("admin/banner",$output);
    $this->load->view("admin/footer",$output);
	}

}
?>
