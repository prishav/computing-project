<?php
class Bookmodel extends CI_Model{
	public function getBook($id,$bike_id){
		
		$arr=array(
		"customer_id"=>$id,
		"bike_id"=>$bike_id
		);
		
		$this->db->set('bookdate','now()',false);
		$this->db->insert("book",$arr);
		return "data inserted";
		
		
	}
	public function selectBikeId($id){
		$this->db->where("bike_id", $id);
			$result=$this->db->get("bike");
			return $result->result();
	}
	
	public function bookList(){
		$query=$this->db->get('book');
		return $query->result();
	}
	
	public function deleteData($id){
				
		$this->db->where("book_id",$id);
		$this->db->delete('book');
		
			
	}
	public function generateBill($session){
		$this->db->select('*','sum(bike.price as total)');
		$this->db->from('book');
		$this->db->join('bike','book.bike_id=bike.bike_id','left');
		$this->db->where('customer_id',$session);
		$result=$this->db->get();
		if ($result->num_rows()>0){
			return $result->result_array();

		}else{
			return null;

		}
	}
	
	public function getPrice($bike_id){
		$this->db->where("bike_id", $bike_id);
			$result=$this->db->get("bike");
			$row=$result->result_array();
			$price= ($row[0]['price']);
			
			$arr=array(
			"bike_id"=>$bike_id,
			"price"=>$price);
		$this->db->where("bike_id",$bike_id);
		$this->db->update('book',$arr);
	}
}
?>