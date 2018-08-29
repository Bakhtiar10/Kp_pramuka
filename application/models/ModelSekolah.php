<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelSekolah extends CI_Model {

 public function getData(){
	$data = $this->db->get('tb_sekolah')->result();
	return $data;
 }
 public function getAnggota(){
	$data = $this->db->get('tb_anggota')->result();
	return $data;
 }	
  public function addData($data){
 	$this->db->insert('tb_sekolah',$data);
 	$cek = $this->db->affected_rows();
 	return $cek > 0 ? true : false;
 }
 public function addAnggota($data){
	$this->db->insert('tb_angggota',$data);
	$cek = $this->db->affected_rows();
	return $cek > 0 ? true : false;
}

 public function check_data($id){
 	$this->db->where('id',$id);
 	$this->db->from('tb_sekolah');
 	$query = $this->db->get();
 	if ($query->num_rows() >0) {
 		return $query->result();
 	}else{
 		return $query->result();
 	}
 }

 public function check_anggota($id){
	$this->db->where('id',$id);
	$this->db->from('tb_anggota');
	$query = $this->db->get();
	if ($query->num_rows() >0) {
		return $query->result();
	}else{
		return $query->result();
	}
}
  public function getDataById($id){
 	$this->db->where('id',$id);
 	$data = $this->db->get('tb_sekolah')->row();
 	return $data;
 }
 public function getDataByAnggota($id){
	$this->db->where('id',$id);
	$data = $this->db->get('tb_angota')->row();
	return $data;
}
 public function updateData($id,$data){
 	$this->db->where('id',$id);
 	$this->db->update('tb_sekolah',$data);
 	$cek = $this->db->affected_rows();
 	return $cek >0 ? true : false;
 }
 public function updateAnggota($id,$data){
	$this->db->where('id',$id);
	$this->db->update('tb_anggota',$data);
	$cek = $this->db->affected_rows();
	return $cek >0 ? true : false;
}
 public function deleteData($id){
	$this->db->where('id',$id);
	$cek = $this->db->delete('tb_sekolah');
		if($cek){
			return true;
		} else{
			return false;
		}
	}
}

/* End of file ModelTulis.php */
/* Location: ./application/models/ModelTulis.php */