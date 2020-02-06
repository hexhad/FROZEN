<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function viewAll()
	{
		$results = $this->product_model->view_all_records() ;
		$this->load->view('viewAll',['results' => $results]);
	}

	public function viewSingle($id)
	{
		$results = $this->product_model->view_a_record($id) ;
		$this->load->view('view',['results' => $results]);		
	}

	public function create()
	{
		$this->load->view('create');
	}

	public function save()
	{
		$data = [
                'product_name'  => $this->input->post('product_name'),
				'product_code'  => $this->input->post('product_code'),
				'description'   => $this->input->post('description'),
            ];
		$this->product_model->insert($data);	
		redirect('product/viewAll');			
	}

	public function edit($id)
	{
		$results = $this->product_model->view_a_record($id) ;
		$this->load->view('edit',['results' => $results, 'id' => $id ]);
	}

	public function update($id)
	{
		$data = [
                'product_name'  => $this->input->post('product_name'),
				'product_code'  => $this->input->post('product_code'),
				'description'   => $this->input->post('description'),
            ];
        $this->product_model->update($id) ;
		redirect('product/viewAll');
	}

	public function delete($id)
	{
		$results = $this->product_model->delete($id);
		redirect('product/viewAll');
	}
}
