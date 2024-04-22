<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('Register_Model');
	}
	public function index()
	{
		$this->load->view('register');
	}
	public function save()
	{
		if (isset($_POST)) {
			$this->form_validation->set_rules('name', 'name', 'trim|required');
			$this->form_validation->set_rules('email', 'email', 'trim|required');
			$this->form_validation->set_rules('phone', 'phone', 'trim|required');
			$this->form_validation->set_rules('address', 'address', 'trim|required');
			$this->form_validation->set_rules('password', 'password', 'trim|required');
			if ($this->form_validation->run() == FALSE) {
				if ($this->form_validation->error_string() != "") {
					$data['msg'] = $this->form_validation->error_string();
				}
			} else {
				$data['US_Name'] = $this->input->post("name");
				$data['US_Email'] = $this->input->post("email");
				$data['US_Phone'] = $this->input->post("phone");
				$data['US_Address'] = $this->input->post("address");
				$data['US_Password'] = md5($this->input->post("password"));
				$data['US_Type'] =2;
				$data['US_Status'] =1;
				$gal = $this->Register_Model->insert($data);
				$data['class'] = "success";
				$data['msg'] = "Category added successfully";
				redirect('http://localhost/organ/o_user/index.php');
			}
		}
	}
}