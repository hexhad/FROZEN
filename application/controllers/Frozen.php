<?php

class Frozen extends CI_Controller {

	public function index()
	{
		$this->load->view('main');
	}
	public function load_login(){
		$this->load->view('login');
	}
	public function load_newuser(){
		$this->load->view('newuser');
	}
	public function load_store(){
		$results = $this->frozen_model->view_all_records() ;
		$this->load->view('store',['results' => $results]);
		// $this->load->view('store');
	}
	public function load_admin(){
		//$this->load->view('admin');
		$results = $this->frozen_model->view_all_records() ;
		$this->load->view('admin',['results' => $results]);
	}

	public function load_cart(){
		$this->load->view('cart');
	}
    
    public function customize(){
        $this->load->view('customize');
    }
}