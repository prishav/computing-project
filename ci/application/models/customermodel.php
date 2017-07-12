<?php
class Customermodel extends CI_Model{
public function insertit($fname,$lname,$address,$phone,$username,$password){
$arr=array(
"fname"=>$fname,
"lname"=>$lname,
"address"=>$address,
"phone"=>$phone,
"username"=>$username,
"password"=>$password);
$this->db->insert('customer',$arr);
return "data inserted";
}
public function checkLogin($username, $password){
	$query=$this->db->where(['username'=>$username,'password'=>$password])->get('customer');
	
	if($query->num_rows()){
	return $query->row()->id;
	} else {
	return False;
	}
	
	}
	
	public function addBike($bikename,$cc,$color,$price,$image){
		$arr=array(
		"bike_name"=>$bikename,
		"cc"=>$cc,
		"color"=>$color,
		"price"=>$price,
		"image"=>$image);
		$this->db->insert("bike",$arr);
		
	}
		public function updateDetails()
		{
			$query=$this->db->get('bike');
			return $query->result();
		}
	
	public function selectBikeId($id){
		$this->db->where("bike_id", $id);
			$result=$this->db->get("bike");
			
			return $result->result();
	}
		
		
	public function updateBike($id,$bikename,$cc,$color,$price,$image){
		
		
		$arr=array(
		"bike_id"=>$id,
		"bike_name"=>$bikename,
		"cc"=>$cc,
		"color"=>$color,
		"price"=>$price,
		"image"=>$image);
		
		$this->db->where("bike_id",$id);
		$this->db->update('bike',$arr);
		return "data updated";
		
	}
	public function deleteData($id){
		
		$this->db->where("bike_id",$id);
		$this->db->delete('bike');
		return "data deleted";
		
	}
	
	public function selectCustomerId($id){
		$this->db->where("id", $id);
			$result=$this->db->get("customer");
			
			return $result->result();
	}
	
	public function customerDetails($session)
		{
			$this->db->where('id',$session);
			
			$query=$this->db->get('customer');
			return $query->result();
		
		}
	public function adminDetails()
		{
			$this->db->where('id',3);
			
			$query=$this->db->get('customer');
			return $query->result();
		}
	
	public function updateData($id,$fname,$lname,$username,$password,$address,$phone){
		$arr=array("id"=>$id,
		"fname"=>$fname,
		"lname"=>$lname,
		"username"=>$username,
		"password"=>$password,
		"address"=>$address,
		"phone"=>$phone);
		$this->db->where("id",$id);
		$this->db->update('customer',$arr);
		return "data updated";
		
	}
	
	public function updateAdminData($id,$fname,$lname,$username,$password,$address,$phone){
		$arr=array("id"=>$id,
		"fname"=>$fname,
		"lname"=>$lname,
		"username"=>$username,
		"password"=>$password,
		"address"=>$address,
		"phone"=>$phone);
		$this->db->where("id",$id);
		$this->db->update('customer',$arr);
		return "data updated";
		
	}
	
	public function customerList()
		{
			$query=$this->db->get('customer');
			return $query->result();
		}
	
	public function deletecustomerData($id){
		
		$this->db->where("id",$id);
		$this->db->delete('customer');
		return "data deleted";
		
		}
		
	public function bikeList()
		{
			$query=$this->db->get('bike');
			return $query->result();
		}
	}
	
	?>