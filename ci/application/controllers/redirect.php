<?php
class Redirect extends CI_Controller {
	public function index() {
	$this->load->view('index');
	}
	
	public function login() {
	$this->load->view('login');
	}
	
	public function admin() {
	$this->load->view('login');
	}
	
	public function customer() {
	$this->load->view('customerpannel');
	}
	
}
?>