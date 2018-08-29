<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    function __construct(){
        parent:: __construct();
        $this->load->library('Pdf');
        $this->load->model('ModelSekolah');
        $this->load->model('Modelanggota');
        $this->load->model('Modelalamat');
        $this->load->model('Modelkegiatan');
        $this->load->model('Modelpenghargaan');
        $this->load->model('Modelgrafik');
        $this->load->model('Produkmodel');

    if (!$this->session->userdata('level','username')) {
        redirect('login');   
    }
}
    public function index() {
        $data['golongan']       = $this->Modelgrafik->getGolongan();
        $data['pendidikan']     = $this->Modelgrafik->getSekolah();
        $data['Data']           = $this->Modelgrafik->getAgama();
        $data['jeniskelamin']   = $this->Modelgrafik->getJeniskelamin();
        $data['main']           = 'admin/dasboard';
        $this->load->view('integration/integration', $data);
    }
    
    public function dasboard() {
        $data['golongan']       = $this->Modelgrafik->getGolongan();
        $data['main']           = 'admin/dasboard';
        $this->load->view('integration/integration', $data);
    }
    public function add_anggota(){
        $data['kecamatan']      = $this->Modelalamat->get_kecamatan(); 
        $data['kabupaten']      = $this->Modelalamat->get_kabupaten();     
        $data['provinsi']       = $this->Modelalamat->get_provinsi();
        $data['main']           = 'admin/add_anggota';
        $this->load->view('integration/integration', $data);
    }
    public function addAnggota(){
        $this->form_validation->set_rules('nama', 'Nama','trim|required');
        $this->form_validation->set_rules('username', 'Username','trim|required');
        $this->form_validation->set_rules('password', 'Password','trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat','trim|required');
        
    if ($this->form_validation->run() == TRUE) {
         $data = array(
            'nama'              => $this->input->post('nama'),
            'username'          => $this->input->post('username'),
            'sekolah'           => $this->input->post('sekolah'),
            'gol_pramuka'       => $this->input->post('gol_pramuka'),
            'jenis_kelamin'     => $this->input->post('jenis_kelamin'),
            'agama'             => $this->input->post('agama'),
            'tgl_lahir'         => $this->input->post('tgl_lahir'),
            'gol_darah'         => $this->input->post('gol_darah'),
            'password'          => $this->input->post('password'),
            'level'             => $this->input->post('level'),
            'tingkat_pendidikan'=> $this->input->post('tingkat_pendidikan'),
            'alamat'            => $this->input->post('alamat'),
            'id_provinsi'       => $this->input->post('id_provinsi'),
            'id_kabupaten'      => $this->input->post('id_kabupaten'),
            'id_kecamatan'      => $this->input->post('id_kecamatan')
            );
            
        $cek = $this->Modelanggota->addData($data);
        if ($cek) {
            $this->session->set_flashdata('info', 'Tambah Data sukses');
            redirect('admin/data_anggota','refresh');
        }else{
            $this->session->set_flashdata('info', 'Tambah Data Gagal');
            redirect('admin/add_anggota','refresh');
        } 
        }else{
            $this->session->set_flashdata('info', 'Tambah Data Gagal');
            redirect('admin/add_anggota','refresh');
        }
    
    }

    public function editAnggota($id){
        $data['anggota'] = $this->Modelanggota->getDataById($id);
        $data['main']    = 'admin/edit_anggota';
            $this->load->view('integration/integration',$data);
        if ($id==null) {
            $this->session->set_flashdata('info','Id Anggota tidak boleh kosong!');
            redirect('admin/data_anggota','refresh');
            }
        if ($this->input->post('submit')==true){
            $this->form_validation->set_rules('nama', 'Nama','trim|required');
            $this->form_validation->set_rules('username', 'Username','trim|required');
            $this->form_validation->set_rules('password', 'Password','trim|required');
            $this->form_validation->set_rules('alamat', 'alamat','trim|required');
            
            if ($this->form_validation->run() == TRUE) {
        $data = array(
            'nama'              => $this->input->post('nama'),
            'username'          => $this->input->post('username'),
            'sekolah'           => $this->input->post('sekolah'),
            'jenis_kelamin'     => $this->input->post('jenis_kelamin'),
            'agama'             => $this->input->post('agama'),
            'tgl_lahir'         => $this->input->post('tgl_lahir'),
            'gol_darah'         => $this->input->post('gol_darah'),
            'password'          => $this->input->post('password'),
            'level'             => $this->input->post('level'),
            'tingkat_pendidikan'=> $this->input->post('tingkat_pendidikan'),
            'alamat' => $this->input->post('alamat')
            );
           
        $sql = $this->Modelanggota->updateData($id,$data);
        if ($sql) {
            $this->session->set_flashdata('info', 'Edit Data sukses');
            redirect('admin/data_anggota','refresh');
          }else{
            $this->session->set_flashdata('info', 'Edit Data Gagal');
            redirect('admin/editAnggota'.$id,'refresh');
            }
        }
    }
}
public function deleteAnggota($id=null){
    if($id==null){
        $this->session->set_flashdata('info', 'Data Gagal Di Hapus!');
        redirect('admin/data_anggota','refresh');
    }
    $cek = $this->Modelanggota->deleteData($id);
    if($cek){
        $this->session->set_flashdata('info', 'Data Berhasil Di Hapus');
        redirect('admin/data_anggota','refresh');
    }else{
        $this->session->set_flashdata('info', 'Data Gagal Di Hapus');
        redirect('admin/edit_anggota','refresh');
    
    }
}
    public function data_anggota(){
        $data['anggota']    = $this->Modelanggota->getData();
        $data['main']       = 'admin/data_anggota';
        $this->load->view('integration/integration',$data);
    }
    
    public function data_sekolah(){
        $data['sekolah']    = $this->ModelSekolah->getData();
         $data['main']      = 'admin/data_sekolah';
         $this->load->view('integration/integration',$data);
    }
    public function add_sekolah(){
        $data['sekolah']    = $this->ModelSekolah->getData();
        $data['main']       = 'admin/add_sekolah';
        $this->load->view('integration/integration',$data);
    }
    public function addSekolah(){
        $this->form_validation->set_rules('nama', 'Nama ','trim|required');
        $this->form_validation->set_rules('no_gudep', 'No Gudep','trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat','trim|required');
    if ($this->form_validation->run() == TRUE) {
         $data = array(
            'nama' => $this->input->post('nama'),
            'no_gudep' => $this->input->post('no_gudep'),
            'alamat' => $this->input->post('alamat')
            );
        $cek = $this->ModelSekolah->addData($data);
        if ($cek) {
            $this->session->set_flashdata('info', 'Tambah Data sukses');
            redirect('admin/data_sekolah','refresh');
        }else{
            $this->session->set_flashdata('info', 'Tambah Data Gagal');
            redirect('admin/add_sekolah','refresh');
        } 
        }else{
            $this->session->set_flashdata('info', 'Tambah Data Gagal');
            redirect('admin/add_sekolah','refresh');
        }
    
}

   
    public function editSekolah($id){
        $data['sekolah']    = $this->ModelSekolah->getDataById($id);
        $data['main']       = 'admin/edit_sekolah';
        $this->load->view('integration/integration',$data);
        if ($id==null) {
            $this->session->set_flashdata('info','Id Sekolah tidak boleh kosong!');
            redirect('admin/data_sekolah','refresh');
    }
        if ($this->input->post('submit')==true){
            $this->form_validation->set_rules('nama', 'Nama sub','trim|required');
            $this->form_validation->set_rules('no_gudep', 'No Gudep','trim|required');
            $this->form_validation->set_rules('alamat', 'Alamat','trim|required');

    if ($this->form_validation->run() == TRUE) {
         $data = array(
            'nama'     => $this->input->post('nama'),
            'no_gudep' => $this->input->post('no_gudep'),
            'alamat'   => $this->input->post('alamat')
            );

    $sql = $this->ModelSekolah->updateData($id,$data);
        if ($sql) {
            $this->session->set_flashdata('info', 'Edit Data sukses');
            redirect('admin/data_sekolah','refresh');
        }else{
            $this->session->set_flashdata('info', 'Edit Data Gagal');
            redirect('admin/editSekolah'.$id,'refresh');
        }
      }
    
    }
}
    public function deleteSekolah($id=null){
        if($id==null){
            $this->session->set_flashdata('info', 'Data Gagal Di Hapus!');
            redirect('admin/data_sekolah','refresh');
        }
        $cek = $this->ModelSekolah->deleteData($id);
        if($cek){
            $this->session->set_flashdata('info', 'Data Berhasil Di Hapus');
            redirect('admin/data_sekolah','refresh');
        }else{
            $this->session->set_flashdata('info', 'Data Gagal Di Hapus');
            redirect('admin/edit_sekolah','refresh');
        
        }
    }
    
    public function kegiatan(){
         $data['kegiatan'] = $this->Modelkegiatan->getData();
         $data['main']     = 'admin/kegiatan';
         $this->load->view('integration/integration',$data);
    }
    public function add_kegiatan(){
         $data['kegiatan'] = $this->Modelkegiatan->getData();
         $data['main']     = 'admin/add_kegiatan';
         $this->load->view('integration/integration',$data);
    
    }
    public function addKegiatan(){
        $config = [
            'upload_path'   => './uploads/',
            'allowed_types' => 'gif|jpg|png',
            'max_size'      => 1000,
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto')) //jika gagal upload
        {
            $data['error'] = $this->upload->display_errors(); //Tampilan Jika eror
            $data['main']  = 'admin/add_kegiatan';
            $this->load->view('integration/integration', $data);
        } else
        //jika berhasil upload
        {
            $file = $this->upload->data();
            $data = array(
                'nama_kegiatan' => $this->input->post('nama_kegiatan'),
                'tgl_kegiatan'  => $this->input->post('tgl_kegiatan'),
                'foto'          => $file['file_name'],
                'keterangan'    => $this->input->post('keterangan')
            );
                $this->Modelkegiatan->addData($data); // Memasukan Data ke Data Base
                redirect('admin/kegiatan'); //mengalihkan halaman
        }
    }
    
    public function editKegiatan($id=null){
        $data['kegiatan'] = $this->Modelkegiatan->getDataById($id);
        $data['main']     = 'admin/edit_kegiatan';
        $this->load->view('integration/integration',$data);
        if ($id==null) {
            $this->session->set_flashdata('info','id Kegiatan tidak boleh kosong!');
            redirect('admin/kegiatan','refresh');
    }
        if ($this->input->post('submit')==true){
            $this->form_validation->set_rules('nama_kegiatan', 'Nama ','trim|required');
            $this->form_validation->set_rules('tgl_kegiatan', 'Tanggal','trim|required');
            $this->form_validation->set_rules('keterangan', 'Keterangan','trim|required');

    if ($this->form_validation->run() == TRUE) {
         $data = array(
            'nama_kegiatan' => $this->input->post('nama_kegiatan'),
            'tgl_kegiatan'  => $this->input->post('tgl_kegiatan'),
            'keterangan'    => $this->input->post('keterangan')
            );

    $sql = $this->Modelkegiatan->updateData($id,$data);
        if ($sql) {
            $this->session->set_flashdata('info', 'Edit Data sukses');
            redirect('admin/kegiatan','refresh');
        }else{
            $this->session->set_flashdata('info', 'Edit Data Gagal');
            redirect('admin/editKegiatan'.$id,'refresh');
        }
      }
    
    }
}
    public function deleteKegiatan($id=null){
        if($id==null){
            $this->session->set_flashdata('info', 'Data Gagal Di Hapus!');
            redirect('admin/kegiatan','refresh');
        }
        $cek = $this->Modelkegiatan->deleteData($id);
        if($cek){
            $this->session->set_flashdata('info', 'Data Berhasil Di Hapus');
            redirect('admin/kegiatan','refresh');
        }else{
            $this->session->set_flashdata('info', 'Data Gagal Di Hapus');
            redirect('admin/edit_kegiatan','refresh');
        
        }
    }
    public function penghargaan(){
        $data['penghargaan'] = $this->Modelpenghargaan->getData();
        $data['main']        = 'admin/penghargaan';
        $this->load->view('integration/integration',$data);
    }
    public function add_penghargaan(){
        $data['penghargaan'] = $this->Modelpenghargaan->getData();
        $data['main']        = 'admin/add_penghargaan';
        $this->load->view('integration/integration',$data);
    }
    public function addPenghargaan(){
        $config = [
        'upload_path'   => './uploads/',
        'allowed_types' => 'gif|jpg|png',
        'max_size'      => 1000,
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto')) //jika gagal upload

        {
            $data['error'] = $this->upload->display_errors(); //tampilkan error
            $data['main']  = 'admin/add_penghargaan';
            $this->load->view('integration/integration', $data);
        } else
        //jika berhasil upload
        {
            $file = $this->upload->data();
        $data = array(
          'jenis_penghargaan' => $this->input->post('jenis_penghargaan'),
          'foto'       =>$file['file_name'],
          'tanggal'    => $this->input->post('tanggal'),
          'keterangan' => $this->input->post('keterangan')
          );
            $this->Modelpenghargaan->addData($data); //memasukan data ke database
            redirect('admin/penghargaan'); //mengalihkan halaman
        }   
      }

   
    public function editPenghargaan($id){
        $data['penghargaan'] = $this->Modelpenghargaan->getDataById($id);
        $data['main']        = 'admin/edit_penghargaan';
        $this->load->view('integration/integration',$data);
        if ($id==null) {
            $this->session->set_flashdata('info','Id Penghargaan tidak boleh kosong!');
            redirect('admin/penghargaan','refresh');
    }
        if ($this->input->post('submit')==true){
            $this->form_validation->set_rules('jenis_penghargaan', 'Jenis Penghargaan','trim|required');
            $this->form_validation->set_rules('tanggal', 'Tanggal','trim|required');
            $this->form_validation->set_rules('keterangan', 'Keterangan','trim|required');

    if ($this->form_validation->run() == TRUE) {
         $data = array(
            'jenis_penghargaan' => $this->input->post('jenis_penghargaan'),
            'tanggal'           => $this->input->post('tanggal'),
            'keterangan'        => $this->input->post('keterangan')
            );

    $sql = $this->Modelpenghargaan->updateData($id,$data);
        if ($sql) {
            $this->session->set_flashdata('info', 'Edit Data sukses');
            redirect('admin/penghargaan','refresh');
        }else{
            $this->session->set_flashdata('info', 'Edit Data Gagal');
            redirect('admin/editPenghargaan'.$id,'refresh');
        }
      }
    
    }
}
    public function deletePenghargaan($id=null){
        if($id==null){
            $this->session->set_flashdata('info', 'Data Gagal Di Hapus!');
            redirect('admin/penghargaan','refresh');
        }
        $cek = $this->Modelpenghargaan->deleteData($id);
        if($cek){
            $this->session->set_flashdata('info', 'Data Berhasil Di Hapus');
            redirect('admin/penghargaan','refresh');
        }else{
            $this->session->set_flashdata('info', 'Data Gagal Di Hapus');
            redirect('admin/edit_penghargaan','refresh');
        
        }
    }
    public function laporan_anggota(){
        $data['anggota'] = $this->Modelanggota->getData();
        $this->load->view('admin/laporan_anggota',$data);
      }
    public function laporanpdf(){
        $data['main'] = 'admin/laporanpdf';
        $this->load->view('integration/integration',$data);
    }
    public function laporanexcell(){
        $data['main'] = 'admin/laporanexcell';
        $this->load->view('integration/integration',$data);
    }
    public function report_upload(){
        $data['kegiatan'] = $this->Modelanggota->getKegiatan();
        $data['main'] ='admin/report_upload';
        $this->load->view('integration/integration',$data);
    }
    public function profile(){
        $data['main'] = 'admin/profile';
        $this->load->view('integration/integration',$data);
    }
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}