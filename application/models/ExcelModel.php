<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExcelModel extends CI_Model {
  public function view(){
    return $this->db->get('tb_kegiatan')->result();
    return $this->db->get('tb_anggota')->result();
  }
}
