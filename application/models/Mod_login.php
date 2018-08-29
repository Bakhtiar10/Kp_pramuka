<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
  
  class Mod_Login extends CI_Model {
 
     public  function ceklogin($user, $pass) {
        $this->db->where("username", $user);
        $this->db->where("password", $pass);
        return $this->db->get("tb_anggota")->row();
      }
    }