<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelanggota extends CI_Model {

 public function getData(){
	$data = $this->db->get('tb_anggota')->result();
	return $data;
 }	

 public function getAnggota($id_anggota){
	$this->db->select('*');
	$this->db->from('tb_anggota');
	$this->db->where('id_anggota',$id_anggota);
	$data = $this->db->get();
	return $data->result();
}

 public function getKegiatan(){
	$this->db->select('*');
	$this->db->from('tb_anggota');
	$this->db->join('tb_kegiatan','tb_kegiatan.id_anggota=tb_anggota.id_anggota');
	$data = $this->db->get();
	return $data->result();
}	

  public function addData($data){
 	$this->db->insert('tb_anggota',$data);
 	$cek = $this->db->affected_rows();
 	return $cek > 0 ? true : false;
 }

 public function check_data($id){
 	$this->db->where('id_anggota',$id);
 	$this->db->from('tb_anggota');
 	$query = $this->db->get();
 	if ($query->num_rows() >0) {
 		return $query->result();
 	}else{
 		return $query->result();
 	}
 }
  public function getDataById($id){
 	$this->db->where('id_anggota',$id);
 	$data = $this->db->get('tb_anggota')->row();
 	return $data;
 }
 public function updateData($id,$data){
 	$this->db->where('id_anggota',$id);
 	$this->db->update('tb_anggota',$data);
 	$cek = $this->db->affected_rows();
 	return $cek >0 ? true : false;
 }
 public function deleteData($id){
	$this->db->where('id_anggota',$id);
	$cek = $this->db->delete('tb_anggota');
		if($cek){
			return true;
		} else{
			return false;
		}
	}
}