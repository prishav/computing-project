<?php
class Customer extends CI_Controller {
public function getData() {
$fname=$this->input->post('fname');
$lname=$this->input->post('lname');
$username=$this->input->post('username');
$password=$this->input->post('password');
$this->load->model('customermodel');
$data['modelmsg']=$this->customermodel->insertIt($fname,$lname,$username,$password);
$this->load->view('login');

}
public function login(){
	$this->load->library('form_validation');
	$this->form_validation->set_rules('username','username',
			'required|trim|min_length[3]|max_length[30]');
	
	$this->form_validation->set_rules('password','password',
					'required|trim|min_length[3]|max_length[15]');
	if ($this->form_validation->run()){
		$username=$this->input->post('username');
		$password=$this->input->post('password');

		$this->load->model('customermodel');
		$result=$this->customermodel->checkLogin($username,$password);
		if($result){
			if($result==2){
				echo "admin";
				//return redirect ('Welcome/adminPannel');
			}else{
				$this->load->library('session');
				$this->session->set_userdata('id',$result);
				echo "Customer login successful";
				
				}
				
			}else{
				echo("Password not match");
			}
			}
			else {
					$this->load->view('login');
			}
			}
			


	}
			
?>