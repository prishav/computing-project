<?php
class Customermodel extends CI_Model{
public function insertit($fname,$lname,$username,$password){
$arr=array(
"fname"=>$fname,
"lname"=>$lname,
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
	}
	
	?>