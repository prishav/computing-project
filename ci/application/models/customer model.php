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
	$query=$this->db->where(['username'=>$username,'password'=>$password])->get('user');
	
	if($query->num_rows()){
	return $query->row()->user_id;
	} else {
	return False;
	}
	
	}
	}
	
	?>