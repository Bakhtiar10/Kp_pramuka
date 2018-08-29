<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Produkmodel extends CI_Model {

	public function get_produk()
	{
		$query = $this->db->get('tb_sekolah');
		return $query->result_array();
	}
	public function anggota()
	{
		$query = $this->db->get('tb_anggota');
		return $query->result_array();
	}
	public function get_excell()
	{
		return $this->db->get('tb_sekolah');
	}
}
?>