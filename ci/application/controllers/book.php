<?php
class Book extends CI_controller{
	public function bookBike($bike_id){
		
		$id=$this->session->userdata('id');
		

		$this->load->model('bookmodel');
		$this->bookmodel->getBook($id,$bike_id);
		$this->bookmodel->getPrice($bike_id);
		
	
	}
	
	public  function viewDetails(){
		$this->load->model('bookmodel');
		$data['booklist']=$this->bookmodel->bookList();
		$this->load->view('booklist',$data);
	}
	
	public function deletebooking(){
		$this->load->model('bookmodel');
		$id=$this->input->get('id');
		$this->bookmodel->deleteData($id);
		
		echo "data deleted";
	}
	public function viewBill(){
		$session=$this->session->userdata('id');
		$this->load->model('bookmodel');
		$result=$this->bookmodel->generateBIll($session);
		$data['arr']=$result;
	

		$this->load->view('showbill',$data);
	}
}
?>