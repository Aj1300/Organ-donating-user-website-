<?php
class Organrequest_Model extends CI_Model{
    protected $table_name;
    public function __construct()
    {
        parent::__construct();
        $this->table_name = 'ob_products';
   
    }
	
	public function getusers() {
		return $this->db->query("select * from organ_request")->result();
	}
	
	public function insert($data){
		return $this->db->insert('organ_request', $data);
	}
}
