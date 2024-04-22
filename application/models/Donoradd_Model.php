<?php
class Donoradd_Model extends CI_Model{
    protected $table_name;
    public function __construct()
    {
        parent::__construct();
        $this->table_name = 'ob_products';
   
    }
	
	public function getusers() {
		return $this->db->query("select * from donor_info")->result();
	}
	
	public function insert($data){
		return $this->db->insert('donor_info', $data);
	}
}
