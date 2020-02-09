<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class frozen_model extends CI_Model {

	public function view_all_records()
	{
        return $this->db->get('product')->result();
	}

	public function view_a_record($id)
	{
		return $this->db->get_where('product', ['Product_id' => $id ])->result();
	}

	
}
