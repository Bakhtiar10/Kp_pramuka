<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelpenghargaan extends CI_Model {

 public function getData(){
	$data = $this->db->get('tb_penghargaan')->result();
	return $data;
 }	
  public function addData($data){
 	$this->db->insert('tb_penghargaan',$data);
 	$cek = $this->db->affected_rows();
 	return $cek > 0 ? true : false;
 }

 public function check_data($id){
 	$this->db->where('id',$id);
 	$this->db->from('tb_penghargaan');
 	$query = $this->db->get();
 	if ($query->num_rows() >0) {
 		return $query->result();
 	}else{
 		return $query->result();
 	}
 }
  public function getDataById($id){
 	$this->db->where('id',$id);
 	$data = $this->db->get('tb_penghargaan')->row();
 	return $data;
 }
 public function updateData($id,$data){
 	$this->db->where('id',$id);
 	$this->db->update('tb_penghargaan',$data);
 	$cek = $this->db->affected_rows();
 	return $cek >0 ? true : false;
 }
 public function deleteData($id){
	$this->db->where('id',$id);
	$cek = $this->db->delete('tb_penghargaan');
		if($cek){
			return true;
		} else{
			return false;
		}
	}
}

/* End of file ModelTulis.php */
/* Location: ./application/models/ModelTulis.php */