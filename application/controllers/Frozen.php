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
}