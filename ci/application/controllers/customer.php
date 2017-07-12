<?php
class Customer extends CI_Controller {
public function getData() {
		$this->load->library('form_validation');
			 	
	  $this->form_validation->set_rules('phone','Contact','required|regex_match[/^[0-9]{10}$/]');

	    $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|alpha_numeric');
		if ($this->form_validation->run()==false){
			echo validation_errors();
			}else{
$fname=$this->input->post('fname');
$lname=$this->input->post('lname');
$address=$this->input->post('address');
$phone=$this->input->post('phone');
$username=$this->input->post('username');
$password=$this->input->post('password');
$this->load->model('customermodel');
$data['modelmsg']=$this->customermodel->insertIt($fname,$lname,$address,$phone,$username,$password);
$this->load->view('login');
}

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
			if($result==3){
				
				return redirect ('Welcome/adminDashboard');
			}else{
				$this->load->library('session');
				$this->session->set_userdata('id',$result);
				return redirect('customer/bikeDetails');
				
				}
				
			}else{
				echo("Password not match");
			}
			}
			else {
					$this->load->view('login');
			}
			}
			
public function getBike(){
		//uploading image
		$config['upload_path']="assets/images/";
		 $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '100';
            $config['max_width']  = '1024';
            $config['max_height']  = '768';

		
		$this->load->library('upload',$config);
		$this->upload->initialize($config);
		
		//$this->upload->do_upload('userfile');
		
		$data=array('upload_data'=>$this->upload->data());
		
		$bikename=$this->input->post('name');
		$cc=$this->input->post('cc');
		$color=$this->input->post('color');
		$price=$this->input->post('price');
		$image=$data['upload_data']['file_name'];
		echo $image;

		$this->load->model('customermodel');
		$this->customermodel->addBike($bikename,$cc,$color,$price,$image);
		
		$data['insertmsg']="data inserted";
		$this->load->view('addbike',$data);

		

	}
		public function updateBikedetails()
	{
		$this->load->model('customermodel');
		$result=$this->customermodel->updateDetails();
		$data['bikelist']=$result;
		$this->load->view('bikelist',$data);

	}
	
	public function editDetails($id){
		
	$this->load->model("customermodel");

	$data['bikelist']=$this->customermodel->selectBikeId($id);
	//echo "<pre>";
	//print_r array_rows(); exit;
	$this->load->view('editbike',$data);
	}
	
	public function editBike(){
  
			$id=$this->input->post('id');
			$bikename=$this->input->post('name');
			$cc=$this->input->post('cc');
			$color=$this->input->post('color');
			$price=$this->input->post('price');
			$image=$this->input->post('image');
		
			$this->load->model('customermodel');
			$bikelist=$this->customermodel->updateBike($id,$bikename,$cc,$color,$price,$image);
			echo "updated";
	
	}
	public function deleteBike(){
		$this->load->model('customermodel');
		$id=$this->input->get('id');
		$this->customermodel->deleteData($id);
		echo "data deleted";
	}
	public function editcustomerDetails($id){
		$id=$this->input->get('id');
	$this->load->model("customermodel");

	$data['record']=$this->customermodel->selectCustomerId($id);
	
	$this->load->view('editprofile',$data);
	}
	public function editProfile(){
		$session=$this->session->userdata('id');
		if ($session!=''){
			$this->load->model('customermodel');
			$profile=$this->customermodel->customerDetails($session);
			$this->load->view('profileEdit',['profile'=>$profile]);
			
		}else{
			$this->load->view('login');
		}
	}
	public function updateCustomer(){
		$id=$this->input->post('id');
		$fname=$this->input->post('fname');	
		$lname=$this->input->post('lname');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$address=$this->input->post('address');
		$phone=$this->input->post('phone');
		
		$this->load->model('customermodel');
		$this->customermodel->updateData($id,$fname,$lname,$username,$password,$address,$phone);
		$session=$this->session->userdata('id');
		$data['profile']=$this->customermodel->customerDetails($session);
		$this->load->view('profileEdit',$data);
	}
	
	public function viewCustomer()
	{
		$this->load->model('customermodel');

		$result=$this->customermodel->customerList();
		$data['customerlist']=$result;
		$this->load->view('customerdetails',$data);

	}
		public function bikeDetails()
	{
		$this->load->model('customermodel');
		$result=$this->customermodel->bikeList();
		$data['bikelist']=$result;
		$this->load->view('customerpannel',$data);

	}

		public function logout(){
		$this->session->sess_destroy();
		return redirect('welcome/login');
		
	}	
	public function editAdminProfile(){
			$this->load->model('customermodel');
			$profile['profile']=$this->customermodel->adminDetails();
			$this->load->view('editprofile',$profile);
			
	}
	public function deleteCustomer(){
		$this->load->model('customermodel');
		$id=$this->input->get('id');
		$this->customermodel->deletecustomerData($id);
		echo "data deleted";
	}
	
	public function updateAdmin(){
		$id=$this->input->post('id');
		$fname=$this->input->post('fname');
		$lname=$this->input->post('lname');
		$username=$this->input->post('uname');
		$password=$this->input->post('password');
		$address=$this->input->post('address');
		$phone=$this->input->post('phone');
		$this->load->model('customermodel');
		$this->customermodel->updateAdminData($id,$fname,$lname,$username,$password,$address,$phone);
		
		$data['update_message']="data sucessfully update";
		$this->load->view('admin',$data);
	}


	}
			
?>