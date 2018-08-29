<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Laporan extends CI_Controller {
	public function __construct()
		{	
			parent::__construct();
			$this->load->library('Pdf');
			$this->load->model('Produkmodel');
			$this->load->model('ModelSekolah');
			$this->load->model('Modelanggota');
		}
	public function index()
		{
			$data['sekolah'] = $this->Produkmodel->get_produk();
			$this->load->view('laporan', $data);
		}
	
	public function cetakproduk()
		{
			$data['sekolah'] = $this->Produkmodel->get_produk();
			$this->load->view('cetakproduk', $data);
	}	
}