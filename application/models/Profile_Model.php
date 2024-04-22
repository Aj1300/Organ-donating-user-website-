<?php
class Profile_Model extends CI_Model{

    protected $table_name;
    public function __construct(){

		parent::__construct();
        $this->table_name = 'o_user';
   
    }
	public function getusers($US_Id) {	
		return $this->db->query("select * from o_user where US_Id = '".$US_Id."'")->row();
	}
}