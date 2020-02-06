<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class product_model extends CI_Model {

	public function insert()
	{
		$this->product_name = $_POST['product_name']; 
        $this->product_code = $_POST['product_code'];
        $this->description  = $_POST['description'];
        $this->status       = "Active";

        $this->db->insert('products', $this);
	}

	public function edit()
	{
		$this->load->view('welcome_message');
	}

	public function update($id)
	{
		$this->product_name = $_POST['product_name']; 
        $this->product_code = $_POST['product_code'];
        $this->description  = $_POST['description'];
		return $this->db->where(['product_id' => $id])->update('products', $this);
	}	

	public function delete($id)
	{
		return $this->db->where(['product_id' => $id])->update('products', ['status'=> 'Deleted']);
	}

	public function view_a_record($id)
	{
		return $this->db->get_where('products', ['product_id' => $id , 'status' => 'Active'])->result();
	}
	public function view_all_records()
	{
		return $this->db->get_where('products', ['status' => 'Active'])->result();
         
	}

	
}
