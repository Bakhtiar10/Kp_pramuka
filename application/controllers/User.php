<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
  function __construct(){
      parent:: __construct();
        $this->load->library('Pdf');
        $this->load->model('ModelSekolah');
        $this->load->model('Modelanggota');
        $this->load->model('Modelkegiatan');
        $this->load->model('Modelpenghargaan');
        $this->load->model('Modelkeahlian');
        $this->load->model('Modeltugas');
        $this->load->model('Produkmodel');
        $this->load->model('Modelprofile');
  if(!$this->session->userdata('level','id_anggota')) {
    redirect('login');
  
    }
  }

      public function index(){
    		$data['nama']     = $this->Modelprofile->getNama(($this->session->userdata('id_anggota')));
        $data['kegiatan'] = $this->Modelanggota->getKegiatan();
		    $data['main']     = 'User/dashboard';
    		$this->load->view('partial/partial', $data);
    	}
      public function data_anggota() {
        $data['anggota']  = $this->Modelanggota->getUser();
        $data['main']     = 'User/data_anggota';
        $this->load->view('partial/partial',$data);
      }
      public function data_sekolah() {
        $data['sekolah']  = $this->ModelSekolah->getData();
        $data['main']     = 'User/data_sekolah';
        $this->load->view('partial/partial',$data);
      }
      public function profile() {
        $data['main']     = 'User/profile';
        $this->load->view('partial/partial',$data);
      }
      public function form_edit() {
        $data['anggota']  = $this->Modelprofile->getProfile(($this->session->userdata('id_anggota')));
        $data['main']= 'User/form_edit';
        $this->load->view('partial/partial',$data);
      
      }
      public function edit_profile() {
        $data['anggota']  = $this->Modelprofile->getProfile(($this->session->userdata('id_anggota')));
        $data['main']= 'User/edit_profile';
        $this->load->view('partial/partial',$data);

      }
       public function editProfile($id=null){
        $data['anggota']  = $this->Modelanggota->getDataById($id);
        $data['main']     = 'User/form_edit';
        $this->load->view('partial/partial',$data);
          if ($id==null) {
              $this->session->set_flashdata('info','Id Anggota tidak boleh kosong!');
              redirect('user/edit_profile','refresh');
              }
          if ($this->input->post('submit')==true){
              $this->form_validation->set_rules('nama', 'Nama','trim|required');
              $this->form_validation->set_rules('username', 'Username','trim|required');
              $this->form_validation->set_rules('password', 'Password','trim|required');
              $this->form_validation->set_rules('alamat', 'alamat','trim|required');
              
              if ($this->form_validation->run() == TRUE) {
          $data = array(
              'nama'               => $this->input->post('nama'),
              'username'           => $this->input->post('username'),
              'sekolah'            => $this->input->post('sekolah'),
              'jenis_kelamin'      => $this->input->post('jenis_kelamin'),
              'agama'              => $this->input->post('agama'),
              'tgl_lahir'          => $this->input->post('tgl_lahir'),
              'gol_darah'          => $this->input->post('gol_darah'),
              'password'           => $this->input->post('password'),
              'tingkat_pendidikan' => $this->input->post('tingkat_pendidikan'),
              'alamat'             => $this->input->post('alamat')
              );
        $sql = $this->Modelanggota->updateData($id,$data);
        if ($sql) {
            $this->session->set_flashdata('info', 'Edit Data sukses');
            redirect('user/edit_profile','refresh');
          }else{
            $this->session->set_flashdata('info', 'Edit Data Gagal');
            redirect('user/editProfile'.$id,'refresh');
      }
    }
  }
}
      
      public function cetak_biodata() {
        $data['main'] = 'User/cetak_biodata';
        $this->load->view('partial/partial',$data);
      }
      public function cetak_kartu() {
        $data['anggota'] = $this->Modelprofile->getProfile(($this->session->userdata('id_anggota')));
        $this->load->view('User/cetak_kartu',$data);

      }
      public function kegiatan() {
        $data['kegiatan'] = $this->Modelkegiatan->getData();
        $data['main']     = 'User/riwayat_kegiatan';
        $this->load->view('partial/partial',$data);
      }
      public function penghargaan() {
        $data['penghargaan'] = $this->Modelpenghargaan->getData();
        $data['main']        = 'User/riwayat_penghargaan';
        $this->load->view('partial/partial',$data);
      }
      public function keahlian() {
        $data['keahlian'] = $this->Modelkeahlian->getData();
        $data['main']     = 'User/riwayat_keahlian';
        $this->load->view('partial/partial',$data);
      }
//       public function tugas() {
//         $data['nama'] = $this->Modelprofile->getNama(($this->session->userdata('id_anggota')));
//         $data['main'] = 'User/riwayat_tugas';
//         $this->load->view('partial/partial',$data);
//   }
  
//     public function addTugas(){
//         $config = [
//           'upload_path'   => './uploads/',
//           'allowed_types' => 'gif|jpg|png',
//           'max_size'      => 1000, /*'max_width' => 1000,
//           'max_height' => 768*/
//         ];
//         $this->load->library('upload', $config);
//         if (!$this->upload->do_upload('dokumen')) //jika gagal upload
//         {
//             $data['error'] = $this->upload->display_errors(); //tampilkan error
//             $data['main']  = 'User/riwayat_tugas';
//             $this->load->view('partial/partial', $data);
//         } else
//         //jika berhasil upload
//         {
//             $file = $this->upload->data();
//         $data = array(
//           'dokumen' =>$file['file_name']
//           );
  
//             $this->Modelanggota->addKegiatann($data); //memasukan data ke database
//             redirect('admin/tugas'); //mengalihkan halaman
//         }
//     }
//     public function upload_tugas()
//       {
//         $data['nama'] = $this->Model_profil->getNama(($this->session->userdata('id_anggota')));
//         $data['main'] = 'user/upload_tugas';
//         $this->load->view('template/template',$data);
//       }
}