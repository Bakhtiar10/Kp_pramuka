<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelprofile extends CI_Model {

 public function getProfile($id_anggota){
    $this->db->select('*');
    $this->db->from('tb_anggota');
    $this->db->where('id_anggota', $id_anggota);
	$data = $this->db->get();
	return $data->result();
 }
  public function getNama($id_anggota){
 	$this->db->select('nama');
 	$this->db->from('tb_anggota');
    $this->db->where('id_anggota', $id_anggota);
	$data = $this->db->get();
	return $data->result();
 }	

 public function getPrint($id_anggota){
    $this->db->form('tb_provinsi','tb_kabupaten','tb_kecamatan','tb_penghargaan');
    $this->db->join('tb_anggota','tb_anggota.id_provinnsi=tb_provinsi.id_provinsi','tb_anggota.id_kabupaten=tb_kabupaten.id_kabupaten','
        tb_anggota.id_kecamatan=tb_kecamatan.id_kecamatan','tb_anggota.id_anggota=tb+penghargaan.id_anggota');
    $this->db->where('id_anggota', $id_anggota);
	$data = $this->db->get();
	return $data->result();
 }

  public function getDataByProfile($id){
    $this->db->where('id_anggota', $id_anggota);
 	$data = $this->db->get('tb_anggota')->row();
 	return $data;
 }
 public function updateProfile($id,$data){
 	$this->db->where('id_anggota',$id);
 	$this->db->update('tb_anggota',$data);
 	$cek = $this->db->affected_rows();
 	return $cek >0 ? true : false;
 }
 public function getKegiatan($id_anggota){
    $this->db->form('tb_kegiatan');
    $this->db->where('id_anggota', $id_anggota);
	$data = $this->db->get();
    return $data->result();
    
}
public function getPenghargaan($id_anggota){
   $this->db->form('tb_penghargaan');
   $this->db->where('id_anggota', $id_anggota);
   $data = $this->db->get();
   return $data->result();
}
public function getRiwayatK(){
   $this->db->form('tb_anggota');
   $this->db->join('tb_kegiatan', 'id_anggota','tb_anggota','id_aggota');
   $data = $this->db->get();
   return $data->result();

	}
}