<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
            $url=base_url();
            redirect($url);
        }
  }
 
  function index(){
    $this->load->view('admin/dasboard');
  }
 
  function data_user(){
    // function ini hanya boleh diakses oleh admin
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
      $this->load->view('v_user');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
 
  }
 
 