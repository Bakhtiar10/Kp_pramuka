<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
  function __construct(){
      parent:: __construct();
        $this->load->library('Pdf');
        $this->load->model('Modelanggota');
  }
    public function index(){
        $this->load->view('register');
    }
    public function register(){
        $this->load->view('register');
    }
    public function addRegister(){
        $this->form_validation->set_rules('id_anggota', 'Id','trim|required');
        $this->form_validation->set_rules('nama', 'Nama','trim|required');
        $this->form_validation->set_rules('username', 'Username','trim|required');
        $this->form_validation->set_rules('password', 'Password','trim|required');
            
    if ($this->form_validation->run() == TRUE) {
        $data = array(
        'id_anggota' => $this->input->post('id_anggota'),
        'nama'       => $this->input->post('nama'),
        'username'   => $this->input->post('username'),
        'level'      => $this->input->post('level'),
        'password'   => $this->input->post('password')
        
        );
                
            $cek = $this->Modelanggota->addData($data);
            if ($cek) {
                $this->session->set_flashdata('info', 'Pendaftaran sukses');
                redirect('login','refresh');
            }else{
                $this->session->set_flashdata('info', 'Pendaftaran Gagal');
                redirect('register','refresh');
            } 
            }else{
                $this->session->set_flashdata('info', 'Pendaftaran Gagal');
                redirect('register','refresh');
            }
        }
    }