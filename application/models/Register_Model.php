<?php
class Register_Model extends CI_Model
{
    protected $table_name;
    public function __construct()
    {
        parent::__construct();
        $this->table_name = 'ob_products';
    }
    public function insert($data)
    {
        return $this->db->insert('o_user', $data);
    }
}