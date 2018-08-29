<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelkegiatan extends CI_Model {

 public function getData(){
	$data = $this->db->get('tb_kegiatan')->result();
	return $data;
 }	
  public function addData($data){
 	$this->db->insert('tb_kegiatan',$data);
 	$cek = $this->db->affected_rows();
 	return $cek > 0 ? true : false;
 }

 public function check_data($id){
 	$this->db->where('id_kegiatan',$id);
 	$this->db->from('tb_kegiatan');
 	$query = $this->db->get();
 	if ($query->num_rows() >0) {
 		return $query->result();
 	}else{
 		return $query->result();
 	}
 }
  public function getDataById($id){
 	$this->db->where('id_kegiatan',$id);
 	$data = $this->db->get('tb_kegiatan')->row();
 	return $data;
 }
 public function updateData($id,$data){
 	$this->db->where('id_kegiatan',$id);
 	$this->db->update('tb_kegiatan',$data);
 	$cek = $this->db->affected_rows();
 	return $cek >0 ? true : false;
 }
 public function deleteData($id){
	$this->db->where('id_kegiatan',$id);
	$cek = $this->db->delete('tb_kegiatan');
		if($cek){
			return true;
		} else{
			return false;
		}
	}
}

/* End of file ModelTulis.php */
/* Location: ./application/models/ModelTulis.php */