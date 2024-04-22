<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
    public function __construct() { 
        parent::__construct();
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Profile_Model');                       
    }    
    public function index(){
        if(!$this->session->userdata('US_Id')){
            header('location:'.base_url());            
        }
        else{
            $US_Id = $this->session->userdata('US_Id');
            //echo($US_Id);exit();
            $data['data'] = $this->Profile_Model->getusers($US_Id);
            $this->load->view('profile/profile',$data);
			$this->load->view('common/footer');	
        }       
    }
}