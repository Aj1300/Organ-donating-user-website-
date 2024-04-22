<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organrequest extends CI_Controller{
	public function __construct() { 
        parent::__construct();
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->library('session');
        $this->load->model('Organrequest_Model');
		
				
	}
	public function index(){
		if(!$this->session->userdata('US_Id')){
			header('location:'.base_url());
			
		}
		else{
			$US_Id = $this->session->userdata('US_Id');
			$data['userlist'] = $this->Organrequest_Model->getusers();
			$this->load->view('organrequest/organrequest');
			$this->load->view('common/footer');	
	    }
    } 
	
	public function insert (){
	if(!$this->session->userdata('US_Id')) {
	
		header('location:'.base_url());
	}
	else{
			$data['pageTitle']  = ' Admin | organrequest';
			$this->load->view('organrequest/insert');
			$this->load->view('common/footer');
		} 	
}
  
	public function save(){
		//echo('hi');exit();
	if(isset($_POST)){
		$this->form_validation->set_rules('Name', 'name', 'trim|required');
		$this->form_validation->set_rules('Organ', 'organ', 'trim|required');
		$this->form_validation->set_rules('Date', 'date', 'trim|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');
		$this->form_validation->set_rules('userlocation', 'location', 'trim|required');
		
		

			$data['Request_Info'] = $this->input->post("name");
			$data['Organ_Info'] = $this->input->post("organ");
			$data['Requested_Date'] = $this->input->post("date");
			$data['Status'] = $this->input->post("status");
			$data['Location'] = $this->input->post("location");
			$gal = $this->Organrequest_Model->insert($data);
			$data['class'] = "success";
			$data['msg'] = "User inserted successfully";
			redirect('http://localhost/organ/o_user/index.php/organrequest');
		
	}
	

	
} 
}
