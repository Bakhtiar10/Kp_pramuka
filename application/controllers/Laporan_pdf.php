    <?php
defined('BASEPATH') or exit('No direct script acces allowed');

class Laporan_pdf extends CI_Controller{
    function __construct() {

    parent::__construct();
    $this->load->library('pdff');
    $this->load->model('Modelanggota');
    $this->load->model('ModelSekolah');
}

public function index(){
    $data['title']   = 'Laporan Data Anggota Pramuka';
    $data['sekolah'] = $this->ModelSekolah->getData();
    $data['main']    = 'admin/data_anggota';

    $this->pdff->setPaper('A4', 'potrait');
    $this->pdff->filename("Laporan.pdf");
    $this->pdff->setPaper('cetak_kartu', '$data');

}

public function cetak_kartu(){
    $data['sekolah'] = $this->ModelSekolah->getData();
    $this->pdff->setPaper('A4', 'potrait');
    $this->pdff->filename("cetak_kartu.pdf");
    $this->pdff->setPaper('cetak_kartu', '$data');
    }
}

?> 